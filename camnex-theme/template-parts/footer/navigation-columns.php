<?php
/**
 * CamneX Bangladesh — Footer Navigation Columns & Newsletter (Columns 2-5)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Column 2: Quick Links -->
<div class="cx-footer-col">
    <h3 class="cx-footer-heading"><?php esc_html_e('Quick Links', 'camnex'); ?></h3>
    <?php
    if (has_nav_menu('footer_quick_links')) :
        wp_nav_menu([
            'theme_location' => 'footer_quick_links',
            'container'      => false,
            'menu_class'     => 'cx-footer-links-list',
            'fallback_cb'    => false,
            'depth'          => 1,
        ]);
    else :
    ?>
        <ul class="cx-footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="cx-footer-link"><?php esc_html_e('Home', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/shop')); ?>" class="cx-footer-link"><?php esc_html_e('Shop', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/solutions')); ?>" class="cx-footer-link"><?php esc_html_e('Solutions', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="cx-footer-link"><?php esc_html_e('Services', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/installations')); ?>" class="cx-footer-link"><?php esc_html_e('Installations', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="cx-footer-link"><?php esc_html_e('About Us', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="cx-footer-link"><?php esc_html_e('Contact', 'camnex'); ?></a></li>
        </ul>
    <?php endif; ?>
</div>

<!-- Column 3: Products / Solutions -->
<div class="cx-footer-col">
    <h3 class="cx-footer-heading"><?php esc_html_e('Products', 'camnex'); ?></h3>
    <?php
    if (has_nav_menu('footer_solutions')) :
        wp_nav_menu([
            'theme_location' => 'footer_solutions',
            'container'      => false,
            'menu_class'     => 'cx-footer-links-list',
            'fallback_cb'    => false,
            'depth'          => 1,
        ]);
    else :
    ?>
        <ul class="cx-footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/products/cctv')); ?>" class="cx-footer-link"><?php esc_html_e('CCTV Cameras', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/ip-cameras')); ?>" class="cx-footer-link"><?php esc_html_e('IP Cameras', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/networking')); ?>" class="cx-footer-link"><?php esc_html_e('Network Equipment', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/access-control')); ?>" class="cx-footer-link"><?php esc_html_e('Access Control', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/attendance')); ?>" class="cx-footer-link"><?php esc_html_e('Time Attendance', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/smart-home')); ?>" class="cx-footer-link"><?php esc_html_e('Smart Home', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/products/accessories')); ?>" class="cx-footer-link"><?php esc_html_e('Accessories', 'camnex'); ?></a></li>
        </ul>
    <?php endif; ?>
</div>

<!-- Column 4: Customer Support -->
<div class="cx-footer-col">
    <h3 class="cx-footer-heading"><?php esc_html_e('Customer Support', 'camnex'); ?></h3>
    <?php
    if (has_nav_menu('footer_support')) :
        wp_nav_menu([
            'theme_location' => 'footer_support',
            'container'      => false,
            'menu_class'     => 'cx-footer-links-list',
            'fallback_cb'    => false,
            'depth'          => 1,
        ]);
    else :
    ?>
        <ul class="cx-footer-links-list">
            <li><a href="<?php echo esc_url(home_url('/support/warranty')); ?>" class="cx-footer-link"><?php esc_html_e('Warranty', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/support/tech')); ?>" class="cx-footer-link"><?php esc_html_e('Technical Support', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/support/faqs')); ?>" class="cx-footer-link"><?php esc_html_e('FAQs', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/track-order')); ?>" class="cx-footer-link"><?php esc_html_e('Track Order', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/legal/privacy')); ?>" class="cx-footer-link"><?php esc_html_e('Privacy Policy', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/legal/terms')); ?>" class="cx-footer-link"><?php esc_html_e('Terms & Conditions', 'camnex'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/legal/refund')); ?>" class="cx-footer-link"><?php esc_html_e('Refund Policy', 'camnex'); ?></a></li>
        </ul>
    <?php endif; ?>
</div>

<!-- Column 5: Newsletter -->
<div class="cx-footer-col cx-footer-col-newsletter">
    <h3 class="cx-footer-heading"><?php esc_html_e('Stay Updated', 'camnex'); ?></h3>
    <p class="cx-footer-newsletter-desc"><?php esc_html_e('Subscribe to receive updates on security tech tips, new products, and exclusive offers.', 'camnex'); ?></p>
    
    <form class="cx-newsletter-form" onsubmit="event.preventDefault();" method="POST" action="">
        <?php wp_nonce_field('camnex_newsletter_nonce', 'cx_newsletter_token'); ?>
        <div class="cx-newsletter-input-group">
            <input type="email" 
                   name="newsletter_email"
                   placeholder="<?php esc_attr_e('Enter your email', 'camnex'); ?>" 
                   required 
                   class="cx-newsletter-input" 
                   aria-label="<?php esc_attr_e('Email address for newsletter', 'camnex'); ?>">
            <button type="submit" class="cx-newsletter-btn" aria-label="<?php esc_attr_e('Subscribe to newsletter', 'camnex'); ?>">
                <i data-lucide="send"></i>
            </button>
        </div>
        <span class="cx-newsletter-note"><?php esc_html_e('No spam. Unsubscribe anytime.', 'camnex'); ?></span>
    </form>
</div>
