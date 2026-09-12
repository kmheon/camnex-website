/**
 * ============================================================
 * CamneX Bangladesh
 * Recent Projects
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    initializeProjects();

});

function initializeProjects(){

    const cards = document.querySelectorAll(".cx-project-card");

    cards.forEach(card=>{

        card.addEventListener("mouseenter",()=>{

            card.classList.add("hover-lift");

        });

        card.addEventListener("mouseleave",()=>{

            card.classList.remove("hover-lift");

        });

    });

}