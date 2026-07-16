<?php
/**
 * Samie Digital — page-about.php
 * Template Name: About Page
 */
get_header();
?>

<!-- ========== PAGE HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <span class="sd-section-label">About Us</span>
            <h1 class="sd-page-hero__title">
                We Are a Team of Creatives<br>
                <span class="sd-text-orange">Obsessed With Results</span>
            </h1>
            <p class="sd-page-hero__subtitle">
                Samie Digital was built on one belief — every business deserves to look world-class online, regardless of size or budget.
            </p>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span>About</span>
            </div>
        </div>
    </div>
</section>
<!-- ========== END PAGE HERO ========== -->


<!-- ========== OUR STORY ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-story__inner">
            <div class="sd-animate sd-animate--left">
                <span class="sd-section-label">Our Story</span>
                <h2 class="sd-section-title">From a One-Person Studio to a Global Creative Agency</h2>
                <p style="margin-bottom:16px">
                    Samie Digital was founded with a simple mission — to help small businesses and entrepreneurs compete with the big players online. What started as a one-person freelance studio has grown into a dedicated team of designers, developers, and strategists serving clients across the United States, United Kingdom, Canada, and beyond.
                </p>
                <p style="margin-bottom:16px">
                    We have seen firsthand how a well-designed website and a strong brand identity can completely transform a business. We have watched clients double their inquiry rates, attract better-quality customers, and finally feel proud of how they show up online.
                </p>
                <p>
                    That is what drives us every single day. Not just building websites — but building businesses.
                </p>
                <div class="sd-story__badges">
                    <div class="sd-story__badge">
                        <div class="sd-story__badge-num">2018</div>
                        <div class="sd-story__badge-label">Year Founded</div>
                    </div>
                    <div class="sd-story__badge">
                        <div class="sd-story__badge-num">50+</div>
                        <div class="sd-story__badge-label">Projects Delivered</div>
                    </div>
                    <div class="sd-story__badge">
                        <div class="sd-story__badge-num">10+</div>
                        <div class="sd-story__badge-label">Countries Served</div>
                    </div>
                </div>
            </div>
            <div class="sd-story__image sd-animate sd-animate--right">
                <div class="sd-story__img-placeholder">
                    <div class="sd-story__img-inner">
                        <div class="sd-story__img-icon">📸</div>
                        <p>Add your team photo here</p>
                        <span>Upload to assets/images/team-photo.jpg</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== END OUR STORY ========== -->


<!-- ========== MISSION & VISION ========== -->
<section class="sd-section sd-section--cloud">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">What Drives Us</span>
            <h2 class="sd-section-title">Our Mission & Vision</h2>
        </div>
        <div class="sd-mv__grid sd-mt-6">
            <div class="sd-mv__card sd-animate sd-delay-1">
                <div class="sd-mv__icon">🎯</div>
                <h3 class="sd-mv__title">Our Mission</h3>
                <p class="sd-mv__text">
                    To help small businesses and entrepreneurs compete with the big players — through design that converts, strategy that works, and partnerships built on trust and transparency.
                </p>
            </div>
            <div class="sd-mv__card sd-animate sd-delay-2">
                <div class="sd-mv__icon">🔭</div>
                <h3 class="sd-mv__title">Our Vision</h3>
                <p class="sd-mv__text">
                    A world where every business owner — regardless of budget — can access premium digital services and build an online presence that truly reflects the quality of their work.
                </p>
            </div>
            <div class="sd-mv__card sd-animate sd-delay-3">
                <div class="sd-mv__icon">🌍</div>
                <h3 class="sd-mv__title">Our Reach</h3>
                <p class="sd-mv__text">
                    We work remotely and serve clients worldwide — with deep expertise in the US, UK, Canadian, and other English-speaking markets where our clients need to compete and win.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ========== END MISSION & VISION ========== -->


<!-- ========== VALUES ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">What We Stand For</span>
            <h2 class="sd-section-title">Our Core Values</h2>
            <p class="sd-section-subtitle">These are not just words on a wall. They are how we show up for every client, every project, every day.</p>
        </div>
        <div class="sd-values__grid sd-mt-6">
            <?php
            $values = array(
                array( 'icon' => '💡', 'title' => 'Innovation',    'desc' => 'We stay ahead of design trends and technology so our clients always get a modern, future-proof digital presence.' ),
                array( 'icon' => '🤝', 'title' => 'Integrity',     'desc' => 'We are honest about timelines, pricing, and what is realistic. No overpromising. No hidden fees. Ever.' ),
                array( 'icon' => '🚀', 'title' => 'Impact',        'desc' => 'We measure success by the results we create for our clients — not just how a site looks, but how it performs.' ),
                array( 'icon' => '⭐', 'title' => 'Excellence',    'desc' => 'We hold ourselves to the highest standard on every project, no matter the size of the client or the budget.' ),
                array( 'icon' => '🔗', 'title' => 'Partnership',   'desc' => 'We do not treat clients as transactions. We build long-term relationships and grow alongside the businesses we serve.' ),
                array( 'icon' => '⚡', 'title' => 'Speed',         'desc' => 'We respect your time. Fast communication, fast delivery, and fast results — without cutting corners on quality.' ),
            );
            foreach ( $values as $index => $value ) :
                $delay = 'sd-delay-' . min( $index + 1, 6 );
            ?>
            <div class="sd-value__card sd-animate <?php echo $delay; ?>">
                <div class="sd-value__icon"><?php echo $value['icon']; ?></div>
                <h3 class="sd-value__title"><?php echo esc_html( $value['title'] ); ?></h3>
                <p class="sd-value__desc"><?php echo esc_html( $value['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END VALUES ========== -->


<!-- ========== TEAM ========== -->
<section class="sd-section sd-section--cloud">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">Meet the Team</span>
            <h2 class="sd-section-title">The Creatives Behind Your Results</h2>
            <p class="sd-section-subtitle">A dedicated remote team of designers, developers, and strategists — passionate about helping your business grow.</p>
        </div>
        <div class="sd-grid-4 sd-mt-6">
            <?php
            $team = array(
                array(
                    'name'     => 'Samuel A.',
                    'role'     => 'Founder & Creative Director',
                    'bio'      => '10+ years helping brands grow online. Leads strategy, design direction, and client relationships.',
                    'initials' => 'SA',
                    'color'    => '#0D1B4B',
                    'linkedin' => '#',
                ),
                array(
                    'name'     => 'Jane D.',
                    'role'     => 'Lead Web Developer',
                    'bio'      => 'WordPress expert with 200+ sites built. Specializes in performance, security, and clean code.',
                    'initials' => 'JD',
                    'color'    => '#1A2F6E',
                    'linkedin' => '#',
                ),
                array(
                    'name'     => 'Michael K.',
                    'role'     => 'Brand Designer',
                    'bio'      => 'Logo and brand identity specialist. Creates visual systems that build trust and command premium pricing.',
                    'initials' => 'MK',
                    'color'    => '#F97316',
                    'linkedin' => '#',
                ),
                array(
                    'name'     => 'Lisa N.',
                    'role'     => 'Digital Marketing Lead',
                    'bio'      => 'SEO strategist and content expert. Gets clients found by the right people at the right time.',
                    'initials' => 'LN',
                    'color'    => '#64748B',
                    'linkedin' => '#',
                ),
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
                <a href="<?php echo esc_url( $member['linkedin'] ); ?>" class="sd-team-card__linkedin" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                    LinkedIn
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ========== END TEAM ========== -->


<!-- ========== WHY TRUST US ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-trust__inner">
            <div class="sd-animate sd-animate--left">
                <span class="sd-section-label">Why Clients Trust Us</span>
                <h2 class="sd-section-title">We Do Not Just Build Websites.<br>We Build Businesses.</h2>
                <p style="margin-bottom:var(--space-4)">
                    Hundreds of agencies can build you a website. Very few can build you a website that consistently attracts your ideal clients, converts visitors into leads, and represents your brand at the highest level.
                </p>
                <div class="sd-trust__list">
                    <?php
                    $trust_points = array(
                        'Every project starts with strategy — not just design.',
                        'We only take on projects we know we can deliver exceptionally.',
                        'We communicate proactively — you are never left wondering.',
                        'We design for conversion, not just aesthetics.',
                        'We treat your business like it is our own.',
                    );
                    foreach ( $trust_points as $point ) :
                    ?>
                    <div class="sd-trust__point">
                        <div class="sd-why__check">✓</div>
                        <p><?php echo esc_html( $point ); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-mt-4" style="margin-top:var(--space-4)">
                    Start a Project With Us
                </a>
            </div>
            <div class="sd-animate sd-animate--right">
                <div class="sd-trust__quote-card">
                    <div class="sd-trust__quote-stars">★★★★★</div>
                    <p class="sd-trust__quote-text">
                        "Samie Digital didn't just build us a website — they built us a revenue-generating machine. Our online inquiries increased by 65% within 90 days of launch."
                    </p>
                    <div class="sd-trust__quote-author">
                        <div class="sd-testi-card__avatar" style="background:#0D1B4B;width:48px;height:48px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;font-family:var(--font-heading)">JM</div>
                        <div>
                            <div style="font-weight:700;color:var(--color-charcoal);font-family:var(--font-heading)">James Mitchell</div>
                            <div style="font-size:var(--text-sm);color:var(--color-slate)">CEO, Mitchell & Co. — New York, US</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== END WHY TRUST US ========== -->


<!-- ========== ABOUT PAGE CTA ========== -->
<section class="sd-cta-section sd-section--navy">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge">
                <span class="sd-badge__dot"></span>
                Let's Work Together
            </span>
            <h2 class="sd-section-title sd-section-title--white" style="margin-top:var(--space-3)">
                Ready to Build Something<br>Remarkable Together?
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                Book a free 30-minute strategy call and let's talk about what's possible for your business.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="sd-btn sd-btn--primary sd-btn--lg">
                    Book a Free Call
                </a>
                <a href="<?php echo esc_url( home_url('/services') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== END ABOUT PAGE CTA ========== -->

<?php get_footer(); ?>