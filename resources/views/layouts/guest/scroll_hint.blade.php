<button
    onclick="document.getElementById('horizontal-wrapper').scrollBy({ left: window.innerWidth, behavior: 'smooth' })"
   class="fixed bottom-24 right-6 z-40 hidden items-center gap-3 rounded-full border border-zinc-200 bg-white/80 px-3 py-1.5 font-mono text-[10px] uppercase tracking-widest text-zinc-600 transition hover:text-emerald-500 backdrop-blur-sm group md:right-12 md:flex dark:border-zinc-700 dark:bg-zinc-950/40 dark:text-zinc-400"
>
    <span>[ SCROLL TO MOVE ]</span>
   <div class="flex h-6 w-6 items-center justify-center rounded-full border border-zinc-300 text-zinc-500 transition group-hover:border-emerald-500/50 group-hover:text-emerald-500 dark:border-zinc-700 dark:text-zinc-400">
        &rarr;
    </div>
</button>
