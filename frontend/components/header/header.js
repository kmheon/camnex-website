"use strict";

/**
 * ========================================================
 * COMPONENT: Header Section JS (Corporate Enterprise Grade)
 * FILE PATH MATCH: sections/header/header.js
 * ========================================================
 */

const initializeHeaderIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const setupStickyHeader = () => {
    const header = document.getElementById("siteHeader");
    if (!header) return;

    const handleScroll = () => {
        if (window.scrollY > 40) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    };

    window.addEventListener("scroll", handleScroll, { passive: true });
    handleScroll();
};

const setupMobileMenu = () => {
    const mobileToggle = document.getElementById("mobileToggle");
    const mobileClose = document.getElementById("mobileClose");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileOverlay = document.getElementById("mobileOverlay");

    if (!mobileToggle || !mobileMenu || !mobileOverlay) return;

    const openMenu = () => {
        mobileMenu.classList.add("active");
        mobileOverlay.classList.add("active");
        mobileToggle.setAttribute("aria-expanded", "true");
        document.body.style.overflow = "hidden";
    };

    const closeMenu = () => {
        mobileMenu.classList.remove("active");
        mobileOverlay.classList.remove("active");
        mobileToggle.setAttribute("aria-expanded", "false");
        document.body.style.overflow = "";
    };

    mobileToggle.addEventListener("click", openMenu);
    if (mobileClose) mobileClose.addEventListener("click", closeMenu);
    mobileOverlay.addEventListener("click", closeMenu);

    // Mobile Products Accordion Toggle
    const prodToggle = document.getElementById("mobileProductsToggle");
    const prodContent = document.getElementById("mobileProductsContent");
    if (prodToggle && prodContent) {
        prodToggle.addEventListener("click", () => {
            prodToggle.classList.toggle("active");
            prodContent.classList.toggle("open");
            const expanded = prodToggle.classList.contains("active");
            prodToggle.setAttribute("aria-expanded", expanded);
        });
    }

    // Mobile Solutions Accordion Toggle
    const solToggle = document.getElementById("mobileSolutionsToggle");
    const solContent = document.getElementById("mobileSolutionsContent");
    if (solToggle && solContent) {
        solToggle.addEventListener("click", () => {
            solToggle.classList.toggle("active");
            solContent.classList.toggle("open");
            const expanded = solToggle.classList.contains("active");
            solToggle.setAttribute("aria-expanded", expanded);
        });
    }

    // Mobile Brands Accordion Toggle
    const brandsToggle = document.getElementById("mobileBrandsToggle");
    const brandsContent = document.getElementById("mobileBrandsContent");
    if (brandsToggle && brandsContent) {
        brandsToggle.addEventListener("click", () => {
            brandsToggle.classList.toggle("active");
            brandsContent.classList.toggle("open");
            const expanded = brandsToggle.classList.contains("active");
            brandsToggle.setAttribute("aria-expanded", expanded);
        });
    }
};

const setupKeyboardAccessibility = () => {
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileOverlay = document.getElementById("mobileOverlay");
            if (mobileMenu && mobileMenu.classList.contains("active")) {
                mobileMenu.classList.remove("active");
                mobileOverlay.classList.remove("active");
                document.body.style.overflow = "";
            }
        }
    });
};

const initHeaderComponent = () => {
    initializeHeaderIcons();
    setupStickyHeader();
    setupMobileMenu();
    setupKeyboardAccessibility();
};

document.addEventListener("DOMContentLoaded", initHeaderComponent);