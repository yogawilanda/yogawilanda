document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('horizontal-wrapper');

    if (!container) {
        return;
    }

    let isLocked = false;
    let scrollTimeout = null;

    container.addEventListener('wheel', (e) => {
        if (Math.abs(e.deltaY) < 15) {
            return;
        }

        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
            return;
        }

        e.preventDefault();

        if (!isLocked) {
            isLocked = true;
            const direction = e.deltaY > 0 ? 1 : -1;

            container.scrollBy({
                top: direction * container.clientHeight,
                behavior: 'smooth'
            });
        }

        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            isLocked = false;
        }, 150);
    }, { passive: false });
});
