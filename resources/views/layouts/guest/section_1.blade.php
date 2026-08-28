{{-- STEP 001: ABOUT / HERO --}}
<section id="about"
    class="relative flex h-full min-h-full shrink-0 snap-center flex-col items-center justify-center px-6 pb-12 pt-16 text-zinc-700 dark:text-zinc-300 md:px-12">

    <div class="relative flex h-40 w-full max-w-4xl select-none flex-col items-center justify-center overflow-hidden md:h-50"
        style="contain: layout size;">

        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-500 dark:text-zinc-300 font-mono"
            data-scramble data-delay="0">[CHAPTER 001]</span>
        <span
            class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-600 dark:text-zinc-400 font-mono"
            data-scramble data-delay="0">[Episode 01 - The beginning]</span>

        <h1
            class="flex w-full flex-col items-center justify-center text-center text-3xl font-extrabold leading-none tracking-tight text-zinc-900 dark:text-white md:text-5xl">
            <span class="flex h-9 items-center justify-center md:h-12" data-scramble data-delay="150"
                data-glitch-loop="true">Software Engineer</span>

            <span
                class="my-1 flex h-5 items-center justify-center font-mono text-xs tracking-widest text-zinc-700 dark:text-zinc-400 opacity-60 md:text-sm"
                data-scramble data-delay="500">
                + ── ── ── +
            </span>

            <span class="flex h-9 items-center justify-center text-zinc-700 dark:text-zinc-400 md:h-12" data-scramble
                data-delay="300" data-glitch-loop="true">Problem Solver</span>
        </h1>
    </div>

    <div id="terminal-window"
        class="relative z-10 mt-4 w-full max-w-3xl cursor-text overflow-hidden rounded-sm transition-all duration-300 focus-within:border-emerald-500 focus-within:ring-1 focus-within:ring-emerald-500 selection:bg-emerald-500 selection:text-zinc-950 hover-within:border-emerald-500 hover-within:ring-1 hover-within:ring-emerald-500"
        onclick="document.getElementById('cli-input')?.focus()">

        <div
            class="flex items-center justify-between border-b border-zinc-200/60 dark:border-zinc-800/80 px-4 py-3 text-xs select-none">
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
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Character Name:</span>
                                <span class="text-zinc-700 dark:text-zinc-300">E A Yoga Wilanda</span>
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
                                <span class="text-zinc-700 dark:text-zinc-300">Curiousity, Craftsmanship,
                                    Persistence</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-bold text-emerald-500">[✓]</span>
                            <div>
                                <span class="font-bold text-zinc-900 dark:text-zinc-100">Status:</span>
                                <span class="font-bold text-emerald-500">Actively Hunts Guilds on Earth</span>
                            </div>
                        </div>
                    </div>
                    {{-- greeting to the visitor, tell them to scroll to continoue the adventure --}}
                    <p class="mt-4 text-md font-semibold text-emerald-600 dark:text-emerald-400">
                        Hi, fellow adventurer! Scroll down or arrow key down to step into the story and see what we can
                        build
                        together.
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

<div id="contact-modal" class="fixed inset-0 z-[60] hidden items-center justify-center bg-zinc-950/40 p-6 backdrop-blur-sm"
    role="dialog" aria-modal="true" aria-labelledby="contact-modal-title">
    <div id="contact-modal-window"
        class="w-full max-w-lg border border-zinc-700 bg-zinc-950 text-zinc-100 shadow-2xl transition-all duration-200">
        <div class="flex items-center justify-between border-b border-zinc-800 px-4 py-3 font-mono text-xs">
            <span id="contact-modal-title" class="font-bold text-emerald-400">contact_protocol.exe</span>
            <div class="flex items-center gap-3">
                <button id="contact-modal-minimize" type="button" title="Minimize" class="hover:text-emerald-400">—</button>
                <button id="contact-modal-maximize" type="button" title="Maximize/Restore" class="hover:text-emerald-400">□</button>
                <button id="contact-modal-close" type="button" title="Close" class="hover:text-rose-400">×</button>
            </div>
        </div>
        <div id="contact-modal-content" class="space-y-5 p-6 font-mono text-sm">
            <p class="text-zinc-300">Connection request received. How would you like to continue?</p>
            <div class="grid gap-2 sm:grid-cols-2">
                <a href="#contact" data-contact-action="navigate" class="border border-emerald-500/50 px-3 py-2 text-center text-emerald-400 transition hover:bg-emerald-500 hover:text-zinc-950">navigate_to_contact</a>
                <a href="https://wa.me/6285158986696" target="_blank" rel="noopener" class="border border-zinc-700 px-3 py-2 text-center transition hover:border-emerald-500 hover:text-emerald-400">open_whatsapp</a>
                <a href="https://t.me/yogawilanda" target="_blank" rel="noopener" class="border border-zinc-700 px-3 py-2 text-center transition hover:border-emerald-500 hover:text-emerald-400">open_telegram</a>
                <a href="mailto:hyoga.wilanda@gmail.com" class="border border-zinc-700 px-3 py-2 text-center transition hover:border-emerald-500 hover:text-emerald-400">send_email</a>
                <a href="https://www.linkedin.com/in/yoga-wilanda/" target="_blank" rel="noopener" class="border border-zinc-700 px-3 py-2 text-center transition hover:border-emerald-500 hover:text-emerald-400 sm:col-span-2">open_linkedin</a>
            </div>
        </div>
    </div>
</div>
