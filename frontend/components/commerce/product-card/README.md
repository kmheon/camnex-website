# Product Card

> **Component ID:** 001  
> **Component Name:** Product Card  
> **Version:** 1.0.0  
> **Status:** Complete  
> **Project:** CamneX Website Design System

---

# Overview

The Product Card is the primary reusable commerce component used to display individual products throughout the CamneX website.

It has been designed to support WooCommerce integration while remaining completely reusable across product listings, category pages, featured products, search results, and related products.

The component focuses on a clean, modern, premium appearance with future scalability in mind.

---

# Purpose

Display a single product with its essential information while encouraging the customer to view more details or purchase the product.

---

# Current Features

- Responsive design
- Premium modern layout
- Dynamic product image
- Brand logo
- Product model
- Product title
- Product rating
- Product review count
- Product pricing
- Sale price support
- Product badge (New / Sale)
- Wishlist button
- Product features
- Stock indicator
- Warranty information
- View Details button
- Hover animation
- Lazy-loaded images
- Accessible HTML structure
- Lucide Icons support

---

# WooCommerce Ready

The component has been structured for future WooCommerce integration.

Future dynamic fields include:

- Product Name
- Product Image
- Brand Logo
- Product Model
- SKU
- Category
- Current Price
- Old Price
- Discount
- Rating
- Review Count
- Warranty
- Stock Status
- Product URL
- Wishlist Status

No structural redesign should be required during integration.

---

# Dynamic Data

The component is designed to receive dynamic data from:

- WooCommerce
- REST API
- WordPress Custom Fields
- JavaScript Objects

The component should never depend on hardcoded product information.

---

# Planned Future Features

Version 1.1

- Add to Cart button
- Discount percentage badge
- More badge types
- Compare button
- Quick View support
- Loading skeleton

Version 1.2

- AJAX Add to Cart
- Wishlist integration
- Quick View modal
- Compare functionality

Version 2.0

- Product variations
- Live stock updates
- Installation availability
- Delivery estimation
- Product labels from WooCommerce
- Customer-specific pricing

---

# Component Structure

```
product-card/

├── index.html
├── product-card.css
├── product-card.js
└── README.md
```

---

# Dependencies

Shared CSS

- reset.css
- variables.css
- typography.css
- layout.css

Libraries

- Lucide Icons

---

# Design Principles

The Product Card follows the CamneX Design System.

Goals:

- Premium appearance
- Clean spacing
- Modern typography
- Minimal visual noise
- Consistent interactions
- Mobile-first responsive layout
- High readability
- Fast loading
- Reusable architecture

---

# Accessibility

- Semantic HTML5
- Keyboard accessible controls
- ARIA labels
- Lazy-loaded images
- Proper image alt text
- Visible focus states

---

# Browser Support

- Chrome
- Edge
- Firefox
- Safari
- Mobile Browsers

---

# Notes

The Product Card is considered the foundation of the CamneX commerce component library.

Future enhancements should preserve the existing design language and avoid unnecessary structural changes.

Any additional functionality should be implemented without redesigning the component.

---

# Changelog

## Version 1.0.0

Initial production release.

Completed:

- HTML architecture
- CSS styling
- JavaScript initialization
- Responsive layout
- WooCommerce-ready structure
- Dynamic-ready HTML
- Accessibility improvements
- Image handling improvements
- Placeholder asset support