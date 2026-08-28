{{-- Yoga Wilanda --}}
{{-- Laravel 13: Flux UI--}}
<x-layouts::app :title="__('Dashboard')">

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            {{-- refactor this container since it's seems repetitively defined --}}
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <div id="react-root"></div>
            </div>

            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full text-neutral-400/60 dark:text-neutral-600/10" />
            </div>

            <div class="relative  overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
    {{-- Background Pattern --}}
    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />

    {{-- Foreground Content --}}
    <div class="relative z-10 flex h-full items-center justify-center p-4">
        <span class="font-semibold text-neutral-800 dark:text-neutral-200">Test</span>
    </div>
</div>
        </div>
        {{-- this is big container, seems also need to be refactored, --}}
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app>
