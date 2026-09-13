"use strict";

/**
 * ============================================================
 * COMPONENT: Why Choose CamneX
 * Viewport Reveal Animation with IntersectionObserver
 * ============================================================
 */

const initializeWhyChooseIcons = () => {
    if (window.lucide && typeof window.lucide.createIcons === "function") {
        window.lucide.createIcons();
    }
};

const initWhyChooseComponent = () => {
    initializeWhyChooseIcons();

    const section = document.querySelector(".cx-why-choose-section");
    const cards = document.querySelectorAll(".cx-why-card");
    if (!cards.length) return;

    const prefersReducedMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    const revealCards = () => {
        cards.forEach((card, index) => {
            if (!card.classList.contains("animated")) {
                card.style.animationDelay = prefersReducedMotion ? "0ms" : `${index * 80}ms`;
                card.classList.add("animated");
            }
        });
    };

    if (prefersReducedMotion || !("IntersectionObserver" in window)) {
        revealCards();
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                revealCards();
                obs.disconnect();
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: "0px 0px -40px 0px"
    });

    if (section) {
        observer.observe(section);
    } else {
        cards.forEach(card => observer.observe(card));
    }
};

window.initWhyChooseComponent = initWhyChooseComponent;

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initWhyChooseComponent);
} else {
    initWhyChooseComponent();
}
