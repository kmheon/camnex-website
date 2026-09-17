<?php
/**
 * CamneX Bangladesh — Custom Post Types Registration
 *
 * Registers:
 * 1. cctv_package — CCTV Bundles & Packages (Linked to WooCommerce)
 * 2. solutions    — Property & Industry Security Solutions
 * 3. projects     — Recent Installations & Case Studies
 * 4. testimonials — Verified Customer Reviews & Testimonials
 * 5. quote_request— Inquiries & Site Visit Booking Submissions
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register all theme custom post types.
 */
function camnex_register_post_types() {

    // 1. CCTV Packages CPT
    $pkg_labels = [
        'name'               => _x('CCTV Packages', 'post type general name', 'camnex'),
        'singular_name'      => _x('CCTV Package', 'post type singular name', 'camnex'),
        'menu_name'          => _x('CCTV Packages', 'admin menu', 'camnex'),
        'name_admin_bar'     => _x('CCTV Package', 'add new on admin bar', 'camnex'),
        'add_new'            => _x('Add New Package', 'package', 'camnex'),
        'add_new_item'       => __('Add New CCTV Package', 'camnex'),
        'new_item'           => __('New CCTV Package', 'camnex'),
        'edit_item'          => __('Edit CCTV Package', 'camnex'),
        'view_item'          => __('View CCTV Package', 'camnex'),
        'all_items'          => __('All Packages', 'camnex'),
        'search_items'       => __('Search CCTV Packages', 'camnex'),
        'not_found'          => __('No packages found.', 'camnex'),
        'not_found_in_trash' => __('No packages found in Trash.', 'camnex'),
    ];

    register_post_type('cctv_package', [
        'labels'             => $pkg_labels,
        'description'        => __('Pre-configured CCTV security bundles ready for installation.', 'camnex'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'packages', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'packages',
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-video-alt3',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true,
        'taxonomies'         => ['brand'],
    ]);

    // 2. Solutions CPT (Property Solutions)
    $sol_labels = [
        'name'               => _x('Solutions', 'post type general name', 'camnex'),
        'singular_name'      => _x('Solution', 'post type singular name', 'camnex'),
        'menu_name'          => _x('Solutions', 'admin menu', 'camnex'),
        'add_new'            => _x('Add New Solution', 'solution', 'camnex'),
        'add_new_item'       => __('Add New Solution', 'camnex'),
        'edit_item'          => __('Edit Solution', 'camnex'),
        'view_item'          => __('View Solution', 'camnex'),
        'all_items'          => __('All Solutions', 'camnex'),
        'search_items'       => __('Search Solutions', 'camnex'),
    ];

    register_post_type('solutions', [
        'labels'             => $sol_labels,
        'description'        => __('Industry & property tailored security system architectures.', 'camnex'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'solutions', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'solutions',
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-building',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
    ]);

    // 3. Projects CPT (Recent Installations)
    $proj_labels = [
        'name'               => _x('Projects', 'post type general name', 'camnex'),
        'singular_name'      => _x('Project', 'post type singular name', 'camnex'),
        'menu_name'          => _x('Installations', 'admin menu', 'camnex'),
        'add_new'            => _x('Add New Installation', 'project', 'camnex'),
        'add_new_item'       => __('Add New Installation Showcase', 'camnex'),
        'edit_item'          => __('Edit Installation', 'camnex'),
        'view_item'          => __('View Installation', 'camnex'),
        'all_items'          => __('All Installations', 'camnex'),
        'search_items'       => __('Search Installations', 'camnex'),
    ];

    register_post_type('projects', [
        'labels'             => $proj_labels,
        'description'        => __('Real verified CamneX security deployments across Bangladesh.', 'camnex'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'installations', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'installations',
        'hierarchical'       => false,
        'menu_position'      => 8,
        'menu_icon'          => 'dashicons-camera',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
    ]);

    // 4. Testimonials CPT
    $test_labels = [
        'name'               => _x('Testimonials', 'post type general name', 'camnex'),
        'singular_name'      => _x('Testimonial', 'post type singular name', 'camnex'),
        'menu_name'          => _x('Testimonials', 'admin menu', 'camnex'),
        'add_new'            => _x('Add Testimonial', 'testimonial', 'camnex'),
        'add_new_item'       => __('Add New Customer Review', 'camnex'),
        'edit_item'          => __('Edit Testimonial', 'camnex'),
        'view_item'          => __('View Testimonial', 'camnex'),
        'all_items'          => __('All Testimonials', 'camnex'),
    ];

    register_post_type('testimonials', [
        'labels'             => $test_labels,
        'description'        => __('Client reviews and verification badges.', 'camnex'),
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 9,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => ['title', 'editor', 'thumbnail'],
        'show_in_rest'       => true,
    ]);

    // 5. Quote Requests CPT (Lead generation & site visits)
    $quote_labels = [
        'name'               => _x('Quote Requests', 'post type general name', 'camnex'),
        'singular_name'      => _x('Quote Request', 'post type singular name', 'camnex'),
        'menu_name'          => _x('Quote Requests', 'admin menu', 'camnex'),
        'all_items'          => __('All Inquiries', 'camnex'),
        'edit_item'          => __('View / Process Inquiry', 'camnex'),
        'search_items'       => __('Search Requests', 'camnex'),
        'not_found'          => __('No inquiries found.', 'camnex'),
    ];

    register_post_type('quote_request', [
        'labels'             => $quote_labels,
        'description'        => __('Customer consultation, quote, and site inspection submissions.', 'camnex'),
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => ['title', 'custom-fields'],
        'capabilities'       => [
            'create_posts' => false, // Only created via front-end form
        ],
        'map_meta_cap'       => true,
    ]);
}
add_action('init', 'camnex_register_post_types', 0);

/**
 * Custom Admin Columns for CCTV Packages
 */
function camnex_cctv_package_admin_columns($columns) {
    $new_cols = [];
    $new_cols['cb']          = $columns['cb'];
    $new_cols['thumbnail']   = __('Image', 'camnex');
    $new_cols['title']       = $columns['title'];
    $new_cols['brand']       = __('Brand', 'camnex');
    $new_cols['camera_cnt']  = __('Cameras', 'camnex');
    $new_cols['price']       = __('Price (BDT)', 'camnex');
    $new_cols['linked_prod'] = __('WooCommerce Link', 'camnex');
    $new_cols['date']        = $columns['date'];
    return $new_cols;
}
add_filter('manage_cctv_package_posts_columns', 'camnex_cctv_package_admin_columns');

function camnex_cctv_package_custom_column_content($column, $post_id) {
    switch ($column) {
        case 'thumbnail':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, [50, 50]);
            } else {
                echo '<span class="dashicons dashicons-format-image" style="color:#94a3b8;"></span>';
            }
            break;
        case 'brand':
            $terms = get_the_terms($post_id, 'brand');
            if ($terms && !is_wp_error($terms)) {
                echo esc_html(implode(', ', wp_list_pluck($terms, 'name')));
            } else {
                echo '—';
            }
            break;
        case 'camera_cnt':
            $cnt = get_post_meta($post_id, '_camnex_camera_count', true);
            echo $cnt ? esc_html($cnt . ' Cams') : '—';
            break;
        case 'price':
            $regular = get_post_meta($post_id, '_camnex_price', true);
            $sale    = get_post_meta($post_id, '_camnex_sale_price', true);
            if ($sale) {
                echo '<del>৳' . esc_html(number_format_i18n((float)$regular)) . '</del> <strong>৳' . esc_html(number_format_i18n((float)$sale)) . '</strong>';
            } elseif ($regular) {
                echo '৳' . esc_html(number_format_i18n((float)$regular));
            } else {
                echo '—';
            }
            break;
        case 'linked_prod':
            $prod_id = get_post_meta($post_id, '_camnex_linked_product_id', true);
            if ($prod_id && function_exists('wc_get_product')) {
                $p = wc_get_product($prod_id);
                if ($p) {
                    echo '<a href="' . esc_url(get_edit_post_link($prod_id)) . '">#' . esc_html($prod_id) . ' ' . esc_html($p->get_name()) . '</a>';
                } else {
                    echo '#' . esc_html($prod_id);
                }
            } else {
                echo '<span style="color:#ef4444;">Not Linked</span>';
            }
            break;
    }
}
add_action('manage_cctv_package_posts_custom_column', 'camnex_cctv_package_custom_column_content', 10, 2);
