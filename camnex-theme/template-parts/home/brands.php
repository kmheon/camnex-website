<?php
/**
 * CamneX Bangladesh — Homepage Brands Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$assets_uri = defined('CAMNEX_ASSETS_URI') ? CAMNEX_ASSETS_URI : get_template_directory_uri() . '/assets';
?>
<!-- Authorized Technology Brands -->
<section class="cx-brands-section" aria-labelledby="brands-title">
    <div class="container cx-demo">
        
        <!-- Section Header -->
        <div class="cx-section-header">
            <span class="cx-section-badge-label"><?php esc_html_e('Technology Partners', 'camnex'); ?></span>
            <h2 id="brands-title" class="cx-section-title"><?php esc_html_e('Brands We Work With', 'camnex'); ?></h2>
            <p class="cx-section-subtitle"><?php esc_html_e('We proudly work with globally recognized security, networking and smart technology brands to deliver reliable solutions for every customer.', 'camnex'); ?></p>
        </div>

        <!-- Brands Grid -->
        <div class="cx-brands-grid" role="region" aria-label="<?php esc_attr_e('Authorized technology brands directory', 'camnex'); ?>">

            <!-- Brand 1: Hikvision -->
            <article class="cx-brand-card" data-brand="hikvision">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/hikvision.png'); ?>" alt="<?php esc_attr_e('Hikvision Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('Hikvision', 'camnex'); ?></h3>
            </article>

            <!-- Brand 2: Dahua -->
            <article class="cx-brand-card" data-brand="dahua">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/dahua.png'); ?>" alt="<?php esc_attr_e('Dahua Technology Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('Dahua', 'camnex'); ?></h3>
            </article>

            <!-- Brand 3: EZVIZ -->
            <article class="cx-brand-card" data-brand="ezviz">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/ezviz.png'); ?>" alt="<?php esc_attr_e('EZVIZ Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('EZVIZ', 'camnex'); ?></h3>
            </article>

            <!-- Brand 4: IMOU -->
            <article class="cx-brand-card" data-brand="imou">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/imou.png'); ?>" alt="<?php esc_attr_e('IMOU Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('IMOU', 'camnex'); ?></h3>
            </article>

            <!-- Brand 5: Ruijie -->
            <article class="cx-brand-card" data-brand="ruijie">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/ruijie.png'); ?>" alt="<?php esc_attr_e('Ruijie Reyee Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('Ruijie', 'camnex'); ?></h3>
            </article>

            <!-- Brand 6: MikroTik -->
            <article class="cx-brand-card" data-brand="mikrotik">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/mikrotik.png'); ?>" alt="<?php esc_attr_e('MikroTik Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('MikroTik', 'camnex'); ?></h3>
            </article>

            <!-- Brand 7: Ubiquiti -->
            <article class="cx-brand-card" data-brand="ubiquiti">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/ubiquiti.png'); ?>" alt="<?php esc_attr_e('Ubiquiti Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('Ubiquiti', 'camnex'); ?></h3>
            </article>

            <!-- Brand 8: TP-Link -->
            <article class="cx-brand-card" data-brand="tp-link">
                <div class="cx-brand-logo-wrapper">
                    <img src="<?php echo esc_url($assets_uri . '/brands/tp-link.png'); ?>" alt="<?php esc_attr_e('TP-Link Official Logo', 'camnex'); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                </div>
                <h3 class="cx-brand-name"><?php esc_html_e('TP-Link', 'camnex'); ?></h3>
            </article>

        </div>

    </div>
</section>
