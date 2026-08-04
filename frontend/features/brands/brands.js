/**
 * ============================================================
 * CamneX Bangladesh
 * Brands
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    initializeBrands();

});

function initializeBrands(){

    const cards = document.querySelectorAll(".cx-brand-card");

    cards.forEach(card=>{

        card.addEventListener("mouseenter",()=>{

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave",()=>{

            card.classList.remove("hover-lift");

        });

    });

}