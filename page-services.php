<?php
/**
 * Samie Digital — page-services.php
 * Template Name: Services Page
 */
get_header();
?>

<!-- ========== PAGE HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <span class="sd-section-label">What We Offer</span>
            <h1 class="sd-page-hero__title">
                Full-Service Digital Solutions<br>
                <span class="sd-text-orange">Built to Grow Your Business</span>
            </h1>
            <p class="sd-page-hero__subtitle">
                From stunning web design to powerful digital marketing — we provide everything your business needs to attract premium clients and grow revenue online.
            </p>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span>Services</span>
            </div>
        </div>
    </div>
</section>
<!-- ========== END PAGE HERO ========== -->


<!-- ========== SERVICES LIST ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Our Services</span>
            <h2 class="sd-section-title">Everything Under One Roof</h2>
            <p class="sd-section-subtitle">No need to juggle multiple agencies. We handle design, development, and marketing — all in one place.</p>
        </div>

        <?php
        $services = array(
            array(
                'icon'       => '🖥️',
                'title'      => 'Web Design',
                'slug'       => 'web-design',
                'desc'       => 'Your website is your most powerful sales tool. We design custom, conversion-optimized websites that make your business look world-class and turn visitors into paying clients.',
                'features'   => array(
                    'Custom design — no templates',
                    'Mobile-first and fully responsive',
                    'Conversion-optimized layouts',
                    'Fast load times and clean code',
                    'SEO-ready structure',
                    'Integrated contact and booking forms',
                ),
                'ideal'      => 'Small businesses, startups, coaches, consultants, service businesses',
                'turnaround' => '2–3 weeks',
                'starting'   => '$1,500',
                'color'      => '#0D1B4B',
                'reverse'    => false,
            ),
            array(
                'icon'       => '⚙️',
                'title'      => 'WordPress Development',
                'slug'       => 'wordpress-development',
                'desc'       => 'We build fast, secure, and easy-to-manage WordPress websites that give you full control of your content — no developer needed for everyday updates.',
                'features'   => array(
                    'Custom WordPress theme development',
                    'Plugin setup and configuration',
                    'WooCommerce integration',
                    'Performance optimization',
                    'Security hardening',
                    'Training and handover included',
                ),
                'ideal'      => 'Businesses wanting a manageable, scalable website',
                'turnaround' => '2–4 weeks',
                'starting'   => '$1,200',
                'color'      => '#1A2F6E',
                'reverse'    => true,
            ),
            array(
                'icon'       => '🎨',
                'title'      => 'Graphic Design',
                'slug'       => 'graphic-design',
                'desc'       => 'Great visuals stop the scroll and build brand recognition. We create professional graphic design assets that make your business look polished and premium across every platform.',
                'features'   => array(
                    'Social media graphics and templates',
                    'Marketing materials and flyers',
                    'Business cards and stationery',
                    'Presentation design',
                    'Email newsletter templates',
                    'Print-ready files included',
                ),
                'ideal'      => 'Businesses needing consistent, professional visual content',
                'turnaround' => '1–2 weeks',
                'starting'   => '$500',
                'color'      => '#F97316',
                'reverse'    => false,
            ),
            array(
                'icon'       => '✦',
                'title'      => 'Branding & Logo Design',
                'slug'       => 'branding',
                'desc'       => 'Your brand is more than a logo — it is the feeling people get when they encounter your business. We create complete brand identities that build trust and command premium pricing.',
                'features'   => array(
                    'Logo design (primary + variations)',
                    'Brand color palette and typography',
                    'Brand guidelines document',
                    'Business card design',
                    'Social media profile kit',
                    'Brand voice and messaging guide',
                ),
                'ideal'      => 'New businesses, rebrands, startups, entrepreneurs',
                'turnaround' => '1–3 weeks',
                'starting'   => '$800',
                'color'      => '#0D1B4B',
                'reverse'    => true,
            ),
            array(
                'icon'       => '📈',
                'title'      => 'Digital Marketing',
                'slug'       => 'digital-marketing',
                'desc'       => 'Getting found online is not luck — it is strategy. We implement proven SEO, content, and paid advertising strategies that bring your ideal clients directly to your website.',
                'features'   => array(
                    'Search engine optimization (SEO)',
                    'Google Ads management',
                    'Social media advertising',
                    'Content strategy and creation',
                    'Email marketing campaigns',
                    'Monthly performance reporting',
                ),
                'ideal'      => 'Businesses ready to invest in consistent lead generation',
                'turnaround' => 'Ongoing monthly retainer',
                'starting'   => '$800/mo',
                'color'      => '#1A2F6E',
                'reverse'    => false,
            ),
            array(
                'icon'       => '💡',
                'title'      => 'Digital Consulting',
                'slug'       => 'consulting',
                'desc'       => 'Not sure where to start or what to prioritize? Our digital consulting service gives you a clear, actionable roadmap to grow your online presence and hit your business goals.',
                'features'   => array(
                    'Digital audit of current presence',
                    'Competitive analysis',
                    'Custom growth roadmap',
                    'Technology and tool recommendations',
                    'Priority action plan',
                    '1-on-1 strategy sessions',
                ),
                'ideal'      => 'Business owners who want clarity and a clear direction',
                'turnaround' => '1 week',
                'starting'   => '$400',
                'color'      => '#F97316',
                'reverse'    => true,
            ),
        );

        foreach ( $services as $index => $service ) :
            $delay = $index % 2 === 0 ? 'sd-animate--left' : 'sd-animate--right';
        ?>
        <div class="sd-service-row <?php echo $service['reverse'] ? 'sd-service-row--reverse' : ''; ?> sd-animate">
            <!-- Icon & Title side -->
            <div class="sd-service-row__visual">
                <div class="sd-service-row__icon-wrap" style="background:<?php echo $service['color']; ?>">
                    <span class="sd-service-row__icon"><?php echo $service['icon']; ?></span>
                </div>
                <div class="sd-service-row__meta">
                    <div class="sd-service-row__meta-item">
                        <span class="sd-service-row__meta-label">Ideal For</span>
                        <span class="sd-service-row__meta-value"><?php echo esc_html( $service['ideal'] ); ?></span>
                    </div>
                    <div class="sd-service-row__meta-item">
                        <span class="sd-service-row__meta-label">Turnaround</span>
                        <span class="sd-service-row__meta-value"><?php echo esc_html( $service['turnaround'] ); ?></span>
                    </div>
                    <div class="sd-service-row__meta-item">
                        <span class="sd-service-row__meta-label">Starting From</span>
                        <span class="sd-service-row__meta-value sd-service-row__price"><?php echo esc_html( $service['starting'] ); ?></span>
                    </div>
                </div>
            </div>

            <!-- Content side -->
            <div class="sd-service-row__content">
                <span class="sd-section-label">0<?php echo $index + 1; ?></span>
                <h2 class="sd-service-row__title"><?php echo esc_html( $service['title'] ); ?></h2>
                <p class="sd-service-row__desc"><?php echo esc_html( $service['desc'] ); ?></p>
                <ul class="sd-service-row__features">
                    <?php foreach ( $service['features'] as $feature ) : ?>
                    <li>
                        <span class="sd-why__check">✓</span>
                        <?php echo esc_html( $feature ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>?service=<?php echo esc_attr( $service['slug'] ); ?>" class="sd-btn sd-btn--primary" style="margin-top:var(--space-4)">
                    Get a Quote for <?php echo esc_html( $service['title'] ); ?>
                </a>
            </div>
        </div>
        <?php if ( $index < count($services) - 1 ) : ?>
        <hr class="sd-service-divider">
        <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>
<!-- ========== END SERVICES LIST ========== -->


<!-- ========== PRICING OVERVIEW ========== -->
<section class="sd-section sd-section--cloud">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Pricing</span>
            <h2 class="sd-section-title">Simple, Transparent Pricing</h2>
            <p class="sd-section-subtitle">No hidden fees. No surprises. Just honest pricing for world-class work.</p>
        </div>
        <div class="sd-pricing__grid sd-mt-6">

            <div class="sd-pricing__card sd-animate sd-delay-1">
                <div class="sd-pricing__header">
                    <h3 class="sd-pricing__name">Starter</h3>
                    <div class="sd-pricing__price">$1,500</div>
                    <p class="sd-pricing__desc">Perfect for new businesses and solopreneurs who need a professional online presence fast.</p>
                </div>
                <ul class="sd-pricing__features">
                    <li>✓ Up to 5 pages</li>
                    <li>✓ Mobile responsive design</li>
                    <li>✓ Contact form</li>
                    <li>✓ Basic SEO setup</li>
                    <li>✓ 2 rounds of revisions</li>
                    <li>✓ 2-week delivery</li>
                </ul>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--outline" style="width:100%;justify-content:center">
                    Get Started
                </a>
            </div>

            <div class="sd-pricing__card sd-pricing__card--featured sd-animate sd-delay-2">
                <div class="sd-pricing__badge">Most Popular</div>
                <div class="sd-pricing__header">
                    <h3 class="sd-pricing__name">Growth</h3>
                    <div class="sd-pricing__price">$3,500</div>
                    <p class="sd-pricing__desc">For growing businesses ready to compete at the highest level with a premium digital presence.</p>
                </div>
                <ul class="sd-pricing__features">
                    <li>✓ Up to 10 pages</li>
                    <li>✓ Custom design system</li>
                    <li>✓ Blog setup</li>
                    <li>✓ Full SEO optimization</li>
                    <li>✓ Booking/contact forms</li>
                    <li>✓ 3 rounds of revisions</li>
                    <li>✓ 3-week delivery</li>
                    <li>✓ 30-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary" style="width:100%;justify-content:center">
                    Get Started
                </a>
            </div>

            <div class="sd-pricing__card sd-animate sd-delay-3">
                <div class="sd-pricing__header">
                    <h3 class="sd-pricing__name">Premium</h3>
                    <div class="sd-pricing__price">$6,500+</div>
                    <p class="sd-pricing__desc">For established businesses that want a fully custom, high-converting digital presence with ongoing support.</p>
                </div>
                <ul class="sd-pricing__features">
                    <li>✓ Unlimited pages</li>
                    <li>✓ Full brand identity</li>
                    <li>✓ E-commerce ready</li>
                    <li>✓ Advanced SEO strategy</li>
                    <li>✓ CRM integration</li>
                    <li>✓ Unlimited revisions</li>
                    <li>✓ 4-week delivery</li>
                    <li>✓ 90-day post-launch support</li>
                </ul>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--outline" style="width:100%;justify-content:center">
                    Get Started
                </a>
            </div>

        </div>
        <p class="sd-pricing__note sd-animate">
            All prices are in USD. Need something custom? <a href="<?php echo esc_url( home_url('/contact') ); ?>">Let's talk →</a>
        </p>
    </div>
</section>
<!-- ========== END PRICING ========== -->


<!-- ========== SERVICES CTA ========== -->
<section class="sd-cta-section sd-section--navy">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge">
                <span class="sd-badge__dot"></span>
                Free Strategy Call
            </span>
            <h2 class="sd-section-title sd-section-title--white" style="margin-top:var(--space-3)">
                Not Sure Which Service You Need?
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                Book a free 30-minute call and we will recommend exactly what your business needs to grow online.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                    Book a Free Consultation
                </a>
                <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    See Our Work
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== END SERVICES CTA ========== -->

<?php get_footer(); ?>