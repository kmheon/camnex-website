<?php
/**
 * CamneX Bangladesh — Theme Helpers & Business Profile Accessors
 *
 * Provides centralized retrieval of phone numbers, addresses, WhatsApp links,
 * price formatting with BDT symbol, and business hours.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Retrieve a theme mod option with fallback.
 */
function camnex_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Get primary phone/hotline formatted for display.
 */
function camnex_get_phone() {
    return camnex_get_option('camnex_phone', '+880 1540-535150');
}

/**
 * Get primary phone formatted for tel: links (digits only with leading plus).
 */
function camnex_get_phone_clean() {
    $phone = camnex_get_phone();
    return preg_replace('/[^+0-9]/', '', $phone);
}

/**
 * Get WhatsApp direct chat URL.
 */
function camnex_get_whatsapp_url($message = '') {
    $whatsapp = camnex_get_option('camnex_whatsapp', '+8801540535150');
    $clean    = preg_replace('/[^0-9]/', '', $whatsapp);
    $url      = 'https://wa.me/' . $clean;
    if (!empty($message)) {
        $url .= '?text=' . rawurlencode($message);
    }
    return $url;
}

/**
 * Get official contact email.
 */
function camnex_get_email() {
    return camnex_get_option('camnex_email', 'contact@camnexbd.com');
}

/**
 * Get physical office address.
 */
function camnex_get_address() {
    return camnex_get_option('camnex_address', 'Dhanmondi, Dhaka - 1209, Bangladesh');
}

/**
 * Get business operating hours.
 */
function camnex_get_hours() {
    return camnex_get_option('camnex_hours', 'Sat – Thu: 9:00 AM – 8:00 PM');
}

/**
 * Get social media profile link.
 */
function camnex_get_social_url($network) {
    return camnex_get_option('camnex_social_' . sanitize_key($network), '');
}

/**
 * Format currency in Bangladeshi Taka (৳).
 */
function camnex_price_format($amount) {
    if (!is_numeric($amount)) {
        return '৳0';
    }
    return '৳' . number_format_i18n((float)$amount);
}
