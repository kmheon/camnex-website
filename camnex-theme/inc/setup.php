<?php
/**
 * CamneX Bangladesh — Theme Setup & Feature Support
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('camnex_theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function camnex_theme_setup() {
        // Make theme available for translation.
        load_theme_textdomain('camnex', CAMNEX_DIR . '/languages');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Register custom image sizes matching CamneX component aspect ratios.
        add_image_size('camnex-product-thumb', 800, 800, true);   // 1:1 Clean Product Cutouts
        add_image_size('camnex-package-thumb', 800, 600, true);   // 4:3 Package Bundle Showcases
        add_image_size('camnex-project-thumb', 1200, 675, true);  // 16:9 Installation Showcase Photos

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]);

        // Add support for core custom logo.
        add_theme_support('custom-logo', [
            'height'      => 40,
            'width'       => 160,
            'flex-width'  => true,
            'flex-height' => true,
        ]);

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Declare WooCommerce support and gallery integrations.
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        // Register Theme Navigation Menu Locations.
        register_nav_menus([
            'primary_nav'        => esc_html__('Header Primary Menu', 'camnex'),
            'top_bar_nav'        => esc_html__('Header Topbar Menu', 'camnex'),
            'footer_quick_links' => esc_html__('Footer Quick Links', 'camnex'),
            'footer_solutions'   => esc_html__('Footer Solutions', 'camnex'),
            'footer_support'     => esc_html__('Footer Customer Support', 'camnex'),
            'footer_legal'       => esc_html__('Footer Legal Links', 'camnex'),
        ]);
    }
endif;
add_action('after_setup_theme', 'camnex_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function camnex_content_width() {
    $GLOBALS['content_width'] = apply_filters('camnex_content_width', 1280);
}
add_action('after_setup_theme', 'camnex_content_width', 0);
