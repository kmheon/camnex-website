"use strict";

/**
 * ========================================================
 * COMPONENT: Shop by Category JS
 * FILE PATH MATCH: frontend/features/shop-by-category/shop-by-category.js
 * ========================================================
 * 
 * Asset registry mapping target transparent cutouts to interim fallbacks.
 * When real manufacturer assets (cat-*.webp) are dropped into assets/products/,
 * they render seamlessly. Until then, existing transparent placeholders serve as fallbacks.
 */

const CATEGORY_ASSET_MAP = {
    "cctv-packages": {
        title: "CCTV Packages",
        target: "cat-cctv-packages-kit.webp",
        fallback: "cctv-kit-transparent.webp",
        recommendedSize: "800 × 600 px",
        ratio: "16:9 or 1:1"
    },
    "access-control": {
        title: "Access Control",
        target: "cat-access-control-terminal.webp",
        fallback: "face-terminal-transparent.webp",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "smart-home": {
        title: "Smart Home",
        target: "cat-smart-home-doorbell.webp",
        fallback: "smart-doorbell-transparent.webp",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "time-attendance": {
        title: "Time Attendance",
        target: "cat-fingerprint-attendance.webp",
        fallback: "fingerprint-transparent.webp",
        recommendedSize: "500 × 500 px",
        ratio: "1:1"
    },
    "video-intercom": {
        title: "Video Intercom",
        target: "cat-video-intercom-monitor.webp",
        fallback: "indoor-monitor-transparent.webp",
        recommendedSize: "500 × 500 px",
        ratio: "1:1"
    },
    "accessories": {
        title: "Accessories",
        target: "cat-accessories-hdd.webp",
        fallback: "hdd-adapter-transparent.webp",
        recommendedSize: "500 × 500 px",
        ratio: "1:1"
    }
};

const setupCategoryImageFallbacks = () => {
    const images = document.querySelectorAll(".cx-shop-by-category .cx-card-visual img[data-fallback]");
    images.forEach((img) => {
        img.addEventListener("error", function handleImgError() {
            const fallbackSrc = this.getAttribute("data-fallback");
            if (fallbackSrc && this.src !== fallbackSrc) {
                this.src = fallbackSrc;
            }
        }, { once: true });
    });
};

const initializeCategoryIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initCategoryComponent = () => {
    initializeCategoryIcons();
    setupCategoryImageFallbacks();
};

window.initCategoryComponent = initCategoryComponent;
window.CATEGORY_ASSET_MAP = CATEGORY_ASSET_MAP;
