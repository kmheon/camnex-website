<?php
/**
 * CamneX Bangladesh — Enqueue Stylesheets & Scripts
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue styles and scripts.
 */
function camnex_enqueue_scripts() {
    $ver = CAMNEX_VERSION;

    // 1. Google Fonts (Inter)
    wp_enqueue_style(
        'camnex-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // 2. Shared Foundation Stylesheets
    wp_enqueue_style('camnex-vars', CAMNEX_ASSETS_URI . '/css/shared/variables.css', [], $ver);
    wp_enqueue_style('camnex-reset', CAMNEX_ASSETS_URI . '/css/shared/reset.css', ['camnex-vars'], $ver);
    wp_enqueue_style('camnex-layout', CAMNEX_ASSETS_URI . '/css/shared/layout.css', ['camnex-reset'], $ver);
    wp_enqueue_style('camnex-typography', CAMNEX_ASSETS_URI . '/css/shared/typography.css', ['camnex-layout'], $ver);
    wp_enqueue_style('camnex-animations', CAMNEX_ASSETS_URI . '/css/shared/animations.css', ['camnex-vars'], $ver);
    wp_enqueue_style('camnex-icons', CAMNEX_ASSETS_URI . '/css/shared/icons.css', ['camnex-vars'], $ver);
    wp_enqueue_style('camnex-utilities', CAMNEX_ASSETS_URI . '/css/shared/utilities.css', ['camnex-layout'], $ver);

    // 3. Layout Shell Stylesheets (Header & Footer load globally)
    wp_enqueue_style('camnex-header', CAMNEX_ASSETS_URI . '/css/components/header.css', ['camnex-layout'], $ver);
    wp_enqueue_style('camnex-footer', CAMNEX_ASSETS_URI . '/css/components/footer.css', ['camnex-layout'], $ver);

    // 4. Page & Feature Modular Stylesheets
    if (is_front_page() || is_home()) {
        wp_enqueue_style('camnex-home', CAMNEX_ASSETS_URI . '/css/pages/home.css', ['camnex-layout'], $ver);
        wp_enqueue_style('camnex-hero', CAMNEX_ASSETS_URI . '/css/features/hero.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-category', CAMNEX_ASSETS_URI . '/css/features/shop-by-category.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-property', CAMNEX_ASSETS_URI . '/css/features/property-solutions.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-packages', CAMNEX_ASSETS_URI . '/css/features/featured-packages.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-products', CAMNEX_ASSETS_URI . '/css/features/featured-products.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-why-choose', CAMNEX_ASSETS_URI . '/css/features/why-choose.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-brands', CAMNEX_ASSETS_URI . '/css/features/brands.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-recent-installations', CAMNEX_ASSETS_URI . '/css/features/recent-installations.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-testimonials', CAMNEX_ASSETS_URI . '/css/features/customer-testimonials.css', ['camnex-home'], $ver);
        wp_enqueue_style('camnex-final-cta', CAMNEX_ASSETS_URI . '/css/features/final-cta.css', ['camnex-home'], $ver);
    }

    // 5. WooCommerce Stylesheet (Only enqueued when WooCommerce is active on shop/cart/checkout/account pages)
    if (class_exists('WooCommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_account_page())) {
        wp_enqueue_style('camnex-woocommerce', CAMNEX_ASSETS_URI . '/css/features/woocommerce.css', ['camnex-layout'], $ver);
    }

    // 6. Main Theme Registration Stylesheet
    wp_enqueue_style('camnex-style', get_stylesheet_uri(), ['camnex-utilities'], $ver);

    // 7. Scripts: Lucide Icons CDN runtime
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        [],
        null,
        false // Header load so icons can render as elements parse
    );

    // 7. Global Shell Scripts (Header drawer, search toggle, sticky nav, footer accordions)
    wp_enqueue_script(
        'camnex-header',
        CAMNEX_ASSETS_URI . '/js/header.js',
        ['lucide-icons'],
        $ver,
        true
    );

    wp_enqueue_script(
        'camnex-footer',
        CAMNEX_ASSETS_URI . '/js/footer.js',
        ['lucide-icons'],
        $ver,
        true
    );

    // 8. Homepage Component Scripts
    if (is_front_page() || is_home()) {
        wp_enqueue_script('camnex-hero', CAMNEX_ASSETS_URI . '/js/hero.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-shop-by-category', CAMNEX_ASSETS_URI . '/js/shop-by-category.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-property-solutions', CAMNEX_ASSETS_URI . '/js/property-solutions.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-featured-packages', CAMNEX_ASSETS_URI . '/js/featured-packages.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-featured-products-data', CAMNEX_ASSETS_URI . '/js/featured-products-data.js', [], $ver, true);
        wp_enqueue_script('camnex-featured-products', CAMNEX_ASSETS_URI . '/js/featured-products.js', ['camnex-featured-products-data'], $ver, true);
        wp_enqueue_script('camnex-why-choose', CAMNEX_ASSETS_URI . '/js/why-choose.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-brands', CAMNEX_ASSETS_URI . '/js/brands.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-recent-installations', CAMNEX_ASSETS_URI . '/js/recent-installations.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-customer-testimonials', CAMNEX_ASSETS_URI . '/js/customer-testimonials.js', ['camnex-header'], $ver, true);
        wp_enqueue_script('camnex-final-cta', CAMNEX_ASSETS_URI . '/js/final-cta.js', ['camnex-header'], $ver, true);
    }

    // 9. Localize Application Data for AJAX & REST API calls
    wp_localize_script('camnex-header', 'camnexTheme', [
        'ajaxUrl'  => admin_url('admin-ajax.php'),
        'homeUrl'  => home_url('/'),
        'themeUri' => CAMNEX_URI,
        'nonce'    => wp_create_nonce('camnex_security_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'camnex_enqueue_scripts');

/**
 * Preconnect to Google Fonts for performance optimization.
 */
function camnex_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = [
            'href' => 'https://fonts.googleapis.com',
        ];
        $urls[] = [
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        ];
    }
    return $urls;
}
add_filter('wp_resource_hints', 'camnex_resource_hints', 10, 2);
