(function () {
    "use strict";

    if (typeof gsap === "undefined") {
        console.warn("[Garuda Prima] GSAP tidak termuat.");
        return;
    }

    var hasScrollTrigger = typeof ScrollTrigger !== "undefined";

    if (hasScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
    }

    if (typeof SplitText !== "undefined") {
        gsap.registerPlugin(SplitText);
    }

    var ease = "power3.out";

    // Hero title animation
    var heroTitle = document.getElementById("hero-title");

    if (heroTitle && typeof SplitText !== "undefined") {
        try {
            var heroSplit = new SplitText(heroTitle, {
                type: "chars,words,lines",
                linesClass: "hero-line"
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
            gsap.from(heroTitle, {
                y: 40,
                opacity: 0,
                duration: 1.2,
                ease: ease,
                delay: 0.2
            });
        }
    } else if (heroTitle) {
        gsap.from(heroTitle, {
            y: 40,
            opacity: 0,
            duration: 1.2,
            ease: ease,
            delay: 0.2
        });
    }

    // Hero image parallax
    var heroImg = document.getElementById("hero-img");

    if (heroImg && hasScrollTrigger) {
        gsap.fromTo(
            heroImg,
            { scale: 1.08, yPercent: -5 },
            {
                scale: 1.14,
                yPercent: 5,
                ease: "none",
                scrollTrigger: {
                    trigger: ".hero",
                    start: "top top",
                    end: "bottom top",
                    scrub: 1.4
                }
            }
        );
    }

    // Navigation state
    var nav = document.getElementById("nav");
    var urgency = document.getElementById("urgency");

    if (nav && hasScrollTrigger) {
        ScrollTrigger.create({
            start: 80,
            end: 99999,
            onUpdate: function (self) {
                var scrolled = self.scroll() > 80;
                nav.classList.toggle("is-scrolled", scrolled);

                if (urgency) {
                    urgency.classList.toggle("is-hidden", scrolled);
                }
            }
        });
    }

    // Reading progress
    var progressBar = document.getElementById("progress-bar");

    if (progressBar && hasScrollTrigger) {
        ScrollTrigger.create({
            start: 0,
            end: "max",
            onUpdate: function (self) {
                progressBar.style.transform =
                    "scaleX(" + self.progress + ")";
            }
        });
    }

    // Ticker animation
    var ticker = document.getElementById("ticker");

    if (ticker) {
        var tickerTween = gsap.to(ticker, {
            xPercent: -50,
            duration: 28,
            ease: "none",
            repeat: -1
        });

        if (hasScrollTrigger) {
            ScrollTrigger.create({
                trigger: ".ticker",
                start: "top bottom",
                end: "bottom top",
                onUpdate: function (self) {
                    var velocity = self.getVelocity() / 500;

                    gsap.to(ticker, {
                        skewX: Math.max(
                            -8,
                            Math.min(8, -velocity)
                        ),
                        duration: 0.5,
                        ease: "power3.out",
                        overwrite: "auto"
                    });

                    tickerTween.timeScale(
                        1 + Math.min(2, Math.abs(velocity) * 0.1)
                    );
                }
            });
        }
    }

    // About image parallax
    var aboutImg = document.querySelector(".about-visual img");

    if (aboutImg && hasScrollTrigger) {
        gsap.fromTo(
            aboutImg,
            { yPercent: -6, scale: 1.1 },
            {
                yPercent: 6,
                scale: 1.1,
                ease: "none",
                scrollTrigger: {
                    trigger: ".about-visual",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1
                }
            }
        );
    }

    // FAQ accordion
    document.querySelectorAll(".faq-q").forEach(function (question) {
        question.addEventListener("click", function () {
            var item = question.parentElement;
            var answer = item.querySelector(".faq-a");
            var isOpen = item.classList.contains("is-open");

            document.querySelectorAll(".faq-item").forEach(function (faq) {
                faq.classList.remove("is-open");

                var panel = faq.querySelector(".faq-a");

                if (panel) {
                    panel.style.maxHeight = "0px";
                }
            });

            if (!isOpen && answer) {
                item.classList.add("is-open");
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // CTA background parallax
    var ctaBgImg = document.querySelector(".cta-final-bg img");

    if (ctaBgImg && hasScrollTrigger) {
        gsap.fromTo(
            ctaBgImg,
            { yPercent: -10, scale: 1.15 },
            {
                yPercent: 10,
                scale: 1.15,
                ease: "none",
                scrollTrigger: {
                    trigger: ".cta-final",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1
                }
            }
        );
    }

    // Native smooth anchor navigation
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener("click", function (event) {
            var href = link.getAttribute("href");

            if (!href || href.length < 2) return;

            var target = document.querySelector(href);

            if (!target) return;

            event.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    });

    // Bottom navigation active state
    if (hasScrollTrigger) {
        var bottomNavItems =
            document.querySelectorAll(".bottom-nav-item");

        bottomNavItems.forEach(function (item) {
            var href = item.getAttribute("href");

            if (!href || href.length < 2) return;

            var target = document.querySelector(href);

            if (!target) return;

            ScrollTrigger.create({
                trigger: target,
                start: "top 55%",
                end: "bottom 45%",
                onToggle: function (self) {
                    if (!self.isActive) return;

                    bottomNavItems.forEach(function (navItem) {
                        navItem.classList.remove("is-active");
                    });

                    item.classList.add("is-active");
                }
            });
        });

        window.addEventListener("load", function () {
            ScrollTrigger.refresh();
        });
    }
})();