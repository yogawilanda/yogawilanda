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
    const storedTheme = localStorage.getItem(storageKey);

    if (storedTheme === 'dark' || storedTheme === 'light') {
        setTheme(storedTheme === 'dark');
        return;
    }

    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(prefersDark);
    localStorage.setItem(storageKey, prefersDark ? 'dark' : 'light');
};

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const nextIsDark = !root.classList.contains('dark');
        setTheme(nextIsDark);
        localStorage.setItem(storageKey, nextIsDark ? 'dark' : 'light');
    });
}

syncGuestTheme();
