<?php
/**
 * CamneX Bangladesh — Homepage Shop by Category Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$assets_uri = defined('CAMNEX_ASSETS_URI') ? CAMNEX_ASSETS_URI : get_template_directory_uri() . '/assets';
$fallback_img = $assets_uri . '/placeholders/camera.png';
?>
<!-- Shop by Category -->
<section class="cx-shop-by-category" aria-labelledby="category-section-title">
    <div class="cx-section-bg-glow" aria-hidden="true"></div>
    
    <div class="container cx-category-container">
        
        <!-- Section Header -->
        <div class="cx-category-header">
            <div class="cx-section-eyebrow">
                <span class="cx-eyebrow-line"></span>
                <span><?php esc_html_e('SHOP BY CATEGORY', 'camnex'); ?></span>
                <span class="cx-eyebrow-line"></span>
            </div>
            
            <h2 id="category-section-title" class="cx-section-heading">
                <?php esc_html_e('Find the Right Technology for Every Space', 'camnex'); ?>
            </h2>
            
            <p class="cx-section-desc">
                <?php esc_html_e('Browse professional security, networking and smart technology solutions designed for homes, businesses and enterprises.', 'camnex'); ?>
            </p>
        </div>

        <!-- Refined Bento Grid Layout (Final Polish) -->
        <div class="cx-bento-grid">
            
            <!-- 1. FEATURED CARD: CCTV Cameras (Large) -->
            <a href="<?php echo esc_url(home_url('/category/cctv-cameras')); ?>" class="cx-bento-card cx-card-large cx-featured-glow" aria-label="<?php esc_attr_e('Explore CCTV Cameras', 'camnex'); ?>">
                <div class="cx-card-ambient-glow"></div>
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-cctv"><?php esc_html_e('SURVEILLANCE', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('CCTV Cameras', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('High-definition analog & IP network cameras, PTZ, DVR & NVR systems.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/cctv-bullet-transparent.png'); ?>" alt="<?php esc_attr_e('Hikvision Bullet Camera', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 2. FEATURED CARD: Networking (Large) -->
            <a href="<?php echo esc_url(home_url('/category/networking')); ?>" class="cx-bento-card cx-card-large cx-featured-glow" aria-label="<?php esc_attr_e('Explore Networking', 'camnex'); ?>">
                <div class="cx-card-ambient-glow"></div>
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-network"><?php esc_html_e('NETWORKING', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Networking', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Enterprise PoE switches, cloud routers and high-density WiFi access points.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/poe-switch-transparent.png'); ?>" alt="<?php esc_attr_e('Ruijie PoE Switch', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 3. MEDIUM CARD: WiFi Cameras (Moved to CCTV Packages position) -->
            <a href="<?php echo esc_url(home_url('/category/wifi-cameras')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore WiFi Cameras', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-wifi"><?php esc_html_e('WIRELESS', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('WiFi Cameras', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Smart wireless PTZ, battery-powered & indoor security cameras.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/wifi-camera-transparent.png'); ?>" alt="<?php esc_attr_e('WiFi Camera', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 4. MEDIUM CARD: Smart Home (Moved to WiFi Cameras position) -->
            <a href="<?php echo esc_url(home_url('/category/smart-home')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Smart Home', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-smarthome"><?php esc_html_e('SMART HOME', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Smart Home', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Video intercoms, smart doorbells, smart locks & automation.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/smart-doorbell-transparent.png'); ?>" alt="<?php esc_attr_e('Smart Home and Video Intercom', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/smart-doorbell-transparent.png'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 5. MEDIUM CARD: Access Control & Time Attendance -->
            <a href="<?php echo esc_url(home_url('/category/access-control')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Access Control & Time Attendance', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-bio"><?php esc_html_e('BIOMETRIC', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Access Control & Time Attendance', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Face recognition terminals, fingerprint attendance, RFID readers & smart door controllers.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/face-terminal-transparent.png'); ?>" alt="<?php esc_attr_e('Access Control & Time Attendance', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/face-terminal-transparent.png'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 6. MEDIUM CARD: Physical Security (Real image) -->
            <a href="<?php echo esc_url(home_url('/category/physical-security')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Physical Security', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-physical"><?php esc_html_e('PERIMETER', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Physical Security', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Archway walk-through gates, baggage X-ray scanners & turnstiles.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/physical-security-transparent.png'); ?>" alt="<?php esc_attr_e('Physical Security and Screening', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 7. MEDIUM CARD: Fire Safety & Alarm System (Real image) -->
            <a href="<?php echo esc_url(home_url('/category/fire-alarm')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Fire Safety and Alarm System', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-safety"><?php esc_html_e('FIRE SAFETY', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Fire Safety & Alarm', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Commercial smoke detectors, fire alarm panels & sirens.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/fire-alarm-transparent.png'); ?>" alt="<?php esc_attr_e('Fire Safety and Alarm System', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 8. MEDIUM CARD: Communication Systems (Real image) -->
            <a href="<?php echo esc_url(home_url('/category/communication-systems')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Communication Systems', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-comm"><?php esc_html_e('TELECOM', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Communication Systems', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('PABX, IP-PBX telephony, PA sound systems & conference solutions.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/communication-systems-transparent.png'); ?>" alt="<?php esc_attr_e('Communication Systems and PABX', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 9. MEDIUM CARD: Servers & Storage (New section) -->
            <a href="<?php echo esc_url(home_url('/category/servers-storage')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Enterprise Servers and Storage', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-server"><?php esc_html_e('SERVERS', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Servers & Storage', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('High-performance rackmount servers, network attached storage (NAS) & datacenter hardware.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/server-storage-transparent.png'); ?>" alt="<?php esc_attr_e('Enterprise Servers and Storage', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 10. MEDIUM CARD: Interactive Flat Panels & Displays (New section) -->
            <a href="<?php echo esc_url(home_url('/category/interactive-flat-panel')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Interactive Flat Panels and Displays', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-display"><?php esc_html_e('INTERACTIVE', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Interactive Flat Panels', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('4K UHD interactive touchscreens, smart whiteboards, digital signage & video walls.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/interactive-panel-transparent.png'); ?>" alt="<?php esc_attr_e('Interactive Flat Panels and Smart Displays', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 11. MEDIUM CARD: Accessories -->
            <a href="<?php echo esc_url(home_url('/category/accessories')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Accessories', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge cx-badge-accessories"><?php esc_html_e('ESSENTIALS', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Accessories', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Surveillance hard drives, power supplies, brackets, cables & connectors.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/hdd-adapter-transparent.png'); ?>" alt="<?php esc_attr_e('HDD & Adapters', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/hdd-adapter-transparent.png'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

        </div>

    </div>
</section>
