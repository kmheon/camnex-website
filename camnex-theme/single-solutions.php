<?php
/**
 * CamneX Bangladesh — Single Property Solution Template
 *
 * Detailed breakdown of security and IT infrastructure engineered
 * for specific property types (Residential, Corporate, Retail, Industrial, Campus).
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$sol_id = get_the_ID();
$features = get_post_meta($sol_id, '_camnex_solution_features', true);
?>

<main id="primary" class="site-main cx-single-solution-page">
    <div class="container cx-demo">
        
        <!-- Breadcrumbs -->
        <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <a href="<?php echo esc_url(get_post_type_archive_link('solutions')); ?>"><?php esc_html_e('Solutions', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <span class="cx-breadcrumb-item"><?php the_title(); ?></span>
        </nav>

        <header class="cx-solution-hero-banner">
            <span class="cx-section-badge-label"><?php esc_html_e('Tailored Property Architecture', 'camnex'); ?></span>
            <h1 class="cx-solution-title"><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p class="cx-solution-subtitle"><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
        </header>

        <div class="cx-solution-content-grid">
            <div class="cx-solution-main-body">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="cx-solution-featured-image">
                        <?php the_post_thumbnail('full', ['class' => 'cx-solution-img']); ?>
                    </div>
                <?php endif; ?>

                <div class="cx-solution-prose">
                    <?php the_content(); ?>
                </div>

                <!-- Structured Deployment Checklist -->
                <div class="cx-solution-deliverables">
                    <h3><?php esc_html_e('Key Infrastructure Components', 'camnex'); ?></h3>
                    <div class="cx-solution-deliverables-grid">
                        <div class="cx-deliv-item">
                            <i data-lucide="video" aria-hidden="true"></i>
                            <div>
                                <h4><?php esc_html_e('Targeted Surveillance', 'camnex'); ?></h4>
                                <p><?php esc_html_e('Perimeter coverage, high-traffic bottleneck monitoring, and entrance face capture.', 'camnex'); ?></p>
                            </div>
                        </div>
                        <div class="cx-deliv-item">
                            <i data-lucide="wifi" aria-hidden="true"></i>
                            <div>
                                <h4><?php esc_html_e('Seamless Wireless Coverage', 'camnex'); ?></h4>
                                <p><?php esc_html_e('Enterprise mesh Wi-Fi APs with zero-handover roaming and bandwidth isolation.', 'camnex'); ?></p>
                            </div>
                        </div>
                        <div class="cx-deliv-item">
                            <i data-lucide="lock" aria-hidden="true"></i>
                            <div>
                                <h4><?php esc_html_e('Access Control Integration', 'camnex'); ?></h4>
                                <p><?php esc_html_e('Biometric, RFID card, and face recognition door control terminals.', 'camnex'); ?></p>
                            </div>
                        </div>
                        <div class="cx-deliv-item">
                            <i data-lucide="shield-check" aria-hidden="true"></i>
                            <div>
                                <h4><?php esc_html_e('Handover & SLA Support', 'camnex'); ?></h4>
                                <p><?php esc_html_e('Comprehensive network diagrams, admin training, and rapid on-site warranty response.', 'camnex'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: Consultation Booking -->
            <aside class="cx-solution-sidebar">
                <div class="cx-solution-cta-card">
                    <span class="cx-pkg-tag cx-pkg-brand"><?php esc_html_e('Free Site Survey', 'camnex'); ?></span>
                    <h3><?php esc_html_e('Request On-Site Inspection', 'camnex'); ?></h3>
                    <p><?php esc_html_e('Our certified solution engineers will inspect your facility, analyze blind spots, and present an itemized estimate.', 'camnex'); ?></p>
                    
                    <a href="tel:+8801540535150" class="cx-btn-quote-call cx-w-full">
                        <i data-lucide="phone-call" aria-hidden="true"></i>
                        <span><?php esc_html_e('Call: +880 1540-535150', 'camnex'); ?></span>
                    </a>

                    <div class="cx-sidebar-divider"></div>

                    <ul class="cx-sidebar-points">
                        <li><i data-lucide="check" aria-hidden="true"></i> <?php esc_html_e('Direct distributor pricing', 'camnex'); ?></li>
                        <li><i data-lucide="check" aria-hidden="true"></i> <?php esc_html_e('Turnkey installation across Dhaka', 'camnex'); ?></li>
                        <li><i data-lucide="check" aria-hidden="true"></i> <?php esc_html_e('Official brand warranty guarantee', 'camnex'); ?></li>
                    </ul>
                </div>
            </aside>
        </div>

    </div>
</main>

<?php
get_footer();
