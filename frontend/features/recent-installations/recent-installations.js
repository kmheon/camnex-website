"use strict";

/**
 * ========================================================
 * COMPONENT: Recent Projects Section JS
 * FILE PATH MATCH: features/recent-installations/recent-installations.js
 * ========================================================
 */

/**
 * Asset mapping registry for local CamneX recent installation photographs
 * and their Unsplash fallback references.
 * When real project photographs (proj-*.webp) are supplied, they render seamlessly.
 * Until then, existing Unsplash photography serves as continuous graceful fallback.
 */
const RECENT_INSTALLATIONS_ASSET_MAP = {
    "feat-01": {
        id: "feat-01",
        title: "Home CCTV Installation",
        location: "Dhanmondi, Dhaka",
        category: "Home",
        target: "../../assets/projects/proj-dhanmondi-home-cctv.webp",
        fallback: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=1200&q=80",
        recommendedResolution: "1200 × 675 px",
        aspectRatio: "16:9",
        imageRequirement: "REAL CamneX installation photograph showing a residential CCTV installation."
    },
    "proj-01": {
        id: "proj-01",
        title: "Corporate Office CCTV",
        location: "Banani, Dhaka",
        category: "Office",
        target: "../../assets/projects/proj-banani-office-cctv.webp",
        fallback: "https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80",
        recommendedResolution: "800 × 500 px",
        aspectRatio: "16:10",
        imageRequirement: "REAL CamneX installation photograph showing CCTV/security deployment in a corporate office environment."
    },
    "proj-02": {
        id: "proj-02",
        title: "Garments Factory Security",
        location: "Gazipur Industrial Zone",
        category: "Factory",
        target: "../../assets/projects/proj-gazipur-factory-security.webp",
        fallback: "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80",
        recommendedResolution: "800 × 500 px",
        aspectRatio: "16:10",
        imageRequirement: "REAL CamneX installation photograph showing industrial/factory security or CCTV deployment."
    },
    "proj-03": {
        id: "proj-03",
        title: "Retail Showroom Setup",
        location: "Gulshan-2, Dhaka",
        category: "Shop",
        target: "../../assets/projects/proj-gulshan-retail-cctv.webp",
        fallback: "https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80",
        recommendedResolution: "800 × 500 px",
        aspectRatio: "16:10",
        imageRequirement: "REAL CamneX installation photograph showing a retail/showroom CCTV installation."
    }
};

const setupRecentInstallationImageFallbacks = () => {
    const images = document.querySelectorAll(".cx-recent-projects-section img[data-fallback]");
    images.forEach((img) => {
        img.addEventListener("error", function handleImgError() {
            const fallbackSrc = this.getAttribute("data-fallback");
            if (fallbackSrc && this.src !== fallbackSrc) {
                this.src = fallbackSrc;
            }
        }, { once: true });
    });
};

const initializeRecentProjectIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initRecentProjectsComponent = () => {
    initializeRecentProjectIcons();
    setupRecentInstallationImageFallbacks();
};

if (typeof window !== "undefined") {
    window.initRecentProjectsComponent = initRecentProjectsComponent;
    window.RECENT_INSTALLATIONS_ASSET_MAP = RECENT_INSTALLATIONS_ASSET_MAP;
}

