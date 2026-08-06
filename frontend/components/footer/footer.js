"use strict";

/**
 * ========================================================
 * COMPONENT: Footer Section JS
 * FILE PATH MATCH: sections/footer/footer.js
 * ========================================================
 */

const initializeFooterIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const setupBackToTop = () => {
    const backBtn = document.getElementById("backToTopBtn");
    if (backBtn) {
        backBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
};

const initFooterComponent = () => {
    initializeFooterIcons();
    setupBackToTop();
};

document.addEventListener("DOMContentLoaded", initFooterComponent);