"use strict";

/**
 * ========================================================
 * COMPONENT: Header Section JS (Corporate Enterprise Grade)
 * FILE PATH MATCH: components/header/header.js
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
        mobileMenu.setAttribute("aria-hidden", "false");
        mobileOverlay.setAttribute("aria-hidden", "false");
        mobileToggle.setAttribute("aria-expanded", "true");
        document.body.style.overflow = "hidden";

        // Focus close button or first interactive element
        if (mobileClose) {
            mobileClose.focus();
        }
    };

    const closeMenu = (restoreFocus = true) => {
        mobileMenu.classList.remove("active");
        mobileOverlay.classList.remove("active");
        mobileMenu.setAttribute("aria-hidden", "true");
        mobileOverlay.setAttribute("aria-hidden", "true");
        mobileToggle.setAttribute("aria-expanded", "false");
        document.body.style.overflow = "";

        if (restoreFocus && typeof mobileToggle.focus === "function") {
            mobileToggle.focus();
        }
    };

    mobileToggle.addEventListener("click", openMenu);
    if (mobileClose) {
        mobileClose.addEventListener("click", () => closeMenu(true));
    }
    mobileOverlay.addEventListener("click", () => closeMenu(true));

    // Close drawer when any actual navigation link inside is clicked
    mobileMenu.addEventListener("click", (e) => {
        const navLink = e.target.closest("a[href]");
        if (navLink) {
            closeMenu(false);
        }
    });

    // Lightweight focus containment within active mobile menu drawer
    mobileMenu.addEventListener("keydown", (e) => {
        if (e.key !== "Tab" || !mobileMenu.classList.contains("active")) return;

        const focusables = mobileMenu.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const visibleFocusables = Array.from(focusables).filter(
            (el) => !el.hasAttribute("disabled") && el.offsetParent !== null
        );

        if (visibleFocusables.length === 0) return;

        const first = visibleFocusables[0];
        const last = visibleFocusables[visibleFocusables.length - 1];

        if (e.shiftKey) {
            if (document.activeElement === first) {
                e.preventDefault();
                last.focus();
            }
        } else {
            if (document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        }
    });

    // Mobile Products Accordion Toggle
    const prodToggle = document.getElementById("mobileProductsToggle");
    const prodContent = document.getElementById("mobileProductsContent");
    if (prodToggle && prodContent) {
        prodToggle.addEventListener("click", () => {
            prodToggle.classList.toggle("active");
            prodContent.classList.toggle("open");
            const expanded = prodToggle.classList.contains("active");
            prodToggle.setAttribute("aria-expanded", String(expanded));
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
            solToggle.setAttribute("aria-expanded", String(expanded));
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
            brandsToggle.setAttribute("aria-expanded", String(expanded));
        });
    }
};

const setupMegaMenuAria = () => {
    const dropdownParents = document.querySelectorAll(".cx-dropdown");
    dropdownParents.forEach((parent) => {
        const trigger = parent.querySelector(".cx-nav-link[aria-haspopup]");
        if (!trigger) return;

        const setOpen = () => trigger.setAttribute("aria-expanded", "true");
        const setClosed = () => {
            if (!parent.matches(":hover") && !parent.contains(document.activeElement)) {
                trigger.setAttribute("aria-expanded", "false");
            }
        };

        parent.addEventListener("mouseenter", setOpen);
        parent.addEventListener("mouseleave", setClosed);
        parent.addEventListener("focusin", setOpen);
        parent.addEventListener("focusout", () => {
            setTimeout(setClosed, 50);
        });
    });
};

const setupKeyboardAccessibility = () => {
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileOverlay = document.getElementById("mobileOverlay");
            const mobileToggle = document.getElementById("mobileToggle");
            if (mobileMenu && mobileMenu.classList.contains("active")) {
                mobileMenu.classList.remove("active");
                if (mobileOverlay) mobileOverlay.classList.remove("active");
                mobileMenu.setAttribute("aria-hidden", "true");
                if (mobileOverlay) mobileOverlay.setAttribute("aria-hidden", "true");
                if (mobileToggle) mobileToggle.setAttribute("aria-expanded", "false");
                document.body.style.overflow = "";
                if (mobileToggle && typeof mobileToggle.focus === "function") {
                    mobileToggle.focus();
                }
            }
        }
    });
};

const initHeaderComponent = () => {
    const header = document.querySelector(".cx-site-header");
    if (!header || header.dataset.initialized === "true") {
        return;
    }
    header.dataset.initialized = "true";

    initializeHeaderIcons();
    setupStickyHeader();
    setupMobileMenu();
    setupMegaMenuAria();
    setupKeyboardAccessibility();
};

window.initHeaderComponent = initHeaderComponent;

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initHeaderComponent);
} else {
    initHeaderComponent();
}