"use strict";

/**
 * ========================================================
 * COMPONENT: Featured CCTV Packages JS (Clean Component Layout)
 * FILE PATH MATCH: frontend/features/featured-packages/featured-packages.js
 * ========================================================
 */

const initializePackageIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const cctvPackagesData = [
    {
        id: "pkg-2cam",
        title: "2 Camera Security Kit",
        badge: "Popular",
        camerasCount: "2 Cameras",
        socialProof: "Installed 5,000+ Times",
        description: "Ideal compact surveillance setup for small retail shops, apartments, and studio homes.",
        componentRows: [
            ["2x HD Cameras", "1x 4CH DVR"],
            ["500GB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 8,500",
        image: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/2-camera",
        customizeLink: "/customize/2-camera"
    },
    {
        id: "pkg-4cam",
        title: "4 Camera Complete Kit",
        badge: "Best Value",
        camerasCount: "4 Cameras",
        socialProof: "Installed 8,400+ Times",
        description: "Comprehensive perimeter coverage designed for medium-sized shops, offices, and residences.",
        componentRows: [
            ["4x HD Cameras", "1x 4CH DVR"],
            ["1TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 14,500",
        image: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/4-camera",
        customizeLink: "/customize/4-camera"
    },
    {
        id: "pkg-8cam",
        title: "8 Camera Enterprise Kit",
        badge: "Professional",
        camerasCount: "8 Cameras",
        socialProof: "Installed 3,200+ Times",
        description: "Robust multi-zone security system built for large commercial floors, warehouses, and schools.",
        componentRows: [
            ["8x HD Cameras", "1x 8CH DVR"],
            ["2TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 28,000",
        image: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/8-camera",
        customizeLink: "/customize/8-camera"
    },
    {
        id: "pkg-16cam",
        title: "16 Camera Industrial Kit",
        badge: "Enterprise",
        camerasCount: "16 Cameras",
        socialProof: "Installed 1,500+ Times",
        description: "Maximum coverage security architecture for sprawling factories, large commercial buildings, and estates.",
        componentRows: [
            ["16x HD Cameras", "1x 16CH NVR"],
            ["4TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 55,000",
        image: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/16-camera",
        customizeLink: "/customize/16-camera"
    },
    {
        id: "pkg-colorvu",
        title: "ColorVu 24/7 Color Kit",
        badge: "ColorVu",
        camerasCount: "4 Cameras",
        socialProof: "Installed 6,100+ Times",
        description: "Advanced Hikvision ColorVu technology providing bright, colorful night vision in zero-light conditions.",
        componentRows: [
            ["4x ColorVu Cams", "1x 4CH DVR"],
            ["1TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 18,500",
        image: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/colorvu",
        customizeLink: "/customize/colorvu"
    },
    {
        id: "pkg-nightvision",
        title: "Smart IR Night Vision Kit",
        badge: "Night Vision",
        camerasCount: "4 Cameras",
        socialProof: "Installed 4,500+ Times",
        description: "Smart IR illumination cameras engineered for sharp clarity across complete darkness up to 30 meters.",
        componentRows: [
            ["4x IR Cameras", "1x 4CH DVR"],
            ["1TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 12,500",
        image: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/night-vision",
        customizeLink: "/customize/night-vision"
    },
    {
        id: "pkg-business",
        title: "Corporate Business Bundle",
        badge: "Professional",
        camerasCount: "6 Cameras",
        socialProof: "Installed 2,900+ Times",
        description: "Optimized corporate surveillance solution with remote mobile monitoring and high-speed storage.",
        componentRows: [
            ["6x HD Cameras", "1x 8CH DVR"],
            ["2TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 22,000",
        image: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/business",
        customizeLink: "/customize/business"
    },
    {
        id: "pkg-warehouse",
        title: "Warehouse Long-Range Kit",
        badge: "Enterprise",
        camerasCount: "8 Cameras",
        socialProof: "Installed 1,800+ Times",
        description: "Heavy-duty varifocal lens and waterproof bullet cameras tailored for vast industrial perimeters.",
        componentRows: [
            ["8x Long-Range", "1x 8CH NVR"],
            ["4TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 38,000",
        image: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        viewLink: "/packages/warehouse",
        customizeLink: "/customize/warehouse"
    }
];

let currentCarouselIndex = 0;

const renderPackages = () => {
    const track = document.getElementById("packagesTrack");
    const dotsContainer = document.getElementById("carouselDots");
    if (!track || !dotsContainer) return;

    track.innerHTML = cctvPackagesData.map(pkg => `
        <div class="cx-package-card" data-id="${pkg.id}">
            <div class="cx-card-top-row">
                <span class="cx-pkg-badge">${pkg.badge}</span>
                <span class="cx-pkg-cams-tag">${pkg.camerasCount}</span>
            </div>
            
            <div class="cx-pkg-visual">
                <img src="${pkg.image}" alt="${pkg.title}" loading="lazy">
            </div>

            <div class="cx-pkg-info">
                <div class="cx-pkg-title-area">
                    <h3 class="cx-pkg-title">${pkg.title}</h3>
                    <div class="cx-social-proof">
                        <i data-lucide="shield-check"></i> ${pkg.socialProof}
                    </div>
                </div>
                
                <p class="cx-pkg-desc">${pkg.description}</p>
                
                <div class="cx-pkg-components">
                    ${pkg.componentRows.map(row => `
                        <div class="cx-component-row">
                            <span class="cx-component-item"><i data-lucide="check"></i> ${row[0]}</span>
                            <span class="cx-component-item"><i data-lucide="check"></i> ${row[1]}</span>
                        </div>
                    `).join("")}
                    <span class="cx-component-more">${pkg.moreCount}</span>
                </div>
            </div>

            <div class="cx-pkg-footer">
                <div class="cx-pkg-price-row">
                    <span class="cx-price-label">Starting Price</span>
                    <span class="cx-price-value">${pkg.price}</span>
                </div>
                
                <div class="cx-pkg-cta-group">
                    <a href="${pkg.viewLink}" class="cx-btn-pkg-primary">View Package</a>
                    <a href="${pkg.customizeLink}" class="cx-btn-pkg-secondary">Customize</a>
                </div>
            </div>
        </div>
    `).join("");

    const visibleCards = window.innerWidth > 1200 ? 4 : window.innerWidth > 768 ? 2 : 1;
    const totalDots = Math.max(1, cctvPackagesData.length - visibleCards + 1);

    dotsContainer.innerHTML = Array.from({ length: totalDots }, (_, idx) => `
        <button type="button" class="cx-dot ${idx === currentCarouselIndex ? 'active' : ''}" data-index="${idx}" aria-label="Go to slide ${idx + 1}"></button>
    `).join("");

    initializePackageIcons();
    setupDotListeners();
};

const updateCarouselPosition = () => {
    const track = document.getElementById("packagesTrack");
    if (!track) return;

    const cardWidth = track.firstElementChild ? track.firstElementChild.getBoundingClientRect().width + 24 : 300;
    track.style.transform = `translateX(-${currentCarouselIndex * cardWidth}px)`;

    const dots = document.querySelectorAll(".cx-dot");
    dots.forEach((dot, idx) => {
        dot.classList.toggle("active", idx === currentCarouselIndex);
    });
};

const setupCarouselInteractivity = () => {
    const prevBtn = document.getElementById("prevPackageBtn");
    const nextBtn = document.getElementById("nextPackageBtn");

    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            const visibleCards = window.innerWidth > 1200 ? 4 : window.innerWidth > 768 ? 2 : 1;
            const maxIndex = cctvPackagesData.length - visibleCards;
            currentCarouselIndex = currentCarouselIndex > 0 ? currentCarouselIndex - 1 : maxIndex;
            updateCarouselPosition();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            const visibleCards = window.innerWidth > 1200 ? 4 : window.innerWidth > 768 ? 2 : 1;
            const maxIndex = cctvPackagesData.length - visibleCards;
            currentCarouselIndex = currentCarouselIndex < maxIndex ? currentCarouselIndex + 1 : 0;
            updateCarouselPosition();
        });
    }

    window.addEventListener("resize", () => {
        currentCarouselIndex = 0;
        renderPackages();
        updateCarouselPosition();
    });
};

const setupDotListeners = () => {
    const dots = document.querySelectorAll(".cx-dot");
    dots.forEach((dot, idx) => {
        dot.addEventListener("click", () => {
            currentCarouselIndex = idx;
            updateCarouselPosition();
        });
    });
};

const initPackagesComponent = () => {
    renderPackages();
    setupCarouselInteractivity();
};

window.initPackagesComponent = initPackagesComponent;