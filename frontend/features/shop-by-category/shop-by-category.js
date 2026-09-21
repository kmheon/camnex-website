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
    "cctv-cameras": {
        title: "CCTV Cameras",
        target: "cctv-bullet-transparent.png",
        solutionAlias: "cctv_solution.png",
        fallback: "cctv-bullet-transparent.png",
        recommendedSize: "800 × 600 px",
        ratio: "16:9"
    },
    "networking": {
        title: "Networking",
        target: "poe-switch-transparent.png",
        fallback: "poe-switch-transparent.png",
        recommendedSize: "800 × 600 px",
        ratio: "16:9"
    },
    "wifi-cameras": {
        title: "WiFi Cameras",
        target: "wifi-camera-transparent.png",
        solutionAlias: "wifi_camera_solution.png",
        fallback: "wifi-camera-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "smart-home": {
        title: "Smart Home",
        target: "smart-doorbell-transparent.png",
        solutionAlias: "smart_home_solution.png",
        fallback: "smart-doorbell-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "access-control": {
        title: "Access Control & Time Attendance",
        target: "face-terminal-transparent.png",
        solutionAlias: "access_controll_solution.png",
        fallback: "face-terminal-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "physical-security": {
        title: "Physical Security",
        target: "physical-security-transparent.png",
        solutionAlias: "phycical_security_solution.png",
        fallback: "physical-security-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "fire-alarm": {
        title: "Fire Safety & Alarm System",
        target: "fire-alarm-transparent.png",
        fallback: "fire-alarm-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "communication-systems": {
        title: "Communication Systems",
        target: "communication-systems-transparent.png",
        solutionAlias: "comunication_solution.png",
        fallback: "communication-systems-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "servers-storage": {
        title: "Enterprise Servers and Storage",
        target: "server-storage-transparent.png",
        solutionAlias: "server_solution.png",
        fallback: "server-storage-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "interactive-flat-panel": {
        title: "Interactive Flat Panels and Displays",
        target: "interactive-panel-transparent.png",
        solutionAlias: "Interactive_panels_solution.png",
        fallback: "interactive-panel-transparent.png",
        recommendedSize: "600 × 600 px",
        ratio: "1:1"
    },
    "accessories": {
        title: "Accessories",
        target: "hdd-adapter-transparent.png",
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
