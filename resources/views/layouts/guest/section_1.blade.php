<section id="intro" class="flex min-h-screen items-center bg-white dark:bg-zinc-950">
    <div class="mx-auto w-full max-w-6xl px-6 py-24 lg:px-8">

        <div class="max-w-4xl">

            {{-- Eyebrow --}}
            <div class="mb-8 flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400">
                <span class="h-px w-8 bg-zinc-300 dark:bg-zinc-700"></span>
                <span>{{ __('portfolio.hero.eyebrow') }}</span>
            </div>

            {{-- Identity --}}
            <p class="mb-4 text-base font-medium text-zinc-500 dark:text-zinc-400">
                {{ __('portfolio.hero.name') }}
            </p>

            {{-- Main heading --}}
            <h1
                class="max-w-4xl text-5xl font-semibold tracking-tight text-zinc-950 dark:text-white sm:text-6xl lg:text-7xl">
                {{ __('portfolio.hero.title') }}

                <span class="block text-zinc-400 dark:text-zinc-600">
                    {{ __('portfolio.hero.title_accent') }}
                </span>
            </h1>

            {{-- Problem / Outcome --}}
            <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300 sm:text-xl">
                {{ __('portfolio.hero.description') }}
            </p>

            {{-- Actions --}}
            <div class="mt-10 flex flex-wrap gap-3">

                <a href="#projects"
                    class="inline-flex items-center justify-center rounded-lg bg-zinc-950 px-5 py-3 text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                    {{ __('portfolio.hero.actions.work') }}
                    <span class="ml-2">→</span>
                </a>

                {{-- Get to know me --}}
                <a href="{{ route('about') }}"
                    class="inline-flex items-center justify-center rounded-lg border border-zinc-200 px-5 py-3 text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                    {{ __('portfolio.hero.actions.aboutme') }}
                </a>

            </div>

        </div>

        {{-- Capability overview --}}
        <div class="mt-24 border-t border-zinc-200 dark:border-zinc-800">

            <div class="grid divide-y divide-zinc-200 dark:divide-zinc-800 md:grid-cols-3 md:divide-x md:divide-y-0">

                {{-- Engineering --}}
                <div class="py-8 md:pr-8">
                    <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.hero.capabilities.engineering.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.engineering.description') }}
                    </p>
                </div>

                {{-- Product --}}
                <div class="py-8 md:px-8">
                    <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.hero.capabilities.product.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.product.description') }}
                    </p>
                </div>

                {{-- Approach --}}
                <div class="py-8 md:pl-8">
                    <p class="text-sm font-medium uppercase tracking-wider text-zinc-400">
                        {{ __('portfolio.hero.capabilities.approach.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.approach.description') }}
                    </p>
                </div>

            </div>
        </div>

        {{-- Background note --}}
        <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-zinc-400">
            <span>{{ __('portfolio.hero.meta.background') }}</span>

            <span class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.full_stack') }}</span>

            <span class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.product_minded') }}</span>

            <span class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.role_to_chase') }}</span>
        </div>

    </div>
</section>
