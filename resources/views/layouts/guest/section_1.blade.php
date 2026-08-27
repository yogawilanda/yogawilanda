{{-- STEP 001: ABOUT / HERO --}}
<section id="about"
    class="relative flex h-full min-w-full shrink-0 snap-center flex-col items-center justify-center px-6 pb-12 pt-16 text-zinc-700 dark:text-zinc-300 md:px-12">

    <div class="relative flex h-40 w-full max-w-4xl select-none flex-col items-center justify-center overflow-hidden md:h-50"
        style="contain: layout size;">

        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-500 dark:text-zinc-300 font-mono"
            data-scramble data-delay="0">[CHAPTER 001]</span>
        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-600 dark:text-zinc-400 font-mono"
            data-scramble data-delay="0">[Episode - Intro]</span>

        <h1
            class="flex w-full flex-col items-center justify-center text-center text-3xl font-extrabold leading-none tracking-tight text-zinc-900 dark:text-white md:text-5xl">
            <span class="flex h-9 items-center justify-center md:h-12" data-scramble data-delay="150"
                data-glitch-loop="true">Software Engineer</span>

            <span class="my-1 flex h-5 items-center justify-center text-lg text-zinc-500 opacity-60 md:text-xl font-mono"
                data-scramble data-delay="50" data-glitch-loop="true">\\_//</span>

            <span class="flex h-9 items-center justify-center text-zinc-700 dark:text-zinc-400 md:h-12" data-scramble data-delay="300"
                data-glitch-loop="true">Full-Stack Developer</span>
        </h1>
    </div>

    <div id="terminal-window"
        class="relative z-10 mt-4 w-full max-w-3xl cursor-text overflow-hidden rounded-sm transition-all duration-300 focus-within:border-emerald-500 focus-within:ring-1 focus-within:ring-emerald-500 selection:bg-emerald-500 selection:text-zinc-950 hover-within:border-emerald-500 hover-within:ring-1 hover-within:ring-emerald-500"
        onclick="document.getElementById('cli-input')?.focus()">

        <div class="flex items-center justify-between border-b border-zinc-200/60 dark:border-zinc-800/80 px-4 py-3 text-xs select-none">
            <div class="flex items-center gap-2 font-medium">
                <span class="text-sm font-bold text-emerald-500">>_</span>
                <span data-scramble data-delay="450">yogawilanda.sh — Interactive Shell</span>
            </div>

            <div class="ml-2 flex items-center gap-3.5 opacity-80">
                <button id="btn-minimize" title="Minimize"
                    class="transition-colors hover:text-emerald-500 focus:outline-none">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                </button>
                <button id="btn-maximize" title="Maximize/Restore"
                    class="transition-colors hover:text-emerald-500 focus:outline-none">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="4" y="4" width="16" height="16" rx="1" stroke-width="2" />
                    </svg>
                </button>
                <button id="btn-close" title="Close Terminal"
                    class="transition-colors hover:text-red-400 focus:outline-none">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="terminal-body"
            class="max-h-120 space-y-5 overflow-y-auto p-6 font-mono text-sm leading-relaxed transition-all duration-300 md:p-7 md:text-base">
            <div id="terminal-logs" class="space-y-5">
                <div>
                    <p class="font-bold text-base md:text-lg">
                        <span class="mr-2 text-emerald-500">$</span>whoami --verbose
                    </p>

                    <div class="mt-4 space-y-2.5">
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-emerald-500">[✓]</span>
                            <div>
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Engineer Profile:</span>
                                <span class="text-zinc-700 dark:text-zinc-300">Yoga Wilanda (Full-Stack Developer)</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-emerald-500">[✓]</span>
                            <div>
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Respawn Points:</span>
                                <span class="text-zinc-700 dark:text-zinc-300">Sidoarjo, ID</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-emerald-500">[✓]</span>
                            <div>
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Passive Skill:</span>
                                <span class="text-zinc-700 dark:text-zinc-300">Curiousity, Craftsmanship, Persistence</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-emerald-500">[✓]</span>
                            <div>
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Status:</span>
                                <span class="font-bold text-emerald-500">AVAILABLE_FOR_WORK</span>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4 text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                        ! No issues found. Character ready for Guild Recruitment.
                    </p>
                </div>
            </div>

            <form id="terminal-form" class="flex items-center gap-2 pt-3" onsubmit="return false;">
                <span class="select-none font-bold text-emerald-500 text-base leading-none">$</span>
                <div class="relative flex flex-1 items-center">
                    <input type="text" id="cli-input" autocomplete="off" spellcheck="false"
                        class="w-full border-none bg-transparent p-0 m-0 font-mono text-sm leading-normal font-bold caret-emerald-500 hover:cursor-text focus:outline-none focus:ring-0 focus:border-none"
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
