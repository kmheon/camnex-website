<?php
/**
 * CamneX Bangladesh — Homepage Hero Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- CamneX Hero -->
<section class="cx-hero" id="camnexHero">
    <div class="container cx-hero-grid">

        <!-- ============ LEFT: static brand column ============ -->
        <div class="cx-hero-left">
            <span class="cx-badge-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-4"/></svg>
                <?php esc_html_e("Bangladesh's Trusted Technology Partner", 'camnex'); ?>
            </span>

            <h1 class="cx-hero-headline">
                <span class="cx-line-ink"><?php esc_html_e('Securing What', 'camnex'); ?></span>
                <span class="cx-line-ink"><?php esc_html_e('Matters.', 'camnex'); ?></span>
                <span class="cx-line-orange"><?php esc_html_e('Connected for', 'camnex'); ?></span>
                <span class="cx-line-orange"><?php esc_html_e('Tomorrow.', 'camnex'); ?></span>
            </h1>

            <p class="cx-hero-body"><?php esc_html_e('CamneX delivers high-performance security, networking and smart technology solutions with reliable products and expert installation across Bangladesh.', 'camnex'); ?></p>

            <div class="cx-hero-cta-row">
                <a href="<?php echo esc_url(home_url('/get-quote')); ?>" class="cx-btn cx-hero-btn cx-hero-btn-primary">
                    <?php esc_html_e('Get Free Quote', 'camnex'); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m13 5 7 7-7 7"/></svg>
                </a>
                <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-btn cx-hero-btn cx-hero-btn-secondary">
                    <?php esc_html_e('Explore Solutions', 'camnex'); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m13 5 7 7-7 7"/></svg>
                </a>
            </div>

            <ul class="cx-trust-row">
                <li class="cx-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/></svg>
                    <span class="cx-trust-label"><span class="l1"><?php esc_html_e('Official', 'camnex'); ?></span><span class="l2"><?php esc_html_e('Warranty', 'camnex'); ?></span></span>
                </li>
                <li class="cx-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span class="cx-trust-label"><span class="l1"><?php esc_html_e('Nationwide', 'camnex'); ?></span><span class="l2"><?php esc_html_e('Installation', 'camnex'); ?></span></span>
                </li>
                <li class="cx-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/></svg>
                    <span class="cx-trust-label"><span class="l1"><?php esc_html_e('Certified', 'camnex'); ?></span><span class="l2"><?php esc_html_e('Engineers', 'camnex'); ?></span></span>
                </li>
                <li class="cx-trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="m9 13.5-1.5 7L12 18l4.5 2.5-1.5-7"/></svg>
                    <span class="cx-trust-label"><span class="l1"><?php esc_html_e('Genuine', 'camnex'); ?></span><span class="l2"><?php esc_html_e('Products', 'camnex'); ?></span></span>
                </li>
            </ul>
        </div>

        <!-- ============ RIGHT: dynamic product spotlight ============ -->
        <div class="cx-hero-right">

            <div class="cx-tabbar" id="heroTabbar" role="tablist" aria-label="<?php esc_attr_e('Solution categories', 'camnex'); ?>"></div>

            <div class="cx-product-panel">
                <div class="cx-product-info">
                    <p class="cx-hero-eyebrow" id="pEyebrow"></p>
                    <h2 class="cx-product-title" id="pTitle"></h2>
                    <p class="cx-product-subtitle" id="pSubtitle"></p>
                    <ul class="cx-checklist" id="pChecklist"></ul>
                    <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-explore-link" id="pExploreLink">
                        <span id="pExploreText"></span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m13 5 7 7-7 7"/></svg>
                    </a>
                </div>

                <div class="cx-stage">
                    <div class="cx-stage-blob"></div>
                    <div class="cx-stage-image-wrap" id="stageImageWrap">
                        <img class="cx-stage-image" id="stageImage" src="" alt="">
                    </div>
                    <div class="cx-warranty-badge" id="warrantyBadge">
                        <span class="cx-wb-number" id="wbNumber"></span>
                        <span class="cx-wb-year"><?php esc_html_e('YEAR', 'camnex'); ?></span>
                        <span class="cx-wb-word"><?php esc_html_e('WARRANTY', 'camnex'); ?></span>
                    </div>
                </div>

                <div class="cx-chip-row" id="chipRow"></div>
            </div>
        </div>

    </div>

    <div class="container cx-partner-section">
        <p class="cx-partner-heading"><?php esc_html_e("We work with the world's leading brands", 'camnex'); ?></p>
        <div class="cx-partner-strip" id="partnerStrip"></div>
    </div>
</section>
