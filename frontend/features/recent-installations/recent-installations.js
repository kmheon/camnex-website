"use strict";

/**
 * ========================================================
 * COMPONENT: Recent Projects Section JS
 * FILE PATH MATCH: features/recent-installations/recent-installations.js
 * ========================================================
 */

const initializeRecentProjectIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initRecentProjectsComponent = () => {
    initializeRecentProjectIcons();
};

document.addEventListener("DOMContentLoaded", initRecentProjectsComponent);