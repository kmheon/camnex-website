/**
 * ============================================================
 * CamneX Bangladesh
 * Shop by Category
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".cx-category-card");

    cards.forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave", () => {

            card.classList.remove("hover-lift");

        });

    });

});