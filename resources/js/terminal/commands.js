// loc    : resources/js/terminal/commands.js
// usage  : Menyimpan kamus daftar command (COMMANDS) beserta logic respons HTML dan Levenshtein distance untuk saran typo.

export const COMMANDS = {
    'help': 'Menampilkan daftar perintah CLI yang tersedia.',
    'whoami': 'Menampilkan profil ringkas.',
    'whoami -v': 'Menampilkan detail peran dan lokasi.',
    'whoami -vv': 'Menampilkan spesifikasi teknis & tech stack komplit.',
    'clear': 'Membersihkan layar terminal.',
    'skills': 'Daftar keahlian utama.',
    'contact': 'Informasi kontak & tautan sosial.'
};

export function getLevenshteinDistance(a, b) {
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

export function findClosestCommand(input) {
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

export const commandHandlers = {
    'whoami': () => `<p class="text-zinc-300">Yoga Wilanda — Berbasis di Surabaya, Indonesia. Berfokus pada pengembangan sistem web & mobile skala tinggi, arsitektur database multi-tenant, dan optimalisasi aplikasi custom tanpa rigid template.</p>`,
    'whoami -v': () => `
        <div class="space-y-1 text-zinc-300">
            <p><span class="text-zinc-500">[NAME]</span> Yoga Wilanda</p>
            <p><span class="text-zinc-500">[ROLE]</span> Software Engineer / Full-Stack Developer</p>
            <p><span class="text-zinc-500">[BASE]</span> Surabaya, Indonesia (Telkom University)</p>
        </div>`,
    'whoami -vv': () => `
        <div class="pl-3 border-l-2 border-emerald-500/60 space-y-1.5 text-zinc-300 my-1">
            <p><span class="text-zinc-500">[USER]</span> Yoga Wilanda (ID: 1000)</p>
            <p><span class="text-zinc-500">[ROLE]</span> Software Engineer & Full-Stack Developer</p>
            <p><span class="text-zinc-500">[LOC ]</span> Surabaya, ID (Telkom University)</p>
            <p><span class="text-zinc-500">[STACK]</span> Laravel, Flutter, Vue/React, TailwindCSS, MySQL/PostgreSQL</p>
            <p><span class="text-zinc-500">[SPEC ]</span> Multi-tenant Architecture, WebRTC/Realtime Systems, API Design</p>
            <p><span class="text-zinc-500">[STATUS]</span> <span class="text-emerald-400 font-bold">AVAILABLE_FOR_WORK</span></p>
        </div>`,
    'help': () => `
        <div class="space-y-1">
            <p class="text-zinc-400 mb-1">Daftar perintah CLI yang tersedia:</p>
            ${Object.entries(COMMANDS).map(([k, v]) => `
                <div class="grid grid-cols-1 md:grid-cols-4 gap-1">
                    <span class="text-emerald-400 font-bold">${k}</span>
                    <span class="text-zinc-400 md:col-span-3">${v}</span>
                </div>
            `).join('')}
        </div>`,
    'skills': () => `<p class="text-zinc-300">Backend (Laravel, Node.js), Frontend (Tailwind, Vue/React), Mobile (Flutter), Database (PostgreSQL, MySQL, Redis).</p>`
};
