"use strict";

/**
 * ========================================================
 * COMPONENT: Property Solutions Section
 * VERSION: 2.1 (Final Revision)
 * ========================================================
 */

const initializePropertyIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initPropertySolutionsComponent = () => {
    initializePropertyIcons();
};

document.addEventListener("DOMContentLoaded", initPropertySolutionsComponent);