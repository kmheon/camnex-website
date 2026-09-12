"use strict";

/**
 * ========================================================
 * COMPONENT: Customer Testimonials Section JS
 * FILE PATH MATCH: features/customer-testimonials/customer-testimonials.js
 * ========================================================
 */

const initializeTestimonialIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initTestimonialsComponent = () => {
    initializeTestimonialIcons();
};

window.initTestimonialsComponent = initTestimonialsComponent;
