<?php
/**
 * CamneX Bangladesh — Reusable Product Card Presentation Layer
 *
 * Designed to render native WooCommerce products within the CamneX catalog
 * grids, archives, search results, and related product loops while strictly
 * preserving the CamneX design tokens, visual hierarchy, and accessibility standards.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;

// Ensure valid WC_Product object is available.
if (empty($product) || !is_a($product, 'WC_Product')) {
    return;
}

$product_id     = $product->get_id();
$product_title  = $product->get_name();
$product_url    = $product->get_permalink();
$product_sku    = $product->get_sku();
$is_in_stock    = $product->is_in_stock();
$is_on_sale     = $product->is_on_sale();
$price_html     = $product->get_price_html();
$regular_price  = $product->get_regular_price();
$sale_price     = $product->get_sale_price();

// Calculate discount percentage badge if on sale.
$discount_badge = '';
if ($is_on_sale && is_numeric($regular_price) && is_numeric($sale_price) && (float) $regular_price > (float) $sale_price) {
    $percent        = round((((float) $regular_price - (float) $sale_price) / (float) $regular_price) * 100);
    $discount_badge = '-' . $percent . '%';
}

// Categories list.
$categories = wc_get_product_category_list($product_id, ', ');

// Brand preparation (checks for custom taxonomy 'brand' if registered).
$brand_name = '';
if (taxonomy_exists('brand')) {
    $brand_terms = get_the_terms($product_id, 'brand');
    if (!empty($brand_terms) && !is_wp_error($brand_terms)) {
        $brand_name = $brand_terms[0]->name;
    }
}
?>
<article <?php wc_product_class('cx-product-card', $product); ?> data-id="<?php echo esc_attr($product_id); ?>">
    
    <!-- Top Row: Badge & Wishlist Action -->
    <div class="cx-card-top-row">
        <?php if (!empty($discount_badge)) : ?>
            <span class="cx-product-badge cx-badge-sale"><?php echo esc_html($discount_badge); ?></span>
        <?php elseif ($is_on_sale) : ?>
            <span class="cx-product-badge cx-badge-sale"><?php esc_html_e('Sale', 'camnex'); ?></span>
        <?php else : ?>
            <span class="cx-product-badge cx-badge-official"><?php esc_html_e('Official', 'camnex'); ?></span>
        <?php endif; ?>
        
        <button type="button" class="cx-wishlist-btn" aria-label="<?php esc_attr_e('Add to Wishlist', 'camnex'); ?>">
            <i data-lucide="heart" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Product Visual / Thumbnail -->
    <div class="cx-product-visual">
        <a href="<?php echo esc_url($product_url); ?>" class="cx-product-img-link" tabindex="-1" aria-hidden="true">
            <?php if (has_post_thumbnail($product_id)) : ?>
                <?php echo $product->get_image('camnex-product-thumb', [
                    'class'   => 'cx-product-img',
                    'loading' => 'lazy',
                    'alt'     => esc_attr($product_title),
                ]); ?>
            <?php else : ?>
                <div class="cx-product-img-placeholder" aria-hidden="true">
                    <i data-lucide="camera"></i>
                </div>
            <?php endif; ?>
        </a>
    </div>

    <!-- Product Info: Category, Stock, Title, SKU, Brand -->
    <div class="cx-product-info">
        <div class="cx-product-meta-row">
            <span class="cx-product-category">
                <?php echo !empty($categories) ? wp_kses_post($categories) : esc_html__('Security Hardware', 'camnex'); ?>
            </span>
            <div class="cx-stock-indicator <?php echo $is_in_stock ? 'in-stock' : 'out-of-stock'; ?>">
                <span class="cx-stock-dot" aria-hidden="true"></span>
                <span><?php echo $is_in_stock ? esc_html__('In Stock', 'camnex') : esc_html__('Out of Stock', 'camnex'); ?></span>
            </div>
        </div>

        <div class="cx-product-title-area">
            <?php if (!empty($brand_name)) : ?>
                <div class="cx-brand-row">
                    <span class="cx-brand-text"><?php echo esc_html($brand_name); ?></span>
                </div>
            <?php endif; ?>

            <h3 class="cx-product-title">
                <a href="<?php echo esc_url($product_url); ?>"><?php echo esc_html($product_title); ?></a>
            </h3>

            <?php if (!empty($product_sku)) : ?>
                <span class="cx-product-sku"><?php echo esc_html(sprintf(__('Model: %s', 'camnex'), $product_sku)); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <!-- Product Footer: Price Display & Action Group -->
    <div class="cx-product-footer">
        <div class="cx-product-price-row">
            <div class="cx-price-group">
                <?php echo wp_kses_post($price_html); ?>
            </div>
        </div>

        <div class="cx-product-cta-group">
            <a href="<?php echo esc_url($product_url); ?>" class="cx-btn-product-primary">
                <?php esc_html_e('View Product', 'camnex'); ?>
            </a>
            <?php
            woocommerce_template_loop_add_to_cart([
                'class' => 'cx-btn-product-secondary cx-add-to-cart-btn button',
            ]);
            ?>
        </div>
    </div>

</article>
