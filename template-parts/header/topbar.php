<?php
/**
 * CamneX Bangladesh — Header Topbar (Row 1)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$hotline_display = get_theme_mod('camnex_hotline_display', '+880 1540-535150');
$hotline_tel     = get_theme_mod('camnex_hotline_tel', '+8801540535150');
$track_order_url = get_theme_mod('camnex_track_order_url', home_url('/track-order'));
?>

<!-- Row 1: Announcement Bar -->
<div class="cx-top-bar-bg" id="topBar">
    <div class="container cx-top-bar-container">
        <div class="cx-top-bar-left">
            <span class="cx-top-item"><i data-lucide="shield-check" aria-hidden="true"></i> <?php esc_html_e('Nationwide Installation', 'camnex'); ?></span>
            <span class="cx-top-divider">•</span>
            <span class="cx-top-item"><i data-lucide="award" aria-hidden="true"></i> <?php esc_html_e('Official Warranty', 'camnex'); ?></span>
            <span class="cx-top-divider">•</span>
            <span class="cx-top-item"><i data-lucide="headphones" aria-hidden="true"></i> <?php esc_html_e('24/7 Technical Support', 'camnex'); ?></span>
        </div>
        <div class="cx-top-bar-right">
            <a href="<?php echo esc_url($track_order_url); ?>" class="cx-top-link cx-top-link-highlight">
                <i data-lucide="package" aria-hidden="true"></i> <?php esc_html_e('Track Order', 'camnex'); ?>
            </a>
            <span class="cx-top-divider">•</span>
            <a href="tel:<?php echo esc_attr($hotline_tel); ?>" class="cx-top-link">
                <i data-lucide="phone" aria-hidden="true"></i> <?php echo esc_html($hotline_display); ?>
            </a>
        </div>
    </div>
</div>
