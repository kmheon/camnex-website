"use strict";

/**
 * ========================================================
 * COMPONENT: Category Card
 * VERSION: 2.1 (Final Polish)
 * ========================================================
 */

const initializeCategoryIcons = () => {
    // Initialize Lucide icons
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initCategoryComponent = () => {
    initializeCategoryIcons();
    // Note: Card clickability is now handled natively and accessibly 
    // via CSS stretched link (::after pseudo-element on the anchor).
    // No JS event delegation is needed for routing.
};

document.addEventListener("DOMContentLoaded", initCategoryComponent);