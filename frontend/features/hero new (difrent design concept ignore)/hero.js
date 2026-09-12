"use strict";

/**
 * ========================================================
 * COMPONENT: Immersive Image Hero JS (Fully Functional Slide Data & Watermarks)
 * FILE PATH MATCH: frontend/features/hero/hero.js
 * ========================================================
 */

const initializeHeroIcons = () => {
    if (window.lucide) {
        lucide.createIcons();
    }
};

// Tabs are generated FROM this array, so labels/content/images can never
// go out of sync with each other (that mismatch was the original bug).
const heroCampaignSlides = [
    {
        tabLabel: "CCTV",
        topDesc: "Bangladesh's Trusted Technology Partner. CamneX delivers high-performance security solutions.",
        headline: "Hikvision ColorVu 3.0",
        subtext: "24/7 Full Color Imaging, AI Human & Vehicle Detection, Active Deterrence with Audio, and IP67 Weatherproof.",
        watermark: "CCTV",
        bgImg: "https://www.hikvision.com/content/dam/hikvision/eu/product/ip-products/network/colorvu-3-0/Pro%20Series%20with%20ColorVu%203.0-Landing%20Page%20Banner%201920x640%20px.jpg"
    },
    {
        tabLabel: "AI Cameras",
        topDesc: "Next-generation perception. CamneX brings deep-learning vision to everyday surveillance.",
        headline: "Dahua WizSense AI Camera",
        subtext: "Real-Time Perimeter Protection, AI-Powered Human & Vehicle Classification, False-Alarm Reduction, and Starlight Low-Light Imaging.",
        watermark: "AI VISION",
        bgImg: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMXBV2JVk8SbygIpVggqxC73OnAYfXaDZjOtRxUvTZtJ4f8cylBOtDSU0&s=10"
    },
    {
        tabLabel: "Networking",
        topDesc: "Enterprise Network Infrastructure engineered for zero-latency operations and maximum uptime.",
        headline: "Ruijie Reyee Switch",
        subtext: "Gigabit PoE+ Ports, Cloud Managed & Zero-Touch Setup, Built-in Surge Protection, and Enterprise Uptime.",
        watermark: "NETWORKING",
        bgImg: "https://eo-sgp-cos.ruijie.com/res/UIB/v5.0/RuijieProduct/reyee/NBF2100S/RJ-img/img08.webp"
    },
    {
        tabLabel: "Access Control",
        topDesc: "Advanced access control and time attendance systems designed to secure corporate perimeters.",
        headline: "Face Recognition Terminal",
        subtext: "Deep Learning Anti-Spoofing, Rapid 0.2s Facial Verification, 50,000 User Capacity, and Centralized Logs.",
        watermark: "ACCESS CONTROL",
        bgImg: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAy1y_cwCvTw8j2nypPooxE3Xa0hqoZrZYn16EkmBMsDh_uklSwqB6zNk&s=10"
    },
    {
        tabLabel: "Smart Home",
        topDesc: "Smart home automation and security systems bringing intelligent control to modern living spaces.",
        headline: "EZVIZ Smart Doorbell",
        subtext: "2K Ultra-HD Resolution, Two-Way Talk with Voice Changer, Smart PIR Motion Detection, and Cloud Storage.",
        watermark: "SMART HOME",
        bgImg: "https://www.rspl.ie/images/news-images/ezviz%20banner%201.jpg?nocache=105812&action=download"
    }
];

let slideTimer = null;
const slideInterval = 7000; // 7 seconds per slide
let currentSlideIndex = 0;

// Warm the browser cache so each slide's background pops in instantly
// instead of loading late and looking broken.
const preloadSlideImages = () => {
    heroCampaignSlides.forEach((slide) => {
        const img = new Image();
        img.src = slide.bgImg;
    });
};

// Build the bottom tab bar straight from heroCampaignSlides so there's
// always exactly one tab per slide, in the same order, with matching labels.
const buildHeroTabs = () => {
    const tabsContainer = document.getElementById("heroTabsBar");
    if (!tabsContainer) return;

    tabsContainer.innerHTML = "";
    heroCampaignSlides.forEach((slide, idx) => {
        const btn = document.createElement("button");
        btn.type = "button";
        btn.className = "cx-banner-tab" + (idx === 0 ? " active" : "");
        btn.setAttribute("role", "tab");
        btn.setAttribute("aria-selected", idx === 0 ? "true" : "false");
        btn.dataset.index = String(idx);
        btn.textContent = slide.tabLabel;
        tabsContainer.appendChild(btn);
    });
};

const updateHeroSlide = (index) => {
    const tabs = document.querySelectorAll(".cx-banner-tab");
    const banner = document.getElementById("imageBanner");
    const bgImg = document.getElementById("bannerBgImg");
    const data = heroCampaignSlides[index];
    if (!banner || !bgImg || !data) return;

    currentSlideIndex = index;

    tabs.forEach((tab, idx) => {
        tab.classList.toggle("active", idx === index);
        tab.setAttribute("aria-selected", idx === index ? "true" : "false");
    });

    banner.classList.remove("active-anim");
    bgImg.classList.remove("active");

    setTimeout(() => {
        const topDescEl = document.getElementById("bannerTopDesc");
        const headlineEl = document.getElementById("bannerHeadline");
        const subtextEl = document.getElementById("bannerSubtext");
        const watermarkEl = document.getElementById("bannerWatermark");

        if (topDescEl) topDescEl.textContent = data.topDesc;
        if (headlineEl) headlineEl.textContent = data.headline;
        if (subtextEl) subtextEl.textContent = data.subtext;
        if (watermarkEl) watermarkEl.textContent = data.watermark;

        bgImg.setAttribute("src", data.bgImg);
        bgImg.setAttribute("alt", data.headline);

        banner.classList.add("active-anim");
        bgImg.classList.add("active");
    }, 350);
};

const startAutoSlide = () => {
    stopAutoSlide();
    slideTimer = setInterval(() => {
        currentSlideIndex = (currentSlideIndex + 1) % heroCampaignSlides.length;
        updateHeroSlide(currentSlideIndex);
    }, slideInterval);
};

const stopAutoSlide = () => {
    if (slideTimer) {
        clearInterval(slideTimer);
        slideTimer = null;
    }
};

const setupHeroInteractivity = () => {
    const banner = document.getElementById("imageBanner");

    // Event delegation: works no matter how many tabs exist.
    const tabsContainer = document.getElementById("heroTabsBar");
    if (tabsContainer) {
        tabsContainer.addEventListener("click", (e) => {
            const tab = e.target.closest(".cx-banner-tab");
            if (!tab) return;
            stopAutoSlide();
            updateHeroSlide(Number(tab.dataset.index));
            startAutoSlide();
        });
    }

    if (banner) {
        banner.addEventListener("mouseenter", stopAutoSlide);
        banner.addEventListener("mouseleave", startAutoSlide);
    }

    updateHeroSlide(0);
    startAutoSlide();
};

const initHeroComponent = () => {
    initializeHeroIcons();
    preloadSlideImages();
    buildHeroTabs();
    setupHeroInteractivity();
};

window.initHeroComponent = initHeroComponent;
