<?php
/**
 * CamneX Bangladesh — Single CCTV Package Template
 *
 * Detailed view of pre-configured CCTV bundles, breakdown of hardware components,
 * cables, storage, official warranty, and instant consultation / order CTA.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$pkg_id = get_the_ID();
$camera_count  = get_post_meta($pkg_id, '_camnex_camera_count', true) ?: '4';
$camera_type   = get_post_meta($pkg_id, '_camnex_camera_type', true) ?: 'Night Vision ColorVu Bullet';
$regular_price = get_post_meta($pkg_id, '_camnex_price', true);
$sale_price    = get_post_meta($pkg_id, '_camnex_sale_price', true);
$hdd_size      = get_post_meta($pkg_id, '_camnex_hdd', true) ?: '1TB Surveillance Storage';
$dvr_nvr       = get_post_meta($pkg_id, '_camnex_dvr_nvr', true) ?: sprintf(__('%s-Channel Digital Video Recorder', 'camnex'), $camera_count);
$warranty      = get_post_meta($pkg_id, '_camnex_warranty', true) ?: __('1 Year Official Brand Warranty', 'camnex');
$linked_prod   = get_post_meta($pkg_id, '_camnex_linked_product_id', true);
$brand_term    = camnex_get_primary_brand($pkg_id);
$brand_name    = $brand_term ? $brand_term->name : 'CamneX Verified';

$order_url = '#quote-modal';
if ($linked_prod && function_exists('wc_get_cart_url')) {
    $order_url = add_query_arg('add-to-cart', $linked_prod, wc_get_cart_url());
}
?>

<main id="primary" class="site-main cx-single-package-page">
    <div class="container cx-demo">
        
        <!-- Breadcrumbs -->
        <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <a href="<?php echo esc_url(get_post_type_archive_link('cctv_package')); ?>"><?php esc_html_e('CCTV Packages', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <span class="cx-breadcrumb-item"><?php the_title(); ?></span>
        </nav>

        <div class="cx-package-single-grid">
            
            <!-- Gallery / Showcase Image -->
            <div class="cx-package-single-media">
                <div class="cx-package-hero-thumb">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('camnex-package-thumb', ['class' => 'cx-pkg-detail-img']); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url(CAMNEX_ASSETS_URI . '/placeholders/CCTV Packages.png'); ?>" alt="<?php the_title_attribute(); ?>" class="cx-pkg-detail-img">
                    <?php endif; ?>
                </div>

                <div class="cx-package-quick-guarantees">
                    <div class="cx-pkg-guarantee-item">
                        <i data-lucide="shield-check" aria-hidden="true"></i>
                        <span><?php echo esc_html($warranty); ?></span>
                    </div>
                    <div class="cx-pkg-guarantee-item">
                        <i data-lucide="smartphone" aria-hidden="true"></i>
                        <span><?php esc_html_e('Free Mobile App Setup', 'camnex'); ?></span>
                    </div>
                    <div class="cx-pkg-guarantee-item">
                        <i data-lucide="truck" aria-hidden="true"></i>
                        <span><?php esc_html_e('Express Delivery Dhaka', 'camnex'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Package Details & Inclusions -->
            <div class="cx-package-single-summary">
                <div class="cx-package-tagline-row">
                    <span class="cx-section-badge-label"><?php echo esc_html($brand_name); ?></span>
                    <span class="cx-pkg-tier-badge"><?php printf(esc_html__('%d Cameras Tier', 'camnex'), (int)$camera_count); ?></span>
                </div>

                <h1 class="cx-pkg-single-title"><?php the_title(); ?></h1>

                <div class="cx-pkg-single-price-box">
                    <?php if ($sale_price) : ?>
                        <span class="cx-pkg-main-price">৳<?php echo esc_html(number_format_i18n((float)$sale_price)); ?></span>
                        <?php if ($regular_price) : ?>
                            <del class="cx-pkg-del-price">৳<?php echo esc_html(number_format_i18n((float)$regular_price)); ?></del>
                            <span class="cx-pkg-save-pill">
                                <?php printf(esc_html__('Save ৳%s', 'camnex'), number_format_i18n((float)$regular_price - (float)$sale_price)); ?>
                            </span>
                        <?php endif; ?>
                    <?php elseif ($regular_price) : ?>
                        <span class="cx-pkg-main-price">৳<?php echo esc_html(number_format_i18n((float)$regular_price)); ?></span>
                    <?php else : ?>
                        <span class="cx-pkg-main-price"><?php esc_html_e('Custom Quote on Request', 'camnex'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="cx-pkg-single-excerpt">
                    <?php the_excerpt(); ?>
                </div>

                <!-- Complete Included Hardware Specification Checklist -->
                <div class="cx-pkg-hardware-checklist">
                    <h3 class="cx-checklist-title"><?php esc_html_e('What Is Included In This Package:', 'camnex'); ?></h3>
                    <ul class="cx-checklist-items">
                        <li>
                            <i data-lucide="video" class="cx-list-icon" aria-hidden="true"></i>
                            <div>
                                <strong><?php printf(esc_html__('%1$d × %2$s High Resolution Cameras', 'camnex'), (int)$camera_count, esc_html($camera_type)); ?></strong>
                                <p><?php esc_html_e('Day/Night crystal-clear video capture with weather-resistant outdoor/indoor housing.', 'camnex'); ?></p>
                            </div>
                        </li>
                        <li>
                            <i data-lucide="cpu" class="cx-list-icon" aria-hidden="true"></i>
                            <div>
                                <strong><?php echo esc_html($dvr_nvr); ?></strong>
                                <p><?php esc_html_e('H.265+ ultra-compression recording unit with HDMI and VGA display outputs.', 'camnex'); ?></p>
                            </div>
                        </li>
                        <li>
                            <i data-lucide="hard-drive" class="cx-list-icon" aria-hidden="true"></i>
                            <div>
                                <strong><?php echo esc_html($hdd_size); ?></strong>
                                <p><?php esc_html_e('Dedicated 24/7 continuous surveillance grade hard disk drive.', 'camnex'); ?></p>
                            </div>
                        </li>
                        <li>
                            <i data-lucide="cable" class="cx-list-icon" aria-hidden="true"></i>
                            <div>
                                <strong><?php printf(esc_html__('%d × 10 Meters High-Purity Copper Cables', 'camnex'), (int)$camera_count); ?></strong>
                                <p><?php esc_html_e('Full copper transmission cable ensuring zero signal attenuation or interference.', 'camnex'); ?></p>
                            </div>
                        </li>
                        <li>
                            <i data-lucide="zap" class="cx-list-icon" aria-hidden="true"></i>
                            <div>
                                <strong><?php printf(esc_html__('%d × Video Baluns & Centralized Power Supply', 'camnex'), (int)$camera_count); ?></strong>
                                <p><?php esc_html_e('Regulated 12V power adapter and high-frequency noise filtering baluns.', 'camnex'); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="cx-pkg-single-actions">
                    <a href="<?php echo esc_url($order_url); ?>" class="cx-btn-pkg-buy">
                        <i data-lucide="shopping-cart" aria-hidden="true"></i>
                        <span><?php esc_html_e('Order This Package Now', 'camnex'); ?></span>
                    </a>
                    <a href="tel:+8801540535150" class="cx-btn-pkg-call">
                        <i data-lucide="phone" aria-hidden="true"></i>
                        <span><?php esc_html_e('+880 1540-535150', 'camnex'); ?></span>
                    </a>
                </div>

            </div>

        </div>

        <!-- Full Package Description Content -->
        <?php if (get_the_content()) : ?>
            <div class="cx-pkg-full-description">
                <h2><?php esc_html_e('Comprehensive System Overview', 'camnex'); ?></h2>
                <div class="cx-pkg-body-text">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
