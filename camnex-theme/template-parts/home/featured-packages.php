<?php
/**
 * CamneX Bangladesh — Homepage Featured Packages Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Featured Packages -->
<section class="cx-featured-packages-section" aria-labelledby="packages-section-title">
    <div class="cx-packages-bg-glow" aria-hidden="true"></div>
    
    <div class="container cx-packages-container">
        
        <!-- Section Header with Carousel Navigation Controls -->
        <div class="cx-packages-header">
            <div class="cx-header-text-block">
                <div class="cx-section-eyebrow">
                    <span class="cx-eyebrow-line"></span>
                    <span><?php esc_html_e('FEATURED CCTV PACKAGES', 'camnex'); ?></span>
                    <span class="cx-eyebrow-line"></span>
                </div>
                
                <h2 id="packages-section-title" class="cx-section-heading">
                    <?php esc_html_e('Professional CCTV Packages Ready for Installation', 'camnex'); ?>
                </h2>
                
                <p class="cx-section-desc">
                    <?php esc_html_e('Choose complete surveillance solutions for homes, shops, offices and enterprises with professional installation across Bangladesh.', 'camnex'); ?>
                </p>
            </div>

            <!-- Carousel Navigation Arrows -->
            <div class="cx-carousel-controls">
                <button type="button" class="cx-carousel-btn cx-btn-prev" id="prevPackageBtn" aria-label="<?php esc_attr_e('Previous packages', 'camnex'); ?>">
                    <i data-lucide="chevron-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="cx-carousel-btn cx-btn-next" id="nextPackageBtn" aria-label="<?php esc_attr_e('Next packages', 'camnex'); ?>">
                    <i data-lucide="chevron-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Horizontal Product Showcase Carousel Track -->
        <div class="cx-packages-carousel-viewport">
            <div class="cx-packages-track" id="packagesTrack">
                <!-- Dynamically rendered via JavaScript data array -->
            </div>
        </div>

        <!-- Carousel Pagination Dots -->
        <div class="cx-carousel-dots" id="carouselDots" role="tablist" aria-label="<?php esc_attr_e('Carousel Pagination', 'camnex'); ?>"></div>

    </div>
</section>
