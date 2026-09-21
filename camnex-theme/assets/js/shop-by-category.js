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
        target: "cat-cctv-packages-kit.png",
        fallback: "cctv-kit-transparent.png",
        recommendedSize: "800 × 600 px",
        ratio: "16:9 or 1:1"
    },
    "access-control": {
        title: "Access Control & Time Attendance",
        target: "cat-access-control-terminal.png",
        fallback: "face-terminal-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "fire-alarm": {
        title: "Fire Safety & Alarm System",
        target: "cat-fire-alarm-detector.png",
        fallback: "fire-alarm-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "physical-security": {
        title: "Physical Security",
        target: "cat-physical-security.png",
        fallback: "physical-security-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "smart-home": {
        title: "Smart Home",
        target: "cat-smart-home-doorbell.png",
        fallback: "smart-doorbell-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "communication-systems": {
        title: "Communication Systems",
        target: "cat-communication-systems.png",
        fallback: "communication-systems-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "wifi-cameras": {
        title: "WiFi Cameras",
        target: "cat-wifi-camera.png",
        fallback: "wifi-camera-transparent.png",
        recommendedSize: "500 × 500 px",
        ratio: "1:1"
    },
    "accessories": {
        title: "Accessories",
        target: "cat-accessories-hdd.png",
        fallback: "hdd-adapter-transparent.png",
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
