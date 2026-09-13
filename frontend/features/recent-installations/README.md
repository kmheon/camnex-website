# Our Recent Installations

Version: 1.0.0

Status: ✅ Complete (Frozen)

---

## Purpose

The Our Recent Installations section showcases real CamneX projects to build trust through completed work.

Instead of focusing on products, this section demonstrates real-world deployments across residential, commercial, industrial, educational, and healthcare environments.

---

## Files

```
recent-installations/

├── index.html
├── recent-installations.css
├── recent-installations.js
└── README.md
```

---

## Components Used

- Section Header
- Featured Installation Card
- Installation Cards
- Primary Button
- Lucide Icons

---

## Features

- Featured installation showcase
- Installation portfolio grid
- Category badges
- Location display
- Completion date
- Hover animations
- Responsive layout
- View Installation links
- View All Installations CTA
- CMS-ready structure

---

## Installation Categories

- Home
- Office
- Shop
- Factory
- Warehouse
- Apartment
- School
- Hospital

---

## Future CMS Fields

Each installation should support:

- Featured Image
- Gallery
- Title
- Slug
- Category
- Customer Type
- Location
- Completion Date
- Installed Products
- Project Description
- Google Maps
- Customer Testimonial

---

## Responsive Layout

Desktop

- One featured installation
- Three installation cards

Tablet

- One featured installation
- Two-column grid

Mobile

- Single-column layout

---

## Dependencies

Shared CSS

- reset.css
- variables.css
- typography.css
- layout.css

Components

- Section Header
- Primary Button

Libraries

- Lucide Icons

---

## Design Philosophy

Real installations create confidence.

This section focuses on showcasing actual completed work rather than selling products, helping visitors visualize CamneX's expertise and installation quality.

---

## Asset Specifications & Local Asset Replacement

The Recent Installations section supports local CamneX case-study/installation photographs with automated graceful fallbacks to the current Unsplash references until the physical Bangladesh project photographs are placed into `frontend/assets/projects/`.

### Project Asset Mapping

| # | Project Identifier | Location / Category | Target Local Asset | Recommended Specs | Preferred Style | Fallback Reference |
|---|-------------------|-------------------|-------------------|-------------------|----------------|-------------------|
| 1 | `feat-01` | Dhanmondi, Dhaka (Home) | `frontend/assets/projects/proj-dhanmondi-home-cctv.webp` | 1200 × 675 px (16:9) | Real residential CCTV installation photograph | Unsplash Residential CCTV (`photo-1557597774-9d273605dfa9`) |
| 2 | `proj-01` | Banani, Dhaka (Office) | `frontend/assets/projects/proj-banani-office-cctv.webp` | 800 × 500 px (16:10) | Real corporate office CCTV deployment photograph | Unsplash Office Security (`photo-1497366216548-37526070297c`) |
| 3 | `proj-02` | Gazipur Industrial Zone (Factory) | `frontend/assets/projects/proj-gazipur-factory-security.webp` | 800 × 500 px (16:10) | Real factory / industrial CCTV monitoring photograph | Unsplash Factory Security (`photo-1581091226825-a6a2a5aee158`) |
| 4 | `proj-03` | Gulshan-2, Dhaka (Shop) | `frontend/assets/projects/proj-gulshan-retail-cctv.webp` | 800 × 500 px (16:10) | Real retail showroom CCTV installation photograph | Unsplash Retail Security (`photo-1441986300917-64674bd600d8`) |

### Dual-Layer Fallback Architecture

1. **Inline HTML Attributes**: Each `<img>` includes `data-fallback` pointing to the verified Unsplash image and `onerror="this.onerror=null;this.src='...'"` to handle missing local assets immediately without layout shift or broken-image icons.
2. **JavaScript Event Listener**: `recent-installations.js` attaches an error event listener via `setupRecentInstallationImageFallbacks()`, ensuring fallback resilience.
3. **Asset Registry**: `window.RECENT_INSTALLATIONS_ASSET_MAP` provides clean metadata for developer auditing and future WordPress/CMS custom post type mapping.

---

## Future Improvements

- Installation gallery
- Before & after comparison
- Interactive project map
- Customer testimonials
- Related products
- Search & filters
- Video case studies
- Lightbox viewer

---

## Version History

### v1.1.0
- Added `RECENT_INSTALLATIONS_ASSET_MAP` registry in `recent-installations.js`
- Prepared 4 target local WebP paths in `frontend/assets/projects/`
- Implemented robust Unsplash fallback mechanism on all project cards
- Added WordPress/CMS migration compatibility metadata

### v1.0.0

- Initial release
- Featured installation layout
- Responsive portfolio grid
- Category badges
- Installation details
- CMS-ready architecture

---

Status

**Asset Ready (Awaiting Real Project Photographs)**