<?php
/**
 * Samie Digital — functions.php
 * Theme setup, asset loading, menus, and supports.
 */

// -------------------------------------------------------
// 1. THEME SETUP
// -------------------------------------------------------
function samie_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable featured images on posts/pages
    add_theme_support( 'post-thumbnails' );

    // HTML5 markup support
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'samie-digital' ),
        'footer'  => __( 'Footer Navigation', 'samie-digital' ),
    ) );

    // Wide and full alignment support (good for full-width sections)
    add_theme_support( 'align-wide' );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'samie_theme_setup' );


// -------------------------------------------------------
// 2. ENQUEUE STYLES AND SCRIPTS
// -------------------------------------------------------
function samie_enqueue_assets() {

    // --- Google Fonts ---
    wp_enqueue_style(
        'samie-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // --- Main CSS (design system + global styles) ---
    wp_enqueue_style(
        'samie-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'samie-google-fonts' ),
        '1.0.0'
    );

    // --- Sections CSS (homepage sections) ---
    wp_enqueue_style(
        'samie-sections',
        get_template_directory_uri() . '/assets/css/sections.css',
        array( 'samie-main' ),
        '1.0.0'
    );

    // --- Responsive CSS (mobile + tablet breakpoints) ---
    wp_enqueue_style(
        'samie-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array( 'samie-sections' ),
        '1.0.0'
    );

    // --- Main JS (animations, menu toggle, counters) ---
    wp_enqueue_script(
        'samie-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true // load in footer
    );

    // --- Pass WordPress data to JS ---
    wp_localize_script( 'samie-main-js', 'samieData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'samie_nonce' ),
        'homeUrl' => home_url(),
    ) );
}
add_action( 'wp_enqueue_scripts', 'samie_enqueue_assets' );


// -------------------------------------------------------
// 3. WIDGET AREAS (SIDEBARS)
// -------------------------------------------------------
function samie_register_widgets() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'samie-digital' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets in this area appear on blog pages.', 'samie-digital' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'samie-digital' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'samie_register_widgets' );


// -------------------------------------------------------
// 4. CUSTOM EXCERPT LENGTH
// -------------------------------------------------------
function samie_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'samie_excerpt_length' );

function samie_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'samie_excerpt_more' );


// -------------------------------------------------------
// 5. REMOVE WORDPRESS VERSION FROM HEAD (SECURITY)
// -------------------------------------------------------
remove_action( 'wp_head', 'wp_generator' );


// -------------------------------------------------------
// 6. ADD BODY CLASSES FOR EASY CSS TARGETING
// -------------------------------------------------------
function samie_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-homepage';
    }
    if ( is_page() ) {
        $classes[] = 'is-page';
    }
    if ( is_singular( 'post' ) ) {
        $classes[] = 'is-blog-post';
    }
    return $classes;
}
add_filter( 'body_class', 'samie_body_classes' );


// -------------------------------------------------------
// 7. CUSTOM WALKER FOR NAVIGATION MENU
// -------------------------------------------------------
class Samie_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sd-dropdown">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes     = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $output .= '<li' . $class_names . '>';

        $atts           = array();
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts['class']  = 'sd-nav-link';
        if ( $item->current ) {
            $atts['class'] .= ' active';
            $atts['aria-current'] = 'page';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
        $output .= esc_html( $item->title );
        $output .= '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}


// -------------------------------------------------------
// 8. CONTACT FORM AJAX HANDLER
// -------------------------------------------------------
function samie_handle_contact_form() {
    check_ajax_referer( 'samie_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $service = sanitize_text_field( $_POST['service'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    $to      = get_option( 'admin_email' );
    $subject = "New Project Inquiry from {$name} — Samie Digital";
    $body    = "Name: {$name}\nEmail: {$email}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! We will be in touch within 24 hours.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Something went wrong. Please email us directly.' ) );
    }
}
add_action( 'wp_ajax_samie_contact', 'samie_handle_contact_form' );
add_action( 'wp_ajax_nopriv_samie_contact', 'samie_handle_contact_form' );


// -------------------------------------------------------
// 9. SCHEMA MARKUP HELPER (SEO)
// -------------------------------------------------------
function samie_organization_schema() {
    if ( ! is_front_page() ) return;
    $schema = array(
        '@context'  => 'https://schema.org',
        '@type'     => 'ProfessionalService',
        'name'      => 'Samie Digital',
        'url'       => home_url(),
        'logo'      => get_template_directory_uri() . '/assets/images/logo.png',
        'description' => 'Full-service creative agency specializing in web design, branding, and digital marketing.',
        'areaServed' => array( 'US', 'GB', 'CA' ),
        'serviceType' => array(
            'Web Design', 'WordPress Development',
            'Graphic Design', 'Branding', 'Digital Marketing', 'Digital Consulting'
        ),
    );
    echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'samie_organization_schema' );