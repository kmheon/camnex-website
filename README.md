# CamneX Website

Modern, premium, component-based website built with HTML, CSS and JavaScript.

---

# Project Structure

```
frontend/
│
├── assets/
│   ├── images/
│   ├── logos/
│   ├── icons/
│   └── fonts/
│
├── components/
│
├── features/
│   ├── hero/
│   ├── shop-by-category/
│   ├── property-solutions/
│   ├── featured-packages/
│   ├── featured-products/
│   ├── brands/
│   ├── testimonials/
│   ├── projects/
│   ├── faq/
│   ├── blog/
│   ├── contact/
│   └── footer/
│
├── css/
├── js/
├── index.html
└── README.md
```

---

# Feature Folder Structure

Every feature follows the same architecture.

```
feature-name/

index.html
style.css
script.js
data.js (only when required)
```

Example

```
featured-products/

index.html
style.css
script.js
data.js
```

---

# Dynamic Sections

These sections use **data.js**.

- Hero Slider
- Shop by Category
- Property Solutions
- Featured Packages
- Featured Products
- Brands
- Testimonials
- Projects
- Blog
- FAQ

All repeatable content should come from data.js.

Nothing should be hardcoded into HTML.

---

# Static Sections

These do NOT require data.js.

- About
- Contact
- CTA
- Company Information
- Footer
- Legal Pages

---

# Design System

Primary Color

```
#FF5A2F
```

Heading

```
Dark Navy
```

Background

```
White
```

Cards

- Rounded Corners
- Thin Border
- Soft Shadow
- Large Spacing
- Minimal Design

Animations

- Smooth
- Fast
- Premium
- No flashy effects

---

# Responsive Breakpoints

Desktop

```
1440+
```

Laptop

```
1200
```

Tablet

```
768
```

Mobile

```
480
```

Every component must be fully responsive.

---

# Image Rules

During development:

- Placeholder images are acceptable.

Final build:

- Every image must come from data.js or CMS.
- No hardcoded image paths.
- Support lazy loading.

---

# Future CMS Integration

The website is designed to be migrated to WordPress/WooCommerce.

Future dynamic content includes:

- Products
- Categories
- Packages
- Hero Slides
- Brands
- Blog Posts
- Testimonials
- Projects

The HTML structure should never need to change when connecting the CMS.

Only the data source changes.

---

# Code Rules

✅ Component based

✅ Clean HTML

✅ Modular CSS

✅ Reusable JavaScript

✅ Dynamic rendering

✅ Responsive

✅ Accessible

❌ No inline CSS

❌ No inline JavaScript

❌ No duplicated code

❌ No hardcoded repeated cards

---

# Naming Convention

Folders

```
kebab-case
```

Files

```
index.html
style.css
script.js
data.js
```

CSS Classes

```
feature-card
feature-title
feature-grid
feature-button
```

JavaScript

```
camelCase
```

Constants

```
UPPER_CASE
```

---

# Performance Goals

- Lazy Loading
- Optimized Images
- Minimal DOM
- Modular JavaScript
- Reusable Components
- Fast Initial Load
- Smooth Animations (60fps)

---

# Final Goal

Build a premium enterprise-grade website for CamneX that combines the visual quality of Apple, Linear, Stripe and Awwwards-winning websites while remaining practical for a security and networking company.

The codebase must be clean, scalable, maintainable, and fully ready for future WordPress/WooCommerce integration without requiring structural rewrites.