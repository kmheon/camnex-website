<?php
/**
 * CamneX Bangladesh — Homepage Recent Installations Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Recent Installations -->
<section class="cx-recent-projects-section" aria-labelledby="recent-projects-title">
    <div class="container">
        
        <!-- Section Header -->
        <div class="cx-section-header">
            <span class="cx-section-badge-label"><?php esc_html_e('Our Installations', 'camnex'); ?></span>
            <h2 id="recent-projects-title" class="cx-section-title"><?php esc_html_e('Our Recent Installations', 'camnex'); ?></h2>
            <p class="cx-section-subtitle"><?php esc_html_e('See how CamneX has helped homes, offices, shops, factories, schools, hospitals and commercial facilities across Bangladesh with professional CCTV, networking, access control and security system installations.', 'camnex'); ?></p>
        </div>

        <!-- Featured Project (Top Large Landscape) -->
        <article class="cx-featured-project-card" 
                 data-project-id="feat-01"
                 data-category="home"
                 data-project-url="<?php echo esc_url(home_url('/projects/dhanmondi-home-cctv')); ?>">
            <div class="cx-featured-media">
                <div class="cx-featured-overlay" aria-hidden="true"></div>
                <span class="cx-project-badge cx-badge-home"><?php esc_html_e('Home', 'camnex'); ?></span>
                
                <img class="cx-featured-img" 
                     src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=1200&q=80" 
                     alt="<?php esc_attr_e('Home CCTV Installation in Dhanmondi, Dhaka', 'camnex'); ?>" 
                     width="1200" 
                     height="675" 
                     loading="lazy" 
                     decoding="async">
            </div>

            <div class="cx-featured-content">
                <div class="cx-featured-meta-top">
                    <span class="cx-project-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Dhanmondi, Dhaka', 'camnex'); ?></span>
                    <span class="cx-project-date"><i data-lucide="calendar" aria-hidden="true"></i> <?php esc_html_e('Completed July 2026', 'camnex'); ?></span>
                </div>

                <h3 class="cx-featured-title"><?php esc_html_e('Home CCTV Installation', 'camnex'); ?></h3>
                <p class="cx-featured-desc"><?php esc_html_e('8 Camera Hikvision ColorVu System ensuring 24/7 full-color crystal clear surveillance and perimeter security.', 'camnex'); ?></p>

                <div class="cx-featured-footer">
                    <span class="cx-project-cta">
                        <?php esc_html_e('View Installation', 'camnex'); ?>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            
            <a href="<?php echo esc_url(home_url('/projects/dhanmondi-home-cctv')); ?>" class="cx-stretched-link" aria-label="<?php esc_attr_e('View installation details for Home CCTV Installation', 'camnex'); ?>"></a>
        </article>

        <!-- Project Cards Grid (3 Smaller Projects Below) -->
        <div class="cx-projects-grid" role="region" aria-label="<?php esc_attr_e('Recent installation listings', 'camnex'); ?>">

            <!-- Card 1: Office -->
            <article class="cx-project-card" 
                     data-project-id="proj-01"
                     data-category="office"
                     data-project-url="<?php echo esc_url(home_url('/projects/banani-corporate-office')); ?>">
                <div class="cx-card-media">
                    <span class="cx-project-badge cx-badge-office"><?php esc_html_e('Office', 'camnex'); ?></span>
                    <img class="cx-card-img" 
                         src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" 
                         alt="<?php esc_attr_e('Corporate Office CCTV Installation in Banani, Dhaka', 'camnex'); ?>" 
                         width="800" 
                         height="500" 
                         loading="lazy" 
                         decoding="async">
                </div>

                <div class="cx-project-content">
                    <div class="cx-project-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Banani, Dhaka', 'camnex'); ?></div>
                    <h3 class="cx-project-name"><?php esc_html_e('Corporate Office CCTV', 'camnex'); ?></h3>
                    <p class="cx-project-desc"><?php esc_html_e('16 Camera IP Surveillance infrastructure setup with centralized NVR management and secure rack deployment.', 'camnex'); ?></p>
                </div>

                <div class="cx-project-footer">
                    <span class="cx-project-cta">
                        <?php esc_html_e('View Installation', 'camnex'); ?>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>

                <a href="<?php echo esc_url(home_url('/projects/banani-corporate-office')); ?>" class="cx-stretched-link" aria-label="<?php esc_attr_e('View installation details for Corporate Office CCTV', 'camnex'); ?>"></a>
            </article>

            <!-- Card 2: Factory -->
            <article class="cx-project-card" 
                     data-project-id="proj-02"
                     data-category="factory"
                     data-project-url="<?php echo esc_url(home_url('/projects/gazipur-garments-factory')); ?>">
                <div class="cx-card-media">
                    <span class="cx-project-badge cx-badge-factory"><?php esc_html_e('Factory', 'camnex'); ?></span>
                    <img class="cx-card-img" 
                         src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" 
                         alt="<?php esc_attr_e('Industrial Factory Surveillance in Gazipur Industrial Zone', 'camnex'); ?>" 
                         width="800" 
                         height="500" 
                         loading="lazy" 
                         decoding="async">
                </div>

                <div class="cx-project-content">
                    <div class="cx-project-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Gazipur Industrial Zone', 'camnex'); ?></div>
                    <h3 class="cx-project-name"><?php esc_html_e('Garments Factory Security', 'camnex'); ?></h3>
                    <p class="cx-project-desc"><?php esc_html_e('Comprehensive optical fiber backbone and 64-channel Dahua PTZ security monitoring system.', 'camnex'); ?></p>
                </div>

                <div class="cx-project-footer">
                    <span class="cx-project-cta">
                        <?php esc_html_e('View Installation', 'camnex'); ?>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>

                <a href="<?php echo esc_url(home_url('/projects/gazipur-garments-factory')); ?>" class="cx-stretched-link" aria-label="<?php esc_attr_e('View installation details for Garments Factory Security', 'camnex'); ?>"></a>
            </article>

            <!-- Card 3: Shop / Retail -->
            <article class="cx-project-card" 
                     data-project-id="proj-03"
                     data-category="shop"
                     data-project-url="<?php echo esc_url(home_url('/projects/gulshan-retail-showroom')); ?>">
                <div class="cx-card-media">
                    <span class="cx-project-badge cx-badge-shop"><?php esc_html_e('Shop', 'camnex'); ?></span>
                    <img class="cx-card-img" 
                         src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80" 
                         alt="<?php esc_attr_e('Retail Showroom Security in Gulshan-2, Dhaka', 'camnex'); ?>" 
                         width="800" 
                         height="500" 
                         loading="lazy" 
                         decoding="async">
                </div>

                <div class="cx-project-content">
                    <div class="cx-project-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Gulshan-2, Dhaka', 'camnex'); ?></div>
                    <h3 class="cx-project-name"><?php esc_html_e('Retail Showroom Setup', 'camnex'); ?></h3>
                    <p class="cx-project-desc"><?php esc_html_e('High-definition audio-enabled dome cameras and integrated retail access point Wi-Fi networking.', 'camnex'); ?></p>
                </div>

                <div class="cx-project-footer">
                    <span class="cx-project-cta">
                        <?php esc_html_e('View Installation', 'camnex'); ?>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>

                <a href="<?php echo esc_url(home_url('/projects/gulshan-retail-showroom')); ?>" class="cx-stretched-link" aria-label="<?php esc_attr_e('View installation details for Retail Showroom Setup', 'camnex'); ?>"></a>
            </article>

        </div>

        <!-- Section Footer CTA -->
        <div class="cx-section-footer-cta">
            <a href="<?php echo esc_url(home_url('/projects')); ?>" class="cx-btn-primary" aria-label="<?php esc_attr_e('View all installation projects completed by CamneX', 'camnex'); ?>">
                <?php esc_html_e('View All Installations', 'camnex'); ?>
                <i data-lucide="arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </div>
</section>
