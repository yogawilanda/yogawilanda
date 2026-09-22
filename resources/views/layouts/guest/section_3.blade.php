{{-- STEP 003: WHAT I'M BUILDING --}}
<section id="projects"
    class="relative flex min-h-screen shrink-0 flex-col justify-center px-6 py-24 text-zinc-700 dark:text-zinc-300 md:px-12">
    <div class="mx-auto w-full max-w-6xl">

        {{-- Section Header --}}
        <div class="max-w-3xl">

            <div class="mb-8 flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400">
                <span class="h-px w-8 bg-zinc-300 dark:bg-zinc-700"></span>

                <span>{{ __('portfolio.work.eyebrow') }}</span>
            </div>

            <h2 class="text-4xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-5xl">
                {{ __('portfolio.work.title') }}

                <span class="text-zinc-400 dark:text-zinc-600">
                    {{ __('portfolio.work.title_accent') }}
                </span>
            </h2>

            <p class="mt-6 max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-400 sm:text-lg">
                {{ __('portfolio.work.description') }}
            </p>

        </div>


        {{-- Products --}}
        <div class="mt-16 grid gap-6 md:grid-cols-2">


            {{-- DownloadRumah --}}
            <article
                class="group flex flex-col rounded-2xl border border-zinc-200 bg-white p-8 dark:border-zinc-800 dark:bg-zinc-950 md:col-span-2 md:p-10">

                <div class="flex flex-wrap items-center justify-between gap-4">

                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-zinc-400">
                            01
                        </span>

                        <span class="text-sm uppercase tracking-wider text-zinc-400">
                            {{ __('portfolio.work.items.download_rumah.type') }}
                        </span>
                    </div>

                    <span
                        class="inline-flex items-center gap-2 text-sm font-medium text-emerald-600 dark:text-emerald-400">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                        {{ __('portfolio.work.items.download_rumah.status') }}
                    </span>

                </div>


                <div class="mt-10 grid gap-10 lg:grid-cols-[1fr_0.8fr]">

                    {{-- Main --}}
                    <div>

                        <h3 class="text-3xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-4xl">
                            DownloadRumah
                        </h3>

                        <p class="mt-4 max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-400">
                            {{ __('portfolio.work.items.download_rumah.description') }}
                        </p>

                        <div class="mt-8 flex flex-wrap gap-2">
                            @foreach (['Laravel', 'Livewire', 'MySQL'] as $technology)
                            <span
                                class="rounded-full border border-zinc-200 px-3 py-1.5 text-sm text-zinc-500 dark:border-zinc-800 dark:text-zinc-400">
                                {{ $technology }}
                            </span>
                            @endforeach
                        </div>

                        <div class="mt-10">
                            <a href="https://downloadrumah.yogawilanda.com" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-sm font-medium text-zinc-950 transition-colors hover:text-emerald-600 dark:text-white dark:hover:text-emerald-400">
                                {{ __('portfolio.work.actions.visit') }}

                                <span class="transition-transform group-hover:translate-x-1">
                                    →
                                </span>
                            </a>
                        </div>

                    </div>


                    {{-- Product Context --}}
                    <div
                        class="border-t border-zinc-200 pt-8 dark:border-zinc-800 lg:border-l lg:border-t-0 lg:pl-10 lg:pt-0">

                        <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                            {{ __('portfolio.work.context.label') }}
                        </p>

                        <p class="mt-5 text-sm leading-6 text-zinc-600 dark:text-zinc-400">
                            {{ __('portfolio.work.items.download_rumah.context') }}
                        </p>

                        <div class="mt-8">
                            <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                                {{ __('portfolio.work.context.focus') }}
                            </p>

                            <ul class="mt-4 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                                @foreach (__('portfolio.work.items.download_rumah.points') as $point)
                                <li class="flex gap-3">
                                    <span class="text-zinc-400">→</span>
                                    {{ $point }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>

            </article>


            {{-- Ngundang --}}
            <article
                class="flex flex-col rounded-2xl border border-zinc-200 bg-white p-8 dark:border-zinc-800 dark:bg-zinc-950 md:p-10">

                <div class="flex items-center justify-between gap-4">

                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-zinc-400">
                            02
                        </span>

                        <span class="text-sm uppercase tracking-wider text-zinc-400">
                            {{ __('portfolio.work.items.ngundang.type') }}
                        </span>
                    </div>

                    <span class="text-sm text-zinc-400">
                        {{ __('portfolio.work.items.ngundang.status') }}
                    </span>

                </div>

                <div class="mt-10">

                    <h3 class="text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white">
                        Ngundang
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-zinc-600 dark:text-zinc-400">
                        {{ __('portfolio.work.items.ngundang.description') }}
                    </p>

                </div>

                <div class="mt-auto pt-10">

                    <div class="flex flex-wrap gap-2">
                        @foreach (['Product', 'Web'] as $technology)
                        <span
                            class="rounded-full border border-zinc-200 px-3 py-1.5 text-sm text-zinc-500 dark:border-zinc-800 dark:text-zinc-400">
                            {{ $technology }}
                        </span>
                        @endforeach
                    </div>

                </div>

            </article>


            {{-- VoidCalls --}}
            <article
                class="flex flex-col rounded-2xl border border-zinc-200 bg-white p-8 dark:border-zinc-800 dark:bg-zinc-950 md:p-10">

                <div class="flex items-center justify-between gap-4">

                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-zinc-400">
                            03
                        </span>

                        <span class="text-sm uppercase tracking-wider text-zinc-400">
                            {{ __('portfolio.work.items.void_calls.type') }}
                        </span>
                    </div>

                    <span class="text-sm text-zinc-400">
                        {{ __('portfolio.work.items.void_calls.status') }}
                    </span>

                </div>

                <div class="mt-10">

                    <h3 class="text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white">
                        VoidCalls
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-zinc-600 dark:text-zinc-400">
                        {{ __('portfolio.work.items.void_calls.description') }}
                    </p>

                </div>

                <div class="mt-auto pt-10">

                    <div class="flex flex-wrap gap-2">
                        @foreach (['WebRTC', 'Laravel', 'JavaScript'] as $technology)
                        <span
                            class="rounded-full border border-zinc-200 px-3 py-1.5 text-sm text-zinc-500 dark:border-zinc-800 dark:text-zinc-400">
                            {{ $technology }}
                        </span>
                        @endforeach
                    </div>

                </div>

            </article>

        </div>


        {{-- Earlier Work --}}
        <div
            class="mt-12 flex flex-col gap-4 border-t border-zinc-200 pt-8 dark:border-zinc-800 sm:flex-row sm:items-center sm:justify-between">

            <div>
                <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                    {{ __('portfolio.work.earlier.label') }}
                </p>

                <p class="mt-2 text-sm text-zinc-500 dark:text-zinc-400">
                    {{ __('portfolio.work.earlier.description') }}
                </p>
            </div>

            <a href="https://github.com/yogawilanda" target="_blank" rel="noopener noreferrer"
                class="inline-flex shrink-0 items-center gap-2 text-sm font-medium text-zinc-950 hover:text-emerald-600 dark:text-white dark:hover:text-emerald-400">
                {{ __('portfolio.work.actions.github') }}
                <span>↗</span>
            </a>

        </div>

    </div>
</section>
