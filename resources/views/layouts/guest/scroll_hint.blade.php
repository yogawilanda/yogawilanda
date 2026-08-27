<button
    onclick="document.getElementById('horizontal-wrapper').scrollBy({ left: window.innerWidth, behavior: 'smooth' })"
    class="fixed bottom-6 right-6 md:right-12 z-40 hidden md:flex items-center gap-3 font-mono text-[10px] tracking-widest text-zinc-500 hover:text-emerald-400 transition uppercase select-none cursor-pointer group bg-zinc-950/40 backdrop-blur-sm px-3 py-1.5 rounded-full border border-zinc-900"
>
    <span>[ SCROLL TO MOVE ]</span>
    <div class="w-6 h-6 rounded-full border border-zinc-800 group-hover:border-emerald-500/50 flex items-center justify-center text-zinc-400 group-hover:text-emerald-400 transition">
        &rarr;
    </div>
</button>
