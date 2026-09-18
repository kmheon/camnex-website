<?php
/**
 * CamneX Bangladesh — JSON-LD Structured Data & Local Business Schema
 *
 * Implements Google-compliant Schema.org markup:
 * 1. LocalBusiness / SecuritySystemSupplier
 * 2. WebSite with Sitelinks Searchbox
 * 3. BreadcrumbList
 * 4. Product / CCTV Package Schema
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output JSON-LD in <head>
 */
function camnex_output_schema_jsonld() {
    $schemas = [];

    // 1. Organization & Local Business Schema
    $local_business = [
        '@context'        => 'https://schema.org',
        '@type'           => 'SecuritySystemSupplier',
        '@id'             => home_url('/#organization'),
        'name'            => 'CamneX Bangladesh',
        'alternateName'   => 'CamneX Security & IT Solutions',
        'legalName'       => 'CamneX Bangladesh',
        'url'             => home_url('/'),
        'logo'            => CAMNEX_ASSETS_URI . '/images/camnex-logo.png',
        'image'           => CAMNEX_ASSETS_URI . '/images/og-cover.png',
        'description'     => 'Authorized distributor and certified installer of security cameras, CCTV systems, enterprise networking and IT infrastructure across Dhaka and Bangladesh.',
        'telephone'       => '+8801540535150',
        'email'           => 'contact@camnexbd.com',
        'priceRange'      => '৳৳',
        'currenciesAccepted' => 'BDT',
        'paymentAccepted' => 'Cash, Credit Card, bKash, Nagad, Bank Transfer',
        'address'         => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Block A, Chandrima Model Town, Shop 01, 1st Floor, House 22, Road 06 Main Rd',
            'addressLocality'  => 'Dhaka',
            'postalCode'      => '1207',
            'addressCountry'  => 'BD',
        ],
        'geo'             => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => 23.7465,
            'longitude' => 90.3760,
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens'     => '09:00',
                'closes'    => '20:00',
            ]
        ],
        'sameAs'          => [
            'https://www.facebook.com/camnexbd',
            'https://www.youtube.com/@camnexbd',
            'https://www.linkedin.com/company/camnexbd',
        ],
        'areaServed'      => [
            '@type' => 'Country',
            'name'  => 'Bangladesh',
        ],
    ];

    $schemas[] = $local_business;

    // 2. WebSite Schema with SearchAction
    if (is_front_page()) {
        $schemas[] = [
            '@context'        => 'https://schema.org',
            '@type'           => 'WebSite',
            '@id'             => home_url('/#website'),
            'url'             => home_url('/'),
            'name'            => 'CamneX Bangladesh',
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => home_url('/?s={search_term_string}&post_type=product'),
                'query-input' => 'required name=search_term_string',
            ]
        ];
    }

    // 3. BreadcrumbList Schema
    if (!is_front_page()) {
        $breadcrumbs = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Home',
                    'item'     => home_url('/'),
                ]
            ]
        ];

        $pos = 2;

        if (is_singular('product')) {
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => 'Shop',
                'item'     => function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/'),
            ];
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            ];
        } elseif (is_singular('cctv_package')) {
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => 'CCTV Packages',
                'item'     => get_post_type_archive_link('cctv_package'),
            ];
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            ];
        } elseif (is_singular('solutions')) {
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => 'Property Solutions',
                'item'     => get_post_type_archive_link('solutions'),
            ];
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            ];
        } elseif (is_tax('product_cat')) {
            $term = get_queried_object();
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => $term->name,
                'item'     => get_term_link($term),
            ];
        } elseif (is_tax('brand')) {
            $term = get_queried_object();
            $breadcrumbs['itemListElement'][] = [
                '@type'    => 'ListItem',
                'position' => $pos++,
                'name'     => $term->name,
                'item'     => get_term_link($term),
            ];
        }

        $schemas[] = $breadcrumbs;
    }

    // 4. CCTV Package Schema as Product
    if (is_singular('cctv_package')) {
        $pkg_id    = get_the_ID();
        $reg_price = get_post_meta($pkg_id, '_camnex_price', true);
        $sal_price = get_post_meta($pkg_id, '_camnex_sale_price', true);
        $price     = $sal_price ?: ($reg_price ?: '0');

        $brand_term = camnex_get_primary_brand($pkg_id);
        $brand_name = $brand_term ? $brand_term->name : 'CamneX';

        $package_schema = [
            '@context'    => 'https://schema.org',
            '@type'       => 'Product',
            'name'        => get_the_title(),
            'description' => get_the_excerpt() ?: get_the_title(),
            'brand'       => [
                '@type' => 'Brand',
                'name'  => $brand_name,
            ],
            'offers'      => [
                '@type'         => 'Offer',
                'priceCurrency' => 'BDT',
                'price'         => (string)$price,
                'availability'  => 'https://schema.org/InStock',
                'url'           => get_permalink(),
                'seller'        => [
                    '@type' => 'Organization',
                    'name'  => 'CamneX Bangladesh',
                ]
            ]
        ];

        if (has_post_thumbnail()) {
            $package_schema['image'] = get_the_post_thumbnail_url($pkg_id, 'full');
        }

        $schemas[] = $package_schema;
    }

    // Output all schemas
    foreach ($schemas as $schema) {
        echo "\n<script type=\"application/ld+json\">\n";
        echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        echo "\n</script>\n";
    }
}
add_action('wp_head', 'camnex_output_schema_jsonld', 20);
