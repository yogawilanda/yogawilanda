{{-- STEP 001: ABOUT / HERO --}}
<section id="about"
    class="relative flex h-full min-w-full shrink-0 snap-center flex-col items-center justify-center px-6 pb-12 pt-16 text-zinc-700 dark:text-zinc-300 md:px-12">

    <div class="relative flex h-40 w-full max-w-4xl select-none flex-col items-center justify-center overflow-hidden md:h-50"
        style="contain: layout size;">

        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-500 font-mono"
            data-scramble data-delay="0">[CHAPTER 001]</span>
        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-500 font-mono"
            data-scramble data-delay="0">[Episode - Intro]</span>

        <h1
            class="flex w-full flex-col items-center justify-center text-center text-3xl font-extrabold leading-none tracking-tight text-zinc-900 dark:text-white md:text-5xl">
            <span class="flex h-9 items-center justify-center md:h-12" data-scramble data-delay="150"
                data-glitch-loop="true">Software Engineer</span>

            <span class="my-1 flex h-5 items-center justify-center text-lg text-zinc-500 opacity-60 md:text-xl"
                data-scramble data-delay="50" data-glitch-loop="true">||</span>

            <span class="flex h-9 items-center justify-center text-zinc-700 dark:text-zinc-400 md:h-12" data-scramble data-delay="300"
                data-glitch-loop="true">Full-Stack Developer</span>
        </h1>
    </div>

    <div id="terminal-window"
        class="relative z-10 mt-4 w-full max-w-2xl cursor-text overflow-hidden rounded-sm border border-zinc-200 bg-white/80 text-left shadow-[0_24px_80px_rgba(15,23,42,0.12)] backdrop-blur-md transition-all duration-300 dark:border-zinc-800 dark:bg-zinc-950/80 dark:shadow-[0_24px_80px_rgba(0,0,0,0.35)]"
        onclick="document.getElementById('cli-input')?.focus()">

        <div
            class="flex items-center justify-between border-b border-zinc-200 bg-zinc-100/80 px-4 py-2.5 text-[11px] select-none dark:border-zinc-800 dark:bg-zinc-900/80">
            <div class="flex items-center gap-2 font-mono text-zinc-600 dark:text-zinc-400">
                <span class="text-xs font-bold text-emerald-500">>_</span>
                <span data-scramble data-delay="450">yogawilanda.sh — Interactive Shell</span>
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 text-[10px] uppercase tracking-widest font-mono text-zinc-600 dark:text-zinc-400">
                    <span class="h-1.5 w-1.5 animate-ping rounded-full bg-emerald-500"></span>
                    <span data-scramble data-delay="600">STATUS: AVAILABLE_FOR_WORK</span>
                </div>

                <div class="ml-2 flex items-center gap-3 text-zinc-500 dark:text-zinc-500">
                    <button id="btn-minimize" title="Minimize"
                        class="transition-colors hover:text-zinc-900 focus:outline-none dark:hover:text-white">
                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                    </button>
                    <button id="btn-maximize" title="Maximize/Restore"
                        class="transition-colors hover:text-zinc-900 focus:outline-none dark:hover:text-white">
                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="1" stroke-width="2" />
                        </svg>
                    </button>
                    <button id="btn-close" title="Close Terminal"
                        class="transition-colors hover:text-red-400 focus:outline-none">
                        <svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="terminal-body"
            class="max-h-105 space-y-4 overflow-y-auto p-6 text-sm leading-relaxed font-mono transition-all duration-300 scrollbar-thin scrollbar-thumb-zinc-800 md:text-base">
            <div id="terminal-logs" class="space-y-4">
                <div>
                    <p class="font-bold text-zinc-900 dark:text-white">
                        <span class="mr-1.5 text-emerald-500">$</span>whoami
                    </p>
                    <p class="mt-1 text-zinc-700 dark:text-zinc-300">
                        Yoga Wilanda — Berbasis di Surabaya, Indonesia. Berfokus pada pengembangan sistem web &
                        mobile skala tinggi, arsitektur database multi-tenant, dan optimalisasi aplikasi custom
                        tanpa rigid template.
                    </p>
                    <div class="flex items-center gap-2 pt-2 text-[11px] text-zinc-500 dark:text-zinc-400">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span>Surabaya, ID • Telkom University</span>
                    </div>
                </div>
            </div>

            <form id="terminal-form" class="flex items-center gap-1.5 pt-2" onsubmit="return false;">
                <span class="select-none font-bold text-emerald-500">$</span>
                <div class="relative flex flex-1 items-center">
                    <input type="text" id="cli-input" autocomplete="off" spellcheck="false"
                        class="w-full border-none bg-transparent p-0 m-0 font-bold text-zinc-900 caret-emerald-500 focus:outline-none dark:text-white"
                        placeholder="type 'help' or 'whoami -vv'..." />
                </div>
            </form>
        </div>
    </div>
</section>

<button id="btn-restore-floating"
    class="fixed bottom-6 right-6 z-50 hidden items-center gap-2 rounded-sm border border-zinc-200 bg-white/90 px-3 py-2 text-xs font-mono text-zinc-700 shadow-xl transition-all duration-200 hover:border-emerald-500 dark:border-zinc-700 dark:bg-zinc-900/90 dark:text-zinc-300">
    <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
    <span>>_ restore terminal</span>
</button>
