/**
 * ============================================================
 * CamneX Bangladesh
 * Solutions Section
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".cx-solution-card");

    cards.forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave", () => {

            card.classList.remove("hover-lift");

        });

    });

});