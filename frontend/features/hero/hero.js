"use strict";

/**
 * ========================================================
 * COMPONENT: CamneX Bangladesh — Product-First Launch Hero
 * Frontend Feature JavaScript
 * ========================================================
 */

const HERO_PRODUCTS = [
    {
        badge: "NEW ARRIVAL",
        category: "CCTV & Video Surveillance",
        pretitle: "Meet the New",
        title: "Hikvision ColorVu Camera",
        desc: "Advanced color night vision, AI detection and reliable 24/7 surveillance for modern security.",
        primaryCtaText: "View Product",
        primaryCtaUrl: "/category/cctv-cameras",
        specs: [
            { val: "2MP", lbl: "Resolution" },
            { val: "ColorVu", lbl: "Night Vision" },
            { val: "AI Detection", lbl: "Smart Analytics" },
            { val: "30m", lbl: "IR Range" }
        ],
        image: "../../assets/products/cctv-bullet-transparent.png",
        themeImage: "assets/products/cctv-bullet-transparent.png",
        alt: "Hikvision ColorVu Camera"
    },
    {
        badge: "FEATURED LAUNCH",
        category: "Access Control & Time Attendance",
        pretitle: "Next-Gen Security",
        title: "SpeedFace Touchless Terminal",
        desc: "Sub-second 3D liveness facial recognition and palm authentication with automated shift attendance tracking.",
        primaryCtaText: "View Product",
        primaryCtaUrl: "/category/access-control",
        specs: [
            { val: "<0.2s", lbl: "Verify Speed" },
            { val: "Dual-Lens IR", lbl: "Anti-Spoofing" },
            { val: "5,000 Faces", lbl: "Face Capacity" },
            { val: "Automated", lbl: "Shift Payroll" }
        ],
        image: "../../assets/products/face-terminal-transparent.png",
        themeImage: "assets/products/face-terminal-transparent.png",
        alt: "SpeedFace Touchless Biometric Terminal"
    },
    {
        badge: "ENTERPRISE NETWORK",
        category: "Enterprise Networking",
        pretitle: "Power & Speed",
        title: "Reyee Cloud 24-Port PoE+ Switch",
        desc: "370W high-budget gigabit PoE+ with zero-configuration cloud management and 250m long-distance transmission.",
        primaryCtaText: "View Product",
        primaryCtaUrl: "/category/networking-equipment",
        specs: [
            { val: "370W", lbl: "PoE+ Budget" },
            { val: "Gigabit", lbl: "24-Port Matrix" },
            { val: "Cloud App", lbl: "Zero-Touch" },
            { val: "250m", lbl: "Long Reach PoE" }
        ],
        image: "../../assets/products/poe-switch-transparent.png",
        themeImage: "assets/products/poe-switch-transparent.png",
        alt: "Ruijie Reyee Cloud Managed PoE+ Switch"
    },
    {
        badge: "SMART SECURITY",
        category: "Video Intercom & Smart Home",
        pretitle: "Smart Front-Door",
        title: "EZVIZ 2K Video Doorbell",
        desc: "Ultra-wide 2K crystal video with two-way talk, PIR motion human detection, and instant phone alert notifications.",
        primaryCtaText: "View Product",
        primaryCtaUrl: "/category/video-intercom",
        specs: [
            { val: "2K UHD", lbl: "Crystal Video" },
            { val: "PIR Sensor", lbl: "Human Detect" },
            { val: "Two-Way", lbl: "Full Duplex" },
            { val: "Dual-Band", lbl: "2.4G & 5G WiFi" }
        ],
        image: "../../assets/products/smart-doorbell-transparent.png",
        themeImage: "assets/products/smart-doorbell-transparent.png",
        alt: "EZVIZ 2K Smart Video Doorbell"
    }
];

class HeroComponent {
    constructor() {
        this.currentIndex = 0;
        this.products = HERO_PRODUCTS;
        this.autoPlayInterval = null;
        this.isPaused = false;
        this.isWordPress = (typeof window.wp !== "undefined") || window.location.pathname.includes("/wp-") || document.body.classList.contains("wordpress");

        this.init();
    }

    init() {
        this.cacheDom();
        if (!this.heroSection) return;

        this.bindEvents();
        this.renderProduct(0, false);
        this.initGsapEntrance();
        this.startAutoPlay();
    }

    initGsapEntrance() {
        const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReducedMotion) return;

        const animateElements = () => {
            if (typeof window.gsap === "undefined") return;

            const eyebrow = this.heroSection.querySelector(".cx-hero-eyebrow");
            const headlineGroup = this.heroSection.querySelector(".cx-hero-headline-group");
            const desc = this.heroSection.querySelector(".cx-hero-desc");
            const ctaGroup = this.heroSection.querySelector(".cx-hero-actions");
            const visual = this.heroSection.querySelector(".cx-hero-image");
            const specsRail = this.heroSection.querySelector(".cx-hero-specs-rail");
            const nav = this.heroSection.querySelector(".cx-hero-nav");

            const tl = window.gsap.timeline({
                defaults: {
                    ease: "power2.out"
                }
            });

            if (eyebrow) {
                tl.fromTo(eyebrow, 
                    { opacity: 0, y: 12 }, 
                    { opacity: 1, y: 0, duration: 0.5 }, 
                    0.05
                );
            }

            if (headlineGroup) {
                tl.fromTo(headlineGroup, 
                    { opacity: 0, y: 20 }, 
                    { opacity: 1, y: 0, duration: 0.65, ease: "power2.out" }, 
                    0.15
                );
            }

            if (desc) {
                tl.fromTo(desc, 
                    { opacity: 0, y: 12 }, 
                    { opacity: 1, y: 0, duration: 0.55 }, 
                    0.28
                );
            }

            if (ctaGroup) {
                tl.fromTo(ctaGroup, 
                    { opacity: 0, y: 14 }, 
                    { opacity: 1, y: 0, duration: 0.55, ease: "power2.out" }, 
                    0.38
                );
            }

            if (visual) {
                tl.fromTo(visual, 
                    { opacity: 0, y: 18, scale: 0.95 }, 
                    { opacity: 1, y: 0, scale: 1, duration: 0.75, ease: "power2.out" }, 
                    0.2
                );
            }

            if (specsRail) {
                tl.fromTo(specsRail, 
                    { opacity: 0, x: 14 }, 
                    { opacity: 1, x: 0, duration: 0.6, ease: "power2.out" }, 
                    0.32
                );
            }

            if (nav) {
                tl.fromTo(nav, 
                    { opacity: 0, y: 10 }, 
                    { opacity: 1, y: 0, duration: 0.5 }, 
                    0.55
                );
            }
        };

        if (typeof window.gsap !== "undefined") {
            animateElements();
        } else {
            const script = document.createElement("script");
            script.src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js";
            script.onload = () => animateElements();
            document.head.appendChild(script);
        }
    }

    cacheDom() {
        this.heroSection = document.getElementById("camnexHero");
        if (!this.heroSection) return;

        this.badgeEl = document.getElementById("heroBadge");
        this.categoryEl = document.getElementById("heroCategory");
        this.pretitleEl = document.getElementById("heroPretitle");
        this.titleEl = document.getElementById("heroTitle");
        this.descEl = document.getElementById("heroDesc");
        this.specsRail = document.getElementById("heroSpecsRail");
        this.primaryCta = document.getElementById("heroPrimaryCta");
        this.primaryCtaText = document.getElementById("heroPrimaryCtaText");
        this.productImg = document.getElementById("heroProductImg");
        this.navButtons = this.heroSection.querySelectorAll(".cx-hero-nav-btn");
    }

    bindEvents() {
        this.navButtons.forEach((btn, index) => {
            btn.addEventListener("click", () => {
                this.goToSlide(index);
                this.resetAutoPlay();
            });
        });

        this.heroSection.addEventListener("mouseenter", () => {
            this.isPaused = true;
        });

        this.heroSection.addEventListener("mouseleave", () => {
            this.isPaused = false;
        });

        this.heroSection.addEventListener("keydown", (e) => {
            if (e.key === "ArrowRight") {
                this.nextSlide();
                this.resetAutoPlay();
            } else if (e.key === "ArrowLeft") {
                this.prevSlide();
                this.resetAutoPlay();
            }
        });
    }

    goToSlide(index) {
        if (index === this.currentIndex || index < 0 || index >= this.products.length) return;
        this.currentIndex = index;
        this.renderProduct(this.currentIndex, true);
    }

    nextSlide() {
        const next = (this.currentIndex + 1) % this.products.length;
        this.goToSlide(next);
    }

    prevSlide() {
        const prev = (this.currentIndex - 1 + this.products.length) % this.products.length;
        this.goToSlide(prev);
    }

    renderProduct(index, animate = true) {
        const p = this.products[index];
        if (!p) return;

        this.navButtons.forEach((btn, idx) => {
            const isActive = (idx === index);
            btn.classList.toggle("active", isActive);
            btn.setAttribute("aria-selected", isActive ? "true" : "false");
            if (isActive) btn.focus({ preventScroll: true });
        });

        let imgSrc = p.image;
        if (this.isWordPress && window.CAMNEX_THEME_URI) {
            imgSrc = window.CAMNEX_THEME_URI + "/" + p.themeImage;
        }

        const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (animate && !prefersReducedMotion && this.productImg) {
            this.productImg.classList.add("cx-fade-out");
            setTimeout(() => {
                this.applyData(p, imgSrc);
                this.productImg.classList.remove("cx-fade-out");
            }, 200);
        } else {
            this.applyData(p, imgSrc);
        }
    }

    applyData(p, imgSrc) {
        if (this.badgeEl) this.badgeEl.textContent = p.badge;
        if (this.categoryEl) this.categoryEl.textContent = p.category;
        if (this.pretitleEl) this.pretitleEl.textContent = p.pretitle;
        if (this.titleEl) this.titleEl.textContent = p.title;
        if (this.descEl) this.descEl.textContent = p.desc;

        if (this.primaryCta) this.primaryCta.setAttribute("href", p.primaryCtaUrl);
        if (this.primaryCtaText) this.primaryCtaText.textContent = p.primaryCtaText;

        // Render compact vertical specs rail
        if (this.specsRail && p.specs && p.specs.length > 0) {
            this.specsRail.innerHTML = p.specs.map(spec => `
                <div class="cx-spec-rail-item">
                    <div class="cx-spec-rail-head">
                        <span class="cx-spec-dot" aria-hidden="true">●</span>
                        <span class="cx-spec-rail-val">${spec.val}</span>
                    </div>
                    <span class="cx-spec-rail-lbl">${spec.lbl}</span>
                </div>
            `).join("");
        }

        if (this.productImg) {
            this.productImg.src = imgSrc;
            this.productImg.alt = p.alt;
        }
    }

    startAutoPlay() {
        this.stopAutoPlay();
        this.autoPlayInterval = setInterval(() => {
            if (!this.isPaused && document.visibilityState === "visible") {
                this.nextSlide();
            }
        }, 5000);
    }

    stopAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
    }

    resetAutoPlay() {
        this.startAutoPlay();
    }
}

window.initHeroComponent = function() {
    return new HeroComponent();
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => {
        if (document.getElementById("camnexHero")) {
            window.initHeroComponent();
        }
    });
} else {
    if (document.getElementById("camnexHero")) {
        window.initHeroComponent();
    }
}
