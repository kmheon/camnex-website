"use strict";

/**
 * ========================================================
 * COMPONENT: Shop by Category JS (Final Polish)
 * FILE PATH MATCH: frontend/features/shop-by-category/shop-by-category.js
 * ========================================================
 */

const initializeCategoryIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initCategoryComponent = () => {
    initializeCategoryIcons();
};

document.addEventListener("DOMContentLoaded", initCategoryComponent);