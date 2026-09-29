"use strict";

/**
 * ========================================================
 * COMPONENT: Customer Testimonials Section JS
 * FILE PATH MATCH: features/customer-testimonials/customer-testimonials.js
 * ========================================================
 */

const initializeTestimonialIcons = () => {
    if (
        window.lucide &&
        typeof window.lucide.createIcons === "function"
    ) {
        window.lucide.createIcons();
    }
};

const initTestimonialsComponent = () => {
    initializeTestimonialIcons();
};

window.initTestimonialsComponent = initTestimonialsComponent;

// Standalone auto-initialization
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initTestimonialsComponent);
} else {
    initTestimonialsComponent();
}
