"use strict";

/**
 * ============================================================
 * CamneX Homepage
 * ------------------------------------------------------------
 * Loads reusable components/features and initializes them
 * after their HTML has been injected into the page.
 * ============================================================
 */

document.addEventListener("DOMContentLoaded", async () => {

    if (!window.ComponentLoader) {
        console.error("[CamneX] ComponentLoader is not available.");
        return;
    }

    await ComponentLoader.loadAll([

        {
            container: "#header-root",
            path: "../../components/header/index.html"
        },

        {
            container: "#hero-root",
            path: "../../features/hero/hero.html"
        },

        {
            container: "#shop-category-root",
            path: "../../features/shop-by-category/shop-by-category.html"
        },

        {
            container: "#property-solutions-root",
            path: "../../features/property-solutions/property-solutions.html"
        },

        {
            container: "#featured-packages-root",
            path: "../../features/featured-packages/featured-packages.html"
        },

        {
            container: "#featured-products-root",
            path: "../../features/featured-products/featured-products.html"
        },

        {
            container: "#why-choose-root",
            path: "../../features/why-choose/why-choose.html"
        },

        {
            container: "#brands-root",
            path: "../../features/brands/brands.html"
        },

        {
            container: "#recent-installations-root",
            path: "../../features/recent-installations/recent-installations.html"
        },

        {
            container: "#testimonials-root",
            path: "../../features/customer-testimonials/customer-testimonials.html"
        },

        {
            container: "#final-cta-root",
            path: "../../features/final-cta/final-cta.html"
        },

        {
            container: "#footer-root",
            path: "../../components/footer/index.html"
        }

    ]);

    /*
     * Initialize every feature AFTER its HTML exists.
     */

    if (typeof window.initHeaderComponent === "function") {
        window.initHeaderComponent();
    }

    if (typeof window.initHeroComponent === "function") {
        window.initHeroComponent();
    }

    if (typeof window.initCategoryComponent === "function") {
        window.initCategoryComponent();
    }

    if (typeof window.initPropertyComponent === "function") {
        window.initPropertyComponent();
    }

    if (typeof window.initPackagesComponent === "function") {
        window.initPackagesComponent();
    }

    if (typeof window.initEditorialShowcase === "function") {
        window.initEditorialShowcase();
    }

    if (typeof window.initWhyChooseComponent === "function") {
        window.initWhyChooseComponent();
    }

    if (typeof window.initBrandsComponent === "function") {
        window.initBrandsComponent();
    }

    if (typeof window.initRecentProjectsComponent === "function") {
        window.initRecentProjectsComponent();
    }

    if (typeof window.initTestimonialsComponent === "function") {
        window.initTestimonialsComponent();
    }

    if (typeof window.initFinalCtaComponent === "function") {
        window.initFinalCtaComponent();
    }

    if (typeof window.initFooterComponent === "function") {
        window.initFooterComponent();
    }

    /*
     * Final icon pass.
     */
    if (window.lucide) {
        window.lucide.createIcons();
    }

    console.log("[CamneX] Homepage loaded successfully.");

});