"use strict";

/**
 * ========================================================
 * COMPONENT: Final Call-To-Action Section JS
 * FILE PATH MATCH: features/final-cta/final-cta.js
 * ========================================================
 */

const initializeFinalCtaIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initFinalCtaComponent = () => {
    initializeFinalCtaIcons();
};

document.addEventListener("DOMContentLoaded", initFinalCtaComponent);