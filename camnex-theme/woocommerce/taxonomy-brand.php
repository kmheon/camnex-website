<?php
/**
 * CamneX Bangladesh — Brand Taxonomy Archive Template
 *
 * Displays brand logo, authorization credentials, description, and
 * associated WooCommerce products and CCTV packages.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header('shop');

$current_brand = get_queried_object();
$brand_logo_url = camnex_get_brand_logo_url($current_brand);

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked camnex_woocommerce_wrapper_before - 10
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<div class="cx-shop-archive cx-brand-archive">
    <header class="cx-shop-header cx-brand-header">
        <div class="cx-brand-header-inner">
            <?php if (!empty($brand_logo_url)) : ?>
                <div class="cx-brand-archive-logo-wrap">
                    <img src="<?php echo esc_url($brand_logo_url); ?>" alt="<?php echo esc_attr($current_brand->name); ?> Logo" class="cx-brand-archive-logo" width="180" height="48">
                </div>
            <?php endif; ?>
            <div class="cx-brand-header-info">
                <div class="cx-brand-partner-badge">
                    <i data-lucide="shield-check" aria-hidden="true"></i>
                    <span><?php esc_html_e('Authorized Technology Partner', 'camnex'); ?></span>
                </div>
                <h1 class="cx-shop-title"><?php single_term_title(); ?></h1>
                <?php
                $brand_description = term_description();
                if (!empty($brand_description)) :
                    echo '<div class="cx-brand-desc">' . wp_kses_post($brand_description) . '</div>';
                else :
                    ?>
                    <p class="cx-shop-subtitle">
                        <?php
                        /* translators: %s: brand name */
                        printf(esc_html__('Explore genuine %s surveillance, networking, and security solutions backed by official manufacturer warranty and professional CamneX installation in Bangladesh.', 'camnex'), esc_html($current_brand->name));
                        ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <?php if (woocommerce_product_loop()) : ?>

        <div class="cx-shop-toolbar">
            <?php do_action('woocommerce_before_shop_loop'); ?>
        </div>

        <?php woocommerce_product_loop_start(); ?>

        <?php if (wc_get_loop_prop('total')) : ?>
            <?php while (have_posts()) : ?>
                <?php
                the_post();
                do_action('woocommerce_shop_loop');
                wc_get_template_part('content', 'product');
                ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php woocommerce_product_loop_end(); ?>

        <div class="cx-shop-pagination-wrap">
            <?php do_action('woocommerce_after_shop_loop'); ?>
        </div>

    <?php else : ?>

        <div class="cx-no-products-found">
            <p><?php esc_html_e('No products currently listed for this brand. Contact us for custom quotations and product availability.', 'camnex'); ?></p>
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="cx-btn-back-shop">
                <?php esc_html_e('Return to Catalog', 'camnex'); ?>
            </a>
        </div>

    <?php endif; ?>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked camnex_woocommerce_wrapper_after - 10
 */
do_action('woocommerce_after_main_content');

get_footer('shop');
