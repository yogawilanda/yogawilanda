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

    // Efek Micro-Glitch Singkat untuk Ambient Loop
    glitchOnce(speed = 45) {
        const text = this.el.dataset.original;
        if (!text) return;

        // Acak 1-3 karakter saja secara acak biar gak lebay
        const charArray = text.split('');
        const glitchCount = Math.floor(Math.random() * 3) + 1;

        for (let i = 0; i < glitchCount; i++) {
            const randomIndex = Math.floor(Math.random() * charArray.length);
            if (charArray[randomIndex] !== ' ') {
                charArray[randomIndex] = `<span class="text-emerald-400 font-mono">${this.randomChar()}</span>`;
            }
        }

        this.el.innerHTML = charArray.join('');

        // Kembalikan ke teks asli setelah 120ms
        setTimeout(() => {
            this.el.innerHTML = text;
        }, 120);
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

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            const el = entry.target;

            if (entry.isIntersecting) {
                // Stop glitch loop lama jika ada saat scroll masuk kembali
                if (el.glitchInterval) {
                    clearInterval(el.glitchInterval);
                    el.glitchInterval = null;
                }

                const fx = new TextScramble(el);
                const originalText = el.dataset.original;
                const delay = el.dataset.delay ? parseInt(el.dataset.delay) : 0;
                const speed = el.dataset.speed ? parseInt(el.dataset.speed) : 25;

                // Reset teks jadi kosong sebentar sebelum replay
                el.innerText = '';

                el.scrambleTimeout = setTimeout(() => {
                    fx.setText(originalText, speed).then(() => {
                        // Khusus elemen yang punya data-glitch-loop="true", jalankan loop glitch interval
                        if (el.dataset.glitchLoop === 'true') {
                            el.glitchInterval = setInterval(() => {
                                // 40% chance untuk trigger glitch per 2.5 detik biar terkesan acak alami
                                if (Math.random() < 0.6) {
                                    fx.glitchOnce();
                                }
                            }, 2500);
                        }
                    });
                }, delay);

            } else {
                // Saat elemen keluar viewport, bersihkan timer & reset state biar bisa replay pas masuk lagi
                if (el.scrambleTimeout) clearTimeout(el.scrambleTimeout);
                if (el.glitchInterval) {
                    clearInterval(el.glitchInterval);
                    el.glitchInterval = null;
                }
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
