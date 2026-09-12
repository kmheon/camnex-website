# Category Card

> **Component ID:** 002  
> **Component Name:** Category Card  
> **Version:** 1.0.0  
> **Status:** Complete  
> **Project:** CamneX Website Design System

---

# Overview

The Category Card is a reusable commerce component designed to represent a WooCommerce product category.

Unlike the Product Card, this component does not promote an individual product. Instead, it guides customers toward browsing an entire product category.

The Category Card serves as a navigation element and plays a key role in improving product discovery.

---

# Purpose

Display a product category with a visual preview and encourage users to browse products within that category.

---

# Current Features

- Premium modern design
- Responsive layout
- Category image
- Category badge
- Category name
- Short description
- Product count
- Browse Category button
- Hover animation
- Lazy-loaded image
- Semantic HTML
- Lucide Icons support
- Accessibility improvements

---

# WooCommerce Ready

The component has been designed for WooCommerce category integration.

Future dynamic fields include:

- Category Name
- Category Image
- Category Description
- Product Count
- Category URL
- Category Badge
- Featured Category Status

No structural redesign should be required during integration.

---

# Dynamic Data

The component is prepared to receive data from:

- WooCommerce Product Categories
- WordPress Taxonomies
- REST API
- JavaScript Objects

No hardcoded category information should remain in production.

---

# Planned Future Features

## Version 1.1

- Featured Category badge
- New Category badge
- Product preview thumbnails
- Category icon support

## Version 1.2

- Hover image animation
- Product count animation
- Category statistics

## Version 2.0

- Dynamic promotional banners
- Personalized category recommendations
- Recently viewed category indicator

---

# Component Structure

```
category-card/

├── index.html
├── category-card.css
├── category-card.js
└── README.md
```

---

# Dependencies

## Shared CSS

- reset.css
- variables.css
- typography.css
- layout.css

## Libraries

- Lucide Icons

---

# Design Principles

The Category Card follows the CamneX Design System.

Goals:

- Premium appearance
- Modern layout
- Consistent spacing
- Strong visual hierarchy
- Mobile-first responsive design
- High readability
- Fast loading
- Reusable architecture

---

# Accessibility

- Semantic HTML5
- Keyboard accessible
- ARIA labels
- Lazy-loaded images
- Proper alt text
- Visible focus states

---

# Browser Support

- Chrome
- Edge
- Firefox
- Safari
- Mobile Browsers

---

# Intended Usage

The Category Card is intended for:

- Homepage
- Shop by Category section
- Category Landing Pages
- Product Navigation
- Search Results
- Promotional Sections

---

# Notes

The Category Card is a navigation-focused component within the CamneX Commerce Design System.

Its purpose is to help users discover products by category rather than highlighting individual products.

Future improvements should maintain consistency with the Product Card while keeping the component lightweight and reusable.

---

# Changelog

## Version 1.0.0

Initial production release.

Completed:

- HTML structure
- CSS styling
- JavaScript initialization
- Responsive layout
- WooCommerce-ready architecture
- Dynamic-ready structure
- Accessibility improvements