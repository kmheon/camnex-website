<?php
/**
 * CamneX Bangladesh — Theme Customizer & Business Profile Settings
 *
 * Exposes full business profile fields in WP Admin Customizer:
 * Hotline numbers, WhatsApp, Email, Physical Location, Opening Hours,
 * and Social Media URLs.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Customizer Panels & Settings
 */
function camnex_customize_register($wp_customize) {

    // 1. Business Profile Section
    $wp_customize->add_section('camnex_business_profile', [
        'title'       => __('CamneX Business Profile', 'camnex'),
        'description' => __('Manage company contact information, hotlines, and address shown across header, footer and quote modules.', 'camnex'),
        'priority'    => 30,
    ]);

    // Primary Hotline
    $wp_customize->add_setting('camnex_phone', [
        'default'           => '+880 1540-535150',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_phone', [
        'label'    => __('Primary Phone / Hotline', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'text',
    ]);

    // Secondary Hotline
    $wp_customize->add_setting('camnex_phone_secondary', [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_phone_secondary', [
        'label'    => __('Secondary Phone (Optional)', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'text',
    ]);

    // WhatsApp Number
    $wp_customize->add_setting('camnex_whatsapp', [
        'default'           => '+8801540535150',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_whatsapp', [
        'label'    => __('WhatsApp Direct Number', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'text',
    ]);

    // Official Email
    $wp_customize->add_setting('camnex_email', [
        'default'           => 'contact@camnexbd.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_email', [
        'label'    => __('Official Contact Email', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'email',
    ]);

    // Physical Office Address
    $wp_customize->add_setting('camnex_address', [
        'default'           => 'Block A, Chandrima Model Town, Shop 01, 1st Floor, House 22, Road 06 Main Rd, Dhaka 1207, Bangladesh',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_address', [
        'label'    => __('Office Address', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'textarea',
    ]);

    // Business Operating Hours
    $wp_customize->add_setting('camnex_hours', [
        'default'           => 'Sat – Thu: 9:00 AM – 8:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ]);
    $wp_customize->add_control('camnex_hours', [
        'label'    => __('Business Operating Hours', 'camnex'),
        'section'  => 'camnex_business_profile',
        'type'     => 'text',
    ]);

    // 2. Social Links Section
    $wp_customize->add_section('camnex_social_links', [
        'title'    => __('Social Media Profiles', 'camnex'),
        'priority' => 31,
    ]);

    $socials = [
        'facebook'  => ['label' => 'Facebook URL', 'default' => 'https://www.facebook.com/camnexbd'],
        'youtube'   => ['label' => 'YouTube URL', 'default' => 'https://www.youtube.com/@camnexbd'],
        'linkedin'  => ['label' => 'LinkedIn URL', 'default' => 'https://www.linkedin.com/company/camnexbd'],
    ];

    foreach ($socials as $id => $info) {
        $setting_key = 'camnex_social_' . $id;
        $wp_customize->add_setting($setting_key, [
            'default'           => $info['default'],
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control($setting_key, [
            'label'   => __($info['label'], 'camnex'),
            'section' => 'camnex_social_links',
            'type'    => 'url',
        ]);
    }
}
add_action('customize_register', 'camnex_customize_register');
