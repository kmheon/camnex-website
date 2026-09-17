<?php
/**
 * CamneX Bangladesh — Homepage Template (Front Page)
 *
 * @package CamneX
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // 1. Hero
    get_template_part('template-parts/home/hero');

    // 2. Shop by Category
    get_template_part('template-parts/home/shop-by-category');

    // 3. Property Solutions
    get_template_part('template-parts/home/property-solutions');

    // 4. Featured Packages
    get_template_part('template-parts/home/featured-packages');

    // 5. Featured Products
    get_template_part('template-parts/home/featured-products');

    // 6. Why Choose CamneX
    get_template_part('template-parts/home/why-choose');

    // 7. Brands
    get_template_part('template-parts/home/brands');

    // 8. Recent Installations
    get_template_part('template-parts/home/recent-installations');

    // 9. Customer Testimonials
    get_template_part('template-parts/home/testimonials');

    // 10. Final CTA
    get_template_part('template-parts/home/final-cta');
    ?>
</main>

<?php
get_footer();
