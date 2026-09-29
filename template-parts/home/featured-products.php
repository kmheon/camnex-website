<?php
/**
 * CamneX Bangladesh — Homepage Featured Products Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Featured Products -->
<section class="cx-popular-products-section" aria-labelledby="products-section-title">
    <div class="cx-products-bg-grid" aria-hidden="true"></div>
    
    <div class="container cx-products-container">
        
        <!-- Section Header -->
        <div class="cx-products-header">
            <div class="cx-header-text-block">
                <div class="cx-section-eyebrow">
                    <span class="cx-eyebrow-line"></span>
                    <span><?php esc_html_e('POPULAR PRODUCTS', 'camnex'); ?></span>
                    <span class="cx-eyebrow-line"></span>
                </div>
                
                <h2 id="products-section-title" class="cx-section-heading">
                    <?php esc_html_e('Engineered for Absolute Reliability', 'camnex'); ?>
                </h2>
                
                <p class="cx-section-desc">
                    <?php esc_html_e('Explore our top-rated security cameras, networking switches, and biometric access terminals.', 'camnex'); ?>
                </p>
            </div>

            <!-- Dynamic Category Filter Pills -->
            <div class="cx-category-filters" id="categoryFilters" role="tablist" aria-label="<?php esc_attr_e('Product Categories', 'camnex'); ?>"></div>
        </div>

        <!-- Carousel Viewport & Track -->
        <div class="cx-products-carousel-viewport" id="carouselViewport">
            <div class="cx-products-track" id="productsTrack"></div>
        </div>

        <!-- Carousel Navigation & Pagination Footer -->
        <div class="cx-carousel-footer-controls" id="productCarouselFooter">
            <div class="cx-carousel-dots" id="productCarouselDots" role="tablist" aria-label="<?php esc_attr_e('Carousel Pagination', 'camnex'); ?>"></div>
            
            <div class="cx-carousel-arrows">
                <button type="button" class="cx-carousel-btn cx-btn-prev" id="prevProductBtn" aria-label="<?php esc_attr_e('Previous products', 'camnex'); ?>">
                    <i data-lucide="chevron-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="cx-carousel-btn cx-btn-next" id="nextProductBtn" aria-label="<?php esc_attr_e('Next products', 'camnex'); ?>">
                    <i data-lucide="chevron-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

    </div>
</section>
