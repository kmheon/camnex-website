# Featured Products

Version: 1.0.0

Status: ✅ Complete (Frozen)

---

## Purpose

The Featured Products section showcases CamneX's most popular security and networking products on the homepage.

Unlike the Shop page, this section is designed for quick product discovery and encourages visitors to browse featured items before entering the full catalog.

---

## Files

```
featured-products/

├── index.html
├── featured-products.css
├── featured-products.js
└── README.md
```

---

## Components Used

- Section Header
- Product Card
- Primary Button
- Lucide Icons

---

## Features

- Featured Products section
- Responsive product grid
- Category filter chips
- Active filter state
- View All Products CTA
- Product Card integration
- Mobile-friendly layout
- Accessibility support
- WooCommerce-ready structure
- AJAX-ready filtering architecture

---

## Product Categories

The filter navigation supports:

- All
- CCTV Cameras
- Networking
- Access Control
- Smart Home
- Accessories

Future categories can be added by creating a new filter chip and assigning the corresponding `data-category` value to product cards.

---

## JavaScript

Current functionality:

- Active filter switching
- Product filtering by category
- Lucide icon initialization

Future functionality:

- WooCommerce AJAX loading
- Featured Products API
- Best Sellers
- Latest Products
- On Sale Products
- Search integration

---

## WooCommerce Integration

Planned dynamic fields:

- Product Image
- Product Name
- Brand Logo
- Product Model
- Rating
- Price
- Sale Price
- Product URL
- Product Category
- Wishlist
- Stock Status

Products will eventually be generated dynamically from WooCommerce instead of using static HTML.

---

## Responsive Layout

Desktop

- 3 Product Cards

Tablet

- 2 Product Cards

Mobile

- 1 Product Card

Filter chips become horizontally scrollable on smaller screens.

---

## Dependencies

Shared CSS

- reset.css
- variables.css
- typography.css
- layout.css

Components

- Product Card
- Section Header

Libraries

- Lucide Icons

---

## Design Notes

This section focuses on product discovery rather than detailed product comparison.

The Product Card component is reused to maintain design consistency across the CamneX Design System.

Future versions may introduce a dedicated Homepage Product Card optimized for quicker browsing.

---

## Future Improvements (v2)

- Homepage Product Card
- AJAX filtering
- WooCommerce Featured Products
- Product carousel option
- Quick View
- Add to Cart
- Wishlist integration
- Skeleton loading
- Lazy rendering
- Animation improvements

---

## Version History

### v1.1.0 — Premium refinement pass

- Product image area increased to ~46% of card height; added a soft
  backdrop panel behind the image so it no longer reads as an empty
  grey placeholder.
- Product images now load through a skeleton shimmer and fade in on
  the image's actual `load` event (or fall back gracefully on error)
  instead of assuming instant load.
- Added a brand logo mark (`assets/brands/{brandSlug}.svg`, with a
  clean fallback to the text wordmark if the file isn't there yet)
  next to the brand name.
- Feature chips redesigned as pills with a small icon badge.
- Sale price strengthened as the dominant price element; discount
  badge format unchanged (`Save ৳XXX`).
- Category filter pills now have an animated sliding underline (in
  addition to the orange active fill), and switching filters fades
  cards out/in instead of an instant swap.
- Fixed a real bug found during testing: on narrow screens the filter
  pills wrapped to a second row, which broke the sliding underline
  (it always sat under the bottom row regardless of which pill was
  active). Filter pills now scroll horizontally on mobile instead,
  per this doc's existing "Responsive Layout" spec below.
- Carousel: added autoplay (pauses on hover/touch/drag) and
  pointer-based swipe/drag support, alongside the existing arrows and
  dots.
- Fixed `data.js`: three products were silently sharing duplicate
  stock photos (MikroTik/TP-Link/Ruijie all used the same image;
  EZVIZ/Imou shared another). Each product now has a distinct image,
  and resolution was bumped from `w=600` to `w=900&q=85`.
- Fixed `index.html`: the stylesheet `<link>` pointed at a
  nonexistent `style.css` — corrected to `featured-products.css`.
- Card hover glow strengthened (`--cx-shadow-glow`) alongside the
  existing lift/shadow/border/image-zoom/button hover states.

### v1.0.0

- Initial release
- Responsive product grid
- Category filter navigation
- Product Card integration
- View All Products CTA
- WooCommerce-ready architecture

---

Status

**Refined — v1.1.0**