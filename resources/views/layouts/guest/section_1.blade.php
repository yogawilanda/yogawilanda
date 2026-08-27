{{-- STEP 001: ABOUT / HERO --}}
<section id="about"
    class="w-full h-full min-w-full shrink-0 snap-center flex flex-col justify-center items-center px-6 md:px-12 pt-16 pb-12 relative text-zinc-300">

    <!-- HEADER ISOLATION BOX: Dikunci pakai style contain murni & fixed height -->
    <div class="w-full max-w-4xl flex flex-col items-center justify-center h-40 md:h-50 select-none pointer-events-none overflow-hidden relative"
        style="contain: layout size;">

        <span
            class="text-[11px] text-zinc-500 tracking-widest uppercase mb-2 font-mono h-4 flex items-center justify-center"
            data-scramble data-delay="0">[STEP 001]</span>

        <h1
            class="text-3xl md:text-5xl font-extrabold tracking-tight leading-none text-white text-center w-full flex flex-col items-center justify-center">
            <span class="h-9 md:h-12 flex items-center justify-center" data-scramble data-delay="150"
                data-glitch-loop="true">Software Engineer</span>

            <span class="text-zinc-500 text-lg md:text-xl h-5 flex items-center justify-center my-1 opacity-60"
                data-scramble data-delay="50" data-glitch-loop="true">||</span>

            <span class="text-zinc-400 h-9 md:h-12 flex items-center justify-center" data-scramble data-delay="300"
                data-glitch-loop="true">Full-Stack Developer.</span>
        </h1>
    </div>
    <!-- Code Window Box: Terpisah total tanpa terpengaruh pergerakan div atas -->
    <div id="terminal-window"
        class="w-full max-w-2xl bg-zinc-950/80 border border-zinc-800 text-left shadow-2xl rounded-sm overflow-hidden backdrop-blur-md transition-all duration-300 cursor-text mt-4 relative z-10"
        onclick="document.getElementById('cli-input')?.focus()">

        <!-- Window Header -->
        <div
            class="border-b border-zinc-800 px-4 py-2.5 flex justify-between items-center bg-zinc-900/80 text-[11px] select-none">
            <div class="flex items-center gap-2 text-zinc-400 font-mono">
                <span class="text-emerald-500 font-bold text-xs">>_</span>
                <span data-scramble data-delay="450">yogawilanda.sh — Interactive Shell</span>
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 text-zinc-400 tracking-widest uppercase text-[10px] font-mono">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                    <span data-scramble data-delay="600">STATUS: AVAILABLE_FOR_WORK</span>
                </div>

                <div class="flex items-center gap-3 ml-2 text-zinc-500">
                    <button id="btn-minimize" title="Minimize"
                        class="hover:text-white transition-colors focus:outline-none">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                    </button>
                    <button id="btn-maximize" title="Maximize/Restore"
                        class="hover:text-white transition-colors focus:outline-none">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="1" stroke-width="2" />
                        </svg>
                    </button>
                    <button id="btn-close" title="Close Terminal"
                        class="hover:text-red-400 transition-colors focus:outline-none">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Terminal Body -->
        <div id="terminal-body"
            class="p-6 text-sm md:text-base leading-relaxed font-mono space-y-4 max-h-105 overflow-y-auto transition-all duration-300 scrollbar-thin scrollbar-thumb-zinc-800">
            <!-- Log Output Container -->
            <div id="terminal-logs" class="space-y-4">
                <!-- Default Initial Output -->
                <div>
                    <p class="text-white font-bold">
                        <span class="text-emerald-500 mr-1.5">$</span>whoami
                    </p>
                    <p class="text-zinc-300 mt-1">
                        Yoga Wilanda — Berbasis di Surabaya, Indonesia. Berfokus pada pengembangan sistem web &
                        mobile skala tinggi, arsitektur database multi-tenant, dan optimalisasi aplikasi custom
                        tanpa rigid template.
                    </p>
                    <div class="pt-2 flex items-center gap-2 text-[11px] text-zinc-400">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>Surabaya, ID • Telkom University</span>
                    </div>
                </div>
            </div>

            <!-- Input Prompt Line -->
            <form id="terminal-form" class="flex items-center gap-1.5 pt-2" onsubmit="return false;">
                <span class="text-emerald-500 font-bold select-none">$</span>
                <div class="relative flex-1 flex items-center">
                    <input type="text" id="cli-input" autocomplete="off" spellcheck="false"
                        class="w-full bg-transparent text-white font-bold focus:outline-none border-none p-0 m-0 caret-emerald-500"
                        placeholder="type 'help' or 'whoami -vv'..." />
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Floating Badge (Restore Terminal) -->
<button id="btn-restore-floating"
    class="hidden fixed bottom-6 right-6 bg-zinc-900/90 border border-zinc-700 hover:border-emerald-500 text-zinc-300 text-xs font-mono px-3 py-2 rounded-sm shadow-xl flex items-center gap-2 transition-all duration-200 z-50">
    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
    <span>>_ restore terminal</span>
</button>
