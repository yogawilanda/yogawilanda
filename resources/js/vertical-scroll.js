document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('vertical-wrapper');

    if (!container) {
        return;
    }

    const sections = Array.from(container.querySelectorAll(':scope > section'));
    const terminalWindow = document.getElementById('terminal-window');
    const terminalBody = document.getElementById('terminal-body');
    const cooldownMs = 650;
    const wheelThreshold = 30;
    const animationDurationMs = 520;
    let isLocked = false;
    let wheelDistance = 0;
    let unlockTimeout;
    let wheelResetTimeout;
    let animationFrame;

    const animateSection = (section, direction) => {
        section.classList.remove('guest-section--enter-forward', 'guest-section--enter-backward');
        void section.offsetWidth;
        section.classList.add(direction > 0 ? 'guest-section--enter-forward' : 'guest-section--enter-backward');
    };

    const getScrollableAncestor = (target) => {
        let element = target instanceof Element ? target : null;

        if (terminalWindow && terminalBody && element && terminalWindow.contains(element)) {
            return terminalBody.scrollHeight > terminalBody.clientHeight ? terminalBody : null;
        }

        while (element && element !== container) {
            const styles = window.getComputedStyle(element);
            const canScroll = /(auto|scroll)/.test(styles.overflowY)
                && element.scrollHeight > element.clientHeight;

            if (canScroll) {
                return element;
            }

            element = element.parentElement;
        }

        return null;
    };

    const moveToSection = (direction) => {
        if (sections.length === 0) {
            return;
        }

        const currentIndex = sections.reduce((closestIndex, section, index) => {
            const closestDistance = Math.abs(sections[closestIndex].offsetTop - container.scrollTop);
            const distance = Math.abs(section.offsetTop - container.scrollTop);

            return distance < closestDistance ? index : closestIndex;
        }, 0);
        const targetIndex = Math.max(0, Math.min(sections.length - 1, currentIndex + direction));

        if (targetIndex === currentIndex) {
            return false;
        }

        animateSection(sections[targetIndex], direction);
        container.classList.add('is-programmatic-scrolling');

        const startTop = container.scrollTop;
        const targetTop = sections[targetIndex].offsetTop;
        const distance = targetTop - startTop;
        const startedAt = performance.now();
        const animateScroll = (timestamp) => {
            const progress = Math.min((timestamp - startedAt) / animationDurationMs, 1);
            const easedProgress = 1 - Math.pow(1 - progress, 3);

            container.scrollTop = startTop + distance * easedProgress;

            if (progress < 1) {
                animationFrame = requestAnimationFrame(animateScroll);
                return;
            }

            container.scrollTop = targetTop;
            container.classList.remove('is-programmatic-scrolling');
        };

        cancelAnimationFrame(animationFrame);
        animationFrame = requestAnimationFrame(animateScroll);

        return true;
    };

    container.addEventListener('wheel', (event) => {
        if (Math.abs(event.deltaX) > Math.abs(event.deltaY) || event.deltaY === 0) {
            return;
        }

        const scrollableAncestor = getScrollableAncestor(event.target);

        if (scrollableAncestor) {
            const atTop = scrollableAncestor.scrollTop <= 0;
            const atBottom = scrollableAncestor.scrollTop + scrollableAncestor.clientHeight >= scrollableAncestor.scrollHeight - 1;

            if ((event.deltaY < 0 && !atTop) || (event.deltaY > 0 && !atBottom)) {
                return;
            }
        }

        event.preventDefault();

        if (isLocked) {
            return;
        }

        wheelDistance += event.deltaY;

        clearTimeout(wheelResetTimeout);
        wheelResetTimeout = setTimeout(() => {
            wheelDistance = 0;
        }, 120);

        if (Math.abs(wheelDistance) < wheelThreshold) {
            return;
        }

        const direction = wheelDistance > 0 ? 1 : -1;
        wheelDistance = 0;
        isLocked = moveToSection(direction);

        if (!isLocked) {
            return;
        }

        clearTimeout(unlockTimeout);
        unlockTimeout = setTimeout(() => {
            isLocked = false;
        }, cooldownMs);
    }, { passive: false });
});
