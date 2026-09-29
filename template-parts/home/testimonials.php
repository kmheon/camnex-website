<?php
/**
 * CamneX Bangladesh — Homepage Testimonials Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Customer Testimonials -->
<section class="cx-testimonials-section" aria-labelledby="testimonials-title">
    <div class="container cx-demo">
        
        <!-- Section Header -->
        <div class="cx-section-header">
            <span class="cx-section-badge-label"><?php esc_html_e('Customer Testimonials', 'camnex'); ?></span>
            <h2 id="testimonials-title" class="cx-section-title"><?php esc_html_e('Trusted by Homeowners & Businesses', 'camnex'); ?></h2>
            <p class="cx-section-subtitle"><?php esc_html_e('Hear what our customers say about their experience with CamneX\'s products, installation quality and after-sales support.', 'camnex'); ?></p>
        </div>

        <!-- Testimonials Grid -->
        <div class="cx-testimonials-grid" role="region" aria-label="<?php esc_attr_e('Customer reviews and feedback', 'camnex'); ?>">

            <!-- Card 1 -->
            <article class="cx-testimonial-card" data-testimonial-id="t1">
                <div class="cx-testimonial-header">
                    <div class="cx-quote-icon" aria-hidden="true">
                        <i data-lucide="quote"></i>
                    </div>
                    <div class="cx-star-rating" role="img" aria-label="<?php esc_attr_e('5 out of 5 stars', 'camnex'); ?>">
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                    </div>
                </div>

                <p class="cx-testimonial-quote"><?php esc_html_e('"The installation was clean, professional and completed on time. Camera quality is excellent."', 'camnex'); ?></p>

                <div class="cx-testimonial-meta">
                    <div class="cx-meta-details">
                        <span class="cx-installed-label"><?php esc_html_e('Installed Solution:', 'camnex'); ?></span>
                        <span class="cx-installed-item"><?php esc_html_e('8 Camera Hikvision ColorVu System', 'camnex'); ?></span>
                    </div>
                    <div class="cx-meta-footer-info">
                        <span class="cx-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Dhanmondi, Dhaka', 'camnex'); ?></span>
                        <span class="cx-date"><i data-lucide="calendar" aria-hidden="true"></i> <?php esc_html_e('July 2026', 'camnex'); ?></span>
                    </div>
                </div>

                <div class="cx-customer-profile">
                    <div class="cx-avatar-wrapper cx-avatar-placeholder">
                        <i data-lucide="user" aria-hidden="true"></i>
                    </div>
                    <div class="cx-customer-info">
                        <h3 class="cx-customer-name"><?php esc_html_e('Md. Rahman', 'camnex'); ?></h3>
                        <span class="cx-customer-type"><?php esc_html_e('Homeowner', 'camnex'); ?></span>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="cx-testimonial-card" data-testimonial-id="t2">
                <div class="cx-testimonial-header">
                    <div class="cx-quote-icon" aria-hidden="true">
                        <i data-lucide="quote"></i>
                    </div>
                    <div class="cx-star-rating" role="img" aria-label="<?php esc_attr_e('5 out of 5 stars', 'camnex'); ?>">
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                    </div>
                </div>

                <p class="cx-testimonial-quote"><?php esc_html_e('"Outstanding networking setup and rack deployment for our corporate office. Extremely reliable support team."', 'camnex'); ?></p>

                <div class="cx-testimonial-meta">
                    <div class="cx-meta-details">
                        <span class="cx-installed-label"><?php esc_html_e('Installed Solution:', 'camnex'); ?></span>
                        <span class="cx-installed-item"><?php esc_html_e('16 Channel IP Surveillance & MikroTik Router', 'camnex'); ?></span>
                    </div>
                    <div class="cx-meta-footer-info">
                        <span class="cx-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Banani, Dhaka', 'camnex'); ?></span>
                        <span class="cx-date"><i data-lucide="calendar" aria-hidden="true"></i> <?php esc_html_e('June 2026', 'camnex'); ?></span>
                    </div>
                </div>

                <div class="cx-customer-profile">
                    <div class="cx-avatar-wrapper cx-avatar-placeholder">
                        <i data-lucide="user" aria-hidden="true"></i>
                    </div>
                    <div class="cx-customer-info">
                        <h3 class="cx-customer-name"><?php esc_html_e('Tanvir Ahmed', 'camnex'); ?></h3>
                        <span class="cx-customer-type"><?php esc_html_e('Corporate Director', 'camnex'); ?></span>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="cx-testimonial-card" data-testimonial-id="t3">
                <div class="cx-testimonial-header">
                    <div class="cx-quote-icon" aria-hidden="true">
                        <i data-lucide="quote"></i>
                    </div>
                    <div class="cx-star-rating" role="img" aria-label="<?php esc_attr_e('5 out of 5 stars', 'camnex'); ?>">
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                        <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                    </div>
                </div>

                <p class="cx-testimonial-quote"><?php esc_html_e('"Imou smart Wi-Fi cameras installed across our retail outlet gave us complete peace of mind. Great service!"', 'camnex'); ?></p>

                <div class="cx-testimonial-meta">
                    <div class="cx-meta-details">
                        <span class="cx-installed-label"><?php esc_html_e('Installed Solution:', 'camnex'); ?></span>
                        <span class="cx-installed-item"><?php esc_html_e('Imou Ranger 2 & Audio Dome Package', 'camnex'); ?></span>
                    </div>
                    <div class="cx-meta-footer-info">
                        <span class="cx-location"><i data-lucide="map-pin" aria-hidden="true"></i> <?php esc_html_e('Gulshan-2, Dhaka', 'camnex'); ?></span>
                        <span class="cx-date"><i data-lucide="calendar" aria-hidden="true"></i> <?php esc_html_e('May 2026', 'camnex'); ?></span>
                    </div>
                </div>

                <div class="cx-customer-profile">
                    <div class="cx-avatar-wrapper cx-avatar-placeholder">
                        <i data-lucide="user" aria-hidden="true"></i>
                    </div>
                    <div class="cx-customer-info">
                        <h3 class="cx-customer-name"><?php esc_html_e('Nusrat Jahan', 'camnex'); ?></h3>
                        <span class="cx-customer-type"><?php esc_html_e('Retail Store Owner', 'camnex'); ?></span>
                    </div>
                </div>
            </article>

        </div>

        <!-- Section Bottom Summary Strip -->
        <div class="cx-testimonials-bottom-strip">
            <div class="cx-strip-stars" role="img" aria-label="<?php esc_attr_e('5 out of 5 average rating', 'camnex'); ?>">
                <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
                <i data-lucide="star" class="cx-star-filled" aria-hidden="true"></i>
            </div>
            <p class="cx-strip-text">
                <strong class="cx-strip-highlight"><?php esc_html_e('4.9 Average Customer Rating', 'camnex'); ?></strong> 
                <span class="cx-strip-divider">•</span> 
                <span><?php esc_html_e('Based on 500+ Installations', 'camnex'); ?></span>
            </p>
        </div>

    </div>
</section>
