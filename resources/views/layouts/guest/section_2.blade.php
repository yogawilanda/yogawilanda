{{-- STEP 002: TECH STACK --}}
<section id="stack"
    class="relative flex h-full min-h-full flex-shrink-0 snap-center flex-col items-center justify-center px-6 pb-12 pt-16 text-zinc-700 dark:text-zinc-300 md:px-12">
    <span
        class="mb-2 flex h-4 items-center justify-center text-sm uppercase tracking-widest text-zinc-600 dark:text-zinc-400 font-mono"
        data-scramble data-delay="100">[Episode 02 - The one who hold keys]</span>
    <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-zinc-900 dark:text-white md:text-3xl"
        data-scramble data-delay="150" data-glitch-loop="true">Acquired Skills</h2>

    <!-- Windows-Style IDE App Window -->
    <div
        class="w-full max-w-3xl overflow-hidden rounded-sm border border-zinc-200 bg-white/80 shadow-[0_20px_50px_rgba(15,23,42,0.08)] backdrop-blur-sm dark:border-zinc-800 dark:bg-zinc-950/80 dark:shadow-[0_20px_50px_rgba(0,0,0,0.3)]">

        <!-- Windows Title Bar -->
        <div
            class="flex items-center justify-between border-b border-zinc-200 bg-zinc-100/80 px-4 py-2 text-xs select-none dark:border-zinc-800 dark:bg-zinc-900/60 font-mono">
            <div class="flex items-center gap-2">
                <span class="text-xs font-bold text-emerald-500 font-mono">&lt;/&gt;</span>
                <span class="text-[11px] text-zinc-600 dark:text-zinc-400">stack.config.json — VS Code</span>
            </div>

            <!-- Windows Window Buttons (Right side) -->
            <div class="flex items-center gap-3.5 opacity-80">
                <button title="Minimize" class="transition-colors hover:text-emerald-500 focus:outline-none">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                </button>
                <button title="Maximize" class="transition-colors hover:text-emerald-500 focus:outline-none">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="4" y="4" width="16" height="16" rx="1" stroke-width="2" />
                    </svg>
                </button>
                <button title="Close" class="transition-colors hover:text-red-400 focus:outline-none">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- IDE Workspace Content -->
        <div class="p-5 font-mono md:p-6">

            <!-- Category 01 -->
            <div class="mb-6">
                <div class="mb-3 flex items-center justify-between text-xs text-zinc-500 dark:text-zinc-400">
                    <span class="uppercase tracking-wider">// 01. Frameworks</span>
                    <span class="text-[10px] italic text-zinc-400 dark:text-zinc-500">Hover/Touch cards for specs</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs md:grid-cols-4">
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-laravel-plain text-lg text-red-500"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">Laravel</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="fas fa-bolt text-lg text-pink-500"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">Livewire</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-flutter-plain text-lg text-blue-400"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">Flutter</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-react-original text-lg text-cyan-400"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">ReactJS</span>
                    </div>
                </div>
            </div>

            <!-- Category 02 -->
            <div>
                <div class="mb-3 flex items-center justify-between text-xs text-zinc-500 dark:text-zinc-400">
                    <span class="uppercase tracking-wider">// 02. Languages & Databases</span>
                    <span class="text-[10px] italic text-zinc-400 dark:text-zinc-500">Hover/Touch cards for specs</span>
                </div>
                <div class="grid grid-cols-2 gap-3 text-xs md:grid-cols-4">
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-php-plain text-lg text-indigo-400"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">PHP</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-mysql-plain text-lg text-blue-500"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">MySQL</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-javascript-plain text-lg text-yellow-400"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">JS</span>
                    </div>
                    <div
                        class="flex cursor-pointer items-center gap-3 border border-zinc-200 bg-zinc-50/80 p-3 transition hover:border-emerald-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:hover:border-emerald-500/60">
                        <i class="devicon-java-plain text-lg text-red-500"></i>
                        <span class="font-semibold text-zinc-800 dark:text-zinc-200">Java</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- IDE Status Bar -->
        <div
            class="flex items-center justify-between border-t border-zinc-200 bg-zinc-100/50 px-3 py-1.5 font-mono text-[10px] text-zinc-500 dark:border-zinc-800 dark:bg-zinc-900/40 dark:text-zinc-400">
            <div class="flex items-center gap-3">
                <!-- SSH / Remote Connection Icon -->
                <span
                    class="flex items-center gap-1.5 bg-emerald-500/10 px-1.5 py-0.5 text-emerald-600 dark:text-emerald-400">
                    <i class="fas fa-terminal text-[9px]"></i>
                    <span class="font-semibold">SSH: production</span>
                </span>
                <span>LN 24, COL 12</span>
                <span>UTF-8</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="flex items-center gap-1 text-emerald-500">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>READY</span>
                </span>
                <!-- Notification Bell Icon -->
                <button title="Notifications"
                    class="relative transition-colors hover:text-zinc-800 dark:hover:text-white">
                    <i class="far fa-bell text-[11px]"></i>
                    <!-- Notification Badge Dot -->
                    <span class="absolute -right-1 -top-1 flex h-2 w-2">
                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                    </span>
                </button>
            </div>
        </div>

    </div>
</section>
