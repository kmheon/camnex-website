<?php
/**
 * CamneX Bangladesh — WooCommerce Loop Product Template Override
 *
 * Overrides WooCommerce core content-product.php to delegate rendering
 * to the reusable CamneX product-card presentation layer.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_template_part('template-parts/woocommerce/product-card');
