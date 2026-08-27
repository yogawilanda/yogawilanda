document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('horizontal-wrapper');
    let isLocked = false;
    let scrollTimeout = null;

    container.addEventListener('wheel', (e) => {
        // Biarkan jika user memang sengaja scroll horizontal pakai trackpad (two-finger swipe)
        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) return;

        e.preventDefault();

        // Abaikan pulse kecil / inertia sisa dari trackpad
        if (Math.abs(e.deltaY) < 15) return;

        if (!isLocked) {
            isLocked = true;
            const direction = e.deltaY > 0 ? 1 : -1;

            container.scrollBy({
                left: direction * container.clientWidth,
                behavior: 'smooth'
            });
        }

        // Reset lock HANYA setelah trackpad benar-benar berhenti mengirim event (inertia habis)
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            isLocked = false;
        }, 150);
    }, { passive: false });
});
