/**
 * ============================================================
 * CamneX Bangladesh
 * Customer Reviews
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    initializeReviews();

});

function initializeReviews(){

    const cards = document.querySelectorAll(".cx-review-card");

    cards.forEach(card=>{

        card.addEventListener("mouseenter",()=>{

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave",()=>{

            card.classList.remove("hover-lift");

        });

    });

}