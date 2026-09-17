<?php
/**
 * CamneX Bangladesh — Installation Projects Archive Template
 *
 * Showcases verified installation deployments across Bangladesh.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main cx-projects-archive-page">
    <div class="container cx-demo">
        
        <header class="cx-shop-header cx-projects-archive-header">
            <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
                <span class="cx-breadcrumb-sep">/</span>
                <span class="cx-breadcrumb-item"><?php esc_html_e('Recent Installations', 'camnex'); ?></span>
            </nav>

            <span class="cx-section-badge-label"><?php esc_html_e('Field Deployments', 'camnex'); ?></span>
            <h1 class="cx-shop-title"><?php esc_html_e('Recent Surveillance & Networking Installations', 'camnex'); ?></h1>
            <p class="cx-shop-subtitle">
                <?php esc_html_e('Explore verified CCTV and networking deployments completed by CamneX certified field engineering teams across Dhaka and nationwide.', 'camnex'); ?>
            </p>
        </header>

        <div class="cx-projects-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $client_type = get_post_meta(get_the_ID(), '_camnex_client_type', true) ?: __('Commercial Client', 'camnex');
                    $location    = get_post_meta(get_the_ID(), '_camnex_location', true) ?: __('Dhaka, Bangladesh', 'camnex');
                ?>
                    <article class="cx-project-card">
                        <div class="cx-project-card-media">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('camnex-project-thumb', ['class' => 'cx-project-card-img']); ?>
                            <?php else : ?>
                                <div class="cx-project-card-placeholder">
                                    <i data-lucide="video" aria-hidden="true"></i>
                                </div>
                            <?php endif; ?>
                            <span class="cx-project-card-tag"><?php echo esc_html($client_type); ?></span>
                        </div>
                        <div class="cx-project-card-body">
                            <span class="cx-project-card-location"><i data-lucide="map-pin"></i> <?php echo esc_html($location); ?></span>
                            <h2 class="cx-project-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="cx-project-card-excerpt"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="cx-project-card-link">
                                <span><?php esc_html_e('View Case Study', 'camnex'); ?></span>
                                <i data-lucide="arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="cx-no-products-found">
                    <p><?php esc_html_e('Verified field case studies and project handover photos will be published here upon client authorization.', 'camnex'); ?></p>
                    <a href="tel:+8801540535150" class="cx-btn-quote-call">
                        <i data-lucide="phone" aria-hidden="true"></i>
                        <span><?php esc_html_e('Contact Us for References: +880 1540-535150', 'camnex'); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php
get_footer();
