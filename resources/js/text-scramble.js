export class TextScramble {
    constructor(el) {
        this.el = el;
        // this.chars = '0123456789ABCDEF_//<>{}[]$#';
        // Versi Original (Hex / Matrix Code)
        // this.chars = '0123456789ABCDEF_//<>{}[]$#';

        // Versi Kanji (Cyberpunk / Ghost in the Shell Vibes)
        // this.chars = '零一二三四五六七八九十百千万億日月火水木金土日月星天宇宙未来電算機術';

        // this.chars = 'ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜﾝ0123456789';

        // Versi Aksara Jawa (Majapahit / Futuristic Javanese Aesthetic)
        // this.chars = 'ꦄꦅꦆꦇꦈꦉꦊꦋꦌꦍꦎꦏꦐꦑꦒꦓꦔꦕꦖꦗꦘꦙꦚꦛꦜꦝꦞꦟꦠꦡꦢꦣꦤꦥꦦꦧꦨꦩꦪꦫꦭꦮꦯꦰꦱꦲ';
        // this.chars = 'БГДЖИЛПФЦЧШЩ░▒▓█ｱｲｳｴｵｶｷｸｹｺ│┃┼═║ⅠⅡⅢⅣⅤⅥⅦⅧⅨⅩⅪⅫ';
        // this.chars = '😀😃😄😁😆😅😂🤣🥳😎';

        this.chars = '░▒▓█│┃┼═║╒╗╚╝▲▼◄►░▒▓█▀▄▌▐ꦄꦅꦆꦇꦈꦉꦊꦋꦌꦍꦎꦏꦐꦑꦒꦓꦔꦕꦖꦗꦘꦙꦚꦛꦜꦝꦞꦟꦠꦡꦢꦣꦤꦥꦦꦧꦨꦩꦪꦫꦭꦮꦯꦰꦱꦲｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜﾝБГДЖИЛПФЦЧШЩ░▒▓█ｱｲｳｴｵｶｷｸｹｺ│┃┼═║';


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

    // Burst Glitch: 1 Trigger = 1-3x Rapid Flicker
    glitchBurst(onComplete) {
        const text = this.el.dataset.original;
        if (!text) return;

        // Tentukan acak berapa kali kedip dalam 1 burst (1 sampai 3 kali)
        const totalFlickers = Math.floor(Math.random() * 3) + 1;
        let currentFlicker = 0;

        const renderGlitchFrame = () => {
            const charArray = text.split('');
            const glitchCount = Math.floor(Math.random() * 3) + 1; // 1-3 karakter diacak per frame

            for (let i = 0; i < glitchCount; i++) {
                const randomIndex = Math.floor(Math.random() * charArray.length);
                if (charArray[randomIndex] !== ' ') {
                    charArray[randomIndex] = `<span class="text-emerald-400 font-mono">${this.randomChar()}</span>`;
                }
            }

            this.el.classList.add('cyber-glitch-active');
            this.el.innerHTML = charArray.join('');

            // Durasi 1 frame glitch (sangat cepat: 40ms - 80ms)
            const frameDuration = Math.floor(Math.random() * 40) + 40;

            setTimeout(() => {
                // Kembalikan ke teks normal sebentar
                this.el.innerHTML = text;
                this.el.classList.remove('cyber-glitch-active');

                currentFlicker++;
                if (currentFlicker < totalFlickers) {
                    // Jeda antar flicker dalam 1 burst (30ms - 70ms)
                    setTimeout(renderGlitchFrame, Math.floor(Math.random() * 40) + 30);
                } else if (onComplete) {
                    onComplete();
                }
            }, frameDuration);
        };

        renderGlitchFrame();
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

    // Helper untuk loop burst glitch dengan interval acak
    const startOrganicGlitch = (el, fx) => {
        const scheduleNextGlitch = () => {
            // Interval jeda antar burst glitch (800ms sampai 2.5s)
            const randomDelay = Math.floor(Math.random() * 1700) + 800;

            el.glitchTimeout = setTimeout(() => {
                fx.glitchBurst(() => {
                    scheduleNextGlitch(); // Panggil burst berikutnya setelah burst ini selesai
                });
            }, randomDelay);
        };
        scheduleNextGlitch();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            const el = entry.target;

            if (entry.isIntersecting) {
                if (el.glitchTimeout) clearTimeout(el.glitchTimeout);

                const fx = new TextScramble(el);
                const originalText = el.dataset.original;
                const delay = el.dataset.delay ? parseInt(el.dataset.delay) : 0;
                const speed = el.dataset.speed ? parseInt(el.dataset.speed) : 25;

                el.innerText = '';

                el.scrambleTimeout = setTimeout(() => {
                    fx.setText(originalText, speed).then(() => {
                        if (el.dataset.glitchLoop === 'true') {
                            startOrganicGlitch(el, fx);
                        }
                    });
                }, delay);

            } else {
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
