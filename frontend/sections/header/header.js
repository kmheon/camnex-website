/**
 * ============================================================
 * CamneX Bangladesh
 * Header v1.0
 * ============================================================
 */

"use strict";

const header = document.querySelector(".cx-header");

let lastScroll = 0;

window.addEventListener("scroll", () => {

    const currentScroll = window.scrollY;

    if (currentScroll > 40) {

        header.classList.add("is-sticky");

    } else {

        header.classList.remove("is-sticky");

    }

    lastScroll = currentScroll;

});