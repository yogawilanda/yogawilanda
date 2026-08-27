import './text-scramble';
import './horizontal-scroll';
import './cmd';

const root = document.documentElement;
const storageKey = 'guest-theme';
const themeToggle = document.getElementById('guest-theme-toggle');

const setTheme = (isDark) => {
    root.classList.toggle('dark', isDark);
    root.setAttribute('data-theme', isDark ? 'dark' : 'light');

    if (!themeToggle) {
        return;
    }

    const icon = themeToggle.querySelector('[data-theme-icon]');
    const label = themeToggle.querySelector('[data-theme-label]');

    if (icon) {
        icon.textContent = isDark ? '☾' : '☀';
    }

    if (label) {
        label.textContent = isDark ? 'Dark' : 'Light';
    }

    themeToggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
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
            const nextIsDark = !(fluxAppearance === 'dark');

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
