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
            <img id="site-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/Samie-Logo.png' ); ?>" alt="Samie Digital" data-default-src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/Samie-Logo.png' ); ?>" data-scrolled-src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/Samie-Logo2.png' ); ?>">
        </a>

        <!-- Desktop Navigation -->
        <nav class="sd-nav" aria-label="Primary Navigation">
            <ul class="sd-nav__list">
                <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="sd-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url('/about') ); ?>" class="sd-nav-link <?php echo is_page('about') ? 'active' : ''; ?>">About</a></li>
                <li class="sd-nav-item sd-nav-item--has-dropdown">
                    <a href="<?php echo esc_url( home_url('/services') ); ?>" class="sd-nav-link <?php echo is_page('services') ? 'active' : ''; ?>">Services</a>
                    <ul class="sd-nav-dropdown" aria-label="Services">
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">Web Design</a></li>
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">WordPress Development</a></li>
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">Graphic Design</a></li>
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">Branding &amp; Logo Design</a></li>
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">Digital Marketing</a></li>
                        <li><a href="<?php echo esc_url( home_url('/services') ); ?>">Digital Consulting</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-nav-link <?php echo is_page('portfolio') ? 'active' : ''; ?>">Portfolio</a></li>
                <li><a href="<?php echo esc_url( home_url('/blog') ); ?>" class="sd-nav-link <?php echo is_home() ? 'active' : ''; ?>">Blog</a></li>
                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>

        <!-- CTA Button -->
        <div class="sd-header__actions">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="sd-btn sd-btn--primary sd-header__cta">
                Book a Call
            </a>
            <button class="sd-search-toggle" id="sd-search-toggle" type="button" aria-label="Open search" aria-expanded="false" aria-controls="sd-search-panel">
                <span class="sd-search-toggle__icon" aria-hidden="true"></span>
            </button>
            <!-- Mobile Menu Toggle -->
            <button class="sd-hamburger" id="sd-hamburger" aria-label="Toggle Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="sd-search-panel" id="sd-search-panel" hidden>
            <form class="sd-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label class="sd-sr-only" for="sd-search-input">Search the site</label>
                <input id="sd-search-input" type="search" name="s" placeholder="Search..." required>
                <button type="submit">Search</button>
            </form>
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
            <a href="<?php echo home_url('/contact'); ?>" class="sd-btn sd-btn--primary sd-mobile-cta sd-header__cta">
                Book a Call
            </a>
        </nav>
    </div>
</header>

<!-- ========== END NAVIGATION ========== -->