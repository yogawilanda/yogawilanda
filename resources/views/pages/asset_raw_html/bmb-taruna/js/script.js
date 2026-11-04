
        (function () {
            'use strict';

            if (typeof gsap === 'undefined') {
                console.warn('[Garuda Prima] animasi tidak termuat, animasi dilewati.');
                return;
            }
            if (typeof ScrollTrigger !== 'undefined' && typeof ScrollSmoother !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
            }
            if (typeof SplitText !== 'undefined') gsap.registerPlugin(SplitText);

            var ease = 'power3.out';

            var smoother = null;
            try {
                if (typeof ScrollSmoother !== 'undefined') {
                    smoother = ScrollSmoother.create({
                        wrapper: '#smooth-wrapper',
                        content: '#smooth-content',
                        smooth: 1.1,
                        smoothTouch: 0.08,
                        effects: false,
                        normalizeScroll: false
                    });
                }
            } catch (e) {
                console.warn('[Garuda Prima] ScrollSmoother gagal init:', e);
                smoother = null;
            }

            var heroTitle = document.getElementById('hero-title');
            if (heroTitle && typeof SplitText !== 'undefined') {
                try {
                    var heroSplit = new SplitText(heroTitle, {
                        type: 'chars,words,lines',
                        linesClass: 'hero-line'
                    });
                    gsap.from(heroSplit.chars, {
                        y: 90,
                        opacity: 0,
                        rotate: 3,
                        duration: 0.9,
                        stagger: 0.015,
                        ease: ease,
                        delay: 0.2
                    });
                } catch (e) {
                    gsap.from(heroTitle, { y: 40, opacity: 0, duration: 1.2, ease: ease, delay: 0.2 });
                }
            } else if (heroTitle) {
                gsap.from(heroTitle, { y: 40, opacity: 0, duration: 1.2, ease: ease, delay: 0.2 });
            }

            var heroImg = document.getElementById('hero-img');
            if (heroImg) {
                gsap.fromTo(heroImg,
                    { scale: 1.06, yPercent: -2 },
                    {
                        scale: 1.06,
                        yPercent: 2,
                        ease: 'none',
                        scrollTrigger: {
                            trigger: '.hero',
                            start: 'top top',
                            end: 'bottom top',
                            scrub: 1
                        }
                    }
                );
            }

            var nav = document.getElementById('nav');
            var urgency = document.getElementById('urgency');
            if (nav) {
                ScrollTrigger.create({
                    start: 80,
                    end: 99999,
                    onUpdate: function (self) {
                        var scrolled = self.scroll() > 80;
                        nav.classList.toggle('is-scrolled', scrolled);
                        if (urgency) urgency.classList.toggle('is-hidden', scrolled);
                    }
                });
            }

            var progressBar = document.getElementById('progress-bar');
            if (progressBar) {
                ScrollTrigger.create({
                    start: 0,
                    end: 'max',
                    onUpdate: function (self) {
                        progressBar.style.transform = 'scaleX(' + self.progress + ')';
                    }
                });
            }

            var ticker = document.getElementById('ticker');
            if (ticker) {
                var tickerTween = gsap.to(ticker, {
                    xPercent: -50,
                    duration: 28,
                    ease: 'none',
                    repeat: -1
                });
                ScrollTrigger.create({
                    trigger: '.ticker',
                    start: 'top bottom',
                    end: 'bottom top',
                    onUpdate: function (self) {
                        var v = self.getVelocity() / 500;
                        gsap.to(ticker, {
                            skewX: Math.max(-8, Math.min(8, -v)),
                            duration: 0.5,
                            ease: 'power3.out',
                            overwrite: 'auto'
                        });
                        tickerTween.timeScale(1 + Math.min(2, Math.abs(v) * 0.1));
                    }
                });
            }

            document.querySelectorAll('.section-label').forEach(function (el) {
                gsap.from(el, {
                    opacity: 0,
                    x: -20,
                    duration: 1,
                    ease: ease,
                    scrollTrigger: { trigger: el, start: 'top 88%' }
                });
            });

            document.querySelectorAll('.section-title').forEach(function (el) {
                gsap.from(el, {
                    y: 50,
                    opacity: 0,
                    duration: 1.2,
                    ease: ease,
                    scrollTrigger: { trigger: el, start: 'top 85%' }
                });
            });

            gsap.utils.toArray('.feature-grid .feature').forEach(function (card, i) {
                gsap.from(card, {
                    y: 40,
                    opacity: 0,
                    duration: 0.9,
                    delay: i * 0.05,
                    ease: ease,
                    scrollTrigger: { trigger: card, start: 'top 88%' }
                });
            });

            gsap.utils.toArray('.roadmap-item').forEach(function (item, i) {
                gsap.from(item, {
                    y: 40,
                    opacity: 0,
                    duration: 0.9,
                    delay: i * 0.08,
                    ease: ease,
                    scrollTrigger: { trigger: item, start: 'top 88%' }
                });
            });

            gsap.utils.toArray('.service-card').forEach(function (card, i) {
                gsap.from(card, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    delay: i * 0.1,
                    ease: ease,
                    scrollTrigger: { trigger: card, start: 'top 85%' }
                });
            });

            gsap.utils.toArray('.price-card').forEach(function (card, i) {
                gsap.from(card, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    delay: i * 0.1,
                    ease: ease,
                    scrollTrigger: { trigger: card, start: 'top 85%' }
                });
            });

            var aboutImg = document.querySelector('.about-visual img');
            if (aboutImg) {
                gsap.fromTo(aboutImg,
                    { yPercent: -6, scale: 1.1 },
                    {
                        yPercent: 6,
                        scale: 1.1,
                        ease: 'none',
                        scrollTrigger: {
                            trigger: '.about-visual',
                            start: 'top bottom',
                            end: 'bottom top',
                            scrub: 1
                        }
                    }
                );
            }

            var testiMain = document.querySelector('.testi-main');
            if (testiMain) {
                gsap.from(testiMain, {
                    x: -30,
                    opacity: 0,
                    duration: 1.1,
                    ease: ease,
                    scrollTrigger: { trigger: testiMain, start: 'top 85%' }
                });
            }
            gsap.utils.toArray('.testi-mini').forEach(function (mini, i) {
                gsap.from(mini, {
                    x: 30,
                    opacity: 0,
                    duration: 0.9,
                    delay: i * 0.1,
                    ease: ease,
                    scrollTrigger: { trigger: mini, start: 'top 88%' }
                });
            });

            document.querySelectorAll('.faq-q').forEach(function (q) {
                q.addEventListener('click', function () {
                    var item = q.parentElement;
                    var answer = item.querySelector('.faq-a');
                    var isOpen = item.classList.contains('is-open');

                    document.querySelectorAll('.faq-item').forEach(function (i) {
                        i.classList.remove('is-open');
                        var a = i.querySelector('.faq-a');
                        if (a) a.style.maxHeight = '0px';
                    });

                    if (!isOpen) {
                        item.classList.add('is-open');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            });

            gsap.utils.toArray('.teacher-card').forEach(function (card, i) {
                gsap.from(card, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    delay: i * 0.1,
                    ease: ease,
                    scrollTrigger: { trigger: card, start: 'top 88%' }
                });
            });

            var ctaInner = document.querySelector('.cta-final-inner');
            if (ctaInner) {
                gsap.utils.toArray('.cta-final-inner > *').forEach(function (el, i) {
                    gsap.from(el, {
                        y: 40,
                        opacity: 0,
                        duration: 1,
                        delay: i * 0.1,
                        ease: ease,
                        scrollTrigger: { trigger: '.cta-final', start: 'top 78%' }
                    });
                });
            }

            var ctaBgImg = document.querySelector('.cta-final-bg img');
            if (ctaBgImg) {
                gsap.fromTo(ctaBgImg,
                    { yPercent: -10, scale: 1.15 },
                    {
                        yPercent: 10,
                        scale: 1.15,
                        ease: 'none',
                        scrollTrigger: {
                            trigger: '.cta-final',
                            start: 'top bottom',
                            end: 'bottom top',
                            scrub: 1
                        }
                    }
                );
            }

            document.querySelectorAll('a[href^="#"]').forEach(function (a) {
                a.addEventListener('click', function (e) {
                    var href = a.getAttribute('href');
                    if (!href || href.length < 2) return;
                    var target = document.querySelector(href);
                    if (!target) return;
                    e.preventDefault();
                    if (smoother) {
                        smoother.scrollTo(target, true, 'top top');
                    } else {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

            // Bottom nav active state
            if (typeof ScrollTrigger !== 'undefined') {
                var bottomNavItems = document.querySelectorAll('.bottom-nav-item');
                if (bottomNavItems.length) {
                    bottomNavItems.forEach(function (item) {
                        var href = item.getAttribute('href');
                        if (!href || href.length < 2) return;
                        var target = document.querySelector(href);
                        if (!target) return;
                        ScrollTrigger.create({
                            trigger: target,
                            start: 'top 55%',
                            end: 'bottom 45%',
                            onToggle: function (self) {
                                if (self.isActive) {
                                    bottomNavItems.forEach(function (i) {
                                        i.classList.remove('is-active');
                                    });
                                    item.classList.add('is-active');
                                }
                            }
                        });
                    });
                }
            }

            window.addEventListener('load', function () {
                setTimeout(function () { ScrollTrigger.refresh(); }, 300);
            });

        })();
    