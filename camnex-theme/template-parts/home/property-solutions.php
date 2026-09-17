<?php
/**
 * CamneX Bangladesh — Homepage Property Solutions Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Property Solutions -->
<section class="cx-property-solutions" aria-labelledby="property-section-title">
    <div class="cx-property-bg-glow" aria-hidden="true"></div>
    
    <div class="container cx-property-container">
        
        <!-- Section Header -->
        <div class="cx-property-header">
            <div class="cx-section-eyebrow">
                <span class="cx-eyebrow-line"></span>
                <span><?php esc_html_e('PROPERTY SOLUTIONS', 'camnex'); ?></span>
                <span class="cx-eyebrow-line"></span>
            </div>
            
            <h2 id="property-section-title" class="cx-section-heading">
                <?php esc_html_e('Find the Perfect Security Solution for Your Property', 'camnex'); ?>
            </h2>
            
            <p class="cx-section-desc">
                <?php esc_html_e('Professional security, networking and smart technology solutions designed specifically for every environment.', 'camnex'); ?>
            </p>
        </div>

        <!-- Property Solutions Bento Grid Layout (Polished & Streamlined) -->
        <div class="cx-property-bento-grid">
            
            <!-- 1. HOME (Large Featured Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/home')); ?>" class="cx-property-card cx-prop-large" aria-label="<?php esc_attr_e('Explore Home Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1400&q=85" alt="<?php esc_attr_e('Modern Smart Home', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Most Popular', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Home', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Complete residential protection and intelligent automation for your family and property.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('Smart Doorbell', 'camnex'); ?></span>
                        <span><?php esc_html_e('WiFi', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

            <!-- 2. OFFICE (Large Featured Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/office')); ?>" class="cx-property-card cx-prop-large" aria-label="<?php esc_attr_e('Explore Office Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1400&q=85" alt="<?php esc_attr_e('Corporate Office', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Enterprise Choice', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Office', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Enterprise networking, biometric attendance, and high-security surveillance for workplaces.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('Access Control', 'camnex'); ?></span>
                        <span><?php esc_html_e('Networking', 'camnex'); ?></span>
                        <span><?php esc_html_e('Time Attendance', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

            <!-- 3. RETAIL SHOP (Medium Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/retail-shop')); ?>" class="cx-property-card cx-prop-medium" aria-label="<?php esc_attr_e('Explore Retail Shop Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1555529771-835f59fc5efe?auto=format&fit=crop&w=1000&q=85" alt="<?php esc_attr_e('Retail Shop', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Recommended Solution', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Retail Shop', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Loss prevention cameras, POS integration, and staff attendance tracking.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('POS', 'camnex'); ?></span>
                        <span><?php esc_html_e('Time Attendance', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

            <!-- 4. WAREHOUSE (Medium Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/warehouse')); ?>" class="cx-property-card cx-prop-medium" aria-label="<?php esc_attr_e('Explore Warehouse Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=1000&q=85" alt="<?php esc_attr_e('Large Warehouse', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Recommended Solution', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Warehouse', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Long-range surveillance, NVR storage, and industrial networking.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('PoE', 'camnex'); ?></span>
                        <span><?php esc_html_e('NVR Storage', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

            <!-- 5. FACTORY (Medium Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/factory')); ?>" class="cx-property-card cx-prop-medium" aria-label="<?php esc_attr_e('Explore Factory Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1000&q=85" alt="<?php esc_attr_e('Industrial Factory', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Industrial Grade', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Factory', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Perimeter security, strict access control, and AI analytics.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('Access Control', 'camnex'); ?></span>
                        <span><?php esc_html_e('AI Analytics', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

            <!-- 6. EDUCATIONAL INSTITUTE (Medium Card) -->
            <a href="<?php echo esc_url(home_url('/solutions/educational-institute')); ?>" class="cx-property-card cx-prop-medium" aria-label="<?php esc_attr_e('Explore Educational Institute Solutions', 'camnex'); ?>">
                <div class="cx-card-bg-image">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1000&q=85" alt="<?php esc_attr_e('Educational Campus', 'camnex'); ?>" loading="lazy">
                    <div class="cx-card-gradient-overlay"></div>
                </div>
                <div class="cx-card-top">
                    <span class="cx-package-badge"><?php esc_html_e('Campus Wide', 'camnex'); ?></span>
                </div>
                <div class="cx-card-bottom">
                    <h3 class="cx-prop-title"><?php esc_html_e('Educational Institute', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Campus safety cameras and automated student attendance tracking.', 'camnex'); ?></p>
                    <div class="cx-tech-chips">
                        <span><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span><?php esc_html_e('Attendance', 'camnex'); ?></span>
                        <span><?php esc_html_e('Networking', 'camnex'); ?></span>
                    </div>
                    <span class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <i data-lucide="arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </a>

        </div>

    </div>
</section>
