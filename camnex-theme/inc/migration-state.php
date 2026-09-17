<?php
/**
 * CamneX Bangladesh — WordPress + WooCommerce Migration State & Governance
 *
 * This file serves as the programmatic runtime registry and source of truth
 * for the CamneX theme migration from frozen static frontend to WordPress + WooCommerce.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('CamneX_Migration_State')) :

class CamneX_Migration_State {

    /**
     * Get the complete migration status registry.
     *
     * @return array
     */
    public static function get_registry() {
        return [
            'project' => [
                'name'            => 'CamneX Bangladesh',
                'brand_tagline'   => 'Security, Networking and IT Solutions Company',
                'website'         => 'https://www.camnexbd.com',
                'phone'           => '+880 1540-535150',
                'email'           => 'contact@camnexbd.com',
                'secondary_email' => 'camnexbd@gmail.com',
                'facebook'        => 'https://facebook.com/camnexbd',
                'address'         => 'Block A, Chandrima Model Town, Shop 01, 1st Floor, House 22, Road 06 Main Rd, Dhaka 1207, Bangladesh',
                'primary_color'   => '#F15A24',
                'hover_color'     => '#D94D1C',
            ],
            'phases' => [
                'phase_1' => [
                    'name'         => 'Theme Foundation',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'style.css',
                        'functions.php',
                        'index.php',
                        'inc/setup.php',
                        'inc/enqueue.php',
                        'assets/css/shared/*',
                    ],
                    'dependencies' => [],
                    'notes'        => 'Theme support for title-tag, post-thumbnails, HTML5, custom-logo, woocommerce declared.',
                ],
                'phase_2' => [
                    'name'         => 'Header + Footer',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'header.php',
                        'footer.php',
                        'template-parts/header/*',
                        'template-parts/footer/*',
                        'inc/mega-menu-walker.php',
                        'assets/css/components/header.css',
                        'assets/css/components/footer.css',
                        'assets/js/header.js',
                        'assets/js/footer.js',
                    ],
                    'dependencies' => ['phase_1'],
                    'notes'        => 'Complete frozen parity for topbar, mega-menu, search, action buttons, footer columns.',
                ],
                'phase_3' => [
                    'name'         => 'Homepage Shell + Frozen Frontend Parity',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'front-page.php',
                        'template-parts/home/*',
                        'assets/css/features/*',
                        'assets/js/*',
                    ],
                    'dependencies' => ['phase_1', 'phase_2'],
                    'notes'        => 'Strict frozen homepage sequence of 10 sections. 8-brand parity verified.',
                ],
                'phase_4' => [
                    'name'         => 'WooCommerce Foundation',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/woocommerce-hooks.php',
                        'template-parts/woocommerce/product-card.php',
                        'woocommerce/content-product.php',
                        'woocommerce/archive-product.php',
                        'woocommerce/single-product.php',
                        'assets/css/features/woocommerce.css',
                    ],
                    'dependencies' => ['phase_1', 'phase_2', 'phase_3'],
                    'notes'        => 'WooCommerce wrappers, AJAX cart fragments, semantic product card, catalog grid.',
                ],
                'phase_5' => [
                    'name'         => 'Product Catalog System',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'woocommerce/taxonomy-product-cat.php',
                        'woocommerce/single-product/warranty-support.php',
                        'woocommerce/single-product/installation-cta.php',
                        'inc/woocommerce-catalog.php',
                    ],
                    'dependencies' => ['phase_4'],
                    'notes'        => 'Category presentation, specification table architecture, warranty/support box, installation quote CTA.',
                ],
                'phase_6' => [
                    'name'         => 'Brand Taxonomy',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/taxonomies.php',
                        'woocommerce/taxonomy-brand.php',
                    ],
                    'dependencies' => ['phase_5'],
                    'notes'        => 'Custom taxonomy "brand" registered for products and packages with logo meta and archives.',
                ],
                'phase_7' => [
                    'name'         => 'CCTV Package System',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/post-types.php',
                        'template-parts/packages/package-card.php',
                        'single-cctv_package.php',
                        'archive-cctv_package.php',
                        'assets/css/features/packages-system.css',
                    ],
                    'dependencies' => ['phase_5', 'phase_6'],
                    'notes'        => 'Hybrid cctv_package CPT linked to WooCommerce products (2, 4, 8, 16 camera tiers).',
                ],
                'phase_8' => [
                    'name'         => 'Solutions / Projects / Testimonials',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'single-solutions.php',
                        'archive-solutions.php',
                        'single-projects.php',
                        'archive-projects.php',
                        'single-testimonials.php',
                    ],
                    'dependencies' => ['phase_7'],
                    'notes'        => 'Dynamic CPTs for solutions, projects (recent installations), and verified customer testimonials.',
                ],
                'phase_9' => [
                    'name'         => 'Quote + Site Visit System',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/quote-handler.php',
                        'template-parts/common/quote-modal.php',
                        'assets/js/quote-modal.js',
                    ],
                    'dependencies' => ['phase_8'],
                    'notes'        => 'Secure quote_request CPT with nonce verification, validation, sanitize, admin notification.',
                ],
                'phase_10' => [
                    'name'         => 'SEO Architecture',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/schema.php',
                    ],
                    'dependencies' => ['phase_9'],
                    'notes'        => 'Rank Math compatibility layer, LocalBusiness schema, BreadcrumbList, OpenGraph fallback.',
                ],
                'phase_11' => [
                    'name'         => 'Business Profile / Admin',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/customizer.php',
                        'inc/helpers.php',
                    ],
                    'dependencies' => ['phase_10'],
                    'notes'        => 'Centralized business profile helper functions and customizer controls.',
                ],
                'phase_12' => [
                    'name'         => 'Final QA / Release Preparation',
                    'status'       => 'COMPLETE',
                    'files'        => [
                        'inc/security.php',
                        'CAMNEX-MIGRATION-STATE.md',
                    ],
                    'dependencies' => ['phase_11'],
                    'notes'        => 'Comprehensive validation of PHP syntax, accessibility, responsiveness, security, and parity.',
                ],
            ],
            'architectural_rules' => [
                'frontend_source_protected'   => true,
                'no_fake_products_bulk_import'=> true,
                'no_unauthentic_project_claim'=> true,
                'preserved_homepage_order'    => true,
                'preserved_8_brands'          => true,
                'prefix_requirement'          => 'camnex_',
                'css_namespace'               => '.cx-',
                'brand_primary'               => '#F15A24',
                'brand_hover'                 => '#D94D1C',
            ],
            'runtime_limitations' => [
                'wordpress_runtime'           => 'PENDING_SERVER_ENVIRONMENT',
                'woocommerce_runtime'         => 'PENDING_SERVER_ENVIRONMENT',
                'authentic_project_photos'    => 'PENDING_CLIENT_UPLOAD',
                'real_product_catalog_feed'   => 'PENDING_CLIENT_IMPORT',
            ]
        ];
    }
}

endif;
