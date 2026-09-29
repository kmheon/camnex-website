<?php
/**
 * CamneX Bangladesh — Navigation Bar & Mega Menus (Row 3)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$brands_uri = defined('CAMNEX_ASSETS_URI') ? CAMNEX_ASSETS_URI . '/brands' : get_template_directory_uri() . '/assets/brands';
$is_home    = is_front_page() || is_home();
?>

<!-- Row 3: Navigation Bar -->
<div class="cx-nav-bar-bg">
    <nav class="container cx-nav-container" aria-label="<?php esc_attr_e('Main Navigation', 'camnex'); ?>">
        <ul class="cx-nav-list">
            <li class="cx-nav-item">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cx-nav-link <?php echo $is_home ? 'active' : ''; ?>">
                    <?php esc_html_e('Home', 'camnex'); ?>
                </a>
            </li>

            <!-- 1. PRODUCTS MEGA MENU -->
            <li class="cx-nav-item cx-dropdown cx-products-mega-parent">
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="cx-nav-link" aria-haspopup="true" aria-expanded="false">
                    <?php esc_html_e('Products', 'camnex'); ?> <i data-lucide="chevron-down" aria-hidden="true"></i>
                </a>
                <div class="cx-products-mega-menu">
                    <div class="cx-prod-mega-container">
                        
                        <!-- Main Categories Scrollable/Grid Area -->
                        <div class="cx-prod-categories-grid">
                            
                            <!-- CCTV Cameras -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/cctv-cameras')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="video"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('CCTV Cameras', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Indoor & Outdoor Security', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/cctv/analog')); ?>"><?php esc_html_e('Analog Cameras', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/cctv/ip')); ?>"><?php esc_html_e('IP Cameras', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/cctv/ptz')); ?>"><?php esc_html_e('PTZ Cameras', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/cctv/wifi')); ?>"><?php esc_html_e('WiFi Cameras', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/cctv/solar')); ?>"><?php esc_html_e('Solar Cameras', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Recorders -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/recorders')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="hard-drive"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Recorders', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('DVR, NVR & Hybrid Units', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/recorders/dvr')); ?>"><?php esc_html_e('DVR', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/recorders/nvr')); ?>"><?php esc_html_e('NVR', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/recorders/hybrid')); ?>"><?php esc_html_e('Hybrid Recorders', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Storage -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/storage')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="database"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Storage', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Surveillance HDD & SSD', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/storage/hdd')); ?>"><?php esc_html_e('Surveillance HDD', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/storage/ssd')); ?>"><?php esc_html_e('SSD', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/storage/cards')); ?>"><?php esc_html_e('Memory Cards', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Networking -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/networking')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="globe"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Networking', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Routers & Switches', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/routers')); ?>"><?php esc_html_e('Routers', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/switches')); ?>"><?php esc_html_e('Switches', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/poe')); ?>"><?php esc_html_e('PoE Switches', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/ap')); ?>"><?php esc_html_e('Access Points', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/cables')); ?>"><?php esc_html_e('Network Cables', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/networking/fiber')); ?>"><?php esc_html_e('Fiber Accessories', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Access Control -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/access-control')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="shield"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Access Control', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Locks & RFID Systems', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/access/locks')); ?>"><?php esc_html_e('Door Locks', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/access/controllers')); ?>"><?php esc_html_e('Access Controllers', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/access/rfid')); ?>"><?php esc_html_e('RFID Cards', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/access/exit')); ?>"><?php esc_html_e('Exit Buttons', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/access/accessories')); ?>"><?php esc_html_e('Door Accessories', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Time Attendance -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/attendance')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="clock"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Time Attendance', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Biometric & Face Recognition', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/attendance/fingerprint')); ?>"><?php esc_html_e('Fingerprint Devices', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/attendance/face')); ?>"><?php esc_html_e('Face Recognition', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/attendance/rfid')); ?>"><?php esc_html_e('RFID Attendance', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Smart Home -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/smart-home')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="home"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Smart Home', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Doorbells & Sensors', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/smart/cameras')); ?>"><?php esc_html_e('Smart Cameras', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/smart/doorbells')); ?>"><?php esc_html_e('Video Doorbells', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/smart/sensors')); ?>"><?php esc_html_e('Sensors', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/smart/lighting')); ?>"><?php esc_html_e('Smart Lighting', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/smart/plugs')); ?>"><?php esc_html_e('Smart Plugs', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Alarm Systems -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/alarms')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="bell"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Alarm Systems', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Panels & PIR Sensors', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/alarms/panels')); ?>"><?php esc_html_e('Alarm Panels', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/alarms/pir')); ?>"><?php esc_html_e('PIR Sensors', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/alarms/sirens')); ?>"><?php esc_html_e('Sirens', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/alarms/gsm')); ?>"><?php esc_html_e('GSM Modules', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Video Intercom -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/intercom')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="monitor"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Video Intercom', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Monitors & Stations', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/intercom/monitors')); ?>"><?php esc_html_e('Indoor Monitors', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/intercom/stations')); ?>"><?php esc_html_e('Outdoor Stations', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/intercom/villa')); ?>"><?php esc_html_e('Villa Intercom', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Power & Accessories -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/power')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="zap"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Power & Accessories', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('PSU, UPS & Adapters', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/power/supplies')); ?>"><?php esc_html_e('Power Supplies', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/power/ups')); ?>"><?php esc_html_e('UPS', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/power/adapters')); ?>"><?php esc_html_e('Adapters', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/power/connectors')); ?>"><?php esc_html_e('Connectors', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/power/junction')); ?>"><?php esc_html_e('Junction Boxes', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/power/mounting')); ?>"><?php esc_html_e('Mounting Accessories', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Installation Materials -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/products/installation')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="tool"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Installation Materials', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Cables, Pipes & Racks', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/products/install/cat6')); ?>"><?php esc_html_e('CAT6 Cable', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/install/coaxial')); ?>"><?php esc_html_e('Coaxial Cable', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/install/fiber')); ?>"><?php esc_html_e('Fiber Cable', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/install/pvc')); ?>"><?php esc_html_e('PVC Pipe', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/install/racks')); ?>"><?php esc_html_e('Rack Cabinets', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- CCTV Packages & Bundles -->
                            <div class="cx-prod-cat-card">
                                <a href="<?php echo esc_url(home_url('/packages')); ?>" class="cx-prod-cat-header">
                                    <div class="cx-prod-cat-icon"><i data-lucide="package-plus"></i></div>
                                    <div class="cx-prod-cat-titles">
                                        <h4><?php esc_html_e('Packages & Bundles', 'camnex'); ?></h4>
                                        <span><?php esc_html_e('Turnkey Solutions', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <ul class="cx-prod-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/packages/home')); ?>"><?php esc_html_e('Home Packages', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/packages/business')); ?>"><?php esc_html_e('Business Packages', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/packages/enterprise')); ?>"><?php esc_html_e('Enterprise Packages', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/packages/networking')); ?>"><?php esc_html_e('Networking Bundles', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Right Balanced Sidebar -->
                        <div class="cx-prod-sidebar">
                            
                            <!-- Featured Product / Bundle -->
                            <div class="cx-sidebar-card cx-sidebar-featured">
                                <div class="cx-sidebar-badge"><?php esc_html_e('Featured Bundle', 'camnex'); ?></div>
                                <div class="cx-sidebar-prod-info">
                                    <h5 class="cx-sidebar-prod-title"><?php esc_html_e('Hikvision ColorVu 8-Camera Pro Kit', 'camnex'); ?></h5>
                                    <div class="cx-sidebar-prod-meta">
                                        <span class="cx-stars">★★★★★</span>
                                        <span class="cx-price">৳ 32,500</span>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url(home_url('/packages/hikvision-8cam')); ?>" class="cx-sidebar-cta">
                                    <?php esc_html_e('View Bundle', 'camnex'); ?>
                                </a>
                            </div>

                            <!-- Quick Discovery Blocks -->
                            <div class="cx-sidebar-links-group">
                                <a href="<?php echo esc_url(home_url('/products/new-arrivals')); ?>" class="cx-sidebar-link-item">
                                    <i data-lucide="sparkles"></i>
                                    <div>
                                        <strong><?php esc_html_e('New Arrivals', 'camnex'); ?></strong>
                                        <span><?php esc_html_e('Latest security releases', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/products/best-sellers')); ?>" class="cx-sidebar-link-item">
                                    <i data-lucide="trending-up"></i>
                                    <div>
                                        <strong><?php esc_html_e('Best Sellers', 'camnex'); ?></strong>
                                        <span><?php esc_html_e('Top rated by clients', 'camnex'); ?></span>
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/products/promotions')); ?>" class="cx-sidebar-link-item">
                                    <i data-lucide="tag"></i>
                                    <div>
                                        <strong><?php esc_html_e('Current Promotions', 'camnex'); ?></strong>
                                        <span><?php esc_html_e('Special discounts & offers', 'camnex'); ?></span>
                                    </div>
                                </a>
                            </div>

                            <!-- Popular Brands Quick Grid -->
                            <div class="cx-sidebar-brands-preview">
                                <span class="cx-sidebar-brands-title"><?php esc_html_e('Top Brands', 'camnex'); ?></span>
                                <div class="cx-sidebar-brands-row">
                                    <a href="<?php echo esc_url(home_url('/brands/hikvision')); ?>" title="Hikvision"><img src="<?php echo esc_url($brands_uri . '/hikvision.png'); ?>" alt="Hikvision"></a>
                                    <a href="<?php echo esc_url(home_url('/brands/dahua')); ?>" title="Dahua"><img src="<?php echo esc_url($brands_uri . '/dahua.png'); ?>" alt="Dahua"></a>
                                    <a href="<?php echo esc_url(home_url('/brands/ezviz')); ?>" title="EZVIZ"><img src="<?php echo esc_url($brands_uri . '/ezviz.png'); ?>" alt="EZVIZ"></a>
                                    <a href="<?php echo esc_url(home_url('/brands/tp-link')); ?>" title="TP-Link"><img src="<?php echo esc_url($brands_uri . '/tp-link.png'); ?>" alt="TP-Link"></a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Mega Menu Footer Area -->
                    <div class="cx-prod-mega-footer">
                        <div class="cx-mega-footer-links">
                            <a href="<?php echo esc_url(home_url('/products')); ?>" class="cx-footer-action-link">
                                <?php esc_html_e('Browse All Products', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                            </a>
                            <span class="cx-footer-divider">•</span>
                            <a href="<?php echo esc_url(home_url('/brands')); ?>" class="cx-footer-action-link">
                                <?php esc_html_e('Shop by Brand', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                            </a>
                            <span class="cx-footer-divider">•</span>
                            <a href="<?php echo esc_url(home_url('/catalog.pdf')); ?>" target="_blank" rel="noopener noreferrer" class="cx-footer-action-link">
                                <?php esc_html_e('Product Catalog PDF', 'camnex'); ?> <i data-lucide="file-text"></i>
                            </a>
                        </div>
                        <span class="cx-mega-footer-count"><?php esc_html_e('Showing 1000+ Professional Security & Networking Items', 'camnex'); ?></span>
                    </div>

                </div>
            </li>

            <!-- 2. SOLUTIONS MEGA MENU -->
            <li class="cx-nav-item cx-dropdown cx-solutions-mega-parent">
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-nav-link" aria-haspopup="true" aria-expanded="false">
                    <?php esc_html_e('Solutions', 'camnex'); ?> <i data-lucide="chevron-down" aria-hidden="true"></i>
                </a>
                <div class="cx-solutions-mega-menu">
                    <div class="cx-sol-mega-container">
                        
                        <!-- Solutions Use Cases Columns -->
                        <div class="cx-sol-categories-grid">
                            
                            <!-- Residential -->
                            <div class="cx-sol-cat-col">
                                <div class="cx-sol-category-header">
                                    <i data-lucide="home"></i> <?php esc_html_e('Residential Use Cases', 'camnex'); ?>
                                </div>
                                <ul class="cx-sol-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/home')); ?>">🏠 <?php esc_html_e('Home Security', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/apartment')); ?>">🏢 <?php esc_html_e('Apartment Security', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/villa')); ?>">🏡 <?php esc_html_e('Villa Security', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Commercial -->
                            <div class="cx-sol-cat-col">
                                <div class="cx-sol-category-header">
                                    <i data-lucide="building-2"></i> <?php esc_html_e('Commercial Spaces', 'camnex'); ?>
                                </div>
                                <ul class="cx-sol-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/retail')); ?>">🏬 <?php esc_html_e('Retail Stores', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/office')); ?>">🏢 <?php esc_html_e('Corporate Offices', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/factory')); ?>">🏭 <?php esc_html_e('Factories', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/warehouse')); ?>">📦 <?php esc_html_e('Warehouses', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/hospitality')); ?>">🏨 <?php esc_html_e('Hotels & Restaurants', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Education & Healthcare -->
                            <div class="cx-sol-cat-col">
                                <div class="cx-sol-category-header">
                                    <i data-lucide="graduation-cap"></i> <?php esc_html_e('Education & Healthcare', 'camnex'); ?>
                                </div>
                                <ul class="cx-sol-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/schools')); ?>">🏫 <?php esc_html_e('Schools', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/universities')); ?>">🎓 <?php esc_html_e('Universities', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/hospitals')); ?>">🏥 <?php esc_html_e('Hospitals', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/laboratories')); ?>">🧪 <?php esc_html_e('Laboratories', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Government & Financial -->
                            <div class="cx-sol-cat-col">
                                <div class="cx-sol-category-header">
                                    <i data-lucide="landmark"></i> <?php esc_html_e('Government & Financial', 'camnex'); ?>
                                </div>
                                <ul class="cx-sol-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/government')); ?>">🏛 <?php esc_html_e('Government Offices', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/banks')); ?>">🏦 <?php esc_html_e('Banks', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/religious')); ?>">🕌 <?php esc_html_e('Religious Institutions', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                            <!-- Smart Infrastructure -->
                            <div class="cx-sol-cat-col">
                                <div class="cx-sol-category-header">
                                    <i data-lucide="network"></i> <?php esc_html_e('Smart Infrastructure', 'camnex'); ?>
                                </div>
                                <ul class="cx-sol-sub-list">
                                    <li><a href="<?php echo esc_url(home_url('/solutions/smart-buildings')); ?>">🌆 <?php esc_html_e('Smart Buildings', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/parking')); ?>">🚗 <?php esc_html_e('Parking Management', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/city')); ?>">🎥 <?php esc_html_e('City Surveillance', 'camnex'); ?></a></li>
                                    <li><a href="<?php echo esc_url(home_url('/solutions/enterprise')); ?>">🔒 <?php esc_html_e('Enterprise Security', 'camnex'); ?></a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- Solutions Sidebar -->
                        <div class="cx-sol-sidebar">
                            <div class="cx-sol-sidebar-card">
                                <span class="cx-sol-badge"><?php esc_html_e('Verified Case Study', 'camnex'); ?></span>
                                <h5 class="cx-sol-sidebar-title"><?php esc_html_e('Gulshan Commercial Tower Integration', 'camnex'); ?></h5>
                                <p class="cx-sol-sidebar-desc"><?php esc_html_e('Deployment of 128-channel IP surveillance, optical fiber backbone, and facial recognition access control.', 'camnex'); ?></p>
                                <a href="<?php echo esc_url(home_url('/projects/gulshan-tower')); ?>" class="cx-sol-sidebar-link">
                                    <?php esc_html_e('Read Case Study', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                                </a>
                            </div>
                            <div class="cx-sol-sidebar-links">
                                <a href="<?php echo esc_url(home_url('/projects')); ?>" class="cx-sol-quick-link"><i data-lucide="folder-kanban"></i> <?php esc_html_e('Installation Gallery', 'camnex'); ?></a>
                                <a href="<?php echo esc_url(home_url('/solutions/success-stories')); ?>" class="cx-sol-quick-link"><i data-lucide="award"></i> <?php esc_html_e('Success Stories', 'camnex'); ?></a>
                            </div>
                        </div>

                    </div>

                    <!-- Solutions Mega Menu Footer -->
                    <div class="cx-sol-mega-footer">
                        <span class="cx-sol-footer-text"><?php esc_html_e('Need a custom industry deployment tailored to your facility?', 'camnex'); ?></span>
                        <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-btn-quote cx-sol-footer-btn">
                            <?php esc_html_e('View All Solutions', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                        </a>
                    </div>

                </div>
            </li>

            <li class="cx-nav-item">
                <a href="<?php echo esc_url(home_url('/projects')); ?>" class="cx-nav-link">
                    <?php esc_html_e('Projects', 'camnex'); ?>
                </a>
            </li>

            <!-- 3. BRANDS MEGA MENU -->
            <li class="cx-nav-item cx-dropdown cx-mega-dropdown-parent">
                <a href="<?php echo esc_url(home_url('/brands')); ?>" class="cx-nav-link" aria-haspopup="true" aria-expanded="false">
                    <?php esc_html_e('Brands', 'camnex'); ?> <i data-lucide="chevron-down" aria-hidden="true"></i>
                </a>
                <div class="cx-mega-menu">
                    <div class="cx-mega-menu-container">
                        <div class="cx-mega-menu-header-row">
                            <div class="cx-mega-title-group">
                                <span class="cx-mega-subtitle"><?php esc_html_e('Authorized Catalog', 'camnex'); ?></span>
                                <h4 class="cx-mega-heading"><?php esc_html_e('Explore Technology Brands', 'camnex'); ?></h4>
                            </div>
                            <a href="<?php echo esc_url(home_url('/brands')); ?>" class="cx-mega-view-all-top">
                                <?php esc_html_e('View All Brands', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                        <div class="cx-brands-grid-catalog">
                            <a href="<?php echo esc_url(home_url('/brands/hikvision')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/hikvision.png'); ?>" alt="Hikvision logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">Hikvision</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/dahua')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/dahua.png'); ?>" alt="Dahua logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">Dahua</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/ezviz')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/ezviz.png'); ?>" alt="EZVIZ logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">EZVIZ</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/imou')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/imou.png'); ?>" alt="IMOU logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">IMOU</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/tp-link')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/tp-link.png'); ?>" alt="TP-Link logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">TP-Link</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/mikrotik')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/mikrotik.png'); ?>" alt="MikroTik logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">MikroTik</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/ruijie')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/ruijie.png'); ?>" alt="Ruijie logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">Ruijie</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/ubiquiti')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/ubiquiti.png'); ?>" alt="Ubiquiti logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">Ubiquiti</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/zkteco')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/zkteco.png'); ?>" alt="ZKTeco logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">ZKTeco</span>
                            </a>
                            <a href="<?php echo esc_url(home_url('/brands/uniview')); ?>" class="cx-brand-catalog-card">
                                <div class="cx-brand-logo-box">
                                    <img src="<?php echo esc_url($brands_uri . '/uniview.png'); ?>" alt="Uniview logo" loading="lazy">
                                </div>
                                <span class="cx-brand-catalog-name">Uniview</span>
                            </a>
                        </div>
                        <div class="cx-mega-menu-footer-row">
                            <span class="cx-mega-footer-note"><?php esc_html_e('All partner brands carry official manufacturer warranty and direct support.', 'camnex'); ?></span>
                            <a href="<?php echo esc_url(home_url('/brands')); ?>" class="cx-mega-view-all-bottom">
                                <?php esc_html_e('View All Brands Catalog', 'camnex'); ?> <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="cx-nav-item">
                <a href="<?php echo esc_url(home_url('/support')); ?>" class="cx-nav-link">
                    <?php esc_html_e('Support', 'camnex'); ?>
                </a>
            </li>
            <li class="cx-nav-item">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cx-nav-link">
                    <?php esc_html_e('Contact', 'camnex'); ?>
                </a>
            </li>
        </ul>
    </nav>
</div>
