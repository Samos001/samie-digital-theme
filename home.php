<?php
/**
 * Samie Digital — home.php
 * WordPress uses this file for the designated Posts page
 * (set under Settings > Reading > Posts page)
 */
get_header();
?>

<!-- ========== BLOG HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <span class="sd-section-label">Our Blog</span>
            <h1 class="sd-page-hero__title">
                Insights, Tips &amp; Strategies<br>
                <span class="sd-text-orange">to Grow Your Business Online</span>
            </h1>
            <p class="sd-page-hero__subtitle">
                Free resources, expert advice, and actionable strategies from the Samie Digital team.
            </p>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span>Blog</span>
            </div>
        </div>
    </div>
</section>
<!-- ========== END BLOG HERO ========== -->


<!-- ========== BLOG POSTS ========== -->
<section class="sd-section">
    <div class="sd-container">
        <?php if ( have_posts() ) : ?>

        <div class="sd-blog-grid">
            <?php
            $post_count = 0;
            while ( have_posts() ) : the_post();
                $post_count++;
                $delay = 'sd-delay-' . min( $post_count, 6 );
                $cats  = get_the_category();
                $cat   = ! empty( $cats ) ? $cats[0]->name : 'General';
            ?>
            <article class="sd-blog-card sd-animate <?php echo $delay; ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="sd-blog-card__img-wrap">
                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'sd-blog-card__img', 'loading' => 'lazy' ) ); ?>
                </a>
                <?php else : ?>
                <a href="<?php the_permalink(); ?>" class="sd-blog-card__img-wrap sd-blog-card__img-placeholder">
                    <div class="sd-blog-card__placeholder-inner">
                        <span>📝</span>
                    </div>
                </a>
                <?php endif; ?>

                <div class="sd-blog-card__body">
                    <div class="sd-blog-card__meta">
                        <span class="sd-blog-card__cat"><?php echo esc_html( $cat ); ?></span>
                        <span class="sd-blog-card__date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                    </div>
                    <h2 class="sd-blog-card__title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="sd-blog-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                    <div class="sd-blog-card__footer">
                        <div class="sd-blog-card__author">
                            <?php echo get_avatar( get_the_author_meta('ID'), 32, '', '', array( 'class' => 'sd-blog-card__avatar' ) ); ?>
                            <span><?php the_author(); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="sd-blog-card__link">
                            Read More →
                        </a>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="sd-pagination sd-mt-8">
            <?php
            echo paginate_links( array(
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
                'mid_size'  => 2,
            ) );
            ?>
        </div>

        <?php else : ?>
        <div class="sd-blog-empty sd-animate">
            <div class="sd-blog-empty__icon">📝</div>
            <h2 class="sd-blog-empty__title">No Posts Yet</h2>
            <p class="sd-blog-empty__text">We are working on some great content. Check back soon.</p>
            <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-mt-4" style="margin-top:var(--space-4)">
                Get In Touch
            </a>
        </div>
        <?php endif; ?>

    </div>
</section>
<!-- ========== END BLOG POSTS ========== -->


<!-- ========== BLOG CTA ========== -->
<section class="sd-cta-section sd-section--navy">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge">
                <span class="sd-badge__dot"></span>
                Free Strategy Call
            </span>
            <h2 class="sd-section-title sd-section-title--white" style="margin-top:var(--space-3)">
                Ready to Put These Strategies to Work?
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                Book a free 30-minute call and let's talk about growing your business online.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                    Book a Free Consultation
                </a>
                <a href="<?php echo esc_url( home_url('/services') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== END BLOG CTA ========== -->

<?php get_footer(); ?>