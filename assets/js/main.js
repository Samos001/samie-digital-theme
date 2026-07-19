/**
 * Samie Digital — main.js
 * Handles: scroll animations, counters,
 * sticky nav, mobile menu, FAQ accordion
 */

document.addEventListener('DOMContentLoaded', function () {

    // -------------------------------------------------------
    // 1. STICKY HEADER ON SCROLL
    // -------------------------------------------------------
    const header = document.getElementById('sd-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }


    // -------------------------------------------------------
    // 2. MOBILE MENU TOGGLE
    // -------------------------------------------------------
    const hamburger = document.getElementById('sd-hamburger');
    const mobileMenu = document.getElementById('sd-mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function () {
            const isOpen = hamburger.classList.contains('is-open');

            hamburger.classList.toggle('is-open');
            hamburger.setAttribute('aria-expanded', !isOpen);

            if (!isOpen) {
                mobileMenu.classList.add('is-open');
                mobileMenu.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.remove('is-open');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });

        // Close menu on link click
        mobileMenu.querySelectorAll('.sd-mobile-link, .sd-mobile-cta').forEach(function (link) {
            link.addEventListener('click', function () {
                hamburger.classList.remove('is-open');
                hamburger.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.remove('is-open');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            });
        });
    }


    // -------------------------------------------------------
    // 3. SCROLL ANIMATIONS (Intersection Observer)
    // -------------------------------------------------------
    const animateEls = document.querySelectorAll('.sd-animate, .sd-animate--left, .sd-animate--right');

    if (animateEls.length > 0) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        animateEls.forEach(function (el) {
            observer.observe(el);
        });
    }


    // -------------------------------------------------------
    // 4. COUNTER ANIMATION
    // -------------------------------------------------------
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'), 10);
        const duration = 1800;
        const start = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target);
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = target;
            }
        }
        requestAnimationFrame(update);
    }

    const counters = document.querySelectorAll('.sd-counter, .sd-stat-number[data-target]');

    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function (counter) {
            counterObserver.observe(counter);
        });
    }


    // -------------------------------------------------------
    // 5. FAQ ACCORDION
    // -------------------------------------------------------
    const faqItems = document.querySelectorAll('.sd-faq__item');

    faqItems.forEach(function (item) {
        const question = item.querySelector('.sd-faq__question');
        if (!question) return;

        question.addEventListener('click', function () {
            const isOpen = item.classList.contains('is-open');

            // Close all others
            faqItems.forEach(function (other) {
                other.classList.remove('is-open');
                const btn = other.querySelector('.sd-faq__question');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });

            // Toggle current
            if (!isOpen) {
                item.classList.add('is-open');
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });


    // -------------------------------------------------------
    // 6. SMOOTH SCROLL FOR ANCHOR LINKS
    // -------------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const headerHeight = document.getElementById('sd-header')
                    ? document.getElementById('sd-header').offsetHeight
                    : 0;
                const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;
                window.scrollTo({ top: top, behavior: 'smooth' });
            }
        });
    });


    // -------------------------------------------------------
    // 7. ACTIVE NAV LINK ON SCROLL
    // -------------------------------------------------------
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.sd-nav-link');

    if (sections.length > 0 && navLinks.length > 0) {
        window.addEventListener('scroll', function () {
            let current = '';
            sections.forEach(function (section) {
                const sectionTop = section.offsetTop - 120;
                if (window.scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(function (link) {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    }

});

// -------------------------------------------------------
// 8. PORTFOLIO FILTER
// -------------------------------------------------------
const filterBtns = document.querySelectorAll('.sd-port-filter');
const portItems  = document.querySelectorAll('.sd-port-item');

if (filterBtns.length > 0) {
    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            // Update active button
            filterBtns.forEach(function(b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');

            const filter = btn.getAttribute('data-filter');

            portItems.forEach(function(item) {
                if (filter === 'all') {
                    item.classList.remove('is-hidden');
                } else {
                    const itemFilter = item.getAttribute('data-filter');
                    if (itemFilter && itemFilter.includes(filter)) {
                        item.classList.remove('is-hidden');
                    } else {
                        item.classList.add('is-hidden');
                    }
                }
            });
        });
    });
}

// -------------------------------------------------------
// 9. CONTACT FORM AJAX SUBMISSION
// -------------------------------------------------------
const contactForm = document.getElementById('sd-contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const feedback  = document.getElementById('sd-form-message');
        const btnText   = contactForm.querySelector('.sd-btn-text');
        const btnLoad   = contactForm.querySelector('.sd-btn-loading');
        const submitBtn = contactForm.querySelector('.sd-contact-submit');

        // Show loading state
        btnText.style.display  = 'none';
        btnLoad.style.display  = 'inline';
        submitBtn.disabled     = true;
        feedback.style.display = 'none';
        feedback.className     = 'sd-form-feedback';

        const formData = new FormData();
        formData.append('action',  'samie_contact');
        formData.append('nonce',   contactForm.querySelector('[name="nonce"]').value);
        formData.append('name',    contactForm.querySelector('[name="name"]').value);
        formData.append('email',   contactForm.querySelector('[name="email"]').value);
        formData.append('phone',   contactForm.querySelector('[name="phone"]').value || '');
        formData.append('company', contactForm.querySelector('[name="company"]').value || '');
        formData.append('service', contactForm.querySelector('[name="service"]').value);
        formData.append('budget',  contactForm.querySelector('[name="budget"]').value || '');
        formData.append('message', contactForm.querySelector('[name="message"]').value);
        formData.append('source',  contactForm.querySelector('[name="source"]').value || '');

        fetch(samieData.ajaxUrl, {
            method: 'POST',
            body: formData,
        })
        .then(function(response) { return response.json(); })
        .then(function(data) {
            feedback.style.display = 'block';
            if (data.success) {
                feedback.classList.add('success');
                feedback.textContent = data.data.message;
                contactForm.reset();
            } else {
                feedback.classList.add('error');
                feedback.textContent = data.data.message;
            }
        })
        .catch(function() {
            feedback.style.display = 'block';
            feedback.classList.add('error');
            feedback.textContent = 'Something went wrong. Please email us directly at hello@samiedigital.com';
        })
        .finally(function() {
            btnText.style.display = 'inline';
            btnLoad.style.display = 'none';
            submitBtn.disabled    = false;
        });
    });
}