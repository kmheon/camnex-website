<?php
/**
 * CamneX Bangladesh — Main Index Template (Fallback)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main cx-main-content">
    <div class="container" style="padding-top: 48px; padding-bottom: 64px;">
        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
                ?>
                <header class="page-header" style="margin-bottom: 32px;">
                    <h1 class="page-title" style="font-size: 2rem; font-weight: 700; color: #111827;">
                        <?php single_post_title(); ?>
                    </h1>
                </header>
                <?php
            endif;

            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('cx-post-card'); ?> style="margin-bottom: 32px; border-bottom: 1px solid #E5E7EB; padding-bottom: 24px;">
                    <header class="entry-header">
                        <h2 class="entry-title" style="font-size: 1.5rem; font-weight: 600;">
                            <a href="<?php the_permalink(); ?>" style="color: #111827; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <div class="entry-summary" style="margin-top: 12px; color: #4B5563; line-height: 1.6;">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;

            the_posts_navigation();

        else :
            ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title" style="font-size: 1.8rem; font-weight: 700; color: #111827;">
                        <?php esc_html_e('Nothing Found', 'camnex'); ?>
                    </h1>
                </header>
                <div class="page-content" style="margin-top: 16px; color: #6B7280;">
                    <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'camnex'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </section>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
