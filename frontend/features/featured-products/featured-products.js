"use strict";

/**
 * ========================================================
 * COMPONENT: Featured Products Section JS (Simple Filter Toggle)
 * VERSION: 5.0 (Production Ready)
 * ========================================================
 */

const initializeFeaturedProductIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initCategoryFilters = () => {
    const filterChips = document.querySelectorAll(".cx-filter-chip");
    
    if (filterChips.length === 0) return;

    filterChips.forEach(chip => {
        chip.addEventListener("click", (e) => {
            filterChips.forEach(c => {
                c.classList.remove("active");
                c.setAttribute("aria-selected", "false");
            });
            
            const target = e.currentTarget;
            target.classList.add("active");
            target.setAttribute("aria-selected", "true");
        });
    });
};

const initFeaturedProductsComponent = () => {
    initializeFeaturedProductIcons();
    initCategoryFilters();
};

document.addEventListener("DOMContentLoaded", initFeaturedProductsComponent);