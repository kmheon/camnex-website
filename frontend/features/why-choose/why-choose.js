"use strict";

/**
 * ========================================================
 * COMPONENT: Why Choose CamneX Section JS
 * VERSION: 1.0 (Production Ready)
 * ========================================================
 */

const initializeWhyChooseIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initWhyChooseComponent = () => {
    initializeWhyChooseIcons();
};

document.addEventListener("DOMContentLoaded", initWhyChooseComponent);