<?php
/**
 * CamneX Bangladesh — WooCommerce Product Category Archive Template
 *
 * Displays category title, banner/description, sub-category navigation,
 * catalog product grid, and pagination.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked camnex_woocommerce_wrapper_before - 10
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<div class="cx-shop-archive cx-category-archive">
    <header class="cx-shop-header cx-category-header">
        <h1 class="cx-shop-title"><?php single_term_title(); ?></h1>
        <?php
        $category_description = term_description();
        if (!empty($category_description)) :
            echo '<div class="cx-category-desc">' . wp_kses_post($category_description) . '</div>';
        else :
            ?>
            <p class="cx-shop-subtitle">
                <?php esc_html_e('Explore genuine surveillance, networking, and IT security equipment with official warranty and expert installation across Bangladesh.', 'camnex'); ?>
            </p>
        <?php endif; ?>
    </header>

    <?php if (woocommerce_product_loop()) : ?>

        <?php
        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        ?>
        <div class="cx-shop-toolbar">
            <?php do_action('woocommerce_before_shop_loop'); ?>
        </div>

        <?php woocommerce_product_loop_start(); ?>

        <?php if (wc_get_loop_prop('total')) : ?>
            <?php while (have_posts()) : ?>
                <?php
                the_post();

                /**
                 * Hook: woocommerce_shop_loop.
                 */
                do_action('woocommerce_shop_loop');

                wc_get_template_part('content', 'product');
                ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php
        /**
         * Hook: woocommerce_after_shop_loop.
         *
         * @hooked woocommerce_pagination - 10
         */
        ?>
        <div class="cx-shop-pagination-wrap">
            <?php do_action('woocommerce_after_shop_loop'); ?>
        </div>

    <?php else : ?>

        <?php
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        ?>
        <div class="cx-no-products-found">
            <p><?php esc_html_e('No products found in this category. Please check back soon or contact our sales team.', 'camnex'); ?></p>
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
