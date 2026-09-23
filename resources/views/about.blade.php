<x-layouts::guest>
    <section id="about" class="flex min-h-screen items-center bg-white dark:bg-zinc-950">
        <div class="mx-auto w-full max-w-6xl px-6 py-24 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-[240px_1fr] lg:items-center lg:gap-20">

                {{-- Identity --}}
                <div>
                    <div class="mb-6 flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400">
                        <span class="h-px w-8 bg-zinc-300 dark:bg-zinc-700"></span>
                        <span>About me</span>
                    </div>

                    <div class="aspect-square w-36 overflow-hidden bg-zinc-100 dark:bg-zinc-900">
                        <img src="{{ asset('yogawilanda.png') }}" alt="Yoga Wilanda"
                            class="h-full w-full object-cover grayscale">
                    </div>

                    <div class="mt-5">
                        <p class="text-lg font-medium text-zinc-950 dark:text-white">
                            Yoga Wilanda
                        </p>

                        <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">
                            Software Engineer
                        </p>

                        <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">
                            June 6, 1996
                        </p>
                    </div>
                </div>


                {{-- Story --}}
                <div class="max-w-3xl">

                    <h1
                        class="text-4xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-5xl lg:text-6xl">
                        The long way around to
                        <span class="text-zinc-400 dark:text-zinc-600">
                            software.
                        </span>
                    </h1>

                    <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300 sm:text-xl">
                        Software wasn't the first thing on the résumé. There were years of
                        sales, marketing, business, and different fields of study along the way.
                    </p>

                    <p class="mt-5 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300 sm:text-xl">
                        Through all those changes, technology kept showing up in the gaps.
                        Learning, building things, and following that curiosity whenever
                        there was time.
                    </p>

                    <p class="mt-5 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300 sm:text-xl">
                        Eventually, that side interest became the path forward. The detour led
                        back to university, this time for Software Engineering, and finally gave
                        a long-awaited dream a place to become real.
                    </p>

                    {{-- Context --}}
                    <div class="mt-10 border-t border-zinc-200 pt-8 dark:border-zinc-800">

                        <p class="max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-300">
                            The unconventional path is part of the story.
                            <span class="font-medium text-zinc-950 dark:text-white">
                                It's also part of the context.
                            </span>
                        </p>

                        <p class="mt-4 max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-300">
                            Different people, problems, and ways of working shaped how engineering
                            is approached today.
                        </p>

                    </div>

                    {{-- Focus --}}
                    <div class="mt-10 flex flex-wrap gap-x-6 gap-y-2 text-sm text-zinc-400">
                        <span>Software Engineering</span>
                        <span>·</span>
                        <span>Product Thinking</span>
                        <span>·</span>
                        <span>Problem Solving</span>
                    </div>

                </div>

            </div>

        </div>
    </section>
</x-layouts::guest>
