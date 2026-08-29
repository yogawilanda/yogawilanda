<nav class="fixed inset-x-0 bottom-6 z-50 flex justify-center px-4">
    <div class="flex w-full max-w-8xl items-center justify-between gap-4 border border-zinc-200 bg-white/80 px-4 py-3 shadow-[0_0_0_1px_rgba(24,24,27,0.02),0_12px_32px_rgba(15,23,42,0.12)] backdrop-blur-md dark:border-zinc-700 dark:bg-zinc-950/80 dark:shadow-[0_0_0_1px_rgba(255,255,255,0.02),0_12px_32px_rgba(0,0,0,0.35)]">

        {{-- Logo Brand --}}
        <div class="flex min-w-0 shrink-0 items-center gap-2">
            <a href="#about"
                class="group flex items-center gap-2.5 border border-zinc-200 bg-zinc-50 px-3 py-2 text-xs font-bold uppercase tracking-wider text-zinc-700 transition hover:border-emerald-500 hover:text-emerald-500 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-200">
                <span class="inline-flex h-5 w-5 items-center justify-center bg-emerald-500/15 text-[10px] text-emerald-500">YW</span>
                <span class="hidden sm:inline">YOGAWILANDA</span>
            </a>
        </div>

        {{-- Menu Links --}}
        <div id="nav-menu-links" class="hidden flex-1 items-center justify-center gap-1.5 overflow-x-auto no-scrollbar md:flex">
            @foreach (['about' => 'About', 'stack' => 'Stack', 'projects' => 'Projects', 'contact' => 'Contact'] as $hash => $label)
                <a href="{{ route('home') }}#{{ $hash }}"
                    class="nav-link relative flex flex-col items-center border border-transparent px-4 py-2 text-xs font-medium uppercase tracking-wider text-zinc-600 transition hover:border-zinc-200 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:border-zinc-700 dark:hover:bg-zinc-900 dark:hover:text-zinc-100">
                    <span class="nav-dot absolute -top-1 h-1.5 w-1.5 rounded-full bg-emerald-500 opacity-0 transition-all duration-300"></span>
                    {{ $label }}
                </a>
            @endforeach
        </div>

        {{-- Action Buttons --}}
        <div class="flex shrink-0 items-center gap-2.5">
            <button id="guest-theme-toggle" type="button"
                class="inline-flex items-center gap-2 border border-zinc-200 bg-zinc-50 px-3 py-2 text-xs font-medium uppercase tracking-wider text-zinc-700 transition hover:border-emerald-500 hover:text-emerald-500 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-200">
                <span data-theme-icon aria-hidden="true">☀</span>
                <span data-theme-label class="hidden sm:inline">Light</span>
            </button>


        </div>

    </div>
</nav>

{{-- Active state styling --}}
<style>
    .nav-link.active {
        color: #10b981 !important;
    }
    .nav-link.active .nav-dot {
        opacity: 1 !important;
        transform: translateY(2px);
    }
</style>

{{-- Scrollspy Observer --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                    });
                }
            });
        }, {
            rootMargin: '-30% 0px -60% 0px',
            threshold: 0
        });

        sections.forEach(section => observer.observe(section));
    });
</script>
