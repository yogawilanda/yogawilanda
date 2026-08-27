<x-layouts::guest>
    {{-- STEP 001: ABOUT / HERO --}}
    <section id="about"
        class="w-full h-full min-w-full flex-shrink-0 snap-center flex flex-col justify-center items-center px-6 md:px-12 pt-16 pb-12 relative text-zinc-300">
        <span class="text-[11px] text-zinc-500 tracking-widest uppercase mb-3 font-mono" data-scramble
            data-delay="0">[STEP 001]</span>

        <h1 class="text-3xl md:text-5xl font-extrabold mb-8 tracking-tight leading-tight text-white text-center">
            <span class="block" data-scramble data-delay="150" data-glitch-loop="true">Software Engineer</span>
            <span class="text-zinc-400 block" data-scramble data-delay="300" data-glitch-loop="true">& Full-Stack
                Developer.</span>
        </h1>

        <!-- Code Window Box -->
        <div
            class="w-full max-w-2xl bg-zinc-950/70 border border-zinc-800 text-left shadow-2xl rounded-sm overflow-hidden backdrop-blur-sm">
            <div
                class="border-b border-zinc-800 px-4 py-3 flex justify-between items-center bg-zinc-900/50 text-[11px]">
                <div class="flex gap-2 items-center">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></span>
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500/80"></span>
                    <span class="ml-2 text-zinc-400 font-mono" data-scramble data-delay="450">profile.json</span>
                </div>
                <div class="text-zinc-500 tracking-widest uppercase text-[10px] font-mono" data-scramble
                    data-delay="600">
                    STATUS: AVAILABLE_FOR_WORK
                </div>
            </div>

            <div class="p-6 text-xs md:text-sm leading-relaxed font-mono space-y-4">
                <p><span class="text-emerald-500">$</span> <span class="text-white font-bold" data-scramble
                        data-delay="750">whoami</span></p>
                <p class="text-zinc-400" data-scramble data-delay="900" data-speed="20">
                    Yoga Wilanda — Berbasis di Surabaya, Indonesia. Berfokus pada pengembangan sistem web & mobile skala
                    tinggi, arsitektur database multi-tenant, dan optimalisasi aplikasi custom tanpa rigid template.
                </p>
                <div class="pt-2 flex items-center gap-2 text-[11px] text-zinc-500">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span data-scramble data-delay="1100">Surabaya, ID • Telkom University</span>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.section2_4')
</x-layouts::guest>
