<?php
/**
 * Samie Digital — page-portfolio.php
 * Template Name: Portfolio Page
 */
get_header();
?>

<!-- ========== PAGE HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <span class="sd-section-label">Our Work</span>
            <h1 class="sd-page-hero__title">
                Results You Can See.<br>
                <span class="sd-text-orange">Clients You Can Ask.</span>
            </h1>
            <p class="sd-page-hero__subtitle">
                Every project in our portfolio represents a real business transformation. Browse our work and see what we can do for yours.
            </p>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span>Portfolio</span>
            </div>
        </div>
    </div>
</section>

<!-- ========== RESULTS BAR ========== -->
<section class="sd-section--cloud sd-section--sm">
    <div class="sd-container">
        <div class="sd-results-bar">
            <div class="sd-results-bar__item sd-animate sd-delay-1">
                <div class="sd-results-bar__num"><span class="sd-counter" data-target="50">0</span>+</div>
                <div class="sd-results-bar__label">Projects Delivered</div>
            </div>
            <div class="sd-results-bar__divider"></div>
            <div class="sd-results-bar__item sd-animate sd-delay-2">
                <div class="sd-results-bar__num"><span class="sd-counter" data-target="10">0</span>+</div>
                <div class="sd-results-bar__label">Countries Served</div>
            </div>
            <div class="sd-results-bar__divider"></div>
            <div class="sd-results-bar__item sd-animate sd-delay-3">
                <div class="sd-results-bar__num"><span class="sd-counter" data-target="98">0</span>%</div>
                <div class="sd-results-bar__label">Client Satisfaction</div>
            </div>
            <div class="sd-results-bar__divider"></div>
            <div class="sd-results-bar__item sd-animate sd-delay-4">
                <div class="sd-results-bar__num"><span class="sd-counter" data-target="4">0</span>wk</div>
                <div class="sd-results-bar__label">Average Delivery</div>
            </div>
        </div>
    </div>
</section>

<!-- ========== PORTFOLIO GRID ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-port-filters sd-animate">
            <button class="sd-port-filter is-active" data-filter="all">All Projects</button>
            <button class="sd-port-filter" data-filter="web-design">Web Design</button>
            <button class="sd-port-filter" data-filter="branding">Branding</button>
            <button class="sd-port-filter" data-filter="marketing">Marketing</button>
            <button class="sd-port-filter" data-filter="wordpress">WordPress</button>
        </div>
        <div class="sd-port-grid sd-mt-6">
            <?php
            $projects = array(
                array( 'title' => 'Nova Commerce',       'category' => 'Web Design + Branding',    'filter' => 'web-design branding',  'bg' => '#0D1B4B', 'num' => '01', 'location' => 'New York, US',        'result' => '+65% more inquiries in 90 days',         'tags' => array('Web Design','Branding') ),
                array( 'title' => 'HealthFirst Coaching', 'category' => 'WordPress + Marketing',   'filter' => 'wordpress marketing',  'bg' => '#1A2F6E', 'num' => '02', 'location' => 'London, UK',          'result' => '3x increase in consultation bookings',   'tags' => array('WordPress','Marketing') ),
                array( 'title' => 'SwiftRoute Logistics', 'category' => 'Web Design + SEO',        'filter' => 'web-design marketing', 'bg' => '#F97316', 'num' => '03', 'location' => 'Toronto, Canada',     'result' => 'Page 1 Google ranking in 60 days',       'tags' => array('Web Design','SEO') ),
                array( 'title' => 'Bloom Nonprofit',      'category' => 'Branding + Graphic Design','filter' => 'branding',            'bg' => '#1E293B', 'num' => '04', 'location' => 'Toronto, Canada',     'result' => 'Complete brand identity from scratch',   'tags' => array('Branding','Graphic Design') ),
                array( 'title' => 'Apex Fitness Studio',  'category' => 'Web Design + Marketing',  'filter' => 'web-design marketing', 'bg' => '#0D1B4B', 'num' => '05', 'location' => 'Austin, Texas, US',  'result' => '40% increase in membership sign-ups',   'tags' => array('Web Design','Marketing') ),
                array( 'title' => 'KimTech Solutions',    'category' => 'WordPress + Consulting',  'filter' => 'wordpress',           'bg' => '#1A2F6E', 'num' => '06', 'location' => 'London, UK',          'result' => 'Full digital transformation in 4 weeks', 'tags' => array('WordPress','Consulting') ),
                array( 'title' => 'Elevate Consulting',   'category' => 'Web Design + Branding',   'filter' => 'web-design branding',  'bg' => '#F97316', 'num' => '07', 'location' => 'Austin, Texas, US',  'result' => 'Premium repositioning — rates doubled',  'tags' => array('Web Design','Branding') ),
                array( 'title' => 'BuildRight Construction','category'=> 'WordPress + SEO',         'filter' => 'wordpress marketing',  'bg' => '#0D1B4B', 'num' => '08', 'location' => 'Manchester, UK',     'result' => '2x organic traffic in 3 months',         'tags' => array('WordPress','SEO') ),
                array( 'title' => 'Verdant Foods',        'category' => 'Branding + Web Design',   'filter' => 'branding web-design',  'bg' => '#1A2F6E', 'num' => '09', 'location' => 'Vancouver, Canada',  'result' => 'Brand launch — sold out first month',    'tags' => array('Branding','Web Design') ),
            );
            foreach ( $projects as $index => $project ) :
                $delay = 'sd-delay-' . min( ( $index % 3 ) + 1, 6 );
            ?>
            <div class="sd-port-item sd-animate <?php echo $delay; ?>" data-filter="<?php echo esc_attr( $project['filter'] ); ?>">
                <div class="sd-port-item__img" style="background:<?php echo $project['bg']; ?>">
                    <div class="sd-port-item__overlay">
                        <div class="sd-port-item__overlay-content">
                            <div class="sd-port-item__result">📈 <?php echo esc_html( $project['result'] ); ?></div>
                            <a href="#" class="sd-btn sd-btn--primary sd-btn--sm">View Case Study</a>
                        </div>
                    </div>
                    <span class="sd-port-item__num">Case Study <?php echo $project['num']; ?></span>
                    <div class="sd-port-item__tags">
                        <?php foreach ( $project['tags'] as $tag ) : ?>
                        <span class="sd-port-item__tag"><?php echo esc_html( $tag ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="sd-port-item__info">
                    <h3 class="sd-port-item__title"><?php echo esc_html( $project['title'] ); ?></h3>
                    <div class="sd-port-item__meta">
                        <span class="sd-port-item__category"><?php echo esc_html( $project['category'] ); ?></span>
                        <span class="sd-port-item__location">📍 <?php echo esc_html( $project['location'] ); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== PULL QUOTE ========== -->
<section class="sd-section sd-section--cloud">
    <div class="sd-container">
        <div class="sd-pull-quote sd-animate">
            <div class="sd-pull-quote__stars">★★★★★</div>
            <blockquote class="sd-pull-quote__text">
                "Working with Samie Digital was the best investment we made for our business this year. The website they built not only looks incredible — it actually converts. We went from getting 2–3 inquiries a week to 10–15."
            </blockquote>
            <div class="sd-pull-quote__author">
                <div class="sd-pull-quote__avatar" style="background:#0D1B4B">SM</div>
                <div>
                    <div class="sd-pull-quote__name">Sarah Martinez</div>
                    <div class="sd-pull-quote__company">Founder, Elevate Consulting — Austin, TX</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== PORTFOLIO CTA ========== -->
<section class="sd-cta-section sd-section--navy">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge">
                <span class="sd-badge__dot"></span>
                Your Project Could Be Next
            </span>
            <h2 class="sd-section-title sd-section-title--white" style="margin-top:var(--space-3)">
                Ready to Start a Project Like These?
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                Book a free strategy call and let's talk about what's possible for your business.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">Start a Project</a>
                <a href="<?php echo esc_url( home_url('/services') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">View Our Services</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>