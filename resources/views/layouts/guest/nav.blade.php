<nav class="fixed top-0 inset-x-0 z-50 bg-zinc-950/80 backdrop-blur-md border-b border-zinc-900/80 text-zinc-400 font-mono">
    <div class="w-full px-4 md:px-12 py-3.5 flex justify-between items-center text-xs tracking-wider gap-4">

        {{-- Left: Brand (Isolated Box + Professional Character Scramble) --}}
        <div class="w-[140px] md:w-[160px] h-5 flex items-center shrink-0 overflow-hidden relative select-none"
             style="contain: layout size;">
            <a href="#" class="group font-sans font-bold text-zinc-100 hover:text-emerald-400 transition tracking-widest uppercase w-full flex items-center gap-[0.02em] text-left whitespace-nowrap">
                <!-- YOGA -->
                <span data-scramble data-delay="50" class="inline-block">Y</span>
                <span data-scramble data-delay="120" class="inline-block">O</span>
                <span data-scramble data-delay="80" class="inline-block">G</span>
                <span data-scramble data-delay="200" class="inline-block">A</span>

                <!-- SPASI -->
                <span class="inline-block w-[0.35em]"></span>

                <!-- WILANDA -->
                <span data-scramble data-delay="100" class="inline-block">W</span>
                <span data-scramble data-delay="220" class="inline-block">I</span>
                <span data-scramble data-delay="60" class="inline-block">L</span>
                <span data-scramble data-delay="300" class="inline-block">A</span>
                <span data-scramble data-delay="150" class="inline-block">N</span>
                <span data-scramble data-delay="250" class="inline-block">D</span>
                <span data-scramble data-delay="180" class="inline-block">A</span>
            </a>
        </div>

        {{-- Center: Nav Links --}}
        <div class="flex items-center gap-4 md:gap-6 text-[10px] md:text-[11px] uppercase text-zinc-500 overflow-x-auto no-scrollbar py-1">
            <a href="#about" class="hover:text-zinc-100 transition whitespace-nowrap">[ ABOUT ]</a>
            <a href="#stack" class="hover:text-zinc-100 transition whitespace-nowrap">[ STACK ]</a>
            <a href="#projects" class="hover:text-zinc-100 transition whitespace-nowrap">[ PROJECTS ]</a>
            <a href="#contact" class="hover:text-zinc-100 transition whitespace-nowrap">[ CONTACT ]</a>
        </div>

        {{-- Right: Status --}}
        <div class="hidden sm:flex items-center gap-2.5 text-[11px] text-zinc-500 uppercase shrink-0">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
            <span>INDONESIA</span>
        </div>

    </div>
</nav>
