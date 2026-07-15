<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ========== NAVIGATION ========== -->
<header class="sd-header" id="sd-header">
    <div class="sd-header__inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sd-logo" aria-label="Samie Digital Home">
            <?php if ( has_custom_logo() ) :
                the_custom_logo();
            else : ?>
                <div class="sd-logo__text">
                    <span class="sd-logo__icon">SD</span>
                    <span class="sd-logo__name">Samie Digital</span>
                </div>
            <?php endif; ?>
        </a>

        <!-- Desktop Navigation -->
        <nav class="sd-nav" aria-label="Primary Navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'sd-nav__list',
                'walker'         => new Samie_Nav_Walker(),
                'fallback_cb'    => function() {
                    echo '<ul class="sd-nav__list">
                        <li><a href="' . home_url('/') . '" class="sd-nav-link">Home</a></li>
                        <li><a href="' . home_url('/about') . '" class="sd-nav-link">About</a></li>
                        <li><a href="' . home_url('/services') . '" class="sd-nav-link">Services</a></li>
                        <li><a href="' . home_url('/portfolio') . '" class="sd-nav-link">Portfolio</a></li>
                        <li><a href="' . home_url('/blog') . '" class="sd-nav-link">Blog</a></li>
                        <li><a href="' . home_url('/contact') . '" class="sd-nav-link">Contact</a></li>
                    </ul>';
                },
            ) );
            ?>
        </nav>

        <!-- CTA Button -->
        <div class="sd-header__actions">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="sd-btn sd-btn--primary">
                Book a Free Call
            </a>
            <!-- Mobile Menu Toggle -->
            <button class="sd-hamburger" id="sd-hamburger" aria-label="Toggle Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>

    <!-- Mobile Menu -->
    <div class="sd-mobile-menu" id="sd-mobile-menu" aria-hidden="true">
        <nav>
            <ul class="sd-mobile-menu__list">
                <li><a href="<?php echo home_url('/'); ?>" class="sd-mobile-link">Home</a></li>
                <li><a href="<?php echo home_url('/about'); ?>" class="sd-mobile-link">About</a></li>
                <li><a href="<?php echo home_url('/services'); ?>" class="sd-mobile-link">Services</a></li>
                <li><a href="<?php echo home_url('/portfolio'); ?>" class="sd-mobile-link">Portfolio</a></li>
                <li><a href="<?php echo home_url('/blog'); ?>" class="sd-mobile-link">Blog</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>" class="sd-mobile-link">Contact</a></li>
            </ul>
            <a href="<?php echo home_url('/contact'); ?>" class="sd-btn sd-btn--primary sd-mobile-cta">
                Book a Free Call
            </a>
        </nav>
    </div>
</header>
<!-- ========== END NAVIGATION ========== -->