// loc    : resources/js/terminal/contact.js
// usage  : Menangani alur interaksi command 'contact', progress bar data retrieval, konfirmasi y/n, serta seluruh kontrol DOM untuk modal kontak.

let contactFlowState = 'idle';

export function getContactFlowState() {
    return contactFlowState;
}

export function setContactFlowState(state) {
    contactFlowState = state;
}

export function initContactModule() {
    const contactModal = document.getElementById('contact-modal');
    const contactModalWindow = document.getElementById('contact-modal-window');
    const contactModalContent = document.getElementById('contact-modal-content');
    const contactModalMinimize = document.getElementById('contact-modal-minimize');
    const contactModalMaximize = document.getElementById('contact-modal-maximize');
    const contactModalClose = document.getElementById('contact-modal-close');

    let isContactModalMaximized = false;

    const openContactModal = () => {
        contactModalContent?.classList.remove('hidden');
        contactModalWindow?.classList.remove('max-w-5xl', 'min-h-[70vh]');
        contactModalWindow?.classList.add('max-w-lg');
        isContactModalMaximized = false;
        contactModal?.classList.remove('hidden');
        contactModal?.classList.add('flex');
    };

    const closeContactModal = () => {
        contactModal?.classList.add('hidden');
        contactModal?.classList.remove('flex');
    };

    contactModalMinimize?.addEventListener('click', () => {
        contactModalContent?.classList.toggle('hidden');
    });

    contactModalMaximize?.addEventListener('click', () => {
        isContactModalMaximized = !isContactModalMaximized;
        contactModalWindow?.classList.toggle('max-w-lg', !isContactModalMaximized);
        contactModalWindow?.classList.toggle('max-w-5xl', isContactModalMaximized);
        contactModalWindow?.classList.toggle('min-h-[70vh]', isContactModalMaximized);
    });

    contactModalClose?.addEventListener('click', closeContactModal);
    contactModal?.addEventListener('click', (event) => {
        if (event.target === contactModal) {
            closeContactModal();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeContactModal();
        }
    });

    contactModal?.querySelector('[data-contact-action="navigate"]')?.addEventListener('click', closeContactModal);

    return { openContactModal, closeContactModal };
}

export function startContactRetrieval(inputCmd, logsContainer, cliInput, appendLog, appendSystemLog) {
    if (contactFlowState !== 'idle') {
        appendSystemLog('Contact information retrieval is already in progress.');
        return;
    }

    contactFlowState = 'loading';
    appendLog(inputCmd, `
        <div class="space-y-2 text-zinc-300">
            <p>Retrieving current character contact information...</p>
            <div class="h-2 w-full overflow-hidden border border-emerald-500/40 bg-zinc-900">
                <div data-contact-progress class="h-full w-0 bg-emerald-500 transition-[width] duration-75"></div>
            </div>
            <p data-contact-progress-label class="text-xs text-emerald-400">0%</p>
        </div>
    `);

    const bodyEl = document.getElementById('terminal-body');
    const progressBars = logsContainer.querySelectorAll('[data-contact-progress]');
    const progressLabels = logsContainer.querySelectorAll('[data-contact-progress-label]');
    const progressBar = progressBars[progressBars.length - 1];
    const progressLabel = progressLabels[progressLabels.length - 1];
    const startedAt = Date.now();

    const updateProgress = () => {
        const progress = Math.min(Math.round(((Date.now() - startedAt) / 1000) * 100), 100);

        if (progressBar) progressBar.style.width = `${progress}%`;
        if (progressLabel) progressLabel.textContent = `${progress}%`;

        if (progress < 100) {
            window.setTimeout(updateProgress, 50);
            return;
        }

        contactFlowState = 'awaiting-confirmation';
        appendSystemLog(`
            <p class="text-emerald-400">Data retrieval complete.</p>
            <p>Open contact options? <span class="font-bold text-white">y</span>/n</p>
        `);
        cliInput.placeholder = "press Enter for yes, or type n...";
        cliInput.focus();
    };

    updateProgress();
}
