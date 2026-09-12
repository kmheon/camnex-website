"use strict";

/**
 * ========================================================
 * COMPONENT: CamneX Hero JS
 * FILE PATH MATCH: frontend/features/hero/hero.js
 * ========================================================
 *
 * Product images: point at local transparent PNGs under
 * assets/products/. Drop the real official cutout in at that
 * path and it's picked up automatically. Until it exists, a
 * photographic fallback is shown (framed as a photo, not a
 * floating cutout) so nothing looks broken.
 */

const SWITCH_MS = 500; // must match --cx-speed in hero.css

const ICONS = {
    camera: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 8a2 2 0 0 1 2-2h2l2-2h4l2 2h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2Z"/><circle cx="12" cy="13" r="3.5"/></svg>',
    network: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="5" rx="1.5"/><rect x="3" y="15" width="18" height="5" rx="1.5"/><path d="M7 9v6M17 9v6"/></svg>',
    fingerprint: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0-6 6c0 3.5-1 6-2 8"/><path d="M12 3a6 6 0 0 1 6 6c0 1.5.1 2.7.3 3.7"/><path d="M9 21c.7-1.5 1-3 1-6a2 2 0 1 1 4 0c0 1 0 1.7-.1 2.3"/><path d="M6 21a13 13 0 0 0 1.5-6 4.5 4.5 0 0 1 9 0c0 .8 0 1.5.1 2.2"/></svg>',
    home: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 9-8 9 8"/><path d="M5 10v10h14V10"/></svg>',
    cloud: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.4-1.5A4.5 4.5 0 0 0 6.5 19h11Z"/></svg>',
    mic: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 10a7 7 0 0 0 14 0"/><path d="M12 19v3"/></svg>',
    scanFace: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><path d="M9 10v1M15 10v1"/><path d="M9 15c.7.7 1.7 1 3 1s2.3-.3 3-1"/></svg>',
    lock: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="10" width="16" height="10" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></svg>',
    video: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="14" height="12" rx="2"/><path d="m22 8-6 4 6 4Z"/></svg>'
};

const heroCampaigns = [
    {
        tabLabel: "CCTV",
        tabIcon: "camera",
        eyebrow: "New Arrival",
        title: "Hikvision ColorVu 3.0",
        subtitle: "Full Color Security Camera",
        checklist: [
            "24/7 Full Color Imaging",
            "AI Human & Vehicle Detection",
            "Active Deterrence with Audio",
            "IP67 Weatherproof",
            "Remote Monitoring"
        ],
        exploreText: "Explore CCTV",
        warrantyYears: "5",
        productImg: "../../assets/products/cctv-bullet-transparent.webp",
        fallbackImg: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=1000&q=80",
        chips: [
            { variant: "icon-top", icon: "colorwheel", l1: "ColorVu", l2: "" },
            { variant: "plain", l1: "4K", l2: "UHD" },
            { variant: "plain", l1: "AI", l2: "Detection" },
            { variant: "plain", l1: "IP67", l2: "Weatherproof" },
            { variant: "icon-left", icon: "mic", l1: "Audio", l2: "Built-in Mic" }
        ]
    },
    {
        tabLabel: "Networking",
        tabIcon: "network",
        eyebrow: "Enterprise Grade",
        title: "Ruijie Reyee Switch",
        subtitle: "Enterprise Cloud Switch",
        checklist: [
            "Gigabit PoE+ Ports",
            "Cloud Managed Setup",
            "Zero-Touch Deployment",
            "Built-in Surge Protection",
            "99.9% Uptime SLA"
        ],
        exploreText: "Explore Networking",
        warrantyYears: "5",
        productImg: "../../assets/placeholders/Networking.png",
        fallbackImg: "https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=1000&q=80",
        chips: [
            { variant: "icon-top", icon: "cloud", l1: "ReyeeCloud", l2: "" },
            { variant: "plain", l1: "24", l2: "Ports" },
            { variant: "plain", l1: "PoE+", l2: "802.3at" },
            { variant: "plain", l1: "99.9%", l2: "Uptime" },
            { variant: "icon-left", icon: "lock", l1: "Surge", l2: "Protected" }
        ]
    },
    {
        tabLabel: "Access Control",
        tabIcon: "fingerprint",
        eyebrow: "Best Seller",
        title: "ZKTeco Face Terminal",
        subtitle: "AI Facial Recognition Terminal",
        checklist: [
            "0.2s Facial Verification",
            "50,000 User Capacity",
            "Deep Learning Anti-Spoofing",
            "Touchless Attendance Logs",
            "Remote Door Management"
        ],
        exploreText: "Explore Access Control",
        warrantyYears: "2",
        productImg: "../../assets/placeholders/Access Control.jpg",
        fallbackImg: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1000&q=80",
        chips: [
            { variant: "icon-top", icon: "scanFace", l1: "FaceID", l2: "" },
            { variant: "plain", l1: "0.2s", l2: "Match Speed" },
            { variant: "plain", l1: "50K", l2: "Users" },
            { variant: "plain", l1: "IP65", l2: "Rated" },
            { variant: "icon-left", icon: "lock", l1: "Anti", l2: "Spoofing" }
        ]
    },
    {
        tabLabel: "Smart Home",
        tabIcon: "home",
        eyebrow: "Smart Choice",
        title: "EZVIZ Smart Doorbell",
        subtitle: "2K Smart Video Doorbell",
        checklist: [
            "2K Ultra-HD Resolution",
            "Two-Way Talk & Voice Changer",
            "Smart PIR Motion Detection",
            "Encrypted Cloud Storage",
            "Instant Mobile Alerts"
        ],
        exploreText: "Explore Smart Home",
        warrantyYears: "2",
        productImg: "../../assets/placeholders/Smart Home.jpg",
        fallbackImg: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=1000&q=80",
        chips: [
            { variant: "icon-top", icon: "video", l1: "EZVIZ App", l2: "" },
            { variant: "plain", l1: "2K", l2: "Ultra HD" },
            { variant: "plain", l1: "PIR", l2: "Motion" },
            { variant: "plain", l1: "IP65", l2: "Weatherproof" },
            { variant: "icon-left", icon: "cloud", l1: "Cloud", l2: "Storage" }
        ]
    }
];

const partnerBrands = [
    { name: "HIKVISION", slug: "hikvision", file: "hikvision.png" },
    { name: "Dahua", slug: "dahua", file: "dahua.png" },
    { name: "EZVIZ", slug: "ezviz", file: "Ezviz.png" },
    { name: "RUIJIE", slug: "ruijie", file: "ruijie.png" },
    { name: "tp-link", slug: "tp-link", file: "tp-link.png" },
    { name: "MikroTik", slug: "mikrotik", file: "mikrotik.png" }
];

let activeIndex = 0;
let isAnimating = false;
let autoTimer = null;
let initialized = false;
let interactivityBound = false;
const AUTO_INTERVAL = 6500;

/* ---------------- Tab bar ---------------- */

const buildTabbar = () => {
    const bar = document.getElementById("heroTabbar");
    if (!bar) return;
    bar.innerHTML = "";
    heroCampaigns.forEach((c, idx) => {
        const btn = document.createElement("button");
        btn.type = "button";
        btn.className = "cx-tab" + (idx === 0 ? " active" : "");
        btn.setAttribute("role", "tab");
        btn.setAttribute("aria-selected", idx === 0 ? "true" : "false");
        btn.dataset.index = String(idx);
        btn.innerHTML = `${ICONS[c.tabIcon] || ""}<span>${c.tabLabel}</span>`;
        bar.appendChild(btn);
    });
};

/* ---------------- Chip rendering ---------------- */

const renderChipIcon = (chip) => {
    if (chip.icon === "colorwheel") {
        return '<span class="cx-chip-colorwheel"></span>';
    }
    if (chip.icon && ICONS[chip.icon]) {
        return `<span class="cx-chip-icon">${ICONS[chip.icon]}</span>`;
    }
    return "";
};

const renderChips = (campaign) => {
    const row = document.getElementById("chipRow");
    if (!row) return;
    row.innerHTML = "";
    campaign.chips.forEach((chip) => {
        const card = document.createElement("div");
        card.className = "cx-chip variant-" + chip.variant;
        const iconHtml = renderChipIcon(chip);
        const textHtml = `<span class="cx-chip-text"><span class="l1">${chip.l1}</span>${chip.l2 ? `<span class="l2">${chip.l2}</span>` : ""}</span>`;
        card.innerHTML = iconHtml + textHtml;
        row.appendChild(card);
    });
};

/* ---------------- Product stage ---------------- */

const loadProductImage = (campaign) => {
    const wrap = document.getElementById("stageImageWrap");
    const img = document.getElementById("stageImage");
    if (!wrap || !img) return;
    wrap.classList.remove("is-fallback");
    img.onerror = () => {
        img.onerror = null;
        img.src = campaign.fallbackImg;
        wrap.classList.add("is-fallback");
    };
    img.src = campaign.productImg;
    img.alt = campaign.title;
};

/* ---------------- Content ---------------- */

const renderContent = (campaign) => {
    document.getElementById("pEyebrow").textContent = campaign.eyebrow;
    document.getElementById("pTitle").textContent = campaign.title;
    document.getElementById("pSubtitle").textContent = campaign.subtitle;
    document.getElementById("pExploreText").textContent = campaign.exploreText;
    document.getElementById("wbNumber").textContent = campaign.warrantyYears;

    const list = document.getElementById("pChecklist");
    list.innerHTML = "";
    campaign.checklist.forEach((item) => {
        const li = document.createElement("li");
        li.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg><span>' + item + "</span>";
        list.appendChild(li);
    });

    renderChips(campaign);
};

/* ---------------- Orchestration ---------------- */

const applyCampaign = (index) => {
    const campaign = heroCampaigns[index];
    if (!campaign) return;
    renderContent(campaign);
    loadProductImage(campaign);
};

const switchToCampaign = (index) => {
    if (index === activeIndex || isAnimating) return;
    const hero = document.getElementById("camnexHero");
    if (!hero) return;

    isAnimating = true;
    hero.classList.add("is-switching");

    document.querySelectorAll(".cx-tab").forEach((tab, idx) => {
        tab.classList.toggle("active", idx === index);
        tab.setAttribute("aria-selected", idx === index ? "true" : "false");
    });
    activeIndex = index;

    setTimeout(() => {
        applyCampaign(activeIndex);
        hero.classList.remove("is-switching");
        isAnimating = false;
    }, SWITCH_MS);
};

const startAutoRotate = () => {
    stopAutoRotate();
    autoTimer = setInterval(() => {
        switchToCampaign((activeIndex + 1) % heroCampaigns.length);
    }, AUTO_INTERVAL);
};

const stopAutoRotate = () => {
    if (autoTimer) {
        clearInterval(autoTimer);
        autoTimer = null;
    }
};

/* ---------------- Partner logos ---------------- */

const buildPartnerStrip = () => {
    const strip = document.getElementById("partnerStrip");
    if (!strip) return;
    strip.innerHTML = "";
    partnerBrands.forEach((brand) => {
        const wrap = document.createElement("div");
        wrap.className = "cx-partner-logo";

        const img = document.createElement("img");
        img.src = `../../assets/brands/${brand.file}`;
        img.alt = brand.name;
        img.onerror = () => {
            const span = document.createElement("span");
            span.className = "cx-partner-fallback-text";
            span.textContent = brand.name;
            img.replaceWith(span);
        };

        const caption = document.createElement("span");
        caption.className = "cx-partner-caption";
        caption.textContent = "Authorised Partner";

        wrap.appendChild(img);
        wrap.appendChild(caption);
        strip.appendChild(wrap);
    });
};

/* ---------------- Init ---------------- */

const setupHeroInteractivity = () => {
    if (interactivityBound) return;
    interactivityBound = true;

    const bar = document.getElementById("heroTabbar");
    if (bar) {
        bar.addEventListener("click", (e) => {
            const tab = e.target.closest(".cx-tab");
            if (!tab) return;
            stopAutoRotate();
            switchToCampaign(Number(tab.dataset.index));
            startAutoRotate();
        });
    }

    const hero = document.getElementById("camnexHero");
    if (hero) {
        hero.addEventListener("mouseenter", stopAutoRotate);
        hero.addEventListener("mouseleave", startAutoRotate);
    }
};

const initHeroComponent = () => {
    if (initialized) return;
    if (!document.getElementById("camnexHero")) {
        console.warn("[CamneX Hero] #camnexHero not found; skipping init.");
        return;
    }
    initialized = true;
    buildTabbar();
    buildPartnerStrip();
    applyCampaign(0);
    setupHeroInteractivity();
    startAutoRotate();
};

window.initHeroComponent = initHeroComponent;

/*
 * Standalone preview support.
 * In frontend/features/hero/index.html the component markup is already in the
 * DOM when this script runs (script tag sits at the end of body), so the
 * module initializes immediately - no DOMContentLoaded dependency.
 *
 * On the homepage, #camnexHero is mounted asynchronously by the ComponentLoader,
 * so this guard no-ops there and the orchestrator drives init.
 * The initialized + interactivityBound flags make repeated calls harmless.
 */
if (document.getElementById("camnexHero")) {
    initHeroComponent();
}

