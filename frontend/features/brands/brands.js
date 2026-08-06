"use strict";

/**
 * ========================================================
 * COMPONENT: Brands We Work With Section JS
 * FILE PATH MATCH: features/brands-we-work-with/brands-we-work-with.js
 * ========================================================
 */

const initializeBrandIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initBrandsComponent = () => {
    initializeBrandIcons();
};

document.addEventListener("DOMContentLoaded", initBrandsComponent);