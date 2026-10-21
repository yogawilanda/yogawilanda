import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const wrapper = document.querySelector('#vertical-wrapper');

if (wrapper) {
    const media = gsap.matchMedia();

    media.add('(min-width: 0px)', () => {
        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        const duration = reducedMotion ? 0.2 : 0.7;
        const distance = reducedMotion ? 0 : 16;
        const ease = 'power3.out';

        // Hero: staged entrance, with the heading leading the composition.
        const heroItems = gsap.utils.toArray('[data-hero]');

        if (heroItems.length) {
            gsap.from(heroItems, {
                autoAlpha: 0,
                y: distance,
                duration,
                stagger: reducedMotion ? 0.025 : 0.12,
                ease,
                delay: 0.08,
                clearProps: 'opacity,visibility,transform',
            });
        }

        // Individual content: quiet reveal, triggered by the actual scroll container.
        gsap.utils.toArray('[data-reveal]').forEach((element) => {
            gsap.from(element, {
                autoAlpha: 0,
                y: distance,
                duration: reducedMotion ? 0.2 : 0.65,
                ease,
                clearProps: 'opacity,visibility,transform',
                scrollTrigger: {
                    trigger: element,
                    scroller: wrapper,
                    start: 'top 90%',
                    once: true,
                },
            });
        });

        // Cards and grouped items: restrained scale + stagger creates depth
        // without making each item feel like it uses a separate preset.
        gsap.utils.toArray('[data-reveal-group]').forEach((group) => {
            const children = Array.from(group.children);

            if (!children.length) return;

            gsap.from(children, {
                autoAlpha: 0,
                y: reducedMotion ? 0 : 20,
                scale: reducedMotion ? 1 : 0.985,
                duration: reducedMotion ? 0.2 : 0.7,
                stagger: reducedMotion ? 0.025 : 0.09,
                ease,
                clearProps: 'opacity,visibility,transform',
                scrollTrigger: {
                    trigger: group,
                    scroller: wrapper,
                    start: 'top 88%',
                    once: true,
                },
            });
        });

        // Small labels, dividers and supporting details should stay understated.
        gsap.utils.toArray('[data-line]').forEach((element) => {
            gsap.from(element, {
                autoAlpha: 0,
                duration: reducedMotion ? 0.2 : 0.45,
                ease: 'power1.out',
                clearProps: 'opacity,visibility',
                scrollTrigger: {
                    trigger: element,
                    scroller: wrapper,
                    start: 'top 92%',
                    once: true,
                },
            });
        });

        requestAnimationFrame(() => ScrollTrigger.refresh());
    });
}
