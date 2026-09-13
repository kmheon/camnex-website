# Featured Packages

> **Feature ID:** 002  
> **Feature Name:** Featured Packages  
> **Version:** 1.0.0  
> **Status:** Complete  
> **Project:** CamneX Website Design System

---

# Overview

The Featured Packages section showcases CamneX's most popular pre-configured security solution bundles.

Unlike individual products, these packages are designed as complete, ready-to-install solutions for different property types and customer requirements.

This section is intended to increase conversions by highlighting curated security bundles that provide better value than purchasing products individually.

---

# Purpose

Help visitors quickly discover complete security solution packages.

Encourage customers to purchase professionally designed bundles instead of assembling systems manually.

This feature serves as the primary package showcase on the homepage.

---

# Current Features

- Premium homepage layout
- Section Header
- Package Card integration
- Three featured packages
- Responsive grid
- Package badges
- Trust indicators
- Summary feature row
- Ideal For information
- Simplified "What's Included" list
- Package pricing
- Savings badge
- Explore Package CTA
- View All Packages button
- Hover animations
- Responsive layout
- Accessibility improvements

---

# Homepage Rules

To maintain a clean browsing experience, the homepage displays only a curated selection of packages.

Desktop

- 3 Featured Packages

Tablet

- 2 Featured Packages

Mobile

- 1 Featured Package

Visitors can browse all available packages using the **View All Packages** button.

---

# Package Card Integration

This feature reuses the existing Package Card component.

The homepage version is optimized for browsing by displaying a shortened package summary while maintaining the same design language.

The complete package information is available on the Package Details page.

---

# Future Dynamic Data

Each Package Card should support:

- Package Name
- Package Image
- Package Badge
- Marketing Tagline
- Trust Indicators
- Camera Count
- DVR / NVR
- Storage Capacity
- Warranty
- Included Items
- Package Price
- Old Price
- Savings
- Package URL

---

# WooCommerce Ready

Prepared for future integration with:

- Featured Packages
- Best Selling Packages
- Campaign Packages
- Recommended Packages
- Dynamic Package Pricing
- Stock Status
- Promotional Badges

No structural redesign should be required during WooCommerce integration.

---

# Component Dependencies

This feature uses:

- Section Header
- Button
- Package Card

Future integrations may include:

- Carousel / Slider
- AJAX Loading
- Package Filters

---

# Planned Future Features

## Version 1.1

- Package carousel
- Auto-slide
- Swipe support
- Navigation arrows
- Quick comparison

## Version 1.2

- Dynamic package recommendations
- AI package suggestions
- Live availability
- Limited-time offers
- Campaign countdowns

## Version 2.0

- Package customization
- Build Your Own Package
- Compare Packages
- Finance / EMI options
- Installation scheduling

---

# Design Principles

The Featured Packages section follows the CamneX Design System.

Goals:

- Premium presentation
- Solution-first approach
- High perceived value
- Easy scanning
- Consistent visual hierarchy
- Responsive design
- Fast loading
- Reusable architecture

---

# Accessibility

- Semantic HTML5
- Keyboard accessible
- ARIA labels
- Visible focus states
- Lazy-loaded images
- Responsive layout

---

# Browser Support

- Chrome
- Edge
- Firefox
- Safari
- Mobile Browsers

---

# Intended Usage

This feature is intended for:

- Homepage
- Landing Pages
- Campaign Pages
- Seasonal Promotions

---

# Notes

Only a curated selection of packages should be displayed on the homepage.

The purpose of this feature is discovery rather than presenting the complete package catalog.

Detailed package specifications remain on the Package Details page.

This approach keeps the homepage concise while encouraging visitors to explore further.

---

## Asset Specification & Fallback Mapping

Drop future local package photograph assets directly into: `frontend/assets/packages/`

| # | Package Name | Local Target Asset | Recommended Resolution / Aspect Ratio | Active Fallback Reference |
|---|---|---|---|---|
| 1 | 4 Camera Hikvision ColorVu Package | `frontend/assets/packages/pkg-hikvision-colorvu-4cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1557597774-9d273605dfa9`) |
| 2 | 8 Camera Hikvision IP Package | `frontend/assets/packages/pkg-hikvision-ip-8cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1557597774-9d273605dfa9`) |
| 3 | 4 Camera Dahua Full Color Kit | `frontend/assets/packages/pkg-dahua-fullcolor-4cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1584438784894-089d6a62b8fa`) |
| 4 | 16 Camera Commercial CCTV Kit | `frontend/assets/packages/pkg-commercial-cctv-16cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1584438784894-089d6a62b8fa`) |
| 5 | 2 Camera Smart Home WiFi Kit | `frontend/assets/packages/pkg-smarthome-wifi-2cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1557597774-9d273605dfa9`) |
| 6 | 4 Camera Dahua IP System | `frontend/assets/packages/pkg-dahua-ip-4cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1584438784894-089d6a62b8fa`) |
| 7 | 8 Camera Corporate Security Kit | `frontend/assets/packages/pkg-corporate-security-8cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1557597774-9d273605dfa9`) |
| 8 | 32 Camera Industrial CCTV Setup | `frontend/assets/packages/pkg-industrial-cctv-32cam.webp` | 800 × 600 px (4:3 or 1:1) | Unsplash (`photo-1584438784894-089d6a62b8fa`) |

---

# Changelog

## Version 1.0.0

Initial production release.

Completed:

- HTML architecture
- CSS styling
- JavaScript initialization
- Responsive grid
- Package Card integration
- Homepage optimization
- Trust indicators
- Simplified package highlights
- Pricing section
- CTA integration
- WooCommerce-ready structure
- Dynamic-ready architecture