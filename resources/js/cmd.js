export function initTerminal() {
    // Window Elements
    const windowEl = document.getElementById('terminal-window');
    const bodyEl = document.getElementById('terminal-body');
    const btnMinimize = document.getElementById('btn-minimize');
    const btnMaximize = document.getElementById('btn-maximize');
    const btnClose = document.getElementById('btn-close');
    const btnRestoreFloating = document.getElementById('btn-restore-floating');

    // CLI Interactive Elements
    const cliInput = document.getElementById('cli-input');
    const cliForm = document.getElementById('terminal-form');
    const logsContainer = document.getElementById('terminal-logs');

    // Guard Clause: Hentikan eksekusi jika komponen terminal tidak ada di halaman aktif
    if (!windowEl || !cliInput) return;

    let isMaximized = false;

    // --- 1. WINDOW CONTROLS ---
    btnMinimize?.addEventListener('click', (e) => {
        e.stopPropagation();
        bodyEl?.classList.toggle('hidden');
    });

    btnMaximize?.addEventListener('click', (e) => {
        e.stopPropagation();
        windowEl.classList.toggle('max-w-5xl', !isMaximized);
        windowEl.classList.toggle('max-w-2xl', isMaximized);
        isMaximized = !isMaximized;
    });

    btnClose?.addEventListener('click', (e) => {
        e.stopPropagation();
        windowEl.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        setTimeout(() => {
            windowEl.classList.add('hidden');
            btnRestoreFloating?.classList.remove('hidden');
        }, 300);
    });

    btnRestoreFloating?.addEventListener('click', () => {
        btnRestoreFloating.classList.add('hidden');
        windowEl.classList.remove('hidden');
        setTimeout(() => {
            windowEl.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
            bodyEl?.classList.remove('hidden');
        }, 10);
    });

    // --- 2. CLI ENGINE & COMMANDS ---
    const COMMANDS = {
        'help': 'Menampilkan daftar perintah CLI yang tersedia.',
        'whoami': 'Menampilkan profil ringkas.',
        'whoami -v': 'Menampilkan detail peran dan lokasi.',
        'whoami -vv': 'Menampilkan spesifikasi teknis & tech stack komplit.',
        'clear': 'Membersihkan layar terminal.',
        'skills': 'Daftar keahlian utama.',
        'contact': 'Informasi kontak & tautan sosial.'
    };

    function getLevenshteinDistance(a, b) {
        const matrix = Array.from({ length: a.length + 1 }, () => Array(b.length + 1).fill(0));
        for (let i = 0; i <= a.length; i++) matrix[i][0] = i;
        for (let j = 0; j <= b.length; j++) matrix[0][j] = j;

        for (let i = 1; i <= a.length; i++) {
            for (let j = 1; j <= b.length; j++) {
                const cost = a[i - 1] === b[j - 1] ? 0 : 1;
                matrix[i][j] = Math.min(
                    matrix[i - 1][j] + 1,
                    matrix[i][j - 1] + 1,
                    matrix[i - 1][j - 1] + cost
                );
            }
        }
        return matrix[a.length][b.length];
    }

    function findClosestCommand(input) {
        let closest = null;
        let minDistance = Infinity;
        Object.keys(COMMANDS).forEach(cmd => {
            const dist = getLevenshteinDistance(input, cmd);
            if (dist < minDistance) {
                minDistance = dist;
                closest = cmd;
            }
        });
        return minDistance <= 3 ? closest : null;
    }

    // Auto-complete TAB
    cliInput.addEventListener('keydown', (e) => {
        if (e.key === 'Tab') {
            e.preventDefault();
            const val = cliInput.value.trim().toLowerCase();
            if (!val) return;

            const matches = Object.keys(COMMANDS).filter(cmd => cmd.startsWith(val));
            if (matches.length === 1) {
                cliInput.value = matches[0];
            } else if (matches.length > 1) {
                appendLog(val, `<p class="text-zinc-500">Suggested: ${matches.join(', ')}</p>`);
            }
        }
    });

    // Form Submit Parser
    cliForm?.addEventListener('submit', (e) => {
        e.preventDefault();
        const rawVal = cliInput.value;
        const cmd = rawVal.trim().toLowerCase();
        cliInput.value = '';

        if (!cmd) return;
        if (cmd === 'clear') {
            logsContainer.innerHTML = '';
            return;
        }

        let responseHTML = '';

        switch (cmd) {
            case 'whoami':
                responseHTML = `<p class="text-zinc-300">Yoga Wilanda — Berbasis di Surabaya, Indonesia. Berfokus pada pengembangan sistem web & mobile skala tinggi, arsitektur database multi-tenant, dan optimalisasi aplikasi custom tanpa rigid template.</p>`;
                break;
            case 'whoami -v':
                responseHTML = `
                    <div class="space-y-1 text-zinc-300">
                        <p><span class="text-zinc-500">[NAME]</span> Yoga Wilanda</p>
                        <p><span class="text-zinc-500">[ROLE]</span> Software Engineer / Full-Stack Developer</p>
                        <p><span class="text-zinc-500">[BASE]</span> Surabaya, Indonesia (Telkom University)</p>
                    </div>`;
                break;
            case 'whoami -vv':
                responseHTML = `
                    <div class="pl-3 border-l-2 border-emerald-500/60 space-y-1.5 text-zinc-300 my-1">
                        <p><span class="text-zinc-500">[USER]</span> Yoga Wilanda (ID: 1000)</p>
                        <p><span class="text-zinc-500">[ROLE]</span> Software Engineer & Full-Stack Developer</p>
                        <p><span class="text-zinc-500">[LOC ]</span> Surabaya, ID (Telkom University)</p>
                        <p><span class="text-zinc-500">[STACK]</span> Laravel, Flutter, Vue/React, TailwindCSS, MySQL/PostgreSQL</p>
                        <p><span class="text-zinc-500">[SPEC ]</span> Multi-tenant Architecture, WebRTC/Realtime Systems, API Design</p>
                        <p><span class="text-zinc-500">[STATUS]</span> <span class="text-emerald-400 font-bold">AVAILABLE_FOR_WORK</span></p>
                    </div>`;
                break;
            case 'help':
                responseHTML = `
                    <div class="space-y-1">
                        <p class="text-zinc-400 mb-1">Daftar perintah CLI yang tersedia:</p>
                        ${Object.entries(COMMANDS).map(([k, v]) => `
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-1">
                                <span class="text-emerald-400 font-bold">${k}</span>
                                <span class="text-zinc-400 md:col-span-3">${v}</span>
                            </div>
                        `).join('')}
                    </div>`;
                break;
            case 'skills':
                responseHTML = `<p class="text-zinc-300">Backend (Laravel, Node.js), Frontend (Tailwind, Vue/React), Mobile (Flutter), Database (PostgreSQL, MySQL, Redis).</p>`;
                break;
            case 'contact':
                responseHTML = `<p class="text-zinc-300">Email: contact@yogawilanda.com • GitHub: @yogawilanda</p>`;
                break;
            default:
                const suggestion = findClosestCommand(cmd);
                responseHTML = `
                    <div class="text-rose-400">
                        <p>zsh: command not found: ${escapeHTML(rawVal)}</p>
                        ${suggestion ? `<p class="text-amber-400 mt-1">Did you mean <span class="underline font-bold text-emerald-400 cursor-pointer cmd-suggestion-link" data-cmd="${suggestion}">'${suggestion}'</span>?</p>` : `<p class="text-zinc-500 mt-1">Ketik <span class="text-emerald-400 font-bold">'help'</span> untuk daftar perintah.</p>`}
                    </div>`;
                break;
        }

        appendLog(rawVal, responseHTML);
    });

    function appendLog(inputCmd, outputHTML) {
        const logItem = document.createElement('div');
        logItem.className = 'space-y-1';
        logItem.innerHTML = `
            <p class="text-white font-bold flex items-center gap-1.5">
                <span class="text-emerald-500">$</span><span>${escapeHTML(inputCmd)}</span>
            </p>
            <div class="text-zinc-300 pl-3">${outputHTML}</div>
        `;
        logsContainer.appendChild(logItem);
        if (bodyEl) bodyEl.scrollTop = bodyEl.scrollHeight;

        // Event listener untuk klik teks saran typo (Did you mean)
        logItem.querySelector('.cmd-suggestion-link')?.addEventListener('click', (e) => {
            const targetCmd = e.target.getAttribute('data-cmd');
            if (targetCmd) {
                cliInput.value = targetCmd;
                cliForm.dispatchEvent(new Event('submit'));
            }
        });
    }

    function escapeHTML(str) {
        return str.replace(/[&<>'"]/g,
            tag => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', "'": '&#39;', '"': '&quot;' }[tag] || tag)
        );
    }
}

// Otomatis inisialisasi ketika DOM siap
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTerminal);
} else {
    initTerminal();
}
