<?php
/**
 * Samie Digital — 404.php
 * Custom 404 error page
 */
get_header();
?>

<section class="sd-404 sd-section--navy" style="min-height:100vh;display:flex;align-items:center;">
    <div class="sd-container">
        <div class="sd-404__inner sd-animate">
            <div class="sd-404__number">404</div>
            <h1 class="sd-404__title">Page Not Found</h1>
            <p class="sd-404__text">
                Looks like this page took a wrong turn. It may have been moved, deleted, or never existed in the first place.
            </p>
            <div class="sd-404__btns">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                    Back to Homepage
                </a>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    Contact Us
                </a>
            </div>
            <div class="sd-404__links">
                <p>Or try one of these pages:</p>
                <div class="sd-404__nav">
                    <a href="<?php echo esc_url( home_url('/about') ); ?>">About</a>
                    <a href="<?php echo esc_url( home_url('/services') ); ?>">Services</a>
                    <a href="<?php echo esc_url( home_url('/portfolio') ); ?>">Portfolio</a>
                    <a href="<?php echo esc_url( home_url('/blog') ); ?>">Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>