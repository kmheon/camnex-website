<?php
/**
 * CamneX Bangladesh — Quote & Site Visit Inquiry Handler
 *
 * Handles AJAX & POST requests for custom quotation requests and
 * on-site property inspection bookings across Dhaka and nationwide.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Handle Quote Request AJAX Submission
 */
function camnex_handle_quote_submission() {
    // 1. Verify Nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'camnex_security_nonce')) {
        wp_send_json_error([
            'message' => __('Security verification failed. Please refresh the page and try again.', 'camnex')
        ], 403);
    }

    // 2. Anti-Spam Honeypot Check
    if (!empty($_POST['camnex_hp_check'])) {
        // Honeypot field was filled by a bot
        wp_send_json_success([
            'message' => __('Your request has been received. Our team will contact you shortly.', 'camnex')
        ]);
    }

    // 3. Extract and Sanitize Fields
    $name          = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $phone         = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $email         = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $property_type = isset($_POST['property_type']) ? sanitize_text_field($_POST['property_type']) : 'General';
    $service       = isset($_POST['service']) ? sanitize_text_field($_POST['service']) : 'CCTV System';
    $message       = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    // 4. Validate Required Fields
    if (empty($name) || empty($phone)) {
        wp_send_json_error([
            'message' => __('Please provide both your name and contact phone number.', 'camnex')
        ], 400);
    }

    // Validate phone number format (support Bangladesh phone prefixes like 01..., +8801...)
    $phone_digits = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($phone_digits) < 10) {
        wp_send_json_error([
            'message' => __('Please enter a valid phone number so our technical team can reach you.', 'camnex')
        ], 400);
    }

    // 5. Store as Private 'quote_request' CPT
    $title = sprintf(__('Quote #%1$s: %2$s (%3$s)', 'camnex'), date('ymd-His'), $name, $phone);

    $post_data = [
        'post_title'   => $title,
        'post_content' => $message,
        'post_type'    => 'quote_request',
        'post_status'  => 'publish',
    ];

    $quote_id = wp_insert_post($post_data);

    if (is_wp_error($quote_id)) {
        wp_send_json_error([
            'message' => __('Unable to save inquiry. Please contact us directly at +880 1540-535150.', 'camnex')
        ], 500);
    }

    // Save Metadata
    update_post_meta($quote_id, '_camnex_customer_name', $name);
    update_post_meta($quote_id, '_camnex_customer_phone', $phone);
    update_post_meta($quote_id, '_camnex_customer_email', $email);
    update_post_meta($quote_id, '_camnex_property_type', $property_type);
    update_post_meta($quote_id, '_camnex_service_requested', $service);
    update_post_meta($quote_id, '_camnex_status', 'New');
    update_post_meta($quote_id, '_camnex_ip_address', sanitize_text_field($_SERVER['REMOTE_ADDR'] ?? ''));

    // 6. Send Email Notifications
    $admin_email = get_option('admin_email', 'contact@camnexbd.com');
    $subject     = sprintf(__('[CamneX Lead] New Quote Request from %s', 'camnex'), $name);
    $email_body  = "A new quote/site visit inquiry has been submitted on CamneX Bangladesh:\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Phone: " . $phone . "\n";
    $email_body .= "Email: " . ($email ?: 'Not provided') . "\n";
    $email_body .= "Property Type: " . $property_type . "\n";
    $email_body .= "Service: " . $service . "\n";
    $email_body .= "Notes: " . ($message ?: 'None') . "\n\n";
    $email_body .= "View in Admin: " . admin_url('post.php?post=' . $quote_id . '&action=edit') . "\n";

    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    wp_mail($admin_email, $subject, $email_body, $headers);

    // Optional confirmation to customer
    if (!empty($email) && is_email($email)) {
        $customer_subject = __('Thank You for Contacting CamneX Bangladesh', 'camnex');
        $customer_body    = "Dear " . $name . ",\n\n";
        $customer_body   .= "Thank you for reaching out to CamneX Bangladesh. We have received your inquiry for " . $service . ".\n\n";
        $customer_body   .= "One of our certified solution specialists will review your requirements and contact you via " . $phone . " shortly.\n\n";
        $customer_body   .= "Hotline: +880 1540-535150\nEmail: contact@camnexbd.com\nWebsite: https://www.camnexbd.com\n\n";
        $customer_body   .= "CamneX Bangladesh — Security, Networking & IT Solutions";

        wp_mail($email, $customer_subject, $customer_body, $headers);
    }

    wp_send_json_success([
        'message'  => __('Thank you! Your quote request has been submitted successfully. A CamneX specialist will call you shortly.', 'camnex'),
        'quote_id' => $quote_id
    ]);
}
add_action('wp_ajax_camnex_submit_quote', 'camnex_handle_quote_submission');
add_action('wp_ajax_nopriv_camnex_submit_quote', 'camnex_handle_quote_submission');

/**
 * Meta Box for Quote Details in WordPress Admin
 */
function camnex_quote_request_meta_box() {
    add_meta_box(
        'camnex_quote_details',
        __('Inquiry & Customer Details', 'camnex'),
        'camnex_quote_meta_box_html',
        'quote_request',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'camnex_quote_request_meta_box');

function camnex_quote_meta_box_html($post) {
    $name     = get_post_meta($post->ID, '_camnex_customer_name', true);
    $phone    = get_post_meta($post->ID, '_camnex_customer_phone', true);
    $email    = get_post_meta($post->ID, '_camnex_customer_email', true);
    $prop     = get_post_meta($post->ID, '_camnex_property_type', true);
    $service  = get_post_meta($post->ID, '_camnex_service_requested', true);
    $status   = get_post_meta($post->ID, '_camnex_status', true) ?: 'New';
    ?>
    <table class="form-table">
        <tr>
            <th><label><?php esc_html_e('Customer Name', 'camnex'); ?></label></th>
            <td><strong><?php echo esc_html($name); ?></strong></td>
        </tr>
        <tr>
            <th><label><?php esc_html_e('Contact Phone', 'camnex'); ?></label></th>
            <td><a href="tel:<?php echo esc_attr($phone); ?>" style="font-weight:bold; font-size:16px;"><?php echo esc_html($phone); ?></a></td>
        </tr>
        <tr>
            <th><label><?php esc_html_e('Email Address', 'camnex'); ?></label></th>
            <td><?php echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '—'; ?></td>
        </tr>
        <tr>
            <th><label><?php esc_html_e('Property Type', 'camnex'); ?></label></th>
            <td><?php echo esc_html($prop); ?></td>
        </tr>
        <tr>
            <th><label><?php esc_html_e('Service / System', 'camnex'); ?></label></th>
            <td><?php echo esc_html($service); ?></td>
        </tr>
        <tr>
            <th><label for="camnex_status_select"><?php esc_html_e('Inquiry Status', 'camnex'); ?></label></th>
            <td>
                <?php wp_nonce_field('camnex_save_quote_status', 'camnex_quote_status_nonce'); ?>
                <select name="camnex_quote_status" id="camnex_status_select">
                    <option value="New" <?php selected($status, 'New'); ?>><?php esc_html_e('New Lead', 'camnex'); ?></option>
                    <option value="Contacted" <?php selected($status, 'Contacted'); ?>><?php esc_html_e('Contacted / In Discussion', 'camnex'); ?></option>
                    <option value="Survey Scheduled" <?php selected($status, 'Survey Scheduled'); ?>><?php esc_html_e('Site Survey Scheduled', 'camnex'); ?></option>
                    <option value="Completed" <?php selected($status, 'Completed'); ?>><?php esc_html_e('Order Placed / Completed', 'camnex'); ?></option>
                    <option value="Cancelled" <?php selected($status, 'Cancelled'); ?>><?php esc_html_e('Cancelled / Not Interested', 'camnex'); ?></option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

function camnex_save_quote_status($post_id) {
    if (!isset($_POST['camnex_quote_status_nonce']) || !wp_verify_nonce($_POST['camnex_quote_status_nonce'], 'camnex_save_quote_status')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['camnex_quote_status'])) {
        update_post_meta($post_id, '_camnex_status', sanitize_text_field($_POST['camnex_quote_status']));
    }
}
add_action('save_post_quote_request', 'camnex_save_quote_status');
