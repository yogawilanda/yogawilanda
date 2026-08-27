export class TextScramble {
    constructor(el) {
        this.el = el;
        this.chars = '0123456789ABCDEF_//<>{}[]$#';
        this.update = this.update.bind(this);
    }

    setText(newText, speed = 25) {
        const oldText = this.el.innerText;
        const length = Math.max(oldText.length, newText.length);
        const promise = new Promise((resolve) => this.resolve = resolve);
        this.queue = [];

        for (let i = 0; i < length; i++) {
            const from = oldText[i] || '';
            const to = newText[i] || '';
            const start = Math.floor(Math.random() * 15);
            const end = start + Math.floor(Math.random() * 15);
            this.queue.push({ from, to, start, end, char: '' });
        }

        cancelAnimationFrame(this.frameRequest);
        clearTimeout(this.speedTimeout);
        this.frame = 0;
        this.speed = speed;
        this.update();
        return promise;
    }

    update() {
        let output = '';
        let complete = 0;

        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i];
            if (this.frame >= end) {
                complete++;
                output += to;
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar();
                    this.queue[i].char = char;
                }
                output += `<span class="text-emerald-400 font-mono opacity-90">${char}</span>`;
            } else {
                output += from;
            }
        }

        this.el.innerHTML = output;

        if (complete === this.queue.length) {
            this.resolve();
        } else {
            this.speedTimeout = setTimeout(() => {
                this.frameRequest = requestAnimationFrame(this.update);
                this.frame++;
            }, 1000 / this.speed);
        }
    }

    // Organic Glitch + CSS Effect Trigger
    glitchOnce() {
        const text = this.el.dataset.original;
        if (!text) return;

        const charArray = text.split('');
        const glitchCount = Math.floor(Math.random() * 2) + 1; // 1-2 karakter aja

        for (let i = 0; i < glitchCount; i++) {
            const randomIndex = Math.floor(Math.random() * charArray.length);
            if (charArray[randomIndex] !== ' ') {
                charArray[randomIndex] = `<span class="text-emerald-400 font-mono">${this.randomChar()}</span>`;
            }
        }

        // Tambah class untuk trigger visual distortion (CSS)
        this.el.classList.add('cyber-glitch-active');
        this.el.innerHTML = charArray.join('');

        setTimeout(() => {
            this.el.innerHTML = text;
            this.el.classList.remove('cyber-glitch-active');
        }, 100);
    }

    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }
}

export function initScramble() {
    const targets = document.querySelectorAll('[data-scramble]');

    targets.forEach((el) => {
        if (!el.dataset.original) {
            el.dataset.original = el.innerText.trim();
        }
    });

    // Helper untuk loop glitch dengan interval acak (Organic/Erratic)
    const startOrganicGlitch = (el, fx) => {
        const scheduleNextGlitch = () => {
            // Random delay antara 1.5 detik sampai 4.5 detik
            const randomDelay = Math.floor(Math.random() * 3000) + 1500;

            el.glitchTimeout = setTimeout(() => {
                fx.glitchOnce();
                scheduleNextGlitch(); // Rekursif
            }, randomDelay);
        };
        scheduleNextGlitch();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            const el = entry.target;

            if (entry.isIntersecting) {
                // Bersihkan glitch loop lama kalau ada
                if (el.glitchTimeout) clearTimeout(el.glitchTimeout);

                const fx = new TextScramble(el);
                const originalText = el.dataset.original;
                const delay = el.dataset.delay ? parseInt(el.dataset.delay) : 0;
                const speed = el.dataset.speed ? parseInt(el.dataset.speed) : 25;

                el.innerText = '';

                el.scrambleTimeout = setTimeout(() => {
                    fx.setText(originalText, speed).then(() => {
                        // Jalankan organic glitch jika ada atribut data-glitch-loop
                        if (el.dataset.glitchLoop === 'true') {
                            startOrganicGlitch(el, fx);
                        }
                    });
                }, delay);

            } else {
                // Cleanup saat elemen keluar layar
                if (el.scrambleTimeout) clearTimeout(el.scrambleTimeout);
                if (el.glitchTimeout) clearTimeout(el.glitchTimeout);
            }
        });
    }, { threshold: 0.3 });

    targets.forEach((el) => observer.observe(el));
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScramble);
} else {
    initScramble();
}
