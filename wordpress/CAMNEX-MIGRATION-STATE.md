# CamneX Bangladesh — Master Migration State & Governance

**Project**: CamneX Bangladesh (Security, Networking and IT Solutions Company)  
**Primary Domain**: https://www.camnexbd.com  
**Primary Contact**: +880 1540-535150 | contact@camnexbd.com  
**Primary Brand Colors**: `#F15A24` (Primary Orange), `#D94D1C` (Hover/Dark Orange)  
**Theme Path**: `wordpress/wp-content/themes/camnex-theme/` (symlinked from `camnex-theme/`)  
**Frozen Frontend Source of Truth**: `frontend/` (Strictly read-only / untouched)

---

## 1. Migration Phase Registry

| Phase | Description | Status | Dependencies | Core Files Owned |
| :--- | :--- | :--- | :--- | :--- |
| **Phase 1** | Theme Foundation | **COMPLETE** | None | `style.css`, `functions.php`, `index.php`, `inc/setup.php`, `inc/enqueue.php`, `assets/css/shared/*` |
| **Phase 2** | Header + Footer | **COMPLETE** | Phase 1 | `header.php`, `footer.php`, `template-parts/header/*`, `template-parts/footer/*`, `inc/mega-menu-walker.php`, `assets/css/components/*`, `assets/js/header.js`, `assets/js/footer.js` |
| **Phase 3** | Homepage Shell & Parity | **COMPLETE** | Phase 1, 2 | `front-page.php`, `template-parts/home/*`, `assets/css/features/*`, `assets/js/*` |
| **Phase 4** | WooCommerce Foundation | **COMPLETE** | Phase 1, 2, 3 | `inc/woocommerce-hooks.php`, `template-parts/woocommerce/product-card.php`, `woocommerce/*.php`, `assets/css/features/woocommerce.css` |
| **Phase 5** | Product Catalog System | **COMPLETE** | Phase 4 | `woocommerce/taxonomy-product-cat.php`, `inc/woocommerce-catalog.php`, `woocommerce/single-product/*.php` |
| **Phase 6** | Brand Taxonomy | **COMPLETE** | Phase 5 | `inc/taxonomies.php`, `woocommerce/taxonomy-brand.php` |
| **Phase 7** | CCTV Package System | **COMPLETE** | Phase 5, 6 | `inc/post-types.php`, `single-cctv_package.php`, `archive-cctv_package.php`, `template-parts/packages/*` |
| **Phase 8** | Solutions, Projects, Testimonials | **COMPLETE** | Phase 7 | `single-solutions.php`, `archive-solutions.php`, `single-projects.php`, `archive-projects.php`, `single-testimonials.php` |
| **Phase 9** | Quote + Site Visit System | **COMPLETE** | Phase 8 | `inc/quote-handler.php`, `template-parts/common/quote-modal.php`, `assets/js/quote-modal.js` |
| **Phase 10** | SEO Architecture | **COMPLETE** | Phase 9 | `inc/schema.php` |
| **Phase 11** | Business Profile / Admin | **COMPLETE** | Phase 10 | `inc/customizer.php`, `inc/helpers.php` |
| **Phase 12** | Final QA & Release Prep | **COMPLETE** | Phase 1-11 | `inc/security.php`, comprehensive validation |

---

## 2. Core Architectural Decisions (Frozen)

1. **Custom Classic WordPress Theme**: `camnex-theme` with standard template hierarchy and modular `/inc/` includes.
2. **WooCommerce Engine**: WooCommerce remains the core product and commerce engine; custom presentation wrappers prevent template collision.
3. **Custom Taxonomy for Brands**: `brand` taxonomy registered for `product` and `cctv_package`.
4. **Hybrid CCTV Packages**: CPT `cctv_package` with linked WooCommerce products, 10m cable per camera, count-dependent baluns/adapters, HDD specs, and monitor inclusions.
5. **Dynamic Auxiliary CPTs**:
   - `solutions` (Property Solutions)
   - `projects` (Recent Installations)
   - `testimonials` (Customer Testimonials)
   - `quote_request` (Lead Generation & Site Visit Requests)
6. **Centralized Business Profile**: Centralized options via `camnex_get_business_info()` with constants fallback.
7. **Rank Math SEO Integration**: Zero collision with Rank Math; clean fallback schema and OpenGraph markup provided when Rank Math is not present.
8. **Homepage Section Sequence (Strictly Preserved)**:
   1. Header
   2. Hero
   3. Shop by Category
   4. Property Solutions
   5. Featured Packages
   6. Featured Products
   7. Why Choose CamneX
   8. Brands (Exact 8: Hikvision, Dahua, EZVIZ, IMOU, Ruijie, MikroTik, Ubiquiti, TP-Link)
   9. Recent Installations
   10. Customer Testimonials
   11. Final CTA
   12. Footer

---

## 3. Asset Inventory & Status

- **Brand Logos**:
  - `assets/brands/dahua.png` (VERIFIED)
  - `assets/brands/ezviz.png` (VERIFIED)
  - `assets/brands/Ezviz.png` (DUPLICATE of ezviz.png)
  - `assets/brands/hikvision.png` (VERIFIED)
  - `assets/brands/imou.png` (VERIFIED)
  - `assets/brands/mikrotik.png` (VERIFIED)
  - `assets/brands/ruijie.png` (VERIFIED)
  - `assets/brands/tp-link.png` (VERIFIED)
  - `assets/brands/ubiquiti.png` (VERIFIED)
  - `assets/brands/uniview.png` (CATALOG_READY)
  - `assets/brands/zkteco.png` (CATALOG_READY)
- **Product Images**: 10 clean cutout transparent WebPs in `assets/products/` (VERIFIED)
- **Category Images**: 11 placeholder graphics in `assets/placeholders/` (VERIFIED)
- **Recent Installation Images**: External Unsplash images used in mockups (TEMPORARY — Marked clearly as demo imagery, ready for authentic project photo replacement via Projects CPT).
- **Icons**: Lucide Icons CDN runtime + SVG symbols (VERIFIED)

---

## 4. Protected Files & Directories
- `frontend/` (ALL subdirectories: pages, features, components, shared)
- `frontend/sections/` (LEGACY — NEVER USED)
- Completed Phase 1-4 theme files:
  - `inc/setup.php`
  - `inc/enqueue.php`
  - `inc/mega-menu-walker.php`
  - `inc/woocommerce-hooks.php`
  - `front-page.php`
  - `template-parts/woocommerce/product-card.php`

---

## 5. Runtime Limitations & External Dependencies
- **WordPress Runtime**: PENDING_SERVER_ENVIRONMENT (Static linting and TypeScript compilation active; PHP linting verified).
- **WooCommerce Runtime**: PENDING_SERVER_ENVIRONMENT (All WooCommerce function calls guarded with `function_exists` and `class_exists`).
- **SEO Layer**: Rank Math (Planned external plugin; non-blocking fallback schema provided).
- **Mail Layer**: WP Mail SMTP (Planned external plugin; native `wp_mail` integration provided).
- **Payment Gateway**: bKash, Nagad, Rocket, SSLCommerz (Deployment phase dependency).
