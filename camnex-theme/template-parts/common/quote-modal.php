<?php
/**
 * CamneX Bangladesh — Accessible Quote & Site Visit Request Modal
 *
 * Universal modal component for requesting system quotes and site visits.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div id="cx-quote-modal" class="cx-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="cxQuoteModalTitle">
    <div class="cx-modal-dialog">
        <div class="cx-modal-content">
            
            <!-- Close Button -->
            <button type="button" class="cx-modal-close-btn" id="cxQuoteModalClose" aria-label="<?php esc_attr_e('Close Quote Request Modal', 'camnex'); ?>">
                <i data-lucide="x" aria-hidden="true"></i>
            </button>

            <!-- Modal Header -->
            <div class="cx-modal-header">
                <span class="cx-section-badge-label"><?php esc_html_e('Fast Response Guarantee', 'camnex'); ?></span>
                <h3 id="cxQuoteModalTitle" class="cx-modal-title"><?php esc_html_e('Request Quote or Site Inspection', 'camnex'); ?></h3>
                <p class="cx-modal-subtitle"><?php esc_html_e('Our certified field engineers will survey your property and provide an itemized system proposal.', 'camnex'); ?></p>
            </div>

            <!-- Form -->
            <form id="cxQuoteForm" class="cx-quote-form" method="post" novalidate>
                
                <!-- Status Notice Banner -->
                <div id="cxQuoteFeedback" class="cx-form-feedback" style="display:none;" role="alert"></div>

                <!-- Anti-Spam Honeypot Field (Hidden from Real Users) -->
                <div style="display:none;" aria-hidden="true">
                    <label for="camnex_hp_check">Leave empty</label>
                    <input type="text" name="camnex_hp_check" id="camnex_hp_check" tabindex="-1" autocomplete="off">
                </div>

                <div class="cx-form-grid">
                    
                    <!-- Customer Name -->
                    <div class="cx-form-group">
                        <label for="cx_quote_name" class="cx-form-label"><?php esc_html_e('Your Name', 'camnex'); ?> <span class="cx-req">*</span></label>
                        <input type="text" id="cx_quote_name" name="name" class="cx-form-input" placeholder="<?php esc_attr_e('e.g. Tanvir Ahmed', 'camnex'); ?>" required>
                    </div>

                    <!-- Contact Phone -->
                    <div class="cx-form-group">
                        <label for="cx_quote_phone" class="cx-form-label"><?php esc_html_e('Phone Number', 'camnex'); ?> <span class="cx-req">*</span></label>
                        <input type="tel" id="cx_quote_phone" name="phone" class="cx-form-input" placeholder="<?php esc_attr_e('01XXXXXXXXX', 'camnex'); ?>" required>
                    </div>

                </div>

                <div class="cx-form-grid">
                    
                    <!-- Email (Optional) -->
                    <div class="cx-form-group">
                        <label for="cx_quote_email" class="cx-form-label"><?php esc_html_e('Email Address', 'camnex'); ?> <span class="cx-opt">(<?php esc_html_e('Optional', 'camnex'); ?>)</span></label>
                        <input type="email" id="cx_quote_email" name="email" class="cx-form-input" placeholder="<?php esc_attr_e('yourname@company.com', 'camnex'); ?>">
                    </div>

                    <!-- Property Type -->
                    <div class="cx-form-group">
                        <label for="cx_quote_property" class="cx-form-label"><?php esc_html_e('Property Environment', 'camnex'); ?></label>
                        <select id="cx_quote_property" name="property_type" class="cx-form-select">
                            <option value="Home / Residential"><?php esc_html_e('Home / Residential Apartment', 'camnex'); ?></option>
                            <option value="Corporate Office"><?php esc_html_e('Corporate Office / Commercial Building', 'camnex'); ?></option>
                            <option value="Retail Store / Showroom"><?php esc_html_e('Retail Store / Shop / Showroom', 'camnex'); ?></option>
                            <option value="Factory / Industrial"><?php esc_html_e('Industrial Factory / Garments', 'camnex'); ?></option>
                            <option value="Warehouse / Logistics"><?php esc_html_e('Warehouse / Logistics Depot', 'camnex'); ?></option>
                            <option value="Campus / School"><?php esc_html_e('Educational Campus / Hospital', 'camnex'); ?></option>
                            <option value="Other"><?php esc_html_e('Other Property Type', 'camnex'); ?></option>
                        </select>
                    </div>

                </div>

                <!-- Service Requested -->
                <div class="cx-form-group">
                    <label for="cx_quote_service" class="cx-form-label"><?php esc_html_e('Required System or Service', 'camnex'); ?></label>
                    <select id="cx_quote_service" name="service" class="cx-form-select">
                        <option value="CCTV Camera Package"><?php esc_html_e('Complete CCTV Package (2, 4, 8, 16 Cameras)', 'camnex'); ?></option>
                        <option value="IP Surveillance System"><?php esc_html_e('Enterprise IP Camera & NVR System', 'camnex'); ?></option>
                        <option value="Office Networking & WiFi"><?php esc_html_e('Office Networking, Switches & Enterprise Wi-Fi', 'camnex'); ?></option>
                        <option value="Biometric Access Control"><?php esc_html_e('Time Attendance & Biometric Access Control', 'camnex'); ?></option>
                        <option value="Video Intercom"><?php esc_html_e('Smart Video Door Phone & Intercom', 'camnex'); ?></option>
                        <option value="System Maintenance & Relocation"><?php esc_html_e('Servicing, Cable Relocation & Upgrade', 'camnex'); ?></option>
                    </select>
                </div>

                <!-- Notes / Additional Details -->
                <div class="cx-form-group">
                    <label for="cx_quote_message" class="cx-form-label"><?php esc_html_e('Project Notes / Approximate Area', 'camnex'); ?></label>
                    <textarea id="cx_quote_message" name="message" class="cx-form-textarea" rows="3" placeholder="<?php esc_attr_e('e.g. 3-story office building in Uttara, need 8 night vision cameras and 2 WiFi access points.', 'camnex'); ?>"></textarea>
                </div>

                <!-- Action Button -->
                <div class="cx-form-action">
                    <button type="submit" id="cxQuoteSubmitBtn" class="cx-btn-submit-quote">
                        <i data-lucide="send" aria-hidden="true"></i>
                        <span><?php esc_html_e('Submit Request for Site Inspection', 'camnex'); ?></span>
                    </button>
                </div>

                <div class="cx-modal-direct-call">
                    <span><?php esc_html_e('Or call our engineering hotline directly:', 'camnex'); ?></span>
                    <a href="tel:+8801540535150" class="cx-modal-call-link">
                        <i data-lucide="phone" aria-hidden="true"></i>
                        <strong>+880 1540-535150</strong>
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
