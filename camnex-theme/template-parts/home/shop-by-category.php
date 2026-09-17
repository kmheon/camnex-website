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
                    <span class="cx-pill-badge"><?php esc_html_e('BEST SELLER', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('CCTV Cameras', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('High-definition analog and IP security cameras with 24/7 full-color imaging.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/cctv-bullet-transparent.webp'); ?>" alt="<?php esc_attr_e('Hikvision Bullet Camera', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 2. FEATURED CARD: Networking (Large) -->
            <a href="<?php echo esc_url(home_url('/category/networking')); ?>" class="cx-bento-card cx-card-large cx-featured-glow" aria-label="<?php esc_attr_e('Explore Networking', 'camnex'); ?>">
                <div class="cx-card-ambient-glow"></div>
                <div class="cx-card-content">
                    <span class="cx-pill-badge"><?php esc_html_e('ENTERPRISE', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Networking', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Enterprise PoE switches, cloud routers and high-density WiFi access points.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/poe-switch-transparent.webp'); ?>" alt="<?php esc_attr_e('Ruijie PoE Switch', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 3. MEDIUM CARD: CCTV Packages -->
            <a href="<?php echo esc_url(home_url('/category/cctv-packages')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore CCTV Packages', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge"><?php esc_html_e('POPULAR', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('CCTV Packages', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Complete ready-to-install surveillance kits.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/cctv-kit-transparent.webp'); ?>" alt="<?php esc_attr_e('CCTV Packages', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/cctv-kit-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 4. MEDIUM CARD: Access Control -->
            <a href="<?php echo esc_url(home_url('/category/access-control')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Access Control', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge"><?php esc_html_e('SECURE', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Access Control', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Biometric readers and smart door locks.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/face-terminal-transparent.webp'); ?>" alt="<?php esc_attr_e('Hikvision Face Terminal', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/face-terminal-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 5. MEDIUM CARD: Smart Home -->
            <a href="<?php echo esc_url(home_url('/category/smart-home')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore Smart Home', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge"><?php esc_html_e('SMART', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('Smart Home', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Wireless video doorbells and smart sensors.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/smart-doorbell-transparent.webp'); ?>" alt="<?php esc_attr_e('EZVIZ Doorbell', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/smart-doorbell-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 6. MEDIUM CARD: IP Cameras -->
            <a href="<?php echo esc_url(home_url('/category/ip-cameras')); ?>" class="cx-bento-card cx-card-medium" aria-label="<?php esc_attr_e('Explore IP Cameras', 'camnex'); ?>">
                <div class="cx-card-content">
                    <span class="cx-pill-badge"><?php esc_html_e('NEW', 'camnex'); ?></span>
                    <h3 class="cx-card-title"><?php esc_html_e('IP Cameras', 'camnex'); ?></h3>
                    <p class="cx-card-desc"><?php esc_html_e('Crystal clear digital network surveillance.', 'camnex'); ?></p>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Category', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/ip-dome-transparent.webp'); ?>" alt="<?php esc_attr_e('IP Cameras', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 7. COMPACT CARD: WiFi Cameras -->
            <a href="<?php echo esc_url(home_url('/category/wifi-cameras')); ?>" class="cx-bento-card cx-card-compact" aria-label="<?php esc_attr_e('Explore WiFi Cameras', 'camnex'); ?>">
                <div class="cx-card-content">
                    <h3 class="cx-card-title"><?php esc_html_e('WiFi Cameras', 'camnex'); ?></h3>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/wifi-camera-transparent.webp'); ?>" alt="<?php esc_attr_e('WiFi Camera', 'camnex'); ?>" loading="lazy" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 8. COMPACT CARD: Time Attendance -->
            <a href="<?php echo esc_url(home_url('/category/time-attendance')); ?>" class="cx-bento-card cx-card-compact" aria-label="<?php esc_attr_e('Explore Time Attendance', 'camnex'); ?>">
                <div class="cx-card-content">
                    <h3 class="cx-card-title"><?php esc_html_e('Time Attendance', 'camnex'); ?></h3>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/fingerprint-transparent.webp'); ?>" alt="<?php esc_attr_e('Fingerprint Device', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/fingerprint-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 9. COMPACT CARD: Video Intercom -->
            <a href="<?php echo esc_url(home_url('/category/video-intercom')); ?>" class="cx-bento-card cx-card-compact" aria-label="<?php esc_attr_e('Explore Video Intercom', 'camnex'); ?>">
                <div class="cx-card-content">
                    <h3 class="cx-card-title"><?php esc_html_e('Video Intercom', 'camnex'); ?></h3>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/indoor-monitor-transparent.webp'); ?>" alt="<?php esc_attr_e('Indoor Monitor', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/indoor-monitor-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

            <!-- 10. COMPACT CARD: Accessories -->
            <a href="<?php echo esc_url(home_url('/category/accessories')); ?>" class="cx-bento-card cx-card-compact" aria-label="<?php esc_attr_e('Explore Accessories', 'camnex'); ?>">
                <div class="cx-card-content">
                    <h3 class="cx-card-title"><?php esc_html_e('Accessories', 'camnex'); ?></h3>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="cx-card-visual">
                    <img src="<?php echo esc_url($assets_uri . '/products/hdd-adapter-transparent.webp'); ?>" alt="<?php esc_attr_e('HDD & Adapters', 'camnex'); ?>" loading="lazy" data-fallback="<?php echo esc_url($assets_uri . '/products/hdd-adapter-transparent.webp'); ?>" onerror="this.onerror=null;this.src='<?php echo esc_url($fallback_img); ?>'">
                </div>
            </a>

        </div>

    </div>
</section>
