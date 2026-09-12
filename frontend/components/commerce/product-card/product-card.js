"use strict";

/**
 * ========================================================
 * COMPONENT: Product Card
 * VERSION: 5.0 (JavaScript Revision v2)
 * ========================================================
 */

const initializeIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

const initializeWishlist = () => {
    document.addEventListener("click", (event) => {
        const wishlistBtn = event.target.closest(".cx-product-wishlist");
        
        if (wishlistBtn) {
            event.preventDefault();
            
            const isActive = wishlistBtn.classList.toggle("is-active");
            wishlistBtn.classList.toggle("active", isActive);
            
            wishlistBtn.setAttribute("aria-pressed", isActive.toString());
        }
    });
};

const initializeButtons = () => {
    // Placeholder for future standard button interactions
};

const initializeQuickView = () => {
    // Placeholder for Quick View UI logic (Phase 2)
};

const initializeAddToCart = () => {
    // Placeholder for Add to Cart UI logic (Phase 2)
};

const initializeCompare = () => {
    // Placeholder for Compare UI logic (Phase 2)
};

const initializeCard = () => {
    initializeIcons();
    initializeWishlist();
    initializeButtons();
    
    // initializeQuickView();
    // initializeAddToCart();
    // initializeCompare();
};

document.addEventListener("DOMContentLoaded", initializeCard);