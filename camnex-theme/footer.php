<?php
/**
 * CamneX Bangladesh — Footer Template
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="cx-footer-section" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="cx-sr-only"><?php esc_html_e('Site Footer', 'camnex'); ?></h2>
    <div class="container">
        
        <!-- Main Footer Columns Grid (5 Columns Desktop) -->
        <div class="cx-footer-grid" role="region" aria-label="<?php esc_attr_e('Footer navigation links and info', 'camnex'); ?>">
            <?php
            // Column 1: Company Info & Social Links
            get_template_part('template-parts/footer/company-info');

            // Columns 2-5: Navigation Links & Newsletter Subscription
            get_template_part('template-parts/footer/navigation-columns');
            ?>
        </div>

        <?php
        // Bottom Bar (Copyright, Credits, Back to Top)
        get_template_part('template-parts/footer/bottom-bar');
        ?>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
