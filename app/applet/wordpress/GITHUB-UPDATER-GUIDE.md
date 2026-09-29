# CamneX Bangladesh — GitHub-Based WordPress Theme Updater Guide

**Repository**: `https://github.com/kmheon/camnex-website`  
**Canonical Theme Directory**: `/camnex-theme/`  
**Target WordPress Theme Path**: `wp-content/themes/camnex-theme/`  
**Current Version**: `1.0.1` (Updater-Ready Release)  
**Updater Readiness**: **READY**

---

## 1. Overview & Architecture

To eliminate manual ZIP file uploads for every theme modification, the **CamneX Bangladesh** WordPress theme (`camnex-theme`) is pre-configured for direct, secure updates from GitHub. 

When developers push updates to the `main` branch of `https://github.com/kmheon/camnex-website`, WordPress automatically detects the new version and provides a one-click update prompt in the WordPress admin dashboard (`Appearance > Themes`).

### Critical Update Safety
The automated theme update mechanism replaces **theme files only**. It guarantees zero risk of data loss by never touching or overwriting:
- WordPress Database & MySQL tables
- WooCommerce Products, Orders, Customers, and Coupons
- Media Library uploads (`wp-content/uploads/`)
- WordPress Options, Customizer settings, and Business Profile data
- Custom Post Type (CPT) content (`cctv_package`, `solutions`, `projects`, `testimonials`, `quote_request`)
- Custom taxonomies (`brand`, product categories)

---

## 2. Theme Header Configuration (`style.css`)

The theme stylesheet (`camnex-theme/style.css`) includes standard GitHub updater metadata headers so updater plugins can recognize the repository and branch:

```css
Theme Name: CamneX Bangladesh
Theme URI: https://www.camnexbd.com/
Author: CamneX Technical Team
Author URI: https://www.camnexbd.com/
Description: Custom, high-performance WordPress & WooCommerce theme engineered for CamneX Bangladesh — Security, CCTV, Networking, and IT Solutions.
Version: 1.0.1
GitHub Theme URI: https://github.com/kmheon/camnex-website
GitHub Branch: main
Requires at least: 6.2
Tested up to: 6.7
Requires PHP: 8.0
License: Proprietary
Text Domain: camnex
```

---

## 3. WordPress Admin Installation & Configuration Runbook

To enable and use GitHub-based theme updates in your live WordPress installation, follow these simple steps:

### Step 1: Install the GitHub Updater Plugin
1. Log in to your WordPress Admin dashboard (`/wp-admin/`).
2. Go to **Plugins > Add New**.
3. Search for **GitHub Updater** (developed by Andy Fragen) or download/install it.
4. Click **Install Now** and **Activate**.

*(Alternatively, GitHub Updater can be installed via WP-CLI: `wp plugin install github-updater --activate`)*

### Step 2: Configure GitHub Access (Optional for Public Repositories)
Since `https://github.com/kmheon/camnex-website` is a public repository:
- No Personal Access Token (PAT) is required for basic updates.
- If you encounter GitHub API rate limits or convert the repository to private in the future:
  1. Go to **Settings > GitHub Updater** in your WordPress admin.
  2. Add a GitHub Personal Access Token (`repo` scope) under the GitHub API settings tab.

### Step 3: Verify Theme Registration
1. Go to **Appearance > Themes**.
2. Confirm that **CamneX Bangladesh** (`camnex-theme`) version `1.0.1` is active.
3. The GitHub Updater plugin will automatically hook into WordPress theme transient checks (`site_transient_update_themes`) and query GitHub for version comparisons.

### Step 4: Updating the Theme (Future Workflow)
When updates are made in AI Studio and pushed to GitHub:
1. **AI Studio / Git Commit**: Changes are committed and pushed to `main` on `https://github.com/kmheon/camnex-website`.
2. **Version Bump**: Increment `Version: 1.0.x` in `camnex-theme/style.css` and `CAMNEX_VERSION` in `camnex-theme/functions.php`.
3. **WordPress Admin Notice**: WordPress detects the new version available under **Dashboard > Updates** or **Appearance > Themes**.
4. **One-Click Update**: Click **Update Now**. WordPress securely downloads the zip package of `/camnex-theme/`, updates the theme files in place, and preserves all database records, products, media, and settings.

---
*CamneX Bangladesh Technical Operations — GitHub Theme Update Specification*
