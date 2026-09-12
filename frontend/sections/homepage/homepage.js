/**
 * ============================================================
 * CamneX Bangladesh
 * Homepage
 * Version: 1.0
 * ============================================================
 */

"use strict";

document.addEventListener("DOMContentLoaded", async () => {

    await loadComponent(
        "#header",
        "../header/index.html"
    );

    await loadComponent(
        "#hero",
        "../hero/index.html"
    );

    await loadComponent(
        "#solutions",
        "../solutions/index.html"
    );

    await loadComponent(
    "#bundles",
    "../bundles/index.html"
    );

    await loadComponent(
    "#categories",
    "../categories/index.html"
    );

    await loadComponent(
    "#products",
    "../products/index.html"
    );

    await loadComponent(
    "#why-us",
    "../why-us/index.html"
    );  

    await loadComponent(
    "#projects",
    "../projects/index.html"
    );
    
    await loadComponent(
    "#brands",
    "../brands/index.html"
    );

    await loadComponent(
    "#reviews",
    "../reviews/index.html"
    );

    await loadComponent(
    "#cta",
    "../cta/index.html"
    );

    await loadComponent(
    "#footer",
    "../footer/index.html"
);
    
});

async function loadComponent(target, file){

    const element = document.querySelector(target);

    if(!element) return;    

    const response = await fetch(file);

    element.innerHTML = await response.text();

}