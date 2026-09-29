<?php
/**
 * CamneX Bangladesh — Single Testimonial Template
 *
 * Displays verified customer reviews, service rating, client organization, and feedback.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$test_id     = get_the_ID();
$client_name = get_post_meta($test_id, '_camnex_client_name', true) ?: get_the_title();
$client_des  = get_post_meta($test_id, '_camnex_client_designation', true);
$client_org  = get_post_meta($test_id, '_camnex_client_company', true);
$rating      = get_post_meta($test_id, '_camnex_rating', true) ?: 5;
?>

<main id="primary" class="site-main cx-single-testimonial-page">
    <div class="container cx-demo">
        
        <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <span class="cx-breadcrumb-item"><?php esc_html_e('Customer Testimonials', 'camnex'); ?></span>
        </nav>

        <article class="cx-testimonial-single-card">
            <div class="cx-testimonial-stars" aria-label="<?php printf(esc_attr__('Rated %d out of 5 stars', 'camnex'), (int)$rating); ?>">
                <?php for ($i = 0; $i < (int)$rating; $i++) : ?>
                    <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                <?php endfor; ?>
            </div>

            <blockquote class="cx-testimonial-quote-text">
                "<?php echo get_the_content() ? get_the_content() : get_the_title(); ?>"
            </blockquote>

            <div class="cx-testimonial-author-block">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="cx-testimonial-avatar-wrap">
                        <?php the_post_thumbnail('thumbnail', ['class' => 'cx-test-avatar']); ?>
                    </div>
                <?php endif; ?>
                <div class="cx-test-author-info">
                    <strong class="cx-test-author-name"><?php echo esc_html($client_name); ?></strong>
                    <?php if ($client_des || $client_org) : ?>
                        <span class="cx-test-author-role">
                            <?php echo esc_html(implode(', ', array_filter([$client_des, $client_org]))); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </article>

    </div>
</main>

<?php
get_footer();
