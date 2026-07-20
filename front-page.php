<?php
/**
 * Samie Digital — front-page.php
 * Homepage template — all sections
 */
get_header();
?>

<!-- ========== HERO SECTION ========== -->
<section class="sd-hero no-header-offset" id="hero">
    <div class="sd-container">
        <div class="sd-hero__inner">

            <!-- Left Column -->
            <div class="sd-hero__content sd-animate">
                <div class="sd-badge">
                    <span class="sd-badge__dot"></span>
                    Trusted by 50+ Businesses Worldwide
                </div>
                <h1 class="sd-hero__title">
                    We Build Websites<br> 
                    That <span class="sd-text-orange">Win Clients</span>,<br>
                    Not Just Awards.
                </h1>
                <p class="sd-hero__subtitle">
                    Samie Digital is a full-service creative agency specializing in web design, and graphic design for small businesses and startups across the US, UK, Canada and Nigeria.
                </p>
                <div class="sd-hero__btns">
                    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                        Book a Free Consultation
                    </a>
                    <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                        View Our Work
                    </a>
                </div>
                <div class="sd-hero__trust">
                    <div class="sd-trust-item">
                        <span class="sd-trust-star">★</span>
                        50+ Projects Delivered
                    </div>
                    <div class="sd-trust-item">
                        <span class="sd-trust-star">★</span>
                        Clients in 10+ Countries
                    </div>
                    <div class="sd-trust-item">
                        <span class="sd-trust-star">★</span>
                        98% Client Satisfaction
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="sd-hero__visual sd-animate sd-animate--right sd-delay-3">
                <div class="sd-hero__photo-wrap">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Samie.png" 
                        alt="Samie — Founder, Samie Digital"
                        class="sd-hero__photo"
                        loading="eager"
                >
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ========== END HERO ========== -->


<!-- ========== CLIENTS BAR ========== -->
<section class="sd-clients sd-section--cloud sd-section--sm">
    <div class="sd-container">
        <p class="sd-clients__label">Trusted by growing businesses across the US, UK &amp; Canada</p>
        <div class="sd-clients__logos">
            <span class="sd-client-logo">TechCorp</span>
            <span class="sd-client-logo">GrowthLab</span>
            <span class="sd-client-logo">Nova Media</span>
            <span class="sd-client-logo">Apex Co.</span>
            <span class="sd-client-logo">BuildRight</span>
            <span class="sd-client-logo">Verdant</span>
        </div>
    </div>
</section>
<!-- ========== END CLIENTS BAR ========== -->


<!-- ========== SERVICES ========== -->
<section class="sd-section" id="services">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">What We Do</span>
            <h2 class="sd-section-title">Everything Your Business Needs<br>to Dominate Online</h2>
            <p class="sd-section-subtitle">From first impression to final conversion — design, development, and marketing under one roof.</p>
        </div>
        <div class="sd-grid-3 sd-mt-6">
            <?php
            $services = array(
                array(
                    'icon'  => '🖥️',
                    'title' => 'Web Design',
                    'desc'  => 'Custom, conversion-optimized websites built to attract and retain high-value clients in your market.',
                    'link'  => '/services/web-design',
                ),
                array(
                    'icon'  => '⚙️',
                    'title' => 'WordPress Development',
                    'desc'  => 'Fast, secure, and easy-to-manage WordPress sites built for performance and scalability.',
                    'link'  => '/services/wordpress-development',
                ),
                array(
                    'icon'  => '🎨',
                    'title' => 'Graphic Design',
                    'desc'  => 'Visuals that stop the scroll — from social media assets to print materials and everything in between.',
                    'link'  => '/services/graphic-design',
                ),
                array(
                    'icon'  => '✦',
                    'title' => 'Branding & Logo Design',
                    'desc'  => 'Brand identities built to earn trust and command premium pricing in competitive markets.',
                    'link'  => '/services/branding',
                ),
                array(
                    'icon'  => '📈',
                    'title' => 'Digital Marketing',
                    'desc'  => 'SEO, content strategy, and campaigns that bring your ideal clients straight to your door.',
                    'link'  => '/services/digital-marketing',
                ),
                array(
                    'icon'  => '💡',
                    'title' => 'Digital Consulting',
                    'desc'  => 'Strategic guidance to align your digital presence with your business goals and revenue targets.',
                    'link'  => '/services/consulting',
                ),
            );
            foreach ( $services as $index => $service ) :
                $delay = 'sd-delay-' . ( $index + 1 );
            ?>
            <div class="sd-card sd-animate <?php echo $delay; ?>">
                <div class="sd-card__icon"><?php echo $service['icon']; ?></div>
                <h3 class="sd-card__title"><?php echo esc_html( $service['title'] ); ?></h3>
                <p class="sd-card__text"><?php echo esc_html( $service['desc'] ); ?></p>
                <a href="<?php echo esc_url( home_url( $service['link'] ) ); ?>" class="sd-card__link">
                    Learn more →
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END SERVICES ========== -->


<!-- ========== WHY US ========== -->
<section class="sd-section sd-section--cloud" id="why-us">
    <div class="sd-container">
        <div class="sd-why__inner">

            <!-- Stats -->
            <div class="sd-animate sd-animate--left">
                <span class="sd-section-label">Our Numbers</span>
                <h2 class="sd-section-title">Why High-Value Clients<br>Choose Samie Digital</h2>
                <div class="sd-stats-grid">
                    <div class="sd-stat-box">
                        <div class="sd-stat-box__number"><span class="sd-counter" data-target="50">0</span>+</div>
                        <div class="sd-stat-box__label">Websites Delivered</div>
                    </div>
                    <div class="sd-stat-box">
                        <div class="sd-stat-box__number"><span class="sd-counter" data-target="10">0</span>+</div>
                        <div class="sd-stat-box__label">Countries Served</div>
                    </div>
                    <div class="sd-stat-box">
                        <div class="sd-stat-box__number"><span class="sd-counter" data-target="98">0</span>%</div>
                        <div class="sd-stat-box__label">Client Satisfaction</div>
                    </div>
                    <div class="sd-stat-box">
                        <div class="sd-stat-box__number"><span class="sd-counter" data-target="4">0</span>wk</div>
                        <div class="sd-stat-box__label">Average Delivery</div>
                    </div>
                </div>
            </div>

            <!-- Differentiators -->
            <div class="sd-why__list sd-animate sd-animate--right">
                <?php
                $reasons = array(
                    array( 'title' => 'US-Market Expertise', 'desc' => 'We understand what converts American and international buyers into long-term clients.' ),
                    array( 'title' => 'Full-Service Under One Roof', 'desc' => 'Design, development, and marketing — no need to juggle multiple agencies.' ),
                    array( 'title' => 'Transparent Pricing', 'desc' => 'No hidden fees, no surprises. You always know what you\'re getting and what it costs.' ),
                    array( 'title' => 'Fast Turnaround', 'desc' => 'Most projects delivered in 2–4 weeks without compromising on quality.' ),
                    array( 'title' => 'Dedicated Project Manager', 'desc' => 'You always have a real person to talk to — not a ticketing system.' ),
                );
                foreach ( $reasons as $reason ) :
                ?>
                <div class="sd-why__item">
                    <div class="sd-why__check">✓</div>
                    <div>
                        <h4 class="sd-why__title"><?php echo esc_html( $reason['title'] ); ?></h4>
                        <p class="sd-why__desc"><?php echo esc_html( $reason['desc'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
<!-- ========== END WHY US ========== -->


<!-- ========== PROCESS ========== -->
<section class="sd-section" id="process">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">How It Works</span>
            <h2 class="sd-section-title">From Vision to Launch in 4 Simple Steps</h2>
            <p class="sd-section-subtitle">A clear, collaborative process designed to get you results — fast.</p>
        </div>
        <div class="sd-process__steps sd-mt-6">
            <?php
            $steps = array(
                array( 'num' => '1', 'title' => 'Discovery Call',     'desc' => 'We learn your business goals, target audience, and vision in a free 30-minute strategy session.' ),
                array( 'num' => '2', 'title' => 'Strategy & Design',  'desc' => 'We create your design system, wireframes, and full mockups — you review and approve before we build.' ),
                array( 'num' => '3', 'title' => 'Build & Develop',    'desc' => 'Our team builds your site on WordPress — fast, clean code, and mobile-first from day one.' ),
                array( 'num' => '4', 'title' => 'Launch & Grow',      'desc' => 'We launch, run quality checks, and hand over everything you need to manage and grow your site.' ),
            );
            foreach ( $steps as $index => $step ) :
                $delay = 'sd-delay-' . ( $index + 1 );
            ?>
            <div class="sd-process__step sd-animate <?php echo $delay; ?>">
                <div class="sd-process__num"><?php echo $step['num']; ?></div>
                <div class="sd-process__connector"></div>
                <h3 class="sd-process__title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="sd-process__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END PROCESS ========== -->


<!-- ========== PORTFOLIO ========== -->
<section class="sd-section sd-section--cloud" id="portfolio">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Our Work</span>
            <h2 class="sd-section-title">Our Work Speaks Louder Than Words</h2>
            <p class="sd-section-subtitle">A selection of projects delivered for clients across the US, UK, and Canada.</p>
        </div>
        <div class="sd-grid-3 sd-mt-6">
            <?php
            $projects = array(
                array( 'title' => 'Nova Commerce Rebrand',  'tag' => 'Web Design + Branding',       'bg' => '#0D1B4B', 'num' => '01' ),
                array( 'title' => 'HealthFirst Coaching',   'tag' => 'WordPress + Digital Marketing','bg' => '#1A2F6E', 'num' => '02' ),
                array( 'title' => 'SwiftRoute Logistics',   'tag' => 'Web Design + SEO',             'bg' => '#F97316', 'num' => '03' ),
                array( 'title' => 'Bloom Nonprofit',        'tag' => 'Branding + Graphic Design',    'bg' => '#1E293B', 'num' => '04' ),
                array( 'title' => 'Apex Fitness Studio',    'tag' => 'Web Design + Marketing',       'bg' => '#0D1B4B', 'num' => '05' ),
                array( 'title' => 'KimTech Solutions',      'tag' => 'WordPress + Consulting',       'bg' => '#1A2F6E', 'num' => '06' ),
            );
            foreach ( $projects as $index => $project ) :
                $delay = 'sd-delay-' . min( $index + 1, 6 );
            ?>
            <div class="sd-port-card sd-animate <?php echo $delay; ?>">
                <div class="sd-port-card__img" style="background:<?php echo $project['bg']; ?>">
                    <div class="sd-port-card__overlay">
                        <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--primary sd-btn--sm">
                            View Case Study
                        </a>
                    </div>
                    <span class="sd-port-card__num">Case Study <?php echo $project['num']; ?></span>
                </div>
                <div class="sd-port-card__info">
                    <h3 class="sd-port-card__title"><?php echo esc_html( $project['title'] ); ?></h3>
                    <span class="sd-port-card__tag"><?php echo esc_html( $project['tag'] ); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="sd-text-center sd-mt-6">
            <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--outline">
                View All Projects →
            </a>
        </div>
    </div>
</section>
<!-- ========== END PORTFOLIO ========== -->


<!-- ========== TESTIMONIALS ========== -->
<section class="sd-section" id="testimonials">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Client Testimonials</span>
            <h2 class="sd-section-title">What Our Clients Are Saying</h2>
            <p class="sd-section-subtitle">Real results from real businesses — not just words on a page.</p>
        </div>
        <div class="sd-grid-3 sd-mt-6">
            <?php
            $testimonials = array(
                array(
                    'quote'   => '"The team at Samie Digital delivered a website that completely transformed how clients perceive our business. Highly recommend."',
                    'name'    => 'Sarah Martinez',
                    'company' => 'Founder, Elevate Consulting — Austin, TX',
                    'initials'=> 'SM',
                    'color'   => '#0D1B4B',
                ),
                array(
                    'quote'   => '"From discovery to launch in under 3 weeks. The design is stunning and the site converts incredibly well. Worth every penny."',
                    'name'    => 'David Kim',
                    'company' => 'CEO, KimTech Solutions — London, UK',
                    'initials'=> 'DK',
                    'color'   => '#1A2F6E',
                ),
                array(
                    'quote'   => '"Samie Digital isn\'t just a vendor — they\'re a genuine partner who cares about your success. Our leads doubled in 60 days."',
                    'name'    => 'Amara Okafor',
                    'company' => 'Director, Bloom Nonprofit — Toronto, CA',
                    'initials'=> 'AO',
                    'color'   => '#F97316',
                ),
            );
            foreach ( $testimonials as $index => $testi ) :
                $delay = 'sd-delay-' . ( $index + 1 );
            ?>
            <div class="sd-testi-card sd-animate <?php echo $delay; ?>">
                <div class="sd-testi-card__stars">★★★★★</div>
                <p class="sd-testi-card__quote"><?php echo esc_html( $testi['quote'] ); ?></p>
                <div class="sd-testi-card__author">
                    <div class="sd-testi-card__avatar" style="background:<?php echo $testi['color']; ?>">
                        <?php echo esc_html( $testi['initials'] ); ?>
                    </div>
                    <div>
                        <div class="sd-testi-card__name"><?php echo esc_html( $testi['name'] ); ?></div>
                        <div class="sd-testi-card__company"><?php echo esc_html( $testi['company'] ); ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END TESTIMONIALS ========== -->


<!-- ========== TEAM ========== -->
<section class="sd-section sd-section--cloud" id="team">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Meet the Team</span>
            <h2 class="sd-section-title">The Creatives Behind Your Results</h2>
            <p class="sd-section-subtitle">A dedicated team of designers, developers, and strategists working remotely worldwide.</p>
        </div>
        <div class="sd-grid-4 sd-mt-6">
            <?php
            $team = array(
                array( 'name' => 'Samuel A.',  'role' => 'Founder & Creative Director', 'bio' => '10+ years helping brands grow online. Specializes in strategy and web design.', 'initials' => 'SA', 'color' => '#0D1B4B' ),
                array( 'name' => 'Jane D.',    'role' => 'Lead Web Developer',           'bio' => 'WordPress expert with 200+ sites built. Speed and clean code are her signatures.', 'initials' => 'JD', 'color' => '#1A2F6E' ),
                array( 'name' => 'Michael K.', 'role' => 'Brand Designer',               'bio' => 'Logo and brand identity specialist. Makes brands look like a million dollars.', 'initials' => 'MK', 'color' => '#F97316' ),
                array( 'name' => 'Lisa N.',    'role' => 'Digital Marketing Lead',       'bio' => 'SEO strategist and content expert. Gets clients found by the right people online.', 'initials' => 'LN', 'color' => '#64748B' ),
            );
            foreach ( $team as $index => $member ) :
                $delay = 'sd-delay-' . ( $index + 1 );
            ?>
            <div class="sd-team-card sd-animate <?php echo $delay; ?>">
                <div class="sd-team-card__avatar" style="background:<?php echo $member['color']; ?>">
                    <?php echo esc_html( $member['initials'] ); ?>
                </div>
                <h3 class="sd-team-card__name"><?php echo esc_html( $member['name'] ); ?></h3>
                <p class="sd-team-card__role"><?php echo esc_html( $member['role'] ); ?></p>
                <p class="sd-team-card__bio"><?php echo esc_html( $member['bio'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END TEAM ========== -->


<!-- ========== CTA SECTION ========== -->
<section class="sd-cta-section sd-section--navy" id="cta">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge" style="margin-bottom:24px">
                <span class="sd-badge__dot"></span>
                Free 30-Minute Strategy Call
            </span>
            <h2 class="sd-section-title sd-section-title--white">
                Ready to Build a Website That<br>Actually Grows Your Business?
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                No commitment. No pitch. Just clarity on your next steps — completely free.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                    Book My Free Consultation
                </a>
                <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    See Our Work First
                </a>
            </div>
            <p class="sd-cta__note">
                🔒 Spots are limited — we take on a select number of projects each month.
            </p>
        </div>
    </div>
</section>
<!-- ========== END CTA SECTION ========== -->


<!-- ========== FAQ ========== -->
<section class="sd-section" id="faq">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">FAQ</span>
            <h2 class="sd-section-title">Questions? We've Got Answers.</h2>
        </div>
        <div class="sd-faq sd-mt-6">
            <?php
            $faqs = array(
                array( 'q' => 'How much does a website cost?',                    'a' => 'Every project is unique, but most of our website projects range from $1,500 to $8,000 depending on complexity, number of pages, and required features. We offer transparent, itemized quotes with no hidden fees.' ),
                array( 'q' => 'How long does it take to build a website?',        'a' => 'Most projects are completed within 2–4 weeks. Larger projects with custom functionality may take 6–8 weeks. We always give you a clear timeline before we start.' ),
                array( 'q' => 'Do you work with international clients?',          'a' => 'Absolutely. We work with clients across the US, UK, Canada, Australia, and beyond. Our team is fully remote and experienced in cross-timezone collaboration.' ),
                array( 'q' => 'What if I already have a website?',                'a' => 'We can redesign, rebuild, or improve your existing website. We\'ll audit what you have and recommend the most cost-effective path forward.' ),
                array( 'q' => 'Do you offer ongoing maintenance and support?',    'a' => 'Yes. We offer monthly maintenance packages that include updates, backups, security monitoring, and priority support.' ),
                array( 'q' => 'What do I need to get started?',                  'a' => 'Just book a free discovery call. We\'ll guide you through everything — you don\'t need to have all the answers before we talk.' ),
                array( 'q' => 'Do you offer payment plans?',                      'a' => 'Yes. We typically work with a 50% deposit to start and 50% on completion. For larger projects we can arrange milestone-based payment schedules.' ),
            );
            foreach ( $faqs as $index => $faq ) :
            ?>
            <div class="sd-faq__item sd-animate sd-delay-<?php echo min($index+1,6); ?>" data-faq="<?php echo $index; ?>">
                <button class="sd-faq__question" aria-expanded="false">
                    <?php echo esc_html( $faq['q'] ); ?>
                    <span class="sd-faq__icon">+</span>
                </button>
                <div class="sd-faq__answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END FAQ ========== -->

<?php get_footer(); ?>