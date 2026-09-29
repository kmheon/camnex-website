<?php
/**
 * CamneX Bangladesh — CCTV Packages Archive Template
 *
 * Displays pre-configured complete CCTV bundles by camera count tiers (2, 4, 8, 16 cameras)
 * with full hardware inclusions, warranty commitments, and direct booking CTA.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main cx-packages-archive-page">
    <div class="container cx-demo">
        
        <header class="cx-shop-header cx-packages-archive-header">
            <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
                <span class="cx-breadcrumb-sep">/</span>
                <span class="cx-breadcrumb-item"><?php esc_html_e('CCTV Packages', 'camnex'); ?></span>
            </nav>

            <span class="cx-section-badge-label"><?php esc_html_e('All-Inclusive Security Bundles', 'camnex'); ?></span>
            <h1 class="cx-shop-title"><?php esc_html_e('Complete CCTV Packages Ready for Installation', 'camnex'); ?></h1>
            <p class="cx-shop-subtitle">
                <?php esc_html_e('Select complete, fully-tested surveillance bundles designed for residential homes, corporate offices, retail stores, and commercial premises across Bangladesh.', 'camnex'); ?>
            </p>
        </header>

        <?php if (have_posts()) : ?>
            
            <div class="cx-packages-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/packages/package-card'); ?>
                <?php endwhile; ?>
            </div>

            <div class="cx-shop-pagination-wrap">
                <?php
                the_posts_pagination([
                    'prev_text' => '<i data-lucide="chevron-left"></i>',
                    'next_text' => '<i data-lucide="chevron-right"></i>',
                ]);
                ?>
            </div>

        <?php else : ?>

            <div class="cx-no-products-found">
                <p><?php esc_html_e('Custom security bundles are configured daily by our engineering team. Contact our hotline for an instant customized quote.', 'camnex'); ?></p>
                <a href="tel:+8801540535150" class="cx-btn-quote-call">
                    <i data-lucide="phone-call" aria-hidden="true"></i>
                    <span><?php esc_html_e('Call for Custom Package: +880 1540-535150', 'camnex'); ?></span>
                </a>
            </div>

        <?php endif; ?>

        <!-- Package Advantage Strip -->
        <section class="cx-pkg-guarantee-strip">
            <div class="cx-pkg-strip-item">
                <i data-lucide="shield-check" class="cx-strip-icon" aria-hidden="true"></i>
                <div class="cx-strip-text">
                    <h4><?php esc_html_e('100% Genuine Hardware', 'camnex'); ?></h4>
                    <p><?php esc_html_e('Official warranty supported by authorized Bangladesh distributors.', 'camnex'); ?></p>
                </div>
            </div>
            <div class="cx-pkg-strip-item">
                <i data-lucide="wrench" class="cx-strip-icon" aria-hidden="true"></i>
                <div class="cx-strip-text">
                    <h4><?php esc_html_e('Certified Technicians', 'camnex'); ?></h4>
                    <p><?php esc_html_e('Clean casing wiring and zero-clutter installation standard.', 'camnex'); ?></p>
                </div>
            </div>
            <div class="cx-pkg-strip-item">
                <i data-lucide="smartphone" class="cx-strip-icon" aria-hidden="true"></i>
                <div class="cx-strip-text">
                    <h4><?php esc_html_e('Remote Mobile Viewing', 'camnex'); ?></h4>
                    <p><?php esc_html_e('Real-time live video and playback configured on your phone.', 'camnex'); ?></p>
                </div>
            </div>
        </section>

    </div>
</main>

<?php
get_footer();
