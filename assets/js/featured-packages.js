(() => {
    "use strict";

    /**
     * ========================================================
     * COMPONENT: Featured CCTV Packages JS (Clean Component Layout)
     * FILE PATH MATCH: frontend/features/featured-packages/featured-packages.js
     * ========================================================
     */

    let initialized = false;

    /**
     * Asset mapping registry for local CamneX package photographs
     * and their Unsplash fallback references.
     */
    const FEATURED_PACKAGES_ASSET_MAP = {
        "pkg-hikvision-colorvu-4cam": {
            id: "pkg-colorvu",
            name: "4 Camera Hikvision ColorVu Package",
            target: "../../assets/packages/pkg-hikvision-colorvu-4cam.webp",
            fallback: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-hikvision-ip-8cam": {
            id: "pkg-8cam",
            name: "8 Camera Hikvision IP Package",
            target: "../../assets/packages/pkg-hikvision-ip-8cam.webp",
            fallback: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-dahua-fullcolor-4cam": {
            id: "pkg-nightvision",
            name: "4 Camera Dahua Full Color Kit",
            target: "../../assets/packages/pkg-dahua-fullcolor-4cam.webp",
            fallback: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-commercial-cctv-16cam": {
            id: "pkg-16cam",
            name: "16 Camera Commercial CCTV Kit",
            target: "../../assets/packages/pkg-commercial-cctv-16cam.webp",
            fallback: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-smarthome-wifi-2cam": {
            id: "pkg-2cam",
            name: "2 Camera Smart Home WiFi Kit",
            target: "../../assets/packages/pkg-smarthome-wifi-2cam.webp",
            fallback: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-dahua-ip-4cam": {
            id: "pkg-4cam",
            name: "4 Camera Dahua IP System",
            target: "../../assets/packages/pkg-dahua-ip-4cam.webp",
            fallback: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-corporate-security-8cam": {
            id: "pkg-business",
            name: "8 Camera Corporate Security Kit",
            target: "../../assets/packages/pkg-corporate-security-8cam.webp",
            fallback: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        },
        "pkg-industrial-cctv-32cam": {
            id: "pkg-warehouse",
            name: "32 Camera Industrial CCTV Setup",
            target: "../../assets/packages/pkg-industrial-cctv-32cam.webp",
            fallback: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
            recommendedResolution: "800 × 600 px",
            aspectRatio: "4:3 or 1:1"
        }
    };

    const setupPackageImageFallbacks = () => {
        const images = document.querySelectorAll(".cx-package-card .cx-pkg-visual img[data-fallback]");
        images.forEach((img) => {
            img.addEventListener("error", function handleImgError() {
                const fallbackSrc = this.getAttribute("data-fallback");
                if (fallbackSrc && this.src !== fallbackSrc) {
                    this.src = fallbackSrc;
                }
            }, { once: true });
        });
    };

    const initializePackageIcons = () => {
        if (window.lucide) {
            window.lucide.createIcons();
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
            ["2x HD Bullet Cams", "1x 4CH DVR"],
            ["500GB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 8,500",
        targetImage: "../../assets/packages/pkg-smarthome-wifi-2cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-smarthome-wifi-2cam.webp",
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
            ["4x HD Bullet Cams", "1x 4CH DVR"],
            ["500GB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 14,500",
        targetImage: "../../assets/packages/pkg-dahua-ip-4cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-dahua-ip-4cam.webp",
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
            ["8x HD Bullet Cams", "1x 8CH DVR"],
            ["1TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 28,000",
        targetImage: "../../assets/packages/pkg-hikvision-ip-8cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-hikvision-ip-8cam.webp",
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
            ["16x HD Bullet Cams", "1x 16CH NVR"],
            ["2TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 55,000",
        targetImage: "../../assets/packages/pkg-commercial-cctv-16cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-commercial-cctv-16cam.webp",
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
            ["4x ColorVu Bullet Cams", "1x 4CH DVR"],
            ["500GB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 18,500",
        targetImage: "../../assets/packages/pkg-hikvision-colorvu-4cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-hikvision-colorvu-4cam.webp",
        viewLink: "/packages/colorvu",
        customizeLink: "/customize/colorvu"
    },
    {
        id: "pkg-nightvision",
        title: "Smart IR Night Vision Kit",
        badge: "Night Vision",
        camerasCount: "4 Cameras",
        socialProof: "Installed 4,500+ Times",
        description: "IRPF-series infrared-only smart IR illumination cameras engineered for crystal-clear night capture in total darkness without visible light.",
        componentRows: [
            ["4x IR Bullet Cams", "1x 4CH DVR"],
            ["500GB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 12,500",
        targetImage: "../../assets/packages/pkg-dahua-fullcolor-4cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-dahua-fullcolor-4cam.webp",
        viewLink: "/packages/night-vision",
        customizeLink: "/customize/night-vision"
    },
    {
        id: "pkg-business",
        title: "Corporate Business Bundle",
        badge: "Professional",
        camerasCount: "8 Cameras",
        socialProof: "Installed 2,900+ Times",
        description: "Optimized corporate surveillance solution with remote mobile monitoring and high-speed storage.",
        componentRows: [
            ["8x HD Bullet Cams", "1x 8CH DVR"],
            ["1TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 22,000",
        targetImage: "../../assets/packages/pkg-corporate-security-8cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-corporate-security-8cam.webp",
        viewLink: "/packages/business",
        customizeLink: "/customize/business"
    },
    {
        id: "pkg-warehouse",
        title: "Warehouse Long-Range Kit",
        badge: "Enterprise",
        camerasCount: "16 Cameras",
        socialProof: "Installed 1,800+ Times",
        description: "Heavy-duty varifocal lens and waterproof bullet cameras tailored for vast industrial perimeters.",
        componentRows: [
            ["16x HD Bullet Cams", "1x 16CH NVR"],
            ["2TB HDD", "Power Supply"]
        ],
        moreCount: "+ 2 More Included",
        price: "৳ 38,000",
        targetImage: "../../assets/packages/pkg-industrial-cctv-32cam.webp",
        fallbackImage: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=600&q=80",
        image: "../../assets/packages/pkg-industrial-cctv-32cam.webp",
        viewLink: "/packages/warehouse",
        customizeLink: "/customize/warehouse"
    }
];

let currentCarouselIndex = 0;

const renderPackages = () => {
    const track = document.getElementById("packagesTrack");
    const section = document.querySelector(".cx-featured-packages-section");
    const dotsContainer = section ? section.querySelector(".cx-carousel-dots") : document.getElementById("carouselDots");
    if (!track || !dotsContainer) return;

    track.innerHTML = cctvPackagesData.map(pkg => `
        <div class="cx-package-card" data-id="${pkg.id}">
            <div class="cx-card-top-row">
                <span class="cx-pkg-badge">${pkg.badge}</span>
                <span class="cx-pkg-cams-tag">${pkg.camerasCount}</span>
            </div>
            
            <div class="cx-pkg-visual">
                <img src="${pkg.image}" alt="${pkg.title}" loading="lazy" data-fallback="${pkg.fallbackImage}" onerror="this.onerror=null;this.src='${pkg.fallbackImage}'">
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
    setupPackageImageFallbacks();
    setupDotListeners();
};

const updateCarouselPosition = () => {
    const track = document.getElementById("packagesTrack");
    if (!track) return;

    const cardWidth = track.firstElementChild ? track.firstElementChild.getBoundingClientRect().width + 24 : 300;
    track.style.transform = `translateX(-${currentCarouselIndex * cardWidth}px)`;

    const section = document.querySelector(".cx-featured-packages-section");
    const dots = section ? section.querySelectorAll(".cx-dot") : document.querySelectorAll(".cx-dot");
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
    const section = document.querySelector(".cx-featured-packages-section");
    const dots = section ? section.querySelectorAll(".cx-dot") : document.querySelectorAll(".cx-dot");
    dots.forEach((dot, idx) => {
        dot.addEventListener("click", () => {
            currentCarouselIndex = idx;
            updateCarouselPosition();
        });
    });
};

const initPackagesComponent = () => {
    if (initialized) return;
    const track = document.getElementById("packagesTrack");
    if (!track) return;
    initialized = true;
    renderPackages();
    setupCarouselInteractivity();
};

window.initPackagesComponent = initPackagesComponent;
window.FEATURED_PACKAGES_ASSET_MAP = FEATURED_PACKAGES_ASSET_MAP;

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initPackagesComponent);
} else {
    initPackagesComponent();
}
})();
