<?php
/**
 * CamneX Bangladesh — Single Installation Project Template
 *
 * Showcases verified installation case studies: client location, equipment deployed,
 * cameras installed, challenge, solution, and high-resolution deployment photos.
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$project_id   = get_the_ID();
$client_type  = get_post_meta($project_id, '_camnex_client_type', true) ?: __('Commercial Client', 'camnex');
$location     = get_post_meta($project_id, '_camnex_location', true) ?: __('Dhaka, Bangladesh', 'camnex');
$cam_count    = get_post_meta($project_id, '_camnex_cameras_installed', true) ?: '16';
$completion   = get_post_meta($project_id, '_camnex_completion_date', true) ?: date('F Y');
?>

<main id="primary" class="site-main cx-single-project-page">
    <div class="container cx-demo">
        
        <!-- Breadcrumbs -->
        <nav class="cx-woocommerce-breadcrumb" aria-label="<?php esc_attr_e('Breadcrumb', 'camnex'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <a href="<?php echo esc_url(get_post_type_archive_link('projects')); ?>"><?php esc_html_e('Installations', 'camnex'); ?></a>
            <span class="cx-breadcrumb-sep">/</span>
            <span class="cx-breadcrumb-item"><?php the_title(); ?></span>
        </nav>

        <header class="cx-project-header">
            <div class="cx-project-tag-row">
                <span class="cx-pkg-tag cx-pkg-brand"><?php echo esc_html($client_type); ?></span>
                <span class="cx-pkg-tag cx-pkg-save"><i data-lucide="map-pin" aria-hidden="true"></i> <?php echo esc_html($location); ?></span>
            </div>
            <h1 class="cx-project-title"><?php the_title(); ?></h1>
        </header>

        <div class="cx-project-showcase-grid">
            <div class="cx-project-main-media">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="cx-project-featured-wrap">
                        <?php the_post_thumbnail('full', ['class' => 'cx-project-full-img']); ?>
                    </div>
                <?php else : ?>
                    <div class="cx-project-placeholder-notice">
                        <i data-lucide="camera" aria-hidden="true"></i>
                        <p><?php esc_html_e('Authentic field photographs will be uploaded upon final deployment documentation.', 'camnex'); ?></p>
                    </div>
                <?php endif; ?>

                <div class="cx-project-description-prose">
                    <h2><?php esc_html_e('Project Overview & Scope of Work', 'camnex'); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>

            <!-- Project Metadata Column -->
            <aside class="cx-project-meta-sidebar">
                <div class="cx-project-meta-box">
                    <h3><?php esc_html_e('Project Specifications', 'camnex'); ?></h3>
                    <ul class="cx-project-specs-list">
                        <li>
                            <span class="cx-spec-k"><?php esc_html_e('Location:', 'camnex'); ?></span>
                            <span class="cx-spec-v"><?php echo esc_html($location); ?></span>
                        </li>
                        <li>
                            <span class="cx-spec-k"><?php esc_html_e('Client Segment:', 'camnex'); ?></span>
                            <span class="cx-spec-v"><?php echo esc_html($client_type); ?></span>
                        </li>
                        <li>
                            <span class="cx-spec-k"><?php esc_html_e('Cameras Deployed:', 'camnex'); ?></span>
                            <span class="cx-spec-v"><?php echo esc_html($cam_count); ?> <?php esc_html_e('Channels', 'camnex'); ?></span>
                        </li>
                        <li>
                            <span class="cx-spec-k"><?php esc_html_e('Handover Date:', 'camnex'); ?></span>
                            <span class="cx-spec-v"><?php echo esc_html($completion); ?></span>
                        </li>
                    </ul>

                    <div class="cx-project-action-box">
                        <p><?php esc_html_e('Planning a similar installation for your organization?', 'camnex'); ?></p>
                        <a href="tel:+8801540535150" class="cx-btn-quote-call cx-w-full">
                            <i data-lucide="phone-call" aria-hidden="true"></i>
                            <span><?php esc_html_e('Get Free Project Assessment', 'camnex'); ?></span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>

    </div>
</main>

<?php
get_footer();
