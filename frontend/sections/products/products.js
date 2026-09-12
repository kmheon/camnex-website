/**
 * ============================================================
 * CamneX Bangladesh
 * Featured Products
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    initializeProductCards();

});

function initializeProductCards(){

    const cards = document.querySelectorAll(".cx-product-card");

    cards.forEach(card=>{

        card.addEventListener("mouseenter",()=>{

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave",()=>{

            card.classList.remove("hover-lift");

        });

    });

}