<?php
/**
 * CamneX Bangladesh — Header Main Navbar (Row 2)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$hotline_display = get_theme_mod('camnex_hotline_display', '+880 1540-535150');
$hotline_tel     = get_theme_mod('camnex_hotline_tel', '+8801540535150');
$quote_url       = get_theme_mod('camnex_quote_url', home_url('/get-quote'));
$cart_count      = 0;
$cart_url        = home_url('/cart');
$account_url     = home_url('/account');
$wishlist_url    = home_url('/wishlist');

if (function_exists('WC') && WC()->cart) {
    $cart_count = WC()->cart->get_cart_contents_count();
    $cart_url   = wc_get_cart_url();
    $account_url = wc_get_page_permalink('myaccount');
}
?>

<!-- Row 2: Main Header -->
<div class="cx-main-header-bg">
    <div class="container cx-main-header-container">
        
        <!-- Logo & Mobile Toggle -->
        <div class="cx-header-left">
            <button type="button" class="cx-mobile-toggle" id="mobileToggle" aria-label="<?php esc_attr_e('Toggle mobile menu', 'camnex'); ?>" aria-expanded="false">
                <i data-lucide="menu"></i>
            </button>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cx-logo" aria-label="<?php esc_attr_e('CamneX Home', 'camnex'); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <svg class="cx-logo-svg" viewBox="0 0 160 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M12 6H6C3.79086 6 2 7.79086 2 10V26C2 28.2091 3.79086 30 6 30H12" stroke="#F15A24" stroke-width="4" stroke-linecap="round"/>
                        <circle cx="28" cy="18" r="4" fill="#F15A24"/>
                        <text x="42" y="25" font-family="Inter, Arial, sans-serif" font-weight="800" font-size="22" fill="#111827" letter-spacing="-0.03em">CamneX</text>
                    </svg>
                <?php endif; ?>
            </a>
        </div>

        <!-- Search Bar -->
        <div class="cx-header-search-wrapper">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" class="cx-search-form" role="search">
                <i data-lucide="search" class="cx-search-icon" aria-hidden="true"></i>
                <input type="search" 
                       name="s" 
                       value="<?php echo esc_attr(get_search_query()); ?>"
                       placeholder="<?php esc_attr_e('Search CCTV Cameras, NVR, Networking...', 'camnex'); ?>" 
                       class="cx-search-input" 
                       aria-label="<?php esc_attr_e('Search products and solutions', 'camnex'); ?>"
                       autocomplete="off">
                <input type="hidden" name="post_type" value="product">
                <button type="submit" class="cx-search-submit" aria-label="<?php esc_attr_e('Submit search', 'camnex'); ?>">
                    <span><?php esc_html_e('Search', 'camnex'); ?></span>
                </button>
            </form>
        </div>

        <!-- Utilities: Phone, Wishlist, Account, Cart, Get Quote -->
        <div class="cx-header-right">
            <div class="cx-header-phone-block">
                <span class="cx-phone-label"><?php esc_html_e('Need Help?', 'camnex'); ?></span>
                <a href="tel:<?php echo esc_attr($hotline_tel); ?>" class="cx-phone-number">
                    <i data-lucide="phone-call" class="cx-phone-icon" aria-hidden="true"></i>
                    <?php echo esc_html($hotline_display); ?>
                </a>
            </div>

            <div class="cx-header-actions">
                <a href="<?php echo esc_url($wishlist_url); ?>" class="cx-action-icon-btn" aria-label="<?php esc_attr_e('Wishlist', 'camnex'); ?>">
                    <i data-lucide="heart"></i>
                </a>
                <a href="<?php echo esc_url($account_url); ?>" class="cx-action-icon-btn" aria-label="<?php esc_attr_e('Account', 'camnex'); ?>">
                    <i data-lucide="user"></i>
                </a>
                <a href="<?php echo esc_url($cart_url); ?>" class="cx-action-icon-btn cx-cart-btn" aria-label="<?php echo esc_attr(sprintf(__('Shopping Cart, %d items', 'camnex'), $cart_count)); ?>">
                    <i data-lucide="shopping-bag" aria-hidden="true"></i>
                    <span class="cx-cart-badge" aria-hidden="true"><?php echo esc_html($cart_count); ?></span>
                    <span class="cx-sr-only"><?php echo esc_html(sprintf(__('( %d items in cart)', 'camnex'), $cart_count)); ?></span>
                </a>
            </div>

            <div class="cx-utility-cta">
                <a href="<?php echo esc_url($quote_url); ?>" class="cx-btn-quote" aria-label="<?php esc_attr_e('Get a free consultation quote', 'camnex'); ?>">
                    <?php esc_html_e('Get Quote', 'camnex'); ?>
                </a>
            </div>
        </div>

    </div>
</div>
