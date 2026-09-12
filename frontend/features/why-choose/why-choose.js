"use strict";

/**
 * ============================================================
 * COMPONENT: Why Choose CamneX
 * ============================================================
 */

const initializeWhyChooseIcons = () => {
    if (window.lucide) {
        window.lucide.createIcons();
    }
};

const initWhyChooseComponent = () => {

    const cards = document.querySelectorAll(".cx-why-card");

    cards.forEach((card, index) => {
        card.classList.add("animated");
        card.style.animationDelay = `${index * 80}ms`;
    });

    initializeWhyChooseIcons();
};

window.initWhyChooseComponent = initWhyChooseComponent;