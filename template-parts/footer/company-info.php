<?php
/**
 * CamneX Bangladesh — Footer Company Info (Column 1)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$company_name    = get_theme_mod('camnex_company_name', 'CamneX');
$company_desc    = get_theme_mod('camnex_company_desc', __('Professional IT, networking, and surveillance systems specialist delivering trusted security solutions across Bangladesh.', 'camnex'));
$hotline_display = get_theme_mod('camnex_hotline_display', '+880 1540-535150');
$hotline_tel     = get_theme_mod('camnex_hotline_tel', '+8801540535150');
$email           = get_theme_mod('camnex_email', 'contact@camnexbd.com');
$address         = get_theme_mod('camnex_address', 'Chandrima Model Town, Dhaka');
$hours           = get_theme_mod('camnex_hours', 'Sat - Thu: 9:00 AM - 8:00 PM');
$facebook        = get_theme_mod('camnex_facebook', 'https://facebook.com');
$whatsapp        = get_theme_mod('camnex_whatsapp', 'https://wa.me/8801540535150');
$youtube         = get_theme_mod('camnex_youtube', 'https://youtube.com');
$linkedin        = get_theme_mod('camnex_linkedin', 'https://linkedin.com');
?>

<!-- Column 1: Company Info -->
<div class="cx-footer-col cx-footer-col-company">
    <div class="cx-footer-logo-wrap">
        <span class="cx-footer-logo-text"><?php echo esc_html($company_name); ?></span>
    </div>
    <p class="cx-footer-desc"><?php echo esc_html($company_desc); ?></p>
    
    <div class="cx-footer-contact-info">
        <a href="tel:<?php echo esc_attr($hotline_tel); ?>" class="cx-footer-contact-link">
            <i data-lucide="phone" aria-hidden="true"></i> <?php echo esc_html($hotline_display); ?>
        </a>
        <a href="mailto:<?php echo esc_attr($email); ?>" class="cx-footer-contact-link">
            <i data-lucide="mail" aria-hidden="true"></i> <?php echo esc_html($email); ?>
        </a>
        <div class="cx-footer-contact-link">
            <i data-lucide="map-pin" aria-hidden="true"></i> <?php echo esc_html($address); ?>
        </div>
        <div class="cx-footer-contact-link">
            <i data-lucide="clock" aria-hidden="true"></i> <?php echo esc_html($hours); ?>
        </div>
    </div>

    <div class="cx-footer-socials" aria-label="<?php esc_attr_e('Social media links', 'camnex'); ?>">
        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" class="cx-social-icon" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
        </a>
        <a href="<?php echo esc_url($whatsapp); ?>" target="_blank" rel="noopener noreferrer" class="cx-social-icon" aria-label="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </a>
        <a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer" class="cx-social-icon" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"></path><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor"></polygon></svg>
        </a>
        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="cx-social-icon" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
        </a>
    </div>
</div>
