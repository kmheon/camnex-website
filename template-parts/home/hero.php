<?php
/**
 * CamneX Bangladesh — Homepage Hero Section Template Part
 * Product-First Launch Hero
 *
 * @package CamneX
 * @version 5.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();
?>
<!-- CamneX Bangladesh — Premium Product-First Launch Hero -->
<section class="cx-hero" id="camnexHero" aria-label="<?php esc_attr_e('Featured Technology Products', 'camnex'); ?>">
    <div class="container cx-hero-container">

        <!-- Product Launch Stage Card -->
        <div class="cx-hero-card" id="heroProductStage">

            <!-- LEFT: Product Story & Actions -->
            <div class="cx-hero-content">

                <!-- Eyebrow Tag -->
                <div class="cx-hero-eyebrow">
                    <span class="cx-hero-badge" id="heroBadge"><?php esc_html_e('NEW ARRIVAL', 'camnex'); ?></span>
                    <span class="cx-hero-category" id="heroCategory"><?php esc_html_e('CCTV & Video Surveillance', 'camnex'); ?></span>
                </div>

                <!-- Product Headline (Meet the New ...) -->
                <div class="cx-hero-headline-group">
                    <span class="cx-hero-pretitle" id="heroPretitle"><?php esc_html_e('Meet the New', 'camnex'); ?></span>
                    <h1 class="cx-hero-title" id="heroTitle"><?php esc_html_e('Hikvision ColorVu Camera', 'camnex'); ?></h1>
                </div>

                <!-- Short Product Description -->
                <p class="cx-hero-desc" id="heroDesc">
                    <?php esc_html_e('Advanced color night vision, AI detection and reliable 24/7 surveillance for modern security.', 'camnex'); ?>
                </p>

                <!-- Primary & Secondary CTAs -->
                <div class="cx-hero-actions">
                    <a href="<?php echo esc_url(home_url('/category/cctv-cameras')); ?>" class="cx-btn-hero cx-btn-primary" id="heroPrimaryCta">
                        <span id="heroPrimaryCtaText"><?php esc_html_e('View Product', 'camnex'); ?></span>
                        <svg class="cx-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/get-quote')); ?>" class="cx-btn-hero cx-btn-secondary" id="heroSecondaryCta">
                        <span><?php esc_html_e('Get a Quote', 'camnex'); ?></span>
                    </a>
                </div>

            </div>

            <!-- CENTER: Large Product Image Showcase -->
            <div class="cx-hero-visual">
                <div class="cx-visual-aura" aria-hidden="true"></div>
                <div class="cx-visual-frame" id="heroVisualFrame">
                    <img id="heroProductImg"
                         class="cx-hero-image"
                         src="<?php echo esc_url($theme_uri . '/assets/products/cctv-bullet-transparent.png'); ?>"
                         alt="<?php esc_attr_e('Hikvision ColorVu Camera', 'camnex'); ?>"
                         loading="eager" />
                </div>
            </div>

            <!-- RIGHT: Compact Vertical Speciality Rail -->
            <aside class="cx-hero-specs-rail" id="heroSpecsRail" aria-label="<?php esc_attr_e('Key Product Specifications', 'camnex'); ?>">
                <div class="cx-spec-rail-item">
                    <div class="cx-spec-rail-head">
                        <span class="cx-spec-dot" aria-hidden="true">●</span>
                        <span class="cx-spec-rail-val" id="specVal0">2MP</span>
                    </div>
                    <span class="cx-spec-rail-lbl" id="specLbl0"><?php esc_html_e('Resolution', 'camnex'); ?></span>
                </div>
                <div class="cx-spec-rail-item">
                    <div class="cx-spec-rail-head">
                        <span class="cx-spec-dot" aria-hidden="true">●</span>
                        <span class="cx-spec-rail-val" id="specVal1">ColorVu</span>
                    </div>
                    <span class="cx-spec-rail-lbl" id="specLbl1"><?php esc_html_e('Night Vision', 'camnex'); ?></span>
                </div>
                <div class="cx-spec-rail-item">
                    <div class="cx-spec-rail-head">
                        <span class="cx-spec-dot" aria-hidden="true">●</span>
                        <span class="cx-spec-rail-val" id="specVal2">AI Detection</span>
                    </div>
                    <span class="cx-spec-rail-lbl" id="specLbl2"><?php esc_html_e('Smart Analytics', 'camnex'); ?></span>
                </div>
                <div class="cx-spec-rail-item">
                    <div class="cx-spec-rail-head">
                        <span class="cx-spec-dot" aria-hidden="true">●</span>
                        <span class="cx-spec-rail-val" id="specVal3">30m</span>
                    </div>
                    <span class="cx-spec-rail-lbl" id="specLbl3"><?php esc_html_e('IR Range', 'camnex'); ?></span>
                </div>
            </aside>

            <!-- Bottom: Minimalist Product Carousel Switcher -->
            <div class="cx-hero-nav" role="tablist" aria-label="<?php esc_attr_e('Featured Product Showcase Selector', 'camnex'); ?>">
                <button type="button" class="cx-hero-nav-btn active" role="tab" id="prodTab0" aria-selected="true" data-index="0" aria-label="<?php esc_attr_e('Product 1: Hikvision ColorVu Camera', 'camnex'); ?>">
                    <span class="cx-nav-num">01</span>
                    <span class="cx-nav-title"><?php esc_html_e('ColorVu Camera', 'camnex'); ?></span>
                </button>
                <button type="button" class="cx-hero-nav-btn" role="tab" id="prodTab1" aria-selected="false" data-index="1" aria-label="<?php esc_attr_e('Product 2: Face Recognition Terminal', 'camnex'); ?>">
                    <span class="cx-nav-num">02</span>
                    <span class="cx-nav-title"><?php esc_html_e('Biometric Terminal', 'camnex'); ?></span>
                </button>
                <button type="button" class="cx-hero-nav-btn" role="tab" id="prodTab2" aria-selected="false" data-index="2" aria-label="<?php esc_attr_e('Product 3: Reyee Cloud PoE Switch', 'camnex'); ?>">
                    <span class="cx-nav-num">03</span>
                    <span class="cx-nav-title"><?php esc_html_e('Cloud PoE Switch', 'camnex'); ?></span>
                </button>
                <button type="button" class="cx-hero-nav-btn" role="tab" id="prodTab3" aria-selected="false" data-index="3" aria-label="<?php esc_attr_e('Product 4: Smart Video Doorbell', 'camnex'); ?>">
                    <span class="cx-nav-num">04</span>
                    <span class="cx-nav-title"><?php esc_html_e('Video Doorbell', 'camnex'); ?></span>
                </button>
            </div>

        </div>

    </div>
</section>
