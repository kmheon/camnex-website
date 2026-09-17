"use strict";

/**
 * ========================================================
 * COMPONENT: Footer Section JS
 * FILE PATH MATCH: components/footer/footer.js
 * ========================================================
 */

const initializeFooterIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const setupBackToTop = (section) => {
    const backBtn = section ? section.querySelector("#backToTopBtn") : document.getElementById("backToTopBtn");
    if (backBtn) {
        backBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
};

function initFooterComponent(root = document) {
    const section = root.querySelector ? root.querySelector(".cx-footer-section") : document.querySelector(".cx-footer-section");
    if (!section) return;

    if (section.dataset.initialized === "true") return;
    section.dataset.initialized = "true";

    initializeFooterIcons();
    setupBackToTop(section);
}

window.initFooterComponent = initFooterComponent;

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => initFooterComponent());
} else {
    initFooterComponent();
}