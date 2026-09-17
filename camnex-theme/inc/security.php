<?php
/**
 * CamneX Bangladesh — Enterprise Security Hardening Module
 *
 * Implements:
 * 1. XML-RPC disabling to prevent DDoS amplification and brute force attacks
 * 2. WordPress version footprint elimination from HTML and asset headers
 * 3. User enumeration defense via author queries and WP REST API
 * 4. Generic login error messages to mitigate username harvesting
 * 5. Modern HTTP security response headers
 * 6. File editing restriction in WP dashboard
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 1. Disable XML-RPC functionality.
 */
add_filter('xmlrpc_enabled', '__return_false');
add_filter('xmlrpc_methods', '__return_empty_array');

/**
 * 2. Remove WordPress version disclosures.
 */
remove_action('wp_head', 'wp_generator');
remove_action('opml_head', 'the_generator');
remove_action('app_head', 'the_generator');
remove_action('comments_atom_head', 'the_generator');
remove_action('comments_rss2_head', 'the_generator');

add_filter('the_generator', '__return_empty_string');

/**
 * Remove WP version query strings from enqueued scripts and stylesheets.
 */
function camnex_remove_asset_version_strings($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'camnex_remove_asset_version_strings', 9999);
add_filter('script_loader_src', 'camnex_remove_asset_version_strings', 9999);

/**
 * 3. Block User Enumeration via URL query (?author=X).
 */
function camnex_block_user_enumeration() {
    if (!is_admin() && isset($_REQUEST['author']) && is_numeric($_REQUEST['author'])) {
        wp_safe_redirect(home_url(), 301);
        exit;
    }
}
add_action('init', 'camnex_block_user_enumeration');

/**
 * Restrict /wp-json/wp/v2/users endpoint to authenticated users only.
 */
function camnex_restrict_rest_users_endpoint($response, $server, $request) {
    if (strpos($request->get_route(), '/wp/v2/users') === 0 && !is_user_logged_in()) {
        return new WP_Error(
            'rest_forbidden_context',
            __('Access to user directory is restricted.', 'camnex'),
            ['status' => rest_authorization_required_code()]
        );
    }
    return $response;
}
add_filter('rest_pre_serve_request', 'camnex_restrict_rest_users_endpoint', 10, 3);

/**
 * 4. Genericize Login Error Messages.
 */
function camnex_generic_login_errors() {
    return __('Invalid credentials. Please verify your login details or contact CamneX administrator at +880 1540-535150.', 'camnex');
}
add_filter('login_errors', 'camnex_generic_login_errors');

/**
 * 5. Send Protective HTTP Security Headers.
 */
function camnex_send_security_headers() {
    if (!headers_sent()) {
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    }
}
add_action('send_headers', 'camnex_send_security_headers');

/**
 * 6. Advise Disabling File Editing.
 */
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}
