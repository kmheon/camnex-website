"use strict";

/**
 * ========================================================
 * COMPONENT: Property Solutions JS
 * FILE PATH MATCH: frontend/features/property-solutions/property-solutions.js
 * ========================================================
 */

/**
 * Asset mapping registry for local CamneX property solution photographs
 * and their Unsplash fallback references.
 */
const PROPERTY_SOLUTIONS_MAP = {
    "home": {
        title: "Home",
        target: "../../assets/solutions/solution-home.webp",
        fallback: "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1400&q=85",
        recommendedResolution: "1400 × 900 px",
        aspectRatio: "16:10",
        type: "Full architectural/environment photograph, NO transparency"
    },
    "office": {
        title: "Office",
        target: "../../assets/solutions/solution-office.webp",
        fallback: "https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1400&q=85",
        recommendedResolution: "1400 × 900 px",
        aspectRatio: "16:10",
        type: "Corporate office/security environment, NO transparency"
    },
    "retail-shop": {
        title: "Retail Shop",
        target: "../../assets/solutions/solution-retail-shop.webp",
        fallback: "https://images.unsplash.com/photo-1555529771-835f59fc5efe?auto=format&fit=crop&w=1000&q=85",
        recommendedResolution: "1000 × 750 px",
        aspectRatio: "4:3",
        type: "Retail/showroom environment, NO transparency"
    },
    "warehouse": {
        title: "Warehouse",
        target: "../../assets/solutions/solution-warehouse.webp",
        fallback: "https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=1000&q=85",
        recommendedResolution: "1000 × 750 px",
        aspectRatio: "4:3",
        type: "Warehouse/logistics environment, NO transparency"
    },
    "factory": {
        title: "Factory",
        target: "../../assets/solutions/solution-factory.webp",
        fallback: "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1000&q=85",
        recommendedResolution: "1000 × 750 px",
        aspectRatio: "4:3",
        type: "Industrial/factory environment, NO transparency"
    },
    "educational-institute": {
        title: "Educational Institute",
        target: "../../assets/solutions/solution-education.webp",
        fallback: "https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1000&q=85",
        recommendedResolution: "1000 × 750 px",
        aspectRatio: "4:3",
        type: "School/university/campus environment, NO transparency"
    }
};

const setupPropertyImageFallbacks = () => {
    const images = document.querySelectorAll(".cx-property-solutions .cx-card-bg-image img[data-fallback]");
    images.forEach((img) => {
        img.addEventListener("error", function handleImgError() {
            const fallbackSrc = this.getAttribute("data-fallback");
            if (fallbackSrc && this.src !== fallbackSrc) {
                this.src = fallbackSrc;
            }
        }, { once: true });
    });
};

const initializePropertyIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initPropertyComponent = () => {
    initializePropertyIcons();
    setupPropertyImageFallbacks();
};

window.initPropertyComponent = initPropertyComponent;
window.PROPERTY_SOLUTIONS_MAP = PROPERTY_SOLUTIONS_MAP;

