import './terminal/index.js';

// 2. Guest Theme Management
const root = document.documentElement;
const storageKey = 'guest-theme';
const themeToggle = document.getElementById('guest-theme-toggle');

const setTheme = (isDark) => {
    root.classList.toggle('dark', isDark);
    root.setAttribute('data-theme', isDark ? 'dark' : 'light');

    if (!themeToggle) return;

    const icon = themeToggle.querySelector('[data-theme-icon]');
    const label = themeToggle.querySelector('[data-theme-label]');

    if (icon) icon.textContent = isDark ? '☾' : '☀';
    if (label) label.textContent = isDark ? 'Dark' : 'Light';

    themeToggle.setAttribute(
        'aria-label',
        isDark ? 'Switch to light mode' : 'Switch to dark mode'
    );
};

const syncGuestTheme = () => {
    const isAuthenticated = document.body.dataset.authenticated === 'true';
    const fluxAppearance = localStorage.getItem('flux.appearance');
    const storedTheme = localStorage.getItem(storageKey);

    if (isAuthenticated && (fluxAppearance === 'dark' || fluxAppearance === 'light')) {
        setTheme(fluxAppearance === 'dark');
        return;
    }

    if (storedTheme === 'dark' || storedTheme === 'light') {
        setTheme(storedTheme === 'dark');
        return;
    }

    setTheme(false);
    localStorage.setItem(storageKey, 'light');
};

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const isAuthenticated = document.body.dataset.authenticated === 'true';

        if (isAuthenticated) {
            const fluxAppearance = localStorage.getItem('flux.appearance');
            const nextIsDark = fluxAppearance !== 'dark';

            if (fluxAppearance === 'dark' || fluxAppearance === 'light') {
                localStorage.setItem('flux.appearance', nextIsDark ? 'dark' : 'light');
                window.Flux?.applyAppearance?.(nextIsDark ? 'dark' : 'light');
                return;
            }
        }

        const nextIsDark = !root.classList.contains('dark');
        setTheme(nextIsDark);
        localStorage.setItem(storageKey, nextIsDark ? 'dark' : 'light');
    });
}

syncGuestTheme();

// 3. Register Alpine Component (Safe for early/late initialization)
const registerAlpineComponents = () => {
    if (window.Alpine) {
        window.Alpine.data('modelCardsAnimation', () => ({
            async init() {
                const [{ gsap }, { ScrollTrigger }] = await Promise.all([
                    import('gsap'),
                    import('gsap/ScrollTrigger')
                ]);

                gsap.registerPlugin(ScrollTrigger);

                this.$nextTick(() => {
                    gsap.from(this.$refs.modelCards.children, {
                        scrollTrigger: {
                            trigger: this.$refs.modelCards,
                            start: 'top 85%',
                            once: true
                        },
                        opacity: 0,
                        y: 30,
                        duration: 0.6,
                        stagger: 0.15,
                        ease: 'power2.out',
                        clearProps: 'all'
                    });
                });
            }
        }));
    }
};

// Langsung daftarkan jika window.Alpine sudah siap, atau tunggu event livewire/alpine
if (window.Alpine) {
    registerAlpineComponents();
} else {
    document.addEventListener('livewire:init', registerAlpineComponents);
    document.addEventListener('alpine:init', registerAlpineComponents);
}
