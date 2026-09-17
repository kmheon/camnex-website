<?php
/**
 * CamneX Bangladesh — CCTV Package Card Template Part
 *
 * Reusable package card matching the frozen component layout,
 * presenting camera count, inclusions (cables, adapters, baluns, HDD),
 * warranty, and WooCommerce add-to-cart link.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$pkg_id = get_the_ID();
$camera_count = get_post_meta($pkg_id, '_camnex_camera_count', true) ?: '4';
$camera_type  = get_post_meta($pkg_id, '_camnex_camera_type', true) ?: 'Full HD Night Vision';
$regular_price = get_post_meta($pkg_id, '_camnex_price', true);
$sale_price    = get_post_meta($pkg_id, '_camnex_sale_price', true);
$hdd_size      = get_post_meta($pkg_id, '_camnex_hdd', true) ?: '1TB Surveillance HDD';
$dvr_nvr       = get_post_meta($pkg_id, '_camnex_dvr_nvr', true) ?: sprintf(__('%s-Channel Digital Video Recorder', 'camnex'), $camera_count);
$warranty      = get_post_meta($pkg_id, '_camnex_warranty', true) ?: __('1 Year Official Warranty', 'camnex');
$linked_prod   = get_post_meta($pkg_id, '_camnex_linked_product_id', true);

// Resolve Brand
$brand_term = camnex_get_primary_brand($pkg_id);
$brand_name = $brand_term ? $brand_term->name : 'CamneX Verified';

// Calculate Savings
$savings = 0;
if ($regular_price && $sale_price && (float)$regular_price > (float)$sale_price) {
    $savings = (float)$regular_price - (float)$sale_price;
}

// Add to Cart URL
$order_url = get_permalink($pkg_id);
if ($linked_prod && function_exists('wc_get_cart_url')) {
    $order_url = add_query_arg('add-to-cart', $linked_prod, wc_get_cart_url());
}
?>

<article class="cx-package-card" data-cameras="<?php echo esc_attr($camera_count); ?>">
    <div class="cx-package-badge-row">
        <span class="cx-pkg-tag cx-pkg-brand"><?php echo esc_html($brand_name); ?></span>
        <?php if ($savings > 0) : ?>
            <span class="cx-pkg-tag cx-pkg-save"><?php printf(esc_html__('Save ৳%s', 'camnex'), number_format_i18n($savings)); ?></span>
        <?php endif; ?>
    </div>

    <div class="cx-package-image-wrap">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('camnex-package-thumb', ['class' => 'cx-package-img', 'loading' => 'lazy']); ?>
        <?php else : ?>
            <img src="<?php echo esc_url(CAMNEX_ASSETS_URI . '/placeholders/CCTV Packages.png'); ?>" alt="<?php the_title_attribute(); ?>" class="cx-package-img" loading="lazy">
        <?php endif; ?>
    </div>

    <div class="cx-package-content">
        <h3 class="cx-package-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <div class="cx-package-camera-tier">
            <i data-lucide="video" class="cx-tier-icon" aria-hidden="true"></i>
            <span><?php printf(esc_html__('%1$s Camera Kit (%2$s)', 'camnex'), esc_html($camera_count), esc_html($camera_type)); ?></span>
        </div>

        <ul class="cx-package-inclusions" aria-label="<?php esc_attr_e('Package Inclusions', 'camnex'); ?>">
            <li><i data-lucide="check" aria-hidden="true"></i> <?php echo esc_html($dvr_nvr); ?></li>
            <li><i data-lucide="check" aria-hidden="true"></i> <?php echo esc_html($hdd_size); ?></li>
            <li><i data-lucide="check" aria-hidden="true"></i> <?php printf(esc_html__('%d × 10m High-Grade Cable & Connectors', 'camnex'), (int)$camera_count); ?></li>
            <li><i data-lucide="check" aria-hidden="true"></i> <?php printf(esc_html__('%d × Video Baluns & Power Adapters', 'camnex'), (int)$camera_count); ?></li>
            <li><i data-lucide="check" aria-hidden="true"></i> <?php esc_html_e('Mobile App Remote Viewing Setup', 'camnex'); ?></li>
            <li><i data-lucide="check" aria-hidden="true"></i> <?php echo esc_html($warranty); ?></li>
        </ul>

        <div class="cx-package-footer">
            <div class="cx-package-price-wrap">
                <?php if ($sale_price) : ?>
                    <span class="cx-pkg-price-current">৳<?php echo esc_html(number_format_i18n((float)$sale_price)); ?></span>
                    <?php if ($regular_price) : ?>
                        <span class="cx-pkg-price-regular">৳<?php echo esc_html(number_format_i18n((float)$regular_price)); ?></span>
                    <?php endif; ?>
                <?php elseif ($regular_price) : ?>
                    <span class="cx-pkg-price-current">৳<?php echo esc_html(number_format_i18n((float)$regular_price)); ?></span>
                <?php else : ?>
                    <span class="cx-pkg-price-quote"><?php esc_html_e('Call for Pricing', 'camnex'); ?></span>
                <?php endif; ?>
            </div>

            <div class="cx-package-actions">
                <a href="<?php echo esc_url($order_url); ?>" class="cx-btn-pkg-order">
                    <i data-lucide="shopping-bag" aria-hidden="true"></i>
                    <span><?php esc_html_e('Order Package', 'camnex'); ?></span>
                </a>
                <a href="<?php the_permalink(); ?>" class="cx-btn-pkg-detail" aria-label="<?php esc_attr_e('View full package specifications', 'camnex'); ?>">
                    <i data-lucide="arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</article>
