// loc    : resources/js/terminal/auth.js
// usage  : Menangani fungsionalitas command 'login' termasuk animasi progress bar secure handshake dan redirect URL dinamis.

export function startOpenAuthentication(logsContainer) {
    const systemLogItem = document.createElement('div');
    systemLogItem.className = 'space-y-1';
    systemLogItem.innerHTML = `<div class="text-zinc-300 pl-3">
        <div class="space-y-2 text-zinc-300">
            <p>Establishing secure handshake with authentication portal...</p>
            <div class="h-2 w-full overflow-hidden border border-emerald-500/40 bg-zinc-900">
                <div data-auth-progress class="h-full w-0 bg-emerald-500 transition-[width] duration-75"></div>
            </div>
            <p data-auth-progress-label class="text-xs text-emerald-400">0%</p>
        </div>
    </div>`;
    logsContainer.appendChild(systemLogItem);

    const bodyEl = document.getElementById('terminal-body');
    if (bodyEl) bodyEl.scrollTop = bodyEl.scrollHeight;

    const progressBar = systemLogItem.querySelector('[data-auth-progress]');
    const progressLabel = systemLogItem.querySelector('[data-auth-progress-label]');
    const startedAt = Date.now();

    const updateProgress = () => {
        const progress = Math.min(Math.round(((Date.now() - startedAt) / 500) * 100), 100);

        if (progressBar) progressBar.style.width = `${progress}%`;
        if (progressLabel) progressLabel.textContent = `${progress}%`;

        if (progress < 100) {
            window.setTimeout(updateProgress, 30);
            return;
        }

        const redirectLog = document.createElement('div');
        redirectLog.className = 'space-y-1';
        redirectLog.innerHTML = `<div class="text-zinc-300 pl-3"><p class="text-emerald-400">Portal secured. Redirecting...</p></div>`;
        logsContainer.appendChild(redirectLog);
        if (bodyEl) bodyEl.scrollTop = bodyEl.scrollHeight;

        setTimeout(() => {
            window.location.href = new URL('login', window.location.href).href;
        }, 300);
    };

    updateProgress();
}
