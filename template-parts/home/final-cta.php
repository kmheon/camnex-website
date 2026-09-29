<?php
/**
 * CamneX Bangladesh — Homepage Final CTA Section Template Part
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Final CTA -->
<section class="cx-final-cta-section" aria-labelledby="final-cta-title">
    <div class="container cx-demo">
        
        <!-- Large Premium CTA Container -->
        <div class="cx-cta-wrapper">
            
            <!-- Section Header -->
            <div class="cx-cta-header">
                <span class="cx-cta-badge-label"><?php esc_html_e('Ready to get started?', 'camnex'); ?></span>
                <h2 id="final-cta-title" class="cx-cta-title"><?php esc_html_e('Need Help Choosing the Right Security Solution?', 'camnex'); ?></h2>
                <p class="cx-cta-subtitle"><?php esc_html_e('Our specialists are ready to help you choose the perfect CCTV, networking, access control or smart security solution for your home or business.', 'camnex'); ?></p>
            </div>

            <!-- Primary Actions Grid (3 Action Cards/Buttons) -->
            <div class="cx-cta-actions-grid">

                <!-- 1. WhatsApp Us -->
                <a href="https://wa.me/8801540535150" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="cx-cta-action-card" 
                   data-action="whatsapp" 
                   aria-label="<?php esc_attr_e('Message us instantly on WhatsApp for product recommendations and pricing', 'camnex'); ?>">
                    <div class="cx-cta-action-icon" aria-hidden="true">
                        <i data-lucide="message-square"></i>
                    </div>
                    <div class="cx-cta-action-content">
                        <h3 class="cx-cta-action-heading"><?php esc_html_e('WhatsApp Us', 'camnex'); ?></h3>
                        <p class="cx-cta-action-desc"><?php esc_html_e('Message us instantly for product recommendations and pricing.', 'camnex'); ?></p>
                    </div>
                    <div class="cx-cta-action-arrow" aria-hidden="true">
                        <i data-lucide="arrow-right"></i>
                    </div>
                </a>

                <!-- 2. Call Now -->
                <a href="tel:+8801540535150" 
                   class="cx-cta-action-card" 
                   data-action="call" 
                   aria-label="<?php esc_attr_e('Speak directly with a CamneX security specialist over phone', 'camnex'); ?>">
                    <div class="cx-cta-action-icon" aria-hidden="true">
                        <i data-lucide="phone-call"></i>
                    </div>
                    <div class="cx-cta-action-content">
                        <h3 class="cx-cta-action-heading"><?php esc_html_e('Call Now', 'camnex'); ?></h3>
                        <p class="cx-cta-action-desc"><?php esc_html_e('Speak directly with a CamneX security specialist.', 'camnex'); ?></p>
                    </div>
                    <div class="cx-cta-action-arrow" aria-hidden="true">
                        <i data-lucide="arrow-right"></i>
                    </div>
                </a>

                <!-- 3. Book Free Site Visit -->
                <a href="tel:+8801540535150" 
                   class="cx-cta-action-card" 
                   data-action="booking" 
                   aria-label="<?php esc_attr_e('Schedule a free site visit consultation for your home or business', 'camnex'); ?>">
                    <div class="cx-cta-action-icon" aria-hidden="true">
                        <i data-lucide="calendar-check"></i>
                    </div>
                    <div class="cx-cta-action-content">
                        <h3 class="cx-cta-action-heading"><?php esc_html_e('Book Free Site Visit', 'camnex'); ?></h3>
                        <p class="cx-cta-action-desc"><?php esc_html_e('Schedule a free consultation for your home or business.', 'camnex'); ?></p>
                    </div>
                    <div class="cx-cta-action-arrow" aria-hidden="true">
                        <i data-lucide="arrow-right"></i>
                    </div>
                </a>

            </div>

            <!-- Trust Strip (4 Trust Points Below Buttons) -->
            <div class="cx-cta-trust-strip" role="list" aria-label="<?php esc_attr_e('Key guarantees', 'camnex'); ?>">
                <div class="cx-trust-item" role="listitem">
                    <i data-lucide="check-circle" aria-hidden="true"></i>
                    <span><?php esc_html_e('Free Consultation', 'camnex'); ?></span>
                </div>
                <div class="cx-trust-item" role="listitem">
                    <i data-lucide="zap" aria-hidden="true"></i>
                    <span><?php esc_html_e('Fast Response', 'camnex'); ?></span>
                </div>
                <div class="cx-trust-item" role="listitem">
                    <i data-lucide="truck" aria-hidden="true"></i>
                    <span><?php esc_html_e('Nationwide Service', 'camnex'); ?></span>
                </div>
                <div class="cx-trust-item" role="listitem">
                    <i data-lucide="shield-check" aria-hidden="true"></i>
                    <span><?php esc_html_e('Genuine Products', 'camnex'); ?></span>
                </div>
            </div>

        </div>

    </div>
</section>
