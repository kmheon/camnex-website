# CamneX Bangladesh — GitHub-Based WordPress Theme Updater Guide

**Repository**: https://github.com/kmheon/camnex-website  
**Canonical Theme Directory**: / (Repository Root)  
**Target WordPress Theme Path**: wp-content/themes/camnex-theme/  
**Current Version**: 1.0.1 (Updater-Ready Release)  
**Updater Readiness**: READY

---

## 1. Overview & Architecture

To eliminate manual ZIP file uploads for every theme modification, the **CamneX Bangladesh** WordPress theme () is pre-configured for direct, secure updates from GitHub. 

When developers push updates to the  branch of https://github.com/kmheon/camnex-website, WordPress automatically detects the new version and provides a one-click update prompt in the WordPress admin dashboard ().

### Critical Update Safety
The automated theme update mechanism replaces **theme files only**. It guarantees zero risk of data loss by never touching or overwriting:
- WordPress Database & MySQL tables
- WooCommerce Products, Orders, Customers, and Coupons
- Media Library uploads ()
- WordPress Options, Customizer settings, and Business Profile data
- Custom Post Type (CPT) content (, , , , )
- Custom taxonomies (, product categories)

---

## 2. Theme Header Configuration ()

The theme stylesheet () includes standard GitHub updater metadata headers so updater plugins can recognize the repository and branch:



---

## 3. WordPress Admin Installation & Configuration Runbook

To enable and use GitHub-based theme updates in your live WordPress installation, follow these simple steps:

### Step 1: Install the GitHub Updater Plugin
1. Log in to your WordPress Admin dashboard ().
2. Go to **Plugins > Add New**.
3. Search for **GitHub Updater** (developed by Andy Fragen) or download/install it.
4. Click **Install Now** and **Activate**.

*(Alternatively, GitHub Updater can be installed via WP-CLI: )*

### Step 2: Configure GitHub Access (Optional for Public Repositories)
Since https://github.com/kmheon/camnex-website is a public repository:
- No Personal Access Token (PAT) is required for basic updates.
- If you encounter GitHub API rate limits or convert the repository to private in the future:
  1. Go to **Settings > GitHub Updater** in your WordPress admin.
  2. Add a GitHub Personal Access Token ( scope) under the GitHub API settings tab.

### Step 3: Verify Theme Registration
1. Go to **Appearance > Themes**.
2. Confirm that **CamneX Bangladesh** () version  is active.
3. The GitHub Updater plugin will automatically hook into WordPress theme transient checks () and query GitHub for version comparisons.

### Step 4: Updating the Theme (Future Workflow)
When updates are made in AI Studio and pushed to GitHub:
1. **AI Studio / Git Commit**: Changes are committed and pushed to  on https://github.com/kmheon/camnex-website.
2. **Version Bump**: Increment  in  and  in .
3. **WordPress Admin Notice**: WordPress detects the new version available under **Dashboard > Updates** or **Appearance > Themes**.
4. **One-Click Update**: Click **Update Now**. WordPress securely downloads the zip package of , updates the theme files in place, and preserves all database records, products, media, and settings.

---
*CamneX Bangladesh Technical Operations — GitHub Theme Update Specification*
