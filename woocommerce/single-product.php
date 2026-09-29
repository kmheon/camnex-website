<?php
/**
 * CamneX Bangladesh — WooCommerce Single Product Template
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

<div class="cx-single-product">
    <?php while (have_posts()) : ?>
        <?php
        the_post();
        wc_get_template_part('content', 'single-product');
        ?>
    <?php endwhile; ?>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked camnex_woocommerce_wrapper_after - 10
 */
do_action('woocommerce_after_main_content');

get_footer('shop');
