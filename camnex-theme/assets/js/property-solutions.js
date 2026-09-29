"use strict";

/**
 * ========================================================
 * COMPONENT: Property Solutions JS (WordPress Theme Asset)
 * FILE PATH MATCH: camnex-theme/assets/js/property-solutions.js
 * ========================================================
 */

const PROPERTY_SOLUTIONS_MAP = {
    "home": {
        title: "Home",
        category: "Residential",
        url: "/solutions/home",
        tags: ["CCTV", "Smart Doorbell", "WiFi"]
    },
    "office": {
        title: "Office",
        category: "Commercial",
        url: "/solutions/office",
        tags: ["CCTV", "Access Control", "Networking", "Time Attendance"]
    },
    "retail-shop": {
        title: "Retail Shop",
        category: "Retail & POS",
        url: "/solutions/retail-shop",
        tags: ["CCTV", "POS", "Time Attendance"]
    },
    "warehouse": {
        title: "Warehouse",
        category: "Logistics",
        url: "/solutions/warehouse",
        tags: ["CCTV", "PoE", "NVR Storage"]
    },
    "factory": {
        title: "Factory",
        category: "Industrial",
        url: "/solutions/factory",
        tags: ["CCTV", "Access Control", "AI Analytics"]
    },
    "educational-institute": {
        title: "Educational Institute",
        category: "Institutional",
        url: "/solutions/educational-institute",
        tags: ["CCTV", "Attendance", "Networking"]
    }
};

const initializePropertyIcons = () => {
    if (window.lucide && typeof window.lucide.createIcons === "function") {
        window.lucide.createIcons();
    }
};

const initPropertyComponent = () => {
    initializePropertyIcons();
};

window.initPropertyComponent = initPropertyComponent;
window.PROPERTY_SOLUTIONS_MAP = PROPERTY_SOLUTIONS_MAP;

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initPropertyComponent);
} else {
    initPropertyComponent();
}
