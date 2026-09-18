# CamneX Bangladesh — Production Deployment Requirements & Runbook

**Project**: CamneX Bangladesh (Security, Networking and IT Solutions Company)  
**Production URL**: `https://www.camnexbd.com`  
**Theme Name**: `camnex-theme`  
**Theme Directory**: `wordpress/wp-content/themes/camnex-theme/`  
**Document Purpose**: Production environment prerequisites, plugin dependencies, and administrative runbook.

---

## 1. System Requirements

### A. REQUIRED (Server & Platform Baseline)
- **WordPress**: Core 6.2+ (Recommended: WordPress 6.6 or 6.7 LTS).
- **PHP**: PHP 8.0, 8.1, or 8.2 (Required by theme `style.css`).
  - Required Extensions: `ext-json`, `ext-curl`, `ext-mbstring`, `ext-openssl`, `ext-xml`, `ext-gd` (or `ext-imagick`).
  - Recommended `php.ini` values:
    - `memory_limit = 256M` (or `512M` for large media catalogs)
    - `upload_max_filesize = 64M`
    - `post_max_size = 64M`
    - `max_execution_time = 300`
- **Database**: MySQL 5.7+ or MariaDB 10.4+.
- **Web Server**: Nginx or Apache (with `mod_rewrite` enabled for clean permalinks).
- **SSL / HTTPS**: Valid SSL Certificate (Let's Encrypt / Cloudflare SSL) enforcing HTTPS with 301 redirection.
- **WooCommerce**: Plugin version 8.x or 9.x (Core e-commerce engine for catalog, cart, checkout, and pricing).

### B. OPTIONAL (Recommended Production Plugins)
- **SMTP Mail Provider**: **WP Mail SMTP** (or Brevo / Google Workspace SMTP)
  - Purpose: Ensures dependable transactional email delivery for Quote / Site Visit leads (`contact@camnexbd.com`) and customer order receipts, preventing shared server spam filtering.
- **SEO & Schema Engine**: **Rank Math SEO** (or Yoast SEO)
  - Purpose: Manages dynamic XML sitemaps, OpenGraph social cards, breadcrumbs, and search engine console verification. Theme schema (`inc/schema.php`) gracefully yields to Rank Math when active to avoid duplicate markup.
- **Bangladesh Payment Gateways**:
  - Purpose: Enables automated digital customer checkout via local payment methods in Bangladesh.
  - Recommended Options:
    - bKash for WooCommerce (Official Merchant API or authorized gateway plugin)
    - Nagad Payment Gateway for WooCommerce
    - Rocket / Upay Gateway
    - SSLCommerz / Shurjopay Payment Gateway (All-in-one Bangladesh payment aggregator)
- **Object Cache**: Redis Object Cache or Memcached (Accelerates dynamic WooCommerce queries on high-traffic stores).

### C. DEPLOYMENT CONFIGURATION (Hosting Environment)
- **File System Permissions**:
  - `wp-content/` directories: `755`
  - Theme and plugin files: `644`
  - `wp-config.php`: `600` or `400`
- **Nginx Permalinks Rule**:
  ```nginx
  location / {
      try_files $uri $uri/ /index.php?$args;
  }
  ```
- **Security Headers (Server-level)**:
  - `X-Content-Type-Options: nosniff`
  - `X-Frame-Options: SAMEORIGIN`
  - `Referrer-Policy: strict-origin-when-cross-origin`

---

## 2. WordPress Admin Post-Deployment Setup Runbook

Follow this exact sequential checklist after deploying the theme to the live server:

1. **Install WordPress**: Complete the standard 5-minute WordPress installation on the target server.
2. **Activate Theme**: Navigate to `Appearance > Themes` and activate **CamneX Bangladesh** (`camnex-theme`).
3. **Install & Activate WooCommerce**: Install the latest WooCommerce release via `Plugins > Add New` and complete the initial setup wizard.
4. **Configure Site URL**: Under `Settings > General`, verify both WordPress Address (URL) and Site Address (URL) use `https://www.camnexbd.com`.
5. **Configure Permalink Structure**: Go to `Settings > Permalinks` and select **Post name** (`/%postname%/`).
6. **Flush Rewrite Rules**: Click **Save Changes** in Permalinks to register theme custom rewrite rules for `/packages/`, `/solutions/`, `/installations/`, and `/brand/`.
7. **Configure WooCommerce Pages**: Ensure WooCommerce system pages (Shop, Cart, Checkout, My Account) are assigned under `WooCommerce > Settings > Advanced`.
8. **Configure BDT Currency**: Under `WooCommerce > Settings > General`, set Currency to **Bangladeshi Taka (৳)**, Currency Position to **Left with space**, Thousand separator `,`, and Decimal separator `.`.
9. **Configure Store Location**: Set store address under `WooCommerce > Settings > General`:  
   *Address*: `Block A, Chandrima Model Town, Shop 01, 1st Floor, House 22, Road 06 Main Rd`  
   *City*: `Dhaka`  
   *Postal Code*: `1207`  
   *Country*: `Bangladesh`
10. **Configure Shipping Zones**: Under `WooCommerce > Settings > Shipping`, establish shipping zones:
    - *Zone 1*: Inside Dhaka Metro (Flat Rate or Express Courier delivery).
    - *Zone 2*: Outside Dhaka (Nationwide Courier delivery via Steadfast / Sundarban / SA Paribahan).
11. **Configure Tax / VAT**: Under `WooCommerce > Settings > Tax`, configure applicable VAT rates (or disable if inclusive).
12. **Configure SMTP**: Install WP Mail SMTP and configure SMTP credentials for `contact@camnexbd.com` (Host, Port 465/587, SSL/TLS encryption, and authentication).
13. **Configure Payment Gateway**: Under `WooCommerce > Settings > Payments`, activate Cash on Delivery (COD) and configure merchant API keys for bKash, Nagad, and SSLCommerz.
14. **Configure Rank Math**: Complete the Rank Math setup wizard, link Google Search Console property, and generate the XML sitemap (`/sitemap_index.xml`).
15. **Configure Business Profile**: Open `Appearance > Customize > CamneX Business Profile` to verify or customize contact numbers, email, WhatsApp link, social URLs, and office hours.
16. **Create Product Categories**: Go to `Products > Categories` and confirm canonical categories:
    - IP Cameras
    - CCTV Cameras
    - CCTV Packages
    - Access Control
    - Networking
    - Smart Home
    - Time Attendance
    - Accessories
17. **Create Brands**: Go to `Products > Brands` (or `CCTV Packages > Brands`) and populate the technology partners:
    - Hikvision, Dahua, EZVIZ, IMOU, Ruijie, MikroTik, Ubiquiti, TP-Link, Uniview, ZKTeco.
18. **Import Real Products**: Import authentic WooCommerce products with genuine distributor SKUs, real prices, stock quantities, and warranty attributes.
19. **Create Real CCTV Packages**: Under `CCTV Packages > Add New`, configure production packages adhering to strict storage rules (2/4-cam: 500GB HDD; 8-cam: 1TB HDD; 16-cam: 2TB HDD; 10m cable/cam; default Bullet camera).
20. **Upload Authentic Project Photographs**: Under `Projects (Installations)`, upload high-resolution authentic CamneX on-site installation photographs to replace demonstration imagery.
21. **Test Quote Submission**: Open the live homepage, click "Request Site Visit / Custom Quote", submit a test inquiry, and verify nonce and honeypot validation pass.
22. **Test Email Delivery**: Verify the administrator receives the quote notification email at `contact@camnexbd.com` and the client receives a confirmation copy.
23. **Test Checkout Flow**: Add a product to the cart, verify the header cart counter and AJAX fragment update dynamically, and navigate through the checkout page.
24. **Test Order Creation**: Complete a test order (using Cash on Delivery or test gateway sandbox) and verify order status under `WooCommerce > Orders`.
25. **Perform Final Live QA**: Review cross-device rendering (mobile, tablet, desktop), verify SSL padlock, test search autocomplete, and inspect browser console for zero runtime errors.
