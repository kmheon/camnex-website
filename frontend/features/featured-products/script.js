"use strict";

/**
 * ========================================================
 * COMPONENT: Popular Products JS (Robust Self-Contained Execution)
 * FILE PATH MATCH: frontend/features/featured-products/script.js
 * ========================================================
 */

const initializeProductIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

let activeCategory = "All";
let currentProductIndex = 0;
let filteredProducts = [];
let autoplayTimer = null;
const AUTOPLAY_INTERVAL = 5000;
const FILTER_TRANSITION_MS = 220;

/* ---------------- Responsive helper (single source of truth,
   replaces the repeated inline ternary from the original) ---------------- */

const getVisibleCards = () => {
    const w = window.innerWidth;
    if (w > 1200) return 4;
    if (w > 900) return 3;
    if (w > 600) return 2;
    return 1;
};

/* ---------------- Category filters ---------------- */

const renderCategories = () => {
    const categories = ["All", "CCTV", "Networking", "Access Control", "Smart Home"];
    const filtersContainer = document.getElementById("categoryFilters");
    if (!filtersContainer) return;

    filtersContainer.innerHTML = categories.map(cat => `
        <button type="button" class="cx-filter-pill ${cat === activeCategory ? 'active' : ''}" data-category="${cat}">
            ${cat}
        </button>
    `).join("") + '<span class="cx-filter-underline" id="filterUnderline"></span>';

    const pills = filtersContainer.querySelectorAll(".cx-filter-pill");
    pills.forEach(pill => {
        pill.addEventListener("click", (e) => {
            const category = e.target.getAttribute("data-category");
            if (category === activeCategory) return;
            activeCategory = category;
            currentProductIndex = 0;
            renderCategories();
            animateFilterChange();
        });
    });

    moveFilterUnderline();
};

const moveFilterUnderline = () => {
    const underline = document.getElementById("filterUnderline");
    const activePill = document.querySelector(".cx-filter-pill.active");
    if (!underline || !activePill) return;
    underline.style.width = `${activePill.offsetWidth}px`;
    underline.style.transform = `translateX(${activePill.offsetLeft}px)`;
};

/* Smoothly fades cards out, swaps the filtered data in, fades back in —
   instead of the instant innerHTML swap the original had. */
const animateFilterChange = () => {
    const track = document.getElementById("productsTrack");
    if (!track) {
        renderProducts();
        updateCarouselPosition();
        return;
    }
    track.classList.add("is-filtering");
    setTimeout(() => {
        renderProducts();
        updateCarouselPosition();
        track.classList.remove("is-filtering");
    }, FILTER_TRANSITION_MS);
};

/* ---------------- Formatting helpers ---------------- */

const getStockBadgeClass = (status) => {
    switch (status) {
        case "In Stock": return "in-stock";
        case "Limited Stock": return "limited-stock";
        case "Pre Order": return "pre-order";
        default: return "in-stock";
    }
};

const calculateSavings = (regular, sale) => {
    const regNum = parseInt(regular.replace(/[^\d]/g, ''));
    const saleNum = parseInt(sale.replace(/[^\d]/g, ''));
    const diff = regNum - saleNum;
    return diff > 0 ? `Save ৳${diff.toLocaleString()}` : null;
};

/* ---------------- Product rendering ---------------- */

const renderProducts = () => {
    const track = document.getElementById("productsTrack");
    const dotsContainer = document.getElementById("carouselDots");
    if (!track || !dotsContainer) return;

    if (typeof cxProductsData === 'undefined') {
        console.error("cxProductsData is not defined!");
        return;
    }

    filteredProducts = activeCategory === "All"
        ? cxProductsData
        : cxProductsData.filter(p => p.category === activeCategory);

    track.innerHTML = filteredProducts.map(prod => {
        const savings = calculateSavings(prod.regular_price, prod.sale_price);
        const stockClass = getStockBadgeClass(prod.stock_status);

        return `
            <div class="cx-product-card" data-id="${prod.id}">
                <div class="cx-card-top-row">
                    <span class="cx-product-badge">${prod.badge}</span>
                    <button type="button" class="cx-wishlist-btn" aria-label="Add to Wishlist">
                        <i data-lucide="heart"></i>
                    </button>
                </div>

                <div class="cx-product-visual">
                    <span class="cx-img-skeleton"></span>
                    <img src="${prod.image}" alt="${prod.title}" loading="lazy">
                </div>

                <div class="cx-product-info">
                    <div class="cx-product-meta-row">
                        <span class="cx-product-category">${prod.category}</span>
                        <div class="cx-stock-indicator ${stockClass}">
                            <span class="cx-stock-dot"></span> ${prod.stock_status}
                        </div>
                    </div>

                    <div class="cx-product-title-area">
                        <div class="cx-brand-row">
                            <span class="cx-brand-logo" data-brand="${prod.brandSlug || ''}">
                                <img src="assets/brands/${prod.brandSlug || ''}.svg" alt="${prod.brand}">
                                <span class="cx-sr-only">${prod.brand}</span>
                            </span>
                        </div>
                        <h3 class="cx-product-title">${prod.title}</h3>
                    </div>

                    <div class="cx-product-features">
                        ${prod.features.slice(0, 2).map(feat => `
                            <span class="cx-feature-chip">
                                <span class="cx-feature-icon"><i data-lucide="${feat.icon}"></i></span>${feat.label}
                            </span>
                        `).join("")}
                    </div>
                </div>

                <div class="cx-product-footer">
                    <div class="cx-product-price-row">
                        <div class="cx-price-group">
                            <span class="cx-sale-price">${prod.sale_price}</span>
                            <span class="cx-regular-price">${prod.regular_price}</span>
                        </div>
                        ${savings ? `<span class="cx-discount-badge">${savings}</span>` : ''}
                    </div>

                    <div class="cx-product-cta-group">
                        <a href="${prod.product_url}" class="cx-btn-product-primary">View Product</a>
                        <button type="button" class="cx-btn-product-secondary">Quick View</button>
                    </div>
                </div>
            </div>
        `;
    }).join("");

    const visibleCards = getVisibleCards();
    const totalDots = Math.max(1, filteredProducts.length - visibleCards + 1);

    dotsContainer.innerHTML = Array.from({ length: totalDots }, (_, idx) => `
        <button type="button" class="cx-dot ${idx === currentProductIndex ? 'active' : ''}" data-index="${idx}" aria-label="Go to slide ${idx + 1}"></button>
    `).join("");

    initializeProductIcons();
    setupWishlistListeners();
    setupDotListeners();
    setupImageLoadListeners();
    setupBrandLogoFallbacks();
};

/* Reveals each image (and hides its skeleton) once it has actually
   loaded, rather than assuming it's instant. */
const setupImageLoadListeners = () => {
    const visuals = document.querySelectorAll(".cx-product-visual");
    visuals.forEach(visual => {
        const img = visual.querySelector("img");
        const skeleton = visual.querySelector(".cx-img-skeleton");
        if (!img) return;

        const reveal = () => {
            img.classList.add("is-loaded");
            if (skeleton) skeleton.classList.add("is-hidden");
        };

        if (img.complete && img.naturalWidth > 0) {
            reveal();
        } else {
            img.addEventListener("load", reveal, { once: true });
            img.addEventListener("error", reveal, { once: true });
        }
    });
};

/* Brand logo: use the real SVG if it exists under assets/brands/,
   otherwise fall back to a visible text wordmark built from the
   brand name (kept in the sr-only span), so the card is never left
   with no brand indicator at all. */
const setupBrandLogoFallbacks = () => {
    const logos = document.querySelectorAll(".cx-brand-logo");
    logos.forEach(wrap => {
        const img = wrap.querySelector("img");
        const srText = wrap.querySelector(".cx-sr-only");
        if (!img) return;
        img.addEventListener("error", () => {
            const label = srText ? srText.textContent : "";
            wrap.innerHTML = `<span class="cx-brand-fallback-text">${label}</span>`;
        }, { once: true });
    });
};

/* ---------------- Carousel position & controls ---------------- */

const updateCarouselPosition = () => {
    const track = document.getElementById("productsTrack");
    if (!track) return;

    const cardWidth = track.firstElementChild ? track.firstElementChild.getBoundingClientRect().width + 24 : 300;
    track.style.transform = `translateX(-${currentProductIndex * cardWidth}px)`;

    const dots = document.querySelectorAll(".cx-dot");
    dots.forEach((dot, idx) => {
        dot.classList.toggle("active", idx === currentProductIndex);
    });
};

const goToPrev = () => {
    const visibleCards = getVisibleCards();
    const maxIndex = Math.max(0, filteredProducts.length - visibleCards);
    currentProductIndex = currentProductIndex > 0 ? currentProductIndex - 1 : maxIndex; // loops to the end
    updateCarouselPosition();
};

const goToNext = () => {
    const visibleCards = getVisibleCards();
    const maxIndex = Math.max(0, filteredProducts.length - visibleCards);
    currentProductIndex = currentProductIndex < maxIndex ? currentProductIndex + 1 : 0; // loops to the start
    updateCarouselPosition();
};

const setupCarouselInteractivity = () => {
    const prevBtn = document.getElementById("prevProductBtn");
    const nextBtn = document.getElementById("nextProductBtn");
    const viewport = document.getElementById("carouselViewport");

    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            goToPrev();
            restartAutoplay();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            goToNext();
            restartAutoplay();
        });
    }

    window.addEventListener("resize", () => {
        currentProductIndex = 0;
        updateCarouselPosition();
        moveFilterUnderline();
    });

    if (viewport) {
        viewport.addEventListener("mouseenter", stopAutoplay);
        viewport.addEventListener("mouseleave", startAutoplay);
        setupSwipeSupport(viewport);
    }
};

/* ---------------- Autoplay (pauses on hover/touch/interaction) ---------------- */

const startAutoplay = () => {
    stopAutoplay();
    autoplayTimer = setInterval(() => {
        goToNext();
    }, AUTOPLAY_INTERVAL);
};

const stopAutoplay = () => {
    if (autoplayTimer) {
        clearInterval(autoplayTimer);
        autoplayTimer = null;
    }
};

const restartAutoplay = () => {
    stopAutoplay();
    startAutoplay();
};

/* ---------------- Swipe / drag support ---------------- */

const setupSwipeSupport = (viewport) => {
    let startX = 0;
    let isDragging = false;
    const DRAG_THRESHOLD = 40;

    const onPointerDown = (e) => {
        isDragging = true;
        startX = e.clientX;
        viewport.classList.add("is-dragging");
        stopAutoplay();
    };

    const onPointerUp = (e) => {
        if (!isDragging) return;
        isDragging = false;
        viewport.classList.remove("is-dragging");

        const deltaX = e.clientX - startX;
        if (deltaX > DRAG_THRESHOLD) {
            goToPrev();
        } else if (deltaX < -DRAG_THRESHOLD) {
            goToNext();
        }
        startAutoplay();
    };

    viewport.addEventListener("pointerdown", onPointerDown);
    viewport.addEventListener("pointerup", onPointerUp);
    viewport.addEventListener("pointerleave", () => {
        if (isDragging) {
            isDragging = false;
            viewport.classList.remove("is-dragging");
            startAutoplay();
        }
    });
};

const setupDotListeners = () => {
    const dots = document.querySelectorAll(".cx-dot");
    dots.forEach((dot, idx) => {
        dot.addEventListener("click", () => {
            currentProductIndex = idx;
            updateCarouselPosition();
            restartAutoplay();
        });
    });
};

const setupWishlistListeners = () => {
    const wishlistBtns = document.querySelectorAll(".cx-wishlist-btn");
    wishlistBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            btn.classList.toggle("active");
            const icon = btn.querySelector("i");
            if (btn.classList.contains("active")) {
                icon.style.fill = "var(--cx-orange)";
            } else {
                icon.style.fill = "none";
            }
        });
    });
};

/* ---------------- Init ---------------- */

const initProductsSection = () => {
    renderCategories();
    renderProducts();
    setupCarouselInteractivity();
    initializeProductIcons();
    startAutoplay();
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initProductsSection);
} else {
    initProductsSection();
}