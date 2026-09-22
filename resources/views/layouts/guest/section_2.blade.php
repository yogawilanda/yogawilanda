{{-- STEP 002: WHAT I BRING --}}
<section
    id="stack"
    class="relative flex min-h-screen flex-col justify-center px-6 py-24 text-zinc-700 dark:text-zinc-300 md:px-12"
>
    <div class="mx-auto w-full max-w-6xl">

        {{-- Section heading --}}
        <div class="max-w-3xl">

            <div class="mb-8 flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400">
                <span class="h-px w-8 bg-zinc-300 dark:bg-zinc-700"></span>

                <span>{{ __('portfolio.capabilities.eyebrow') }}</span>
            </div>

            <h2
                class="text-4xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-5xl"
            >
                {{ __('portfolio.capabilities.title') }}

                <span class="text-zinc-400 dark:text-zinc-600">
                    {{ __('portfolio.capabilities.title_accent') }}
                </span>
            </h2>

            <p
                class="mt-6 max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-400 sm:text-lg"
            >
                {{ __('portfolio.capabilities.description') }}
            </p>

        </div>


        {{-- Capabilities --}}
        <div
            class="mt-16 grid gap-px overflow-hidden rounded-xl border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 md:grid-cols-2"
        >

            {{-- 01 --}}
            <div class="bg-white p-8 dark:bg-zinc-950 md:p-10">

                <div class="flex items-start justify-between">
                    <span class="text-sm font-medium text-zinc-400">
                        01
                    </span>

                    <span class="text-sm uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.capabilities.items.build.label') }}
                    </span>
                </div>

                <h3
                    class="mt-10 text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white"
                >
                    {{ __('portfolio.capabilities.items.build.title') }}
                </h3>

                <p
                    class="mt-4 max-w-md text-sm leading-6 text-zinc-600 dark:text-zinc-400"
                >
                    {{ __('portfolio.capabilities.items.build.description') }}
                </p>

                <ul class="mt-8 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                    @foreach (__('portfolio.capabilities.items.build.points') as $point)
                        <li class="flex gap-3">
                            <span class="text-zinc-400">→</span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

            </div>


            {{-- 02 --}}
            <div class="bg-white p-8 dark:bg-zinc-950 md:p-10">

                <div class="flex items-start justify-between">
                    <span class="text-sm font-medium text-zinc-400">
                        02
                    </span>

                    <span class="text-sm uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.capabilities.items.solve.label') }}
                    </span>
                </div>

                <h3
                    class="mt-10 text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white"
                >
                    {{ __('portfolio.capabilities.items.solve.title') }}
                </h3>

                <p
                    class="mt-4 max-w-md text-sm leading-6 text-zinc-600 dark:text-zinc-400"
                >
                    {{ __('portfolio.capabilities.items.solve.description') }}
                </p>

                <ul class="mt-8 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                    @foreach (__('portfolio.capabilities.items.solve.points') as $point)
                        <li class="flex gap-3">
                            <span class="text-zinc-400">→</span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

            </div>


            {{-- 03 --}}
            <div class="bg-white p-8 dark:bg-zinc-950 md:p-10">

                <div class="flex items-start justify-between">
                    <span class="text-sm font-medium text-zinc-400">
                        03
                    </span>

                    <span class="text-sm uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.capabilities.items.shape.label') }}
                    </span>
                </div>

                <h3
                    class="mt-10 text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white"
                >
                    {{ __('portfolio.capabilities.items.shape.title') }}
                </h3>

                <p
                    class="mt-4 max-w-md text-sm leading-6 text-zinc-600 dark:text-zinc-400"
                >
                    {{ __('portfolio.capabilities.items.shape.description') }}
                </p>

                <ul class="mt-8 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                    @foreach (__('portfolio.capabilities.items.shape.points') as $point)
                        <li class="flex gap-3">
                            <span class="text-zinc-400">→</span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

            </div>


            {{-- 04 --}}
            <div class="bg-white p-8 dark:bg-zinc-950 md:p-10">

                <div class="flex items-start justify-between">
                    <span class="text-sm font-medium text-zinc-400">
                        04
                    </span>

                    <span class="text-sm uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.capabilities.items.ship.label') }}
                    </span>
                </div>

                <h3
                    class="mt-10 text-2xl font-semibold tracking-tight text-zinc-950 dark:text-white"
                >
                    {{ __('portfolio.capabilities.items.ship.title') }}
                </h3>

                <p
                    class="mt-4 max-w-md text-sm leading-6 text-zinc-600 dark:text-zinc-400"
                >
                    {{ __('portfolio.capabilities.items.ship.description') }}
                </p>

                <ul class="mt-8 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                    @foreach (__('portfolio.capabilities.items.ship.points') as $point)
                        <li class="flex gap-3">
                            <span class="text-zinc-400">→</span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>


        {{-- Technology context --}}
        <div
            class="mt-12 flex flex-col gap-4 border-t border-zinc-200 pt-8 dark:border-zinc-800 sm:flex-row sm:items-center sm:justify-between"
        >

            <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                {{ __('portfolio.capabilities.tools.label') }}
            </p>

            <p class="text-sm text-zinc-500 dark:text-zinc-400">
                {{ __('portfolio.capabilities.tools.list') }}
            </p>

        </div>

    </div>
</section>
