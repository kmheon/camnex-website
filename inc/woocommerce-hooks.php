<?php
/**
 * CamneX Bangladesh — WooCommerce Integration Hooks & Filters
 *
 * This file establishes theme wrappers, AJAX cart fragments, catalog options,
 * and presentation hooks for WooCommerce without executing fatal-risk code
 * when WooCommerce is not active.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Ensure WooCommerce is active before registering hooks.
if (!class_exists('WooCommerce')) {
    return;
}

/**
 * 1. Theme Content Wrappers
 *
 * Replaces default WooCommerce wrappers with CamneX semantic layout structure.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if (!function_exists('camnex_woocommerce_wrapper_before')) :
    /**
     * Opening wrapper for WooCommerce main content.
     */
    function camnex_woocommerce_wrapper_before() {
        ?>
        <main id="primary" class="site-main cx-woocommerce-main">
            <div class="container cx-demo">
        <?php
    }
endif;
add_action('woocommerce_before_main_content', 'camnex_woocommerce_wrapper_before', 10);

if (!function_exists('camnex_woocommerce_wrapper_after')) :
    /**
     * Closing wrapper for WooCommerce main content.
     */
    function camnex_woocommerce_wrapper_after() {
        ?>
            </div>
        </main>
        <?php
    }
endif;
add_action('woocommerce_after_main_content', 'camnex_woocommerce_wrapper_after', 10);

/**
 * 2. Header Cart Dynamic AJAX Fragment
 *
 * Synchronizes the existing CamneX header cart badge and accessible count
 * without duplicating DOM or altering the frozen header design.
 */
if (!function_exists('camnex_woocommerce_cart_fragment')) :
    function camnex_woocommerce_cart_fragment($fragments) {
        if (!function_exists('WC') || !WC()->cart) {
            return $fragments;
        }

        $cart_count = WC()->cart->get_cart_contents_count();
        $cart_url   = wc_get_cart_url();

        ob_start();
        ?>
        <a href="<?php echo esc_url($cart_url); ?>" class="cx-action-icon-btn cx-cart-btn" aria-label="<?php echo esc_attr(sprintf(__('Shopping Cart, %d items', 'camnex'), $cart_count)); ?>">
            <i data-lucide="shopping-bag" aria-hidden="true"></i>
            <span class="cx-cart-badge" aria-hidden="true"><?php echo esc_html($cart_count); ?></span>
            <span class="cx-sr-only"><?php echo esc_html(sprintf(__('( %d items in cart)', 'camnex'), $cart_count)); ?></span>
        </a>
        <?php
        $fragments['a.cx-cart-btn'] = ob_get_clean();

        return $fragments;
    }
endif;
add_filter('woocommerce_add_to_cart_fragments', 'camnex_woocommerce_cart_fragment');

/**
 * 3. Breadcrumbs Formatting
 *
 * Adapts WooCommerce breadcrumb markup to CamneX semantic navigation.
 */
if (!function_exists('camnex_woocommerce_breadcrumbs')) :
    function camnex_woocommerce_breadcrumbs() {
        return [
            'delimiter'   => '<span class="cx-breadcrumb-sep" aria-hidden="true">/</span>',
            'wrap_before' => '<nav class="cx-woocommerce-breadcrumb" aria-label="' . esc_attr__('Breadcrumb', 'camnex') . '">',
            'wrap_after'  => '</nav>',
            'before'      => '<span class="cx-breadcrumb-item">',
            'after'       => '</span>',
            'home'        => _x('Home', 'breadcrumb', 'camnex'),
        ];
    }
endif;
add_filter('woocommerce_breadcrumb_defaults', 'camnex_woocommerce_breadcrumbs');

/**
 * 4. Catalog Grid Layout Options
 *
 * Configures default columns and items per page matching CamneX desktop/mobile grid.
 */
if (!function_exists('camnex_woocommerce_loop_columns')) :
    function camnex_woocommerce_loop_columns() {
        return 4; // 4 columns on desktop
    }
endif;
add_filter('loop_shop_columns', 'camnex_woocommerce_loop_columns');

if (!function_exists('camnex_woocommerce_loop_per_page')) :
    function camnex_woocommerce_loop_per_page() {
        return 12; // 12 items per catalog page
    }
endif;
add_filter('loop_shop_per_page', 'camnex_woocommerce_loop_per_page', 20);

/**
 * 5. Pagination Customization
 *
 * Customizes pagination arrows to use semantic text matching CamneX pagination controls.
 */
if (!function_exists('camnex_woocommerce_pagination_args')) :
    function camnex_woocommerce_pagination_args($args) {
        $args['prev_text'] = '&larr; ' . esc_html__('Previous', 'camnex');
        $args['next_text'] = esc_html__('Next', 'camnex') . ' &rarr;';
        $args['type']      = 'list';
        return $args;
    }
endif;
add_filter('woocommerce_pagination_args', 'camnex_woocommerce_pagination_args');
