"use strict";

/**
 * ========================================================
 * COMPONENT: Featured Packages Section JS
 * VERSION: 1.0
 * ========================================================
 */

const initializeFeaturedPackageIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initFeaturedPackagesComponent = () => {
    initializeFeaturedPackageIcons();
};

document.addEventListener("DOMContentLoaded", initFeaturedPackagesComponent);