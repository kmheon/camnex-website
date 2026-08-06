"use strict";

/**
 * ========================================================
 * COMPONENT: Package Card
 * VERSION: 3.1 (Final Polish)
 * ========================================================
 */

const initializePackageIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initPackageComponent = () => {
    initializePackageIcons();
};

document.addEventListener("DOMContentLoaded", initPackageComponent);