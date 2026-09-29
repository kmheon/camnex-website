<?php
/**
 * CamneX Bangladesh — Footer Bottom Bar
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$current_year = date('Y');
$copyright_text = get_theme_mod('camnex_copyright_text', sprintf(__('© %s CamneX Bangladesh. All Rights Reserved.', 'camnex'), $current_year));
?>

<!-- Bottom Bar -->
<div class="cx-footer-bottom-bar">
    <div class="cx-footer-copyright">
        <?php echo esc_html($copyright_text); ?>
    </div>
    <div class="cx-footer-developer">
        <?php esc_html_e('Designed & Developed by CamneX', 'camnex'); ?>
    </div>
    <div class="cx-footer-back-to-top">
        <button type="button" id="backToTopBtn" class="cx-back-top-btn" aria-label="<?php esc_attr_e('Back to top', 'camnex'); ?>">
            <span><?php esc_html_e('Back To Top', 'camnex'); ?></span>
            <i data-lucide="arrow-up" aria-hidden="true"></i>
        </button>
    </div>
</div>
