<?php
/**
 * CamneX Bangladesh — Theme Functions & Definitions
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Define Theme Constants.
define('CAMNEX_VERSION', '1.0.0');
define('CAMNEX_DIR', get_template_directory());
define('CAMNEX_URI', get_template_directory_uri());
define('CAMNEX_ASSETS_URI', CAMNEX_URI . '/assets');

/**
 * Phase 1 Core Includes:
 * 1. Theme Setup & Feature Supports
 * 2. Stylesheet & Script Enqueueing
 */
require_once CAMNEX_DIR . '/inc/setup.php';
require_once CAMNEX_DIR . '/inc/enqueue.php';

/**
 * Modular Includes (Loaded as respective phases are activated)
 */
$camnex_modules = [
    '/inc/migration-state.php',
    '/inc/helpers.php',
    '/inc/customizer.php',
    '/inc/post-types.php',
    '/inc/taxonomies.php',
    '/inc/mega-menu-walker.php',
    '/inc/woocommerce-hooks.php',
    '/inc/woocommerce-catalog.php',
    '/inc/quote-handler.php',
    '/inc/schema.php',
    '/inc/security.php',
];

foreach ($camnex_modules as $module) {
    $filepath = CAMNEX_DIR . $module;
    if (file_exists($filepath)) {
        require_once $filepath;
    }
}
