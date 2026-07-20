<?php
/**
 * Samie Digital — single.php
 * Single blog post template
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- ========== POST HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <?php
            $cats = get_the_category();
            $cat  = ! empty( $cats ) ? $cats[0] : null;
            if ( $cat ) :
            ?>
            <span class="sd-section-label"><?php echo esc_html( $cat->name ); ?></span>
            <?php endif; ?>
            <h1 class="sd-page-hero__title" style="font-size:clamp(28px,4vw,48px)">
                <?php the_title(); ?>
            </h1>
            <div class="sd-post-meta">
                <div class="sd-post-meta__author">
                    <?php echo get_avatar( get_the_author_meta('ID'), 40, '', '', array( 'class' => 'sd-post-meta__avatar' ) ); ?>
                    <div>
                        <div class="sd-post-meta__name"><?php the_author(); ?></div>
                        <div class="sd-post-meta__date"><?php echo get_the_date( 'F j, Y' ); ?> · <?php echo ceil( str_word_count( get_the_content() ) / 200 ); ?> min read</div>
                    </div>
                </div>
            </div>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <a href="<?php echo esc_url( home_url('/blog') ); ?>">Blog</a>
                <span>→</span>
                <span><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></span>
            </div>
        </div>
    </div>
</section>
<!-- ========== END POST HERO ========== -->


<!-- ========== POST CONTENT ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-post__layout">

            <!-- Main Content -->
            <article class="sd-post__content sd-animate">

                <?php if ( has_post_thumbnail() ) : ?>
                <div class="sd-post__featured-img">
                    <?php the_post_thumbnail( 'large', array( 'loading' => 'eager' ) ); ?>
                </div>
                <?php endif; ?>

                <div class="sd-post__body">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ( $tags ) :
                ?>
                <div class="sd-post__tags">
                    <span class="sd-post__tags-label">Tagged:</span>
                    <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="sd-post__tag">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <div class="sd-post__nav">
                    <div class="sd-post__nav-prev">
                        <?php
                        $prev = get_previous_post();
                        if ( $prev ) :
                        ?>
                        <span class="sd-post__nav-label">← Previous</span>
                        <a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="sd-post__nav-title">
                            <?php echo esc_html( get_the_title( $prev->ID ) ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="sd-post__nav-next">
                        <?php
                        $next = get_next_post();
                        if ( $next ) :
                        ?>
                        <span class="sd-post__nav-label">Next →</span>
                        <a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="sd-post__nav-title">
                            <?php echo esc_html( get_the_title( $next->ID ) ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </article>

            <!-- Sidebar -->
            <aside class="sd-post__sidebar">

                <!-- Author Box -->
                <div class="sd-sidebar-card">
                    <div class="sd-author-box">
                        <?php echo get_avatar( get_the_author_meta('ID'), 64, '', '', array( 'class' => 'sd-author-box__avatar' ) ); ?>
                        <h3 class="sd-author-box__name"><?php the_author(); ?></h3>
                        <p class="sd-author-box__bio"><?php echo esc_html( get_the_author_meta('description') ?: 'Creative director and founder of Samie Digital. Helping businesses grow online since 2018.' ); ?></p>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="sd-sidebar-card sd-sidebar-card--navy">
                    <h3 class="sd-sidebar-cta__title">Ready to Grow Your Business?</h3>
                    <p class="sd-sidebar-cta__text">Book a free 30-minute strategy call and let's talk about your project.</p>
                    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary" style="width:100%;justify-content:center;margin-top:var(--space-3)">
                        Book a Free Call
                    </a>
                </div>

                <!-- Recent Posts -->
                <div class="sd-sidebar-card">
                    <h3 class="sd-sidebar-card__title">Recent Posts</h3>
                    <?php
                    $recent = get_posts( array(
                        'numberposts'  => 4,
                        'post__not_in' => array( get_the_ID() ),
                    ) );
                    foreach ( $recent as $post ) :
                        setup_postdata( $post );
                    ?>
                    <div class="sd-recent-post">
                        <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="sd-recent-post__title">
                            <?php echo esc_html( get_the_title( $post->ID ) ); ?>
                        </a>
                        <span class="sd-recent-post__date"><?php echo get_the_date( 'M j, Y', $post->ID ); ?></span>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

                <!-- Categories -->
                <div class="sd-sidebar-card">
                    <h3 class="sd-sidebar-card__title">Categories</h3>
                    <ul class="sd-sidebar-cats">
                        <?php
                        $categories = get_categories( array( 'orderby' => 'count', 'order' => 'DESC' ) );
                        foreach ( $categories as $category ) :
                        ?>
                        <li>
                            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                <?php echo esc_html( $category->name ); ?>
                            </a>
                            <span><?php echo $category->count; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </aside>
        </div>
    </div>
</section>
<!-- ========== END POST CONTENT ========== -->

<?php endwhile; ?>

<?php get_footer(); ?>