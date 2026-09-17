<?php
/**
 * CamneX Bangladesh — Solutions Archive Template
 *
 * Displays all property security solutions (Homes, Offices, Retail, Warehouses, Factories, Campuses).
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main cx-solutions-archive-page">
    <div class="container cx-demo">
        
        <header class="cx-shop-header cx-solutions-archive-header">
            <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
                <span class="cx-breadcrumb-sep">/</span>
                <span class="cx-breadcrumb-item"><?php esc_html_e('Property Solutions', 'camnex'); ?></span>
            </nav>

            <span class="cx-section-badge-label"><?php esc_html_e('Engineered For Your Property', 'camnex'); ?></span>
            <h1 class="cx-shop-title"><?php esc_html_e('Security & Networking Solutions by Property Type', 'camnex'); ?></h1>
            <p class="cx-shop-subtitle">
                <?php esc_html_e('Explore custom-architected surveillance, access control, and network infrastructures tailored for specific environments across Bangladesh.', 'camnex'); ?>
            </p>
        </header>

        <div class="cx-solutions-archive-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="cx-solution-archive-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="cx-solution-thumb-wrap">
                                <?php the_post_thumbnail('medium_large', ['class' => 'cx-sol-thumb']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="cx-sol-card-body">
                            <h2 class="cx-sol-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="cx-sol-excerpt"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="cx-sol-readmore">
                                <span><?php esc_html_e('View Architecture', 'camnex'); ?></span>
                                <i data-lucide="arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <!-- Frozen 6 Standard Solutions Reference -->
                <div class="cx-solution-archive-card">
                    <div class="cx-sol-card-body">
                        <h2 class="cx-sol-title"><?php esc_html_e('Modern Smart Home', 'camnex'); ?></h2>
                        <p class="cx-sol-excerpt"><?php esc_html_e('Complete residential protection and intelligent automation for your family and property.', 'camnex'); ?></p>
                        <a href="tel:+8801540535150" class="cx-sol-readmore"><span><?php esc_html_e('Inquire Solution', 'camnex'); ?></span> <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                <div class="cx-solution-archive-card">
                    <div class="cx-sol-card-body">
                        <h2 class="cx-sol-title"><?php esc_html_e('Corporate Office', 'camnex'); ?></h2>
                        <p class="cx-sol-excerpt"><?php esc_html_e('High-density networking, time attendance, biometric access and complete perimeter security.', 'camnex'); ?></p>
                        <a href="tel:+8801540535150" class="cx-sol-readmore"><span><?php esc_html_e('Inquire Solution', 'camnex'); ?></span> <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                <div class="cx-solution-archive-card">
                    <div class="cx-sol-card-body">
                        <h2 class="cx-sol-title"><?php esc_html_e('Retail Shop & Showroom', 'camnex'); ?></h2>
                        <p class="cx-sol-excerpt"><?php esc_html_e('Loss prevention, cash register focus, customer footfall tracking and cloud monitoring.', 'camnex'); ?></p>
                        <a href="tel:+8801540535150" class="cx-sol-readmore"><span><?php esc_html_e('Inquire Solution', 'camnex'); ?></span> <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php
get_footer();
