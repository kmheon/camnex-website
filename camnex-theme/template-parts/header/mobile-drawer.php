<?php
/**
 * CamneX Bangladesh — Header Mobile Slide-Out Drawer
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$hotline_display = get_theme_mod('camnex_hotline_display', '+880 1540-535150');
$hotline_tel     = get_theme_mod('camnex_hotline_tel', '+8801540535150');
$quote_url       = get_theme_mod('camnex_quote_url', home_url('/get-quote'));
$track_order_url = get_theme_mod('camnex_track_order_url', home_url('/track-order'));
?>

<!-- Mobile Slide-Out Menu -->
<div class="cx-mobile-menu" id="mobileMenu" aria-hidden="true">
    <div class="cx-mobile-menu-header">
        <span class="cx-mobile-menu-title"><?php esc_html_e('Menu', 'camnex'); ?></span>
        <button type="button" class="cx-mobile-close" id="mobileClose" aria-label="<?php esc_attr_e('Close mobile menu', 'camnex'); ?>">
            <i data-lucide="x"></i>
        </button>
    </div>
    <div class="cx-mobile-menu-body">
        <ul class="cx-mobile-nav-list">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="cx-mobile-nav-link"><?php esc_html_e('Home', 'camnex'); ?></a></li>
            
            <!-- Mobile Products Accordion -->
            <li class="cx-mobile-dropdown-item">
                <button type="button" class="cx-mobile-dropdown-toggle" id="mobileProductsToggle" aria-expanded="false">
                    <?php esc_html_e('Products', 'camnex'); ?> <i data-lucide="chevron-down"></i>
                </button>
                <div class="cx-mobile-dropdown-content" id="mobileProductsContent">
                    <div class="cx-mobile-subcat-group">
                        <strong><?php esc_html_e('CCTV Cameras', 'camnex'); ?></strong>
                        <a href="<?php echo esc_url(home_url('/products/cctv/analog')); ?>"><?php esc_html_e('Analog Cameras', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/cctv/ip')); ?>"><?php esc_html_e('IP Cameras', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/cctv/ptz')); ?>"><?php esc_html_e('PTZ Cameras', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/cctv/wifi')); ?>"><?php esc_html_e('WiFi Cameras', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/cctv/solar')); ?>"><?php esc_html_e('Solar Cameras', 'camnex'); ?></a>
                    </div>
                    <div class="cx-mobile-subcat-group">
                        <strong><?php esc_html_e('Recorders & Storage', 'camnex'); ?></strong>
                        <a href="<?php echo esc_url(home_url('/products/recorders/dvr')); ?>"><?php esc_html_e('DVR / NVR Units', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/storage/hdd')); ?>"><?php esc_html_e('Surveillance HDD', 'camnex'); ?></a>
                    </div>
                    <div class="cx-mobile-subcat-group">
                        <strong><?php esc_html_e('Networking', 'camnex'); ?></strong>
                        <a href="<?php echo esc_url(home_url('/products/networking/routers')); ?>"><?php esc_html_e('Routers & Switches', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/products/networking/poe')); ?>"><?php esc_html_e('PoE Switches & APs', 'camnex'); ?></a>
                    </div>
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="cx-mobile-view-all-brands"><?php esc_html_e('View All Products →', 'camnex'); ?></a>
                </div>
            </li>

            <!-- Mobile Solutions Accordion -->
            <li class="cx-mobile-dropdown-item">
                <button type="button" class="cx-mobile-dropdown-toggle" id="mobileSolutionsToggle" aria-expanded="false">
                    <?php esc_html_e('Solutions', 'camnex'); ?> <i data-lucide="chevron-down"></i>
                </button>
                <div class="cx-mobile-dropdown-content" id="mobileSolutionsContent">
                    <div class="cx-mobile-subcat-group">
                        <strong><?php esc_html_e('Residential', 'camnex'); ?></strong>
                        <a href="<?php echo esc_url(home_url('/solutions/home')); ?>"><?php esc_html_e('Home Security', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/solutions/apartment')); ?>"><?php esc_html_e('Apartment Security', 'camnex'); ?></a>
                    </div>
                    <div class="cx-mobile-subcat-group">
                        <strong><?php esc_html_e('Commercial', 'camnex'); ?></strong>
                        <a href="<?php echo esc_url(home_url('/solutions/retail')); ?>"><?php esc_html_e('Retail Stores', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/solutions/office')); ?>"><?php esc_html_e('Corporate Offices', 'camnex'); ?></a>
                        <a href="<?php echo esc_url(home_url('/solutions/factory')); ?>"><?php esc_html_e('Factories', 'camnex'); ?></a>
                    </div>
                    <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-mobile-view-all-brands"><?php esc_html_e('View All Solutions →', 'camnex'); ?></a>
                </div>
            </li>

            <li><a href="<?php echo esc_url(home_url('/projects')); ?>" class="cx-mobile-nav-link"><?php esc_html_e('Projects', 'camnex'); ?></a></li>
            
            <!-- Mobile Brands Accordion -->
            <li class="cx-mobile-dropdown-item">
                <button type="button" class="cx-mobile-dropdown-toggle" id="mobileBrandsToggle" aria-expanded="false">
                    <?php esc_html_e('Brands', 'camnex'); ?> <i data-lucide="chevron-down"></i>
                </button>
                <div class="cx-mobile-dropdown-content" id="mobileBrandsContent">
                    <div class="cx-mobile-brands-grid">
                        <a href="<?php echo esc_url(home_url('/brands/hikvision')); ?>" class="cx-mobile-brand-link">Hikvision</a>
                        <a href="<?php echo esc_url(home_url('/brands/dahua')); ?>" class="cx-mobile-brand-link">Dahua</a>
                        <a href="<?php echo esc_url(home_url('/brands/ezviz')); ?>" class="cx-mobile-brand-link">EZVIZ</a>
                        <a href="<?php echo esc_url(home_url('/brands/imou')); ?>" class="cx-mobile-brand-link">IMOU</a>
                        <a href="<?php echo esc_url(home_url('/brands/tp-link')); ?>" class="cx-mobile-brand-link">TP-Link</a>
                        <a href="<?php echo esc_url(home_url('/brands/mikrotik')); ?>" class="cx-mobile-brand-link">MikroTik</a>
                    </div>
                    <a href="<?php echo esc_url(home_url('/brands')); ?>" class="cx-mobile-view-all-brands"><?php esc_html_e('View All Brands →', 'camnex'); ?></a>
                </div>
            </li>

            <li><a href="<?php echo esc_url(home_url('/support')); ?>" class="cx-mobile-nav-link"><?php esc_html_e('Support', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="cx-mobile-nav-link"><?php esc_html_e('Contact', 'camnex'); ?></a></li>
        </ul>
        <div class="cx-mobile-menu-footer">
            <a href="<?php echo esc_url($quote_url); ?>" class="cx-btn-quote cx-mobile-quote-btn"><?php esc_html_e('Get Quote', 'camnex'); ?></a>
            <div class="cx-mobile-contact-info">
                <a href="tel:<?php echo esc_attr($hotline_tel); ?>"><i data-lucide="phone"></i> <?php echo esc_html($hotline_display); ?></a>
                <a href="<?php echo esc_url($track_order_url); ?>"><i data-lucide="package"></i> <?php esc_html_e('Track Order', 'camnex'); ?></a>
            </div>
        </div>
    </div>
</div>
