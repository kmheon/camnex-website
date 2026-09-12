"use strict";

/**
 * ========================================================
 * DATA: Popular Products WooCommerce-Ready Array
 * FILE PATH MATCH: frontend/features/featured-products/data.js
 * ========================================================
 *
 * brandSlug maps to assets/brands/{slug}.svg for the card's brand
 * logo mark. If that file doesn't exist yet, the card falls back
 * to a styled text wordmark automatically — same drop-in pattern
 * used elsewhere in the CamneX build, so nothing looks broken
 * before real logo assets are added.
 */

const cxProductsData = [
    {
        id: "prod-01",
        title: "Hikvision ColorVu 3.0 4MP Outdoor Bullet Camera",
        category: "CCTV",
        brand: "Hikvision",
        brandSlug: "hikvision",
        image: "https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 6,500",
        sale_price: "৳ 5,800",
        features: [
            { icon: "sun", label: "24/7 Color" },
            { icon: "cpu", label: "AI Detect" },
            { icon: "shield", label: "IP67" }
        ],
        badge: "Best Seller",
        stock_status: "In Stock",
        product_url: "/product/hikvision-colorvu-3-0"
    },
    {
        id: "prod-02",
        title: "Ruijie Reyee 8-Port Gigabit PoE Switch",
        category: "Networking",
        brand: "Ruijie",
        brandSlug: "ruijie",
        image: "https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 4,800",
        sale_price: "৳ 4,200",
        features: [
            { icon: "zap", label: "PoE+ Ports" },
            { icon: "cloud", label: "Cloud Managed" },
            { icon: "shield-alert", label: "Surge Safe" }
        ],
        badge: "Enterprise",
        stock_status: "In Stock",
        product_url: "/product/ruijie-reyee-poe-switch"
    },
    {
        id: "prod-03",
        title: "Hikvision Face Recognition Biometric Terminal",
        category: "Access Control",
        brand: "Hikvision",
        brandSlug: "hikvision",
        image: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 22,000",
        sale_price: "৳ 19,500",
        features: [
            { icon: "user-check", label: "0.2s Fast ID" },
            { icon: "lock", label: "Anti-Spoof" },
            { icon: "users", label: "50k Capacity" }
        ],
        badge: "Secure",
        stock_status: "Limited Stock",
        product_url: "/product/hikvision-face-terminal"
    },
    {
        id: "prod-04",
        title: "EZVIZ 2K Wireless Smart Video Doorbell",
        category: "Smart Home",
        brand: "EZVIZ",
        brandSlug: "ezviz",
        image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 6,200",
        sale_price: "৳ 5,500",
        features: [
            { icon: "video", label: "2K UHD" },
            { icon: "mic", label: "Two-Way Talk" },
            { icon: "wifi", label: "Wi-Fi 6" }
        ],
        badge: "Smart",
        stock_status: "In Stock",
        product_url: "/product/ezviz-smart-doorbell"
    },
    {
        id: "prod-05",
        title: "Dahua 4CH WizSense Network Video Recorder",
        category: "CCTV",
        brand: "Dahua",
        brandSlug: "dahua",
        image: "https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 8,500",
        sale_price: "৳ 7,600",
        features: [
            { icon: "hard-drive", label: "4K Support" },
            { icon: "cpu", label: "SMD Plus" },
            { icon: "activity", label: "H.265+" }
        ],
        badge: "Popular",
        stock_status: "In Stock",
        product_url: "/product/dahua-4ch-nvr"
    },
    {
        id: "prod-06",
        title: "MikroTik hEX S Gigabit Enterprise Router",
        category: "Networking",
        brand: "MikroTik",
        brandSlug: "mikrotik",
        image: "https://images.unsplash.com/photo-1750710583720-8b3bdd0f658a?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 7,500",
        sale_price: "৳ 6,900",
        features: [
            { icon: "server", label: "SFP Port" },
            { icon: "shield", label: "IPsec Hardware" },
            { icon: "cpu", label: "Dual-Core" }
        ],
        badge: "Pro Grade",
        stock_status: "Pre Order",
        product_url: "/product/mikrotik-hex-s"
    },
    {
        id: "prod-07",
        title: "TP-Link Omada Gigabit Ceiling Mount Access Point",
        category: "Networking",
        brand: "TP-Link",
        brandSlug: "tplink",
        image: "https://images.unsplash.com/photo-1750711731797-25c3f2551ff8?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 9,200",
        sale_price: "৳ 8,400",
        features: [
            { icon: "wifi", label: "AX1800 Wi-Fi 6" },
            { icon: "cloud", label: "Omada Cloud" },
            { icon: "zap", label: "PoE Powered" }
        ],
        badge: "High Speed",
        stock_status: "In Stock",
        product_url: "/product/tp-link-omada-ap"
    },
    {
        id: "prod-08",
        title: "Imou Ranger 2 1080P WiFi PTZ Camera",
        category: "Smart Home",
        brand: "Imou",
        brandSlug: "imou",
        image: "https://images.unsplash.com/photo-1633194883650-df448a10d554?auto=format&fit=crop&w=900&q=85",
        regular_price: "৳ 3,500",
        sale_price: "৳ 2,990",
        features: [
            { icon: "move", label: "360° PTZ" },
            { icon: "volume-2", label: "Tracking" },
            { icon: "eye", label: "Night Vision" }
        ],
        badge: "Best Value",
        stock_status: "In Stock",
        product_url: "/product/imou-ranger-2"
    }
];