// resources/js/pages/services.js
// Entry khusus /services: GSAP + ScrollTrigger ikut chunk ini saja,
// jadi halaman lain tidak menanggung bobotnya.
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import '../../css/pages/services.css';

gsap.registerPlugin(ScrollTrigger);

// Kunci utama: scroll container-nya <main id="vertical-wrapper">, bukan window
ScrollTrigger.defaults({ scroller: document.getElementById('vertical-wrapper') });

const mm = gsap.matchMedia();

mm.add('(prefers-reduced-motion: no-preference)', () => {
    const ease = 'power3.out';

    // 1) Hero: satu urutan masuk saat halaman dibuka
    gsap.fromTo(
        '[data-hero]',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.8, ease, stagger: 0.09, delay: 0.05, clearProps: 'transform' },
    );

    // 2) Heading section + kartu/langkah (anak langsung [data-reveal-group])
    const revealTargets = '[data-reveal], [data-reveal-group] > *';
    gsap.set(revealTargets, { opacity: 0, y: 28 });

    ScrollTrigger.batch(revealTargets, {
        start: 'top 88%',
        once: true,
        onEnter: (els) =>
            gsap.to(els, { opacity: 1, y: 0, duration: 0.7, ease, stagger: 0.12, overwrite: true, clearProps: 'transform' }),
    });

    // 3) Garis di atas langkah "cara kerja" tergambar kiri ke kanan
    gsap.set('[data-line]', { '--line': 0 });

    ScrollTrigger.batch('[data-line]', {
        start: 'top 90%',
        once: true,
        onEnter: (els) => gsap.to(els, { '--line': 1, duration: 0.9, ease, stagger: 0.12, delay: 0.15 }),
    });

    // Layout bisa bergeser setelah font/gambar selesai dimuat
    const refresh = () => ScrollTrigger.refresh();
    window.addEventListener('load', refresh);
    return () => window.removeEventListener('load', refresh);
});

// Reduced motion: jangan biarkan hero tersembunyi
mm.add('(prefers-reduced-motion: reduce)', () => {
    gsap.set('[data-hero]', { opacity: 1 });
});
