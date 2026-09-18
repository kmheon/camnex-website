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

## 5. Master Release Status & Governance

**Release Status**: `RELEASE CANDIDATE — DEPLOYMENT ITEMS REMAIN`

- **CODE IMPLEMENTATION**: `COMPLETE`
- **CURRENT STAGE**: `DEPLOYMENT PREPARATION`
- **RUNTIME**: `Pending live WordPress/WooCommerce environment` (Do not mark runtime validation as passed)

### Status Categorization

#### A. CODE COMPLETE
- Classic WordPress Theme structure (`camnex-theme/`) with standard template hierarchy.
- 10-section Homepage parity strictly matching frozen frontend (`frontend/pages/home/index.html`).
- Header (Top bar, main navbar, mega menu, mobile drawer) and 5-column Footer with Back-to-Top.
- WooCommerce wrappers, conditional asset loading, loop overrides, dynamic cart fragment AJAX.
- Brand custom taxonomy (`brand`) registered for products and packages.
- CCTV Package engine (`cctv_package`) with strict base storage tiers:
  - 2-camera: 500GB HDD
  - 4-camera: 500GB HDD
  - 8-camera: 1TB HDD
  - 16-camera: 2TB HDD
  - Cable: 10m high-purity copper cable per camera.
  - Baluns & adapters: camera-count dependent.
  - Default camera: Bullet. Optional: Dome/Turret.
  - Night Vision: IRPF-series infrared-only architecture (no audio, no ColorVu, no dual-light).
  - No invented model numbers: Package engine data-driven; real product/model data pending.
- Auxiliary CPTs: Solutions, Projects, Testimonials, Quote Request.
- Quote & Site Visit modal inquiry system with nonce, honeypot, sanitization, and dual `wp_mail()` dispatch.
- LocalBusiness / SecuritySystemSupplier JSON-LD schema with address:
  `Block A, Chandrima Model Town, Shop 01, 1st Floor, House 22, Road 06 Main Rd, Dhaka 1207, Bangladesh` (Postal Code: 1207).
  Centralized business profile remains the authoritative source.
- Security hardening: XML-RPC disabled, version disclosure removed, user enumeration blocked, security HTTP headers.

#### B. RUNTIME VALIDATION REQUIRED (Deployment Verification)
- Live WordPress core runtime initialization.
- WooCommerce plugin activation & database table creation.
- Permalinks / rewrite rule flushing (`/packages/`, `/solutions/`, `/installations/`, `/brand/`).
- Database persistence for posts, metadata, custom fields, and WooCommerce options.
- Dynamic WooCommerce cart operations, session handling, and mini-cart fragment testing.
- WooCommerce checkout and order placement workflow.
- WooCommerce "My Account" portal login and dashboard views.
- Native product search (`/?s={term}&post_type=product`) and live search autocomplete.
- Product catalog archive rendering and brand archive rendering.
- CCTV package archive rendering and single package specification tables.
- AJAX quote submission verification under live server environment.
- Production HTTPS certificates and server-level HTTP security header propagation.

#### C. BUSINESS CONFIGURATION REQUIRED
- Payment gateways: bKash Merchant API, Nagad Gateway, Rocket, SSLCommerz credentials.
- Delivery zones & shipping rates for Dhaka metro vs nationwide courier.
- Tax/VAT rules (if applicable).
- Store manager user roles & administrative access controls.

#### D. EXTERNAL SERVICE REQUIRED
- SMTP delivery credentials (WP Mail SMTP / Brevo / Google Workspace SMTP) for `contact@camnexbd.com`.
- Google Search Console property verification & XML sitemap submission.
- Rank Math SEO plugin activation & compatibility review.
- External Google Rich Results test validation for structured JSON-LD data.

#### E. REAL PRODUCT DATA REQUIRED
- Live WooCommerce product database import with authentic SKUs, distributor pricing, and official distributor warranty terms.
- CCTV Package engine ready; real product/model data pending.

#### F. REAL PROJECT PHOTOGRAPHY REQUIRED
- Authentic CamneX on-site deployment photographs to replace demonstration/Unsplash placeholder images currently in Recent Installations and showcase templates. Demonstration imagery must not be represented as verified CamneX field photography.
