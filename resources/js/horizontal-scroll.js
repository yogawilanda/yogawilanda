
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('horizontal-wrapper');
    let isScrolling = false;

    container.addEventListener('wheel', (e) => {
        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) return;

        e.preventDefault();

        if (isScrolling) return;
        isScrolling = true;

        const direction = e.deltaY > 0 ? 1 : -1;

        container.scrollBy({
            left: direction * container.clientWidth,
            behavior: 'smooth'
        });

        setTimeout(() => {
            isScrolling = false;
        }, 400);
    }, { passive: false });
});

