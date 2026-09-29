<?php
/**
 * CamneX Bangladesh — Header Template
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="cx-sr-only cx-skip-link" href="#primary">
    <?php esc_html_e('Skip to main content', 'camnex'); ?>
</a>

<!-- Sticky Header Wrapper -->
<header class="cx-site-header" id="siteHeader">
    <?php
    // Row 1: Top Announcement Bar
    get_template_part('template-parts/header/topbar');

    // Row 2: Main Header with Logo, Search, and Utilities
    get_template_part('template-parts/header/navbar');

    // Row 3: Navigation Bar & Mega Menus
    get_template_part('template-parts/header/mega-menu');

    // Off-Canvas Mobile Drawer
    get_template_part('template-parts/header/mobile-drawer');
    ?>
    <div class="cx-mobile-overlay" id="mobileOverlay" aria-hidden="true"></div>
</header>
