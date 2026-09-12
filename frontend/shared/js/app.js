/**
 * ============================================================
 * CamneX Bangladesh
 * Global Application
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", () => {

    console.log("✅ CamneX Frontend Loaded");

    init();

});

function init(){

    initializeTooltips();

    initializeLazyLoading();

    initializeAnimations();

}

function initializeTooltips(){

    // Reserved

}

function initializeLazyLoading(){

    // Reserved

}

function initializeAnimations(){

    const elements = document.querySelectorAll("[data-animate]");

    if(!elements.length) return;

    const observer = new IntersectionObserver((entries)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                entry.target.classList.add("fade-in");

                observer.unobserve(entry.target);

            }

        });

    },{

        threshold:0.15

    });

    elements.forEach(el=>observer.observe(el));

}