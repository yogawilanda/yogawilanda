<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased h-full w-full overflow-hidden">

<x-layouts::guest.head />

<body class="h-full w-full bg-[#fcfcfc] dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 antialiased font-sans overflow-hidden">

    <x-layouts::guest.nav />

    {{-- Main Horizontal Scroll Wrapper --}}
    <main id="horizontal-wrapper" class="h-full w-full flex overflow-x-auto overflow-y-hidden snap-x snap-mandatory scroll-smooth no-scrollbar">
        {{ $slot }}
    </main>

    <x-layouts::guest.scroll_hint />
    <x-layouts::guest.footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('horizontal-wrapper');
            let isScrolling = false;

            container.addEventListener('wheel', (e) => {
                // Biarkan scroll bawaan jika user memakai trackpad horizontal (deltaX)
                if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) return;

                e.preventDefault();

                if (isScrolling) return;
                isScrolling = true;

                // Hitung arah scroll (depan / belakang)
                const direction = e.deltaY > 0 ? 1 : -1;

                container.scrollBy({
                    left: direction * container.clientWidth,
                    behavior: 'smooth'
                });

                // Debounce untuk mencegah loncatan slide ganda
                setTimeout(() => {
                    isScrolling = false;
                }, 400);
            }, { passive: false });
        });
    </script>
</body>
</html>
