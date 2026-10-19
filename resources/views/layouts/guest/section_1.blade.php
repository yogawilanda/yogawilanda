<section id="intro" aria-labelledby="intro-title" class="flex min-h-screen items-center bg-white dark:bg-zinc-950">
    <div class="mx-auto w-full max-w-6xl px-5 py-16 sm:px-8 sm:py-20 lg:px-6 lg:py-24">

        {{-- Hero content --}}
        <div class="max-w-4xl">

            {{-- Eyebrow --}}
            <div class="mb-6 flex items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400 sm:mb-8">
                <span>{{ __('portfolio.hero.eyebrow') }}</span>
            </div>

            {{-- Identity --}}
            <p class="mb-3 text-sm font-medium text-zinc-500 dark:text-zinc-400 sm:mb-4 sm:text-base">
                {{ __('portfolio.hero.name') }}
            </p>

            {{-- Main heading --}}
            <h1 id="intro-title"
                class="max-w-4xl text-4xl font-semibold leading-[1.1] tracking-tight text-zinc-950 dark:text-white min-[400px]:text-5xl sm:text-6xl lg:text-7xl">
                {{ __('portfolio.hero.title') }}

                <span class="mt-1 block text-zinc-400 dark:text-zinc-600">
                    {{ __('portfolio.hero.title_accent') }}
                </span>
            </h1>

            {{-- Problem / Outcome --}}
            <p
                class="mt-6 max-w-2xl text-base leading-7 text-zinc-600 dark:text-zinc-300 sm:mt-8 sm:text-lg sm:leading-8 lg:text-xl">
                {{ __('portfolio.hero.description') }}
            </p>


            {{-- Actions --}}
            <div
                class="mt-8 flex flex-col items-stretch gap-3 min-[420px]:flex-row min-[420px]:flex-wrap min-[420px]:items-center sm:mt-10">

                {{-- Primary: Work --}}
                <a href="#projects"
                    class="inline-flex min-h-12 items-center justify-center rounded-lg bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                    {{ __('portfolio.hero.actions.work') }}
                    <span aria-hidden="true" class="ml-2">→</span>
                </a>

                {{-- Secondary: Services --}}
                {{-- <a href="#" --}}
                <a href="{{ route('services') }}"
                    class="inline-flex min-h-12 items-center justify-center rounded-lg border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                     {{ __('portfolio.hero.actions.services') }}
                </a>
            </div>


        </div>

        {{-- Capability overview --}}
        <div class="mt-16 border-t border-zinc-200 dark:border-zinc-800 sm:mt-20 lg:mt-24">

            <div
                class="grid grid-cols-1 divide-y divide-zinc-200 dark:divide-zinc-800 md:grid-cols-3 md:divide-x md:divide-y-0">

                {{-- Engineering --}}
                <div class="py-6 md:py-8 md:pr-6 lg:pr-8">
                    <p class="text-xs font-medium uppercase tracking-wider text-zinc-400 sm:text-sm">
                        {{ __('portfolio.hero.capabilities.engineering.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.engineering.description') }}
                    </p>
                </div>

                {{-- Product --}}
                <div class="py-6 md:px-6 md:py-8 lg:px-8">
                    <p class="text-xs font-medium uppercase tracking-wider text-zinc-400 sm:text-sm">
                        {{ __('portfolio.hero.capabilities.product.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.product.description') }}
                    </p>
                </div>

                {{-- Approach --}}
                <div class="py-6 md:py-8 md:pl-6 lg:pl-8">
                    <p class="text-xs font-medium uppercase tracking-wider text-zinc-400 sm:text-sm">
                        {{ __('portfolio.hero.capabilities.approach.title') }}
                    </p>

                    <p class="mt-3 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        {{ __('portfolio.hero.capabilities.approach.description') }}
                    </p>
                </div>

            </div>
        </div>

        {{-- Background note --}}
        <div
            class="mt-8 flex flex-wrap items-center gap-x-3 gap-y-2 text-xs leading-5 text-zinc-400 sm:mt-10 sm:gap-x-5 sm:text-sm">

            <span>{{ __('portfolio.hero.meta.background') }}</span>

            <span aria-hidden="true" class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.full_stack') }}</span>

            <span aria-hidden="true" class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.product_minded') }}</span>

            <span aria-hidden="true" class="hidden sm:inline">·</span>

            <span>{{ __('portfolio.hero.meta.role_to_chase') }}</span>

        </div>

    </div>
</section>
