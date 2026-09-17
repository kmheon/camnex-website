<?php
/**
 * CamneX Bangladesh — Homepage Brands Section Template Part
 *
 * Displays the 8 authorized technology partner brands in frozen parity sequence.
 * Dynamically links to brand archives when taxonomy terms exist.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$assets_uri = defined('CAMNEX_ASSETS_URI') ? CAMNEX_ASSETS_URI : get_template_directory_uri() . '/assets';

$brands_list = [
    [
        'slug' => 'hikvision',
        'name' => __('Hikvision', 'camnex'),
        'logo' => $assets_uri . '/brands/hikvision.png',
        'alt'  => __('Hikvision Official Logo', 'camnex'),
    ],
    [
        'slug' => 'dahua',
        'name' => __('Dahua', 'camnex'),
        'logo' => $assets_uri . '/brands/dahua.png',
        'alt'  => __('Dahua Technology Official Logo', 'camnex'),
    ],
    [
        'slug' => 'ezviz',
        'name' => __('EZVIZ', 'camnex'),
        'logo' => $assets_uri . '/brands/ezviz.png',
        'alt'  => __('EZVIZ Official Logo', 'camnex'),
    ],
    [
        'slug' => 'imou',
        'name' => __('IMOU', 'camnex'),
        'logo' => $assets_uri . '/brands/imou.png',
        'alt'  => __('IMOU Official Logo', 'camnex'),
    ],
    [
        'slug' => 'ruijie',
        'name' => __('Ruijie', 'camnex'),
        'logo' => $assets_uri . '/brands/ruijie.png',
        'alt'  => __('Ruijie Reyee Official Logo', 'camnex'),
    ],
    [
        'slug' => 'mikrotik',
        'name' => __('MikroTik', 'camnex'),
        'logo' => $assets_uri . '/brands/mikrotik.png',
        'alt'  => __('MikroTik Official Logo', 'camnex'),
    ],
    [
        'slug' => 'ubiquiti',
        'name' => __('Ubiquiti', 'camnex'),
        'logo' => $assets_uri . '/brands/ubiquiti.png',
        'alt'  => __('Ubiquiti Official Logo', 'camnex'),
    ],
    [
        'slug' => 'tp-link',
        'name' => __('TP-Link', 'camnex'),
        'logo' => $assets_uri . '/brands/tp-link.png',
        'alt'  => __('TP-Link Official Logo', 'camnex'),
    ],
];
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
            <?php foreach ($brands_list as $b) :
                $term = taxonomy_exists('brand') ? get_term_by('slug', $b['slug'], 'brand') : null;
                $brand_url = ($term && !is_wp_error($term)) ? get_term_link($term, 'brand') : '';
            ?>
                <article class="cx-brand-card" data-brand="<?php echo esc_attr($b['slug']); ?>">
                    <?php if (!empty($brand_url) && !is_wp_error($brand_url)) : ?>
                        <a href="<?php echo esc_url($brand_url); ?>" class="cx-brand-card-link" aria-label="<?php echo esc_attr(sprintf(__('View %s products', 'camnex'), $b['name'])); ?>">
                    <?php endif; ?>

                    <div class="cx-brand-logo-wrapper">
                        <img src="<?php echo esc_url($b['logo']); ?>" alt="<?php echo esc_attr($b['alt']); ?>" class="cx-brand-logo" width="180" height="48" loading="lazy">
                    </div>
                    <h3 class="cx-brand-name"><?php echo esc_html($b['name']); ?></h3>

                    <?php if (!empty($brand_url) && !is_wp_error($brand_url)) : ?>
                        </a>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
