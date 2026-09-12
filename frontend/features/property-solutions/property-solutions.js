"use strict";

/**
 * ========================================================
 * COMPONENT: Property Solutions JS
 * FILE PATH MATCH: frontend/features/property-solutions/property-solutions.js
 * ========================================================
 */

const initializePropertyIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initPropertyComponent = () => {
    initializePropertyIcons();
};

window.initPropertyComponent = initPropertyComponent;
