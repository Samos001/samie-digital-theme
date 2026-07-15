<?php
/**
 * Samie Digital — index.php
 * WordPress fallback template. Never actually renders directly
 * because front-page.php handles the homepage and page.php
 * handles all inner pages. This file must exist for WordPress.
 */

get_header(); ?>

<main id="main-content">
    <div class="sd-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
