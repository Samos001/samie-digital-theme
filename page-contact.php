<?php
/**
 * Samie Digital — page-contact.php
 * Template Name: Contact Page
 */
get_header();
?>

<!-- ========== PAGE HERO ========== -->
<section class="sd-page-hero sd-section--navy">
    <div class="sd-container">
        <div class="sd-page-hero__inner sd-animate">
            <span class="sd-section-label">Get In Touch</span>
            <h1 class="sd-page-hero__title">
                Let's Build Something<br>
                <span class="sd-text-orange">Great Together</span>
            </h1>
            <p class="sd-page-hero__subtitle">
                Whether you have a project in mind or just want to explore what's possible — we'd love to hear from you. We respond within 24 hours.
            </p>
            <div class="sd-breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
                <span>→</span>
                <span>Contact</span>
            </div>
        </div>
    </div>
</section>
<!-- ========== END PAGE HERO ========== -->


<!-- ========== CONTACT MAIN ========== -->
<section class="sd-section">
    <div class="sd-container">
        <div class="sd-contact__grid">

            <!-- Left — Contact Form -->
            <div class="sd-contact__form-wrap sd-animate sd-animate--left">
                <h2 class="sd-contact__form-title">Send Us a Message</h2>
                <p class="sd-contact__form-subtitle">Fill in the form below and we will get back to you within 24 hours on business days.</p>

                <form class="sd-contact-form" id="sd-contact-form" novalidate>
                    <?php wp_nonce_field( 'samie_nonce', 'nonce' ); ?>

                    <div class="sd-form-row">
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-name">Full Name <span class="sd-required">*</span></label>
                            <input type="text" id="contact-name" name="name" class="sd-input" placeholder="John Smith" required>
                        </div>
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-email">Email Address <span class="sd-required">*</span></label>
                            <input type="email" id="contact-email" name="email" class="sd-input" placeholder="john@company.com" required>
                        </div>
                    </div>

                    <div class="sd-form-row">
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="phone" class="sd-input" placeholder="+1 (555) 000-0000">
                        </div>
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-company">Company / Business Name</label>
                            <input type="text" id="contact-company" name="company" class="sd-input" placeholder="Your Company Ltd.">
                        </div>
                    </div>

                    <div class="sd-form-group">
                        <label class="sd-label" for="contact-service">Service You're Interested In <span class="sd-required">*</span></label>
                        <select id="contact-service" name="service" class="sd-select" required>
                            <option value="">Select a service...</option>
                            <option value="web-design">Web Design</option>
                            <option value="wordpress">WordPress Development</option>
                            <option value="graphic-design">Graphic Design</option>
                            <option value="branding">Branding & Logo Design</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="consulting">Digital Consulting</option>
                            <option value="multiple">Multiple Services</option>
                            <option value="not-sure">Not Sure Yet</option>
                        </select>
                    </div>

                    <div class="sd-form-group">
                        <label class="sd-label" for="contact-budget">Approximate Budget</label>
                        <select id="contact-budget" name="budget" class="sd-select">
                            <option value="">Select a budget range...</option>
                            <option value="under-1000">Under $1,000</option>
                            <option value="1000-3000">$1,000 – $3,000</option>
                            <option value="3000-6000">$3,000 – $6,000</option>
                            <option value="6000-10000">$6,000 – $10,000</option>
                            <option value="10000-plus">$10,000+</option>
                            <option value="not-sure">Not Sure Yet</option>
                        </select>
                    </div>

                    <div class="sd-form-group">
                        <label class="sd-label" for="contact-message">Tell Us About Your Project <span class="sd-required">*</span></label>
                        <textarea id="contact-message" name="message" class="sd-textarea" placeholder="Describe your project, goals, timeline, or anything else you'd like us to know..." required></textarea>
                    </div>

                    <div class="sd-form-group">
                        <label class="sd-label" for="contact-source">How Did You Find Us?</label>
                        <select id="contact-source" name="source" class="sd-select">
                            <option value="">Select an option...</option>
                            <option value="google">Google Search</option>
                            <option value="social">Social Media</option>
                            <option value="referral">Referral / Word of Mouth</option>
                            <option value="upwork">Upwork</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div id="sd-form-message" class="sd-form-feedback" style="display:none"></div>

                    <button type="submit" class="sd-btn sd-btn--primary sd-btn--lg sd-contact-submit" style="width:100%;justify-content:center">
                        <span class="sd-btn-text">Send Message</span>
                        <span class="sd-btn-loading" style="display:none">Sending...</span>
                    </button>

                    <p class="sd-form-note">🔒 Your information is secure and will never be shared with third parties.</p>
                </form>
            </div>

            <!-- Right — Info Cards -->
            <div class="sd-contact__info sd-animate sd-animate--right">

                <!-- Book a Call Card -->
                <div class="sd-contact-card sd-contact-card--featured">
                    <div class="sd-contact-card__icon">📅</div>
                    <h3 class="sd-contact-card__title">Book a Free Strategy Call</h3>
                    <p class="sd-contact-card__text">Skip the form and jump straight into a 30-minute call. We'll discuss your project, answer your questions, and outline next steps.</p>
                    <a href="https://calendly.com" target="_blank" rel="noopener" class="sd-btn sd-btn--primary" style="width:100%;justify-content:center;margin-top:var(--space-3)">
                        Book on Calendly →
                    </a>
                    <p class="sd-contact-card__note">Free · No commitment · 30 minutes</p>
                </div>

                <!-- Email Card -->
                <div class="sd-contact-card">
                    <div class="sd-contact-card__icon">✉️</div>
                    <h3 class="sd-contact-card__title">Email Us Directly</h3>
                    <a href="mailto:hello@samiedigital.com" class="sd-contact-card__link">hello@samiedigital.com</a>
                    <p class="sd-contact-card__text">We respond to all emails within 24 hours on business days.</p>
                </div>

                <!-- Location Card -->
                <div class="sd-contact-card">
                    <div class="sd-contact-card__icon">🌍</div>
                    <h3 class="sd-contact-card__title">Our Location</h3>
                    <p class="sd-contact-card__text">We are a fully remote agency serving clients worldwide — with deep expertise in the US, UK, and Canadian markets.</p>
                    <span class="sd-contact-card__badge">Remote / Worldwide</span>
                </div>

                <!-- Hours Card -->
                <div class="sd-contact-card">
                    <div class="sd-contact-card__icon">🕐</div>
                    <h3 class="sd-contact-card__title">Working Hours</h3>
                    <div class="sd-contact-card__hours">
                        <div class="sd-hours-row">
                            <span>Monday – Friday</span>
                            <span>9:00 AM – 6:00 PM EST</span>
                        </div>
                        <div class="sd-hours-row">
                            <span>Saturday</span>
                            <span>10:00 AM – 2:00 PM EST</span>
                        </div>
                        <div class="sd-hours-row">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ========== END CONTACT MAIN ========== -->


<!-- ========== CONTACT FAQ ========== -->
<section class="sd-section sd-section--cloud">
    <div class="sd-container">
        <div class="sd-text-center sd-animate">
            <span class="sd-section-label">FAQ</span>
            <h2 class="sd-section-title">Common Questions Before Getting Started</h2>
        </div>
        <div class="sd-faq sd-mt-6">
            <?php
            $faqs = array(
                array( 'q' => 'How quickly can you start on my project?',           'a' => 'We typically start new projects within 1–2 weeks of receiving your deposit and project brief. For urgent projects, reach out and we will do our best to accommodate your timeline.' ),
                array( 'q' => 'What information do I need to provide to get started?','a' => 'Just book a discovery call or send us a message. We will guide you through everything — including a project brief questionnaire that helps us understand your goals, audience, and vision.' ),
                array( 'q' => 'Do you offer payment plans?',                          'a' => 'Yes. We typically work with a 50% deposit to begin and 50% on project completion. For larger projects we can arrange milestone-based payment schedules.' ),
                array( 'q' => 'Can I see examples of your work first?',               'a' => 'Absolutely — visit our Portfolio page to see case studies and results from past clients. You can also book a call and we will walk you through relevant examples for your industry.' ),
                array( 'q' => 'Do you work with clients outside the US?',             'a' => 'Yes. We work with clients across the US, UK, Canada, Australia, Nigeria, and beyond. Our team is fully remote and experienced in cross-timezone collaboration.' ),
                array( 'q' => 'What happens after my website launches?',              'a' => 'We offer ongoing maintenance, support, and growth packages. We also do a full handover so you can manage your site independently if you prefer.' ),
            );
            foreach ( $faqs as $index => $faq ) :
            ?>
            <div class="sd-faq__item sd-animate sd-delay-<?php echo min($index+1,6); ?>">
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
<!-- ========== END CONTACT FAQ ========== -->


<!-- ========== CONTACT CTA ========== -->
<section class="sd-cta-section sd-section--navy">
    <div class="sd-container">
        <div class="sd-cta__inner sd-animate">
            <span class="sd-badge">
                <span class="sd-badge__dot"></span>
                Limited Spots Available
            </span>
            <h2 class="sd-section-title sd-section-title--white" style="margin-top:var(--space-3)">
                We Only Take On a Select Number<br>of Projects Each Month
            </h2>
            <p class="sd-section-subtitle sd-section-subtitle--white sd-mt-2">
                To ensure every client gets our full attention, we limit the projects we take on. Reach out today to check availability.
            </p>
            <div class="sd-cta__btns sd-mt-4">
                <a href="https://calendly.com" target="_blank" rel="noopener" class="sd-btn sd-btn--primary sd-btn--lg">
                    Check Availability
                </a>
                <a href="<?php echo esc_url( home_url('/portfolio') ); ?>" class="sd-btn sd-btn--secondary sd-btn--lg">
                    View Our Work First
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ========== END CONTACT CTA ========== -->

<?php get_footer(); ?>