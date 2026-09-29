<?php
/**
 * CamneX Bangladesh — Homepage Property Solutions Section Template Part
 * Premium Security Solution Category Section
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
                <span><?php esc_html_e('PROPERTY SOLUTIONS', 'camnex'); ?></span>
            </div>
            
            <h2 id="property-section-title" class="cx-section-heading">
                <?php esc_html_e('Find the Perfect Security Solution for Your Property', 'camnex'); ?>
            </h2>
            
            <p class="cx-section-desc">
                <?php esc_html_e('Professional security, networking and smart technology solutions designed specifically for every environment.', 'camnex'); ?>
            </p>
        </div>

        <!-- Compact 3 x 2 Technology Card Grid -->
        <div class="cx-property-grid" role="list" aria-label="<?php esc_attr_e('Security Solutions by Property Type', 'camnex'); ?>">
            
            <!-- 1. HOME -->
            <a href="<?php echo esc_url(home_url('/solutions/home')); ?>" class="cx-property-card cx-card-home" role="listitem" aria-label="<?php esc_attr_e('Explore Home Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Residential', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Most Popular', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                            <circle cx="12" cy="7" r="1.25" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Home', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Complete residential protection and intelligent automation for your family and property.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Smart Doorbell', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('WiFi', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- 2. OFFICE -->
            <a href="<?php echo esc_url(home_url('/solutions/office')); ?>" class="cx-property-card cx-card-office" role="listitem" aria-label="<?php esc_attr_e('Explore Office Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Commercial', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Enterprise Choice', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                            <path d="M9 22v-4h6v4"/>
                            <path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/>
                            <path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/>
                            <path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Office', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Enterprise networking, biometric attendance, and high-security surveillance for workplaces.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Access Control', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Networking', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Time Attendance', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- 3. RETAIL SHOP -->
            <a href="<?php echo esc_url(home_url('/solutions/retail-shop')); ?>" class="cx-property-card cx-card-retail" role="listitem" aria-label="<?php esc_attr_e('Explore Retail Shop Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Retail & POS', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Recommended', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/>
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
                            <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/>
                            <path d="M2 7h20"/>
                            <path d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 10V7"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Retail Shop', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Loss prevention cameras, POS integration, and staff attendance tracking.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('POS', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Time Attendance', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- 4. WAREHOUSE -->
            <a href="<?php echo esc_url(home_url('/solutions/warehouse')); ?>" class="cx-property-card cx-card-warehouse" role="listitem" aria-label="<?php esc_attr_e('Explore Warehouse Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Logistics', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Heavy Duty', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z"/>
                            <path d="M6 18h12"/>
                            <path d="M6 14h12"/>
                            <rect width="12" height="12" x="6" y="10"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Warehouse', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Long-range surveillance, NVR storage, and industrial networking.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('PoE', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('NVR Storage', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- 5. FACTORY -->
            <a href="<?php echo esc_url(home_url('/solutions/factory')); ?>" class="cx-property-card cx-card-factory" role="listitem" aria-label="<?php esc_attr_e('Explore Factory Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Industrial', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Industrial Grade', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
                            <path d="M17 18h1"/><path d="M12 18h1"/><path d="M7 18h1"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Factory', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Perimeter security, strict access control, and AI analytics.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Access Control', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('AI Analytics', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- 6. EDUCATIONAL INSTITUTE -->
            <a href="<?php echo esc_url(home_url('/solutions/educational-institute')); ?>" class="cx-property-card cx-card-education" role="listitem" aria-label="<?php esc_attr_e('Explore Educational Institute Security Solutions', 'camnex'); ?>">
                <div class="cx-card-accent-bar" aria-hidden="true"></div>
                
                <div class="cx-card-top-row">
                    <span class="cx-category-marker">
                        <span class="cx-marker-dot" aria-hidden="true"></span>
                        <span><?php esc_html_e('Institutional', 'camnex'); ?></span>
                    </span>
                    <span class="cx-card-tag-badge"><?php esc_html_e('Campus Wide', 'camnex'); ?></span>
                </div>
                
                <div class="cx-card-visual-row">
                    <div class="cx-prop-icon-box">
                        <svg class="cx-prop-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        </svg>
                    </div>
                </div>
                
                <div class="cx-card-content">
                    <h3 class="cx-prop-title"><?php esc_html_e('Educational Institute', 'camnex'); ?></h3>
                    <p class="cx-prop-desc"><?php esc_html_e('Campus safety cameras and automated student attendance tracking.', 'camnex'); ?></p>
                </div>
                
                <div class="cx-card-footer">
                    <div class="cx-tech-chips" aria-label="<?php esc_attr_e('Included Technologies', 'camnex'); ?>">
                        <span class="cx-tech-chip"><?php esc_html_e('CCTV', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Attendance', 'camnex'); ?></span>
                        <span class="cx-tech-chip"><?php esc_html_e('Networking', 'camnex'); ?></span>
                    </div>
                    <div class="cx-explore-action">
                        <span><?php esc_html_e('Explore Solution', 'camnex'); ?></span>
                        <svg class="cx-explore-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m13 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </a>

        </div>

    </div>
</section>
