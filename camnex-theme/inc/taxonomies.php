<?php
/**
 * CamneX Bangladesh — Custom Taxonomies Registration
 *
 * Registers the 'brand' custom taxonomy for WooCommerce products and CCTV packages,
 * along with term metadata handlers for brand logos, origin, and partner tiers.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register 'brand' Custom Taxonomy
 */
function camnex_register_brand_taxonomy() {
    $labels = [
        'name'                       => _x('Brands', 'taxonomy general name', 'camnex'),
        'singular_name'              => _x('Brand', 'taxonomy singular name', 'camnex'),
        'search_items'               => __('Search Brands', 'camnex'),
        'popular_items'              => __('Popular Brands', 'camnex'),
        'all_items'                  => __('All Brands', 'camnex'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Brand', 'camnex'),
        'update_item'                => __('Update Brand', 'camnex'),
        'add_new_item'               => __('Add New Brand', 'camnex'),
        'new_item_name'              => __('New Brand Name', 'camnex'),
        'separate_items_with_commas' => __('Separate brands with commas', 'camnex'),
        'add_or_remove_items'        => __('Add or remove brands', 'camnex'),
        'choose_from_most_used'      => __('Choose from the most used brands', 'camnex'),
        'not_found'                  => __('No brands found.', 'camnex'),
        'menu_name'                  => __('Brands', 'camnex'),
    ];

    $args = [
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => ['slug' => 'brand', 'with_front' => false],
        'show_in_rest'          => true,
        'show_in_nav_menus'     => true,
        'show_tagcloud'         => false,
    ];

    // Register for products and cctv packages
    register_taxonomy('brand', ['product', 'cctv_package'], $args);
}
add_action('init', 'camnex_register_brand_taxonomy', 0);

/**
 * Helper: Retrieve the primary brand of a product or package.
 *
 * @param int|null $post_id
 * @return WP_Term|null
 */
function camnex_get_primary_brand($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $terms = get_the_terms($post_id, 'brand');
    if ($terms && !is_wp_error($terms) && !empty($terms)) {
        return reset($terms);
    }

    return null;
}

/**
 * Helper: Retrieve brand logo URL with fallback to theme assets.
 *
 * @param int|WP_Term $term
 * @return string
 */
function camnex_get_brand_logo_url($term) {
    if (is_numeric($term)) {
        $term = get_term($term, 'brand');
    }

    if (!$term || is_wp_error($term)) {
        return '';
    }

    // Check term meta for custom uploaded logo ID or URL
    $custom_logo_id = get_term_meta($term->term_id, '_camnex_brand_logo_id', true);
    if ($custom_logo_id) {
        $img_src = wp_get_attachment_image_url($custom_logo_id, 'medium');
        if ($img_src) {
            return $img_src;
        }
    }

    // Fallback to static theme brand assets based on slug
    $slug_clean = sanitize_title($term->slug);
    $local_path = CAMNEX_DIR . '/assets/brands/' . $slug_clean . '.png';
    if (file_exists($local_path)) {
        return CAMNEX_ASSETS_URI . '/brands/' . $slug_clean . '.png';
    }

    return '';
}
