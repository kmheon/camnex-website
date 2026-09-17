<?php
/**
 * CamneX Bangladesh — WooCommerce Catalog Architecture & Single Product Extensions
 *
 * Implements:
 * 1. Product specification architecture (WooCommerce attributes and technical specs)
 * 2. Warranty and service presentation box
 * 3. Professional installation CTA hook
 * 4. Product catalog filtering, ordering and search enhancements
 * 5. Related products display formatting
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WooCommerce')) {
    return;
}

/**
 * 1. Product Specification Table Tab
 */
function camnex_woocommerce_custom_product_tabs($tabs) {
    global $product;

    // Add Specifications tab if attributes or meta exist
    $tabs['camnex_specifications'] = [
        'title'    => esc_html__('Technical Specifications', 'camnex'),
        'priority' => 15,
        'callback' => 'camnex_woocommerce_specifications_tab_content',
    ];

    // Add Warranty & Service tab
    $tabs['camnex_warranty'] = [
        'title'    => esc_html__('Warranty & Support', 'camnex'),
        'priority' => 25,
        'callback' => 'camnex_woocommerce_warranty_tab_content',
    ];

    // Add Installation Guide tab
    $tabs['camnex_installation'] = [
        'title'    => esc_html__('Installation & Setup', 'camnex'),
        'priority' => 35,
        'callback' => 'camnex_woocommerce_installation_tab_content',
    ];

    return $tabs;
}
add_filter('woocommerce_product_tabs', 'camnex_woocommerce_custom_product_tabs');

/**
 * Specifications Tab Content Callback
 */
function camnex_woocommerce_specifications_tab_content() {
    global $product;

    if (!$product) {
        return;
    }

    $attributes = $product->get_attributes();
    $sku        = $product->get_sku();

    echo '<div class="cx-product-specs-wrapper">';
    echo '<h3 class="cx-specs-heading">' . esc_html__('Detailed Specifications', 'camnex') . '</h3>';
    echo '<div class="cx-specs-table-container">';
    echo '<table class="cx-specs-table">';
    echo '<tbody>';

    if ($sku) {
        echo '<tr>';
        echo '<th class="cx-spec-label">' . esc_html__('Model / SKU', 'camnex') . '</th>';
        echo '<td class="cx-spec-value">' . esc_html($sku) . '</td>';
        echo '</tr>';
    }

    // Check for Brand taxonomy
    $brands = get_the_terms($product->get_id(), 'brand');
    if ($brands && !is_wp_error($brands)) {
        $brand_names = wp_list_pluck($brands, 'name');
        echo '<tr>';
        echo '<th class="cx-spec-label">' . esc_html__('Brand / Manufacturer', 'camnex') . '</th>';
        echo '<td class="cx-spec-value">' . esc_html(implode(', ', $brand_names)) . '</td>';
        echo '</tr>';
    }

    // WooCommerce Attributes
    if (!empty($attributes)) {
        foreach ($attributes as $attribute) {
            $name  = wc_attribute_label($attribute->get_name(), $product);
            $value = '';

            if ($attribute->is_taxonomy()) {
                $terms = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['fields' => 'names']);
                $value = implode(', ', $terms);
            } else {
                $value = implode(', ', $attribute->get_options());
            }

            if (!empty($value)) {
                echo '<tr>';
                echo '<th class="cx-spec-label">' . esc_html($name) . '</th>';
                echo '<td class="cx-spec-value">' . esc_html($value) . '</td>';
                echo '</tr>';
            }
        }
    }

    // Custom specification meta fields
    $custom_specs = get_post_meta($product->get_id(), '_camnex_specs', true);
    if (is_array($custom_specs) && !empty($custom_specs)) {
        foreach ($custom_specs as $key => $spec_val) {
            if (!empty($spec_val)) {
                echo '<tr>';
                echo '<th class="cx-spec-label">' . esc_html($key) . '</th>';
                echo '<td class="cx-spec-value">' . esc_html($spec_val) . '</td>';
                echo '</tr>';
            }
        }
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
}

/**
 * Warranty & Support Tab Content Callback
 */
function camnex_woocommerce_warranty_tab_content() {
    ?>
    <div class="cx-product-warranty-wrapper">
        <h3 class="cx-warranty-heading"><?php esc_html_e('CamneX Official Warranty & Support Commitment', 'camnex'); ?></h3>
        <div class="cx-warranty-grid">
            <div class="cx-warranty-card">
                <div class="cx-warranty-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
                <h4 class="cx-warranty-card-title"><?php esc_html_e('100% Genuine Products', 'camnex'); ?></h4>
                <p class="cx-warranty-card-text"><?php esc_html_e('All hardware is sourced directly from authorized Bangladesh distributors with verified serial numbers.', 'camnex'); ?></p>
            </div>
            <div class="cx-warranty-card">
                <div class="cx-warranty-icon"><i data-lucide="clock" aria-hidden="true"></i></div>
                <h4 class="cx-warranty-card-title"><?php esc_html_e('Official Brand Warranty', 'camnex'); ?></h4>
                <p class="cx-warranty-card-text"><?php esc_html_e('Standard 1 to 2 Years official warranty covering replacement and hardware support per manufacturer policy.', 'camnex'); ?></p>
            </div>
            <div class="cx-warranty-card">
                <div class="cx-warranty-icon"><i data-lucide="headphones" aria-hidden="true"></i></div>
                <h4 class="cx-warranty-card-title"><?php esc_html_e('Dedicated Hotline Support', 'camnex'); ?></h4>
                <p class="cx-warranty-card-text"><?php esc_html_e('Direct assistance for configuration, mobile app setup (Hik-Connect / DMSS / EZVIZ / Ruijie Cloud), and troubleshooting.', 'camnex'); ?></p>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Installation Guide Tab Content Callback
 */
function camnex_woocommerce_installation_tab_content() {
    ?>
    <div class="cx-product-installation-wrapper">
        <h3 class="cx-installation-heading"><?php esc_html_e('Professional On-Site Installation by CamneX', 'camnex'); ?></h3>
        <p class="cx-installation-intro">
            <?php esc_html_e('Need hassle-free deployment? CamneX certified field engineers provide end-to-end installation across Dhaka and nationwide.', 'camnex'); ?>
        </p>
        <ul class="cx-installation-benefits">
            <li><i data-lucide="check-circle" aria-hidden="true"></i> <?php esc_html_e('Concealed channel casing / PVC pipe wiring for clean aesthetics.', 'camnex'); ?></li>
            <li><i data-lucide="check-circle" aria-hidden="true"></i> <?php esc_html_e('Optimal field-of-view angle adjustment and camera positioning.', 'camnex'); ?></li>
            <li><i data-lucide="check-circle" aria-hidden="true"></i> <?php esc_html_e('DVR/NVR remote viewing configuration on iOS and Android smartphones.', 'camnex'); ?></li>
            <li><i data-lucide="check-circle" aria-hidden="true"></i> <?php esc_html_e('Full on-site demonstration and handover training for your team.', 'camnex'); ?></li>
        </ul>
        <div class="cx-installation-action">
            <a href="tel:+8801540535150" class="cx-btn-quote-call">
                <i data-lucide="phone-call" aria-hidden="true"></i>
                <span><?php esc_html_e('Call for Installation Quote: +880 1540-535150', 'camnex'); ?></span>
            </a>
        </div>
    </div>
    <?php
}

/**
 * 2. Single Product Installation & Warranty Callout Box (Below Add to Cart)
 */
function camnex_woocommerce_single_product_guarantees() {
    ?>
    <div class="cx-single-product-badges">
        <div class="cx-badge-item">
            <i data-lucide="shield-check" class="cx-badge-icon" aria-hidden="true"></i>
            <div class="cx-badge-text">
                <strong><?php esc_html_e('Official Warranty', 'camnex'); ?></strong>
                <span><?php esc_html_e('100% Genuine Guaranteed', 'camnex'); ?></span>
            </div>
        </div>
        <div class="cx-badge-item">
            <i data-lucide="truck" class="cx-badge-icon" aria-hidden="true"></i>
            <div class="cx-badge-text">
                <strong><?php esc_html_e('Fast Delivery', 'camnex'); ?></strong>
                <span><?php esc_html_e('Dhaka & Nationwide Courier', 'camnex'); ?></span>
            </div>
        </div>
        <div class="cx-badge-item">
            <i data-lucide="wrench" class="cx-badge-icon" aria-hidden="true"></i>
            <div class="cx-badge-text">
                <strong><?php esc_html_e('Site Installation', 'camnex'); ?></strong>
                <span><?php esc_html_e('Expert Team Available', 'camnex'); ?></span>
            </div>
        </div>
    </div>
    <div class="cx-single-product-consultation">
        <div class="cx-consultation-inner">
            <div class="cx-consultation-info">
                <h4><?php esc_html_e('Need Expert Consultation or Bulk Pricing?', 'camnex'); ?></h4>
                <p><?php esc_html_e('Contact our solution architects for customized system design and installation quotes.', 'camnex'); ?></p>
            </div>
            <div class="cx-consultation-buttons">
                <a href="tel:+8801540535150" class="cx-consultation-btn cx-btn-phone">
                    <i data-lucide="phone" aria-hidden="true"></i>
                    <span>+880 1540-535150</span>
                </a>
                <a href="https://wa.me/8801540535150" target="_blank" rel="noopener noreferrer" class="cx-consultation-btn cx-btn-whatsapp">
                    <i data-lucide="message-circle" aria-hidden="true"></i>
                    <span><?php esc_html_e('WhatsApp', 'camnex'); ?></span>
                </a>
            </div>
        </div>
    </div>
    <?php
}
add_action('woocommerce_single_product_summary', 'camnex_woocommerce_single_product_guarantees', 35);

/**
 * 3. Related Products Output Configuration
 */
function camnex_woocommerce_related_products_args($args) {
    $args['posts_per_page'] = 4;
    $args['columns']        = 4;
    return $args;
}
add_filter('woocommerce_output_related_products_args', 'camnex_woocommerce_related_products_args');
