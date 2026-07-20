<?php
/**
 * Samie Digital — page.php
 * Default page template — used for pages with no custom template
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- ========== PAGE HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <h1 class="sd-page-hero__title"><?php the_title(); ?></h1>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== PAGE CONTENT ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-page-content sd-animate">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>