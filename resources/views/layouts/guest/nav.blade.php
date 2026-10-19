
{{--------------------------------------------------------------------------------------------------------*
*| <meta_config>*
*| @path : resources/views/livewire/pages/portfolio/navigation.blade.php*
*| @usage : Portfolio Navigation — Desktop Section Navigation, Mobile Navigation & Appearance Control*
*| @type : Navigation Component*
*|*
*| @expected_data : [portfolio sections]*
*| @expected_events : [section visibility]*
*| @techstack : Laravel, Livewire, Volt, Alpine, Flux UI, Tailwind CSS*
*| @convention : Yogawilanda Documentation v1.1.6*
*--------------------------------------------------------------------------------------------------------}}

<div data-portfolio-navigation>
    @php
        $isHome = request()->routeIs('home');

        $sections = [
            'intro' => [
                'label' => __('portfolio.nav.about'),
                'mobile' => 'Intro',
            ],
            'stack' => [
                'label' => __('portfolio.nav.capabilities'),
                'mobile' => 'Stacks',
            ],
            'projects' => [
                'label' => __('portfolio.nav.work'),
                'mobile' => 'Projects',
            ],
            'contact' => [
                'label' => __('portfolio.nav.contact'),
                'mobile' => 'Contact',
            ],
        ];
    @endphp

    {{-- Top Right Utilities --}}
    <div class="fixed right-6 top-6 z-50 flex items-center gap-2">
        <flux:dropdown x-data align="end">
            <flux:button
                variant="subtle"
                square
                class="group size-9"
                aria-label="Preferred color scheme"
            >
                <flux:icon.sun
                    x-cloak
                    x-show="$flux.appearance === 'light'"
                    variant="mini"
                    class="text-zinc-500 dark:text-zinc-300"
                />

                <flux:icon.moon
                    x-cloak
                    x-show="$flux.appearance === 'dark'"
                    variant="mini"
                    class="text-zinc-500 dark:text-zinc-300"
                />

                <flux:icon.moon
                    x-cloak
                    x-show="$flux.appearance === 'system' && $flux.dark"
                    variant="mini"
                />

                <flux:icon.sun
                    x-cloak
                    x-show="$flux.appearance === 'system' && ! $flux.dark"
                    variant="mini"
                />
            </flux:button>

            <flux:menu>
                <flux:menu.item
                    icon="sun"
                    x-on:click="$flux.appearance = 'light'"
                >
                    Light
                </flux:menu.item>

                <flux:menu.item
                    icon="moon"
                    x-on:click="$flux.appearance = 'dark'"
                >
                    Dark
                </flux:menu.item>

                <flux:menu.item
                    icon="computer-desktop"
                    x-on:click="$flux.appearance = 'system'"
                >
                    System
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </div>

    {{-- Desktop Section Navigation --}}
    <nav
        class="fixed right-6 top-1/2 z-50 hidden -translate-y-1/2 lg:block"
        aria-label="Section navigation"
    >
        <div class="flex flex-col items-end gap-3">
            @foreach ($sections as $hash => $section)
                <a
                    href="{{ $isHome ? "#{$hash}" : route('home') . "#{$hash}" }}"
                    data-section="{{ $hash }}"
                    data-active="false"
                    class="nav-link group flex items-center gap-3 py-1 text-sm font-medium text-zinc-400 transition-colors dark:text-zinc-600 data-[active=true]:text-zinc-950 dark:data-[active=true]:text-white"
                >
                    <span class="nav-label transition-colors duration-300">
                        {{ $section['label'] }}
                    </span>

                    <span
                        class="nav-indicator h-px w-8 origin-right scale-x-[0.625] bg-zinc-300 transition-[transform,background-color] duration-300 dark:bg-zinc-700 data-[active=true]:scale-x-100 data-[active=true]:bg-zinc-950 dark:data-[active=true]:bg-white"
                        aria-hidden="true"
                    ></span>
                </a>
            @endforeach
        </div>
    </nav>

    {{-- Mobile Navigation --}}
    <nav
        class="fixed inset-x-0 bottom-5 z-50 flex justify-center px-4 lg:hidden"
        aria-label="Mobile section navigation"
    >
        <div
            class="flex items-center gap-1 rounded-xl border border-zinc-200/80 bg-white/85 p-1.5 shadow-lg shadow-zinc-950/5 backdrop-blur-md dark:border-zinc-800/80 dark:bg-zinc-950/85 dark:shadow-black/20"
        >
            @foreach ($sections as $hash => $section)
                <a
                    href="{{ $isHome ? "#{$hash}" : route('home') . "#{$hash}" }}"
                    data-section="{{ $hash }}"
                    data-active="false"
                    class="nav-link flex h-8 min-w-8 items-center justify-center rounded-lg px-2 text-[10px] font-medium text-zinc-400 transition-colors dark:text-zinc-600 data-[active=true]:text-zinc-950 dark:data-[active=true]:text-white"
                >
                    {{ $section['mobile'] }}
                </a>
            @endforeach

            <span
                class="mx-1 h-4 w-px bg-zinc-200 dark:bg-zinc-800"
                aria-hidden="true"
            ></span>

            {{-- Mobile Appearance --}}
            <flux:dropdown x-data align="end">
                <flux:button
                    variant="subtle"
                    square
                    class="size-8 rounded-lg text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-900 dark:hover:text-zinc-100"
                    aria-label="Preferred color scheme"
                >
                    <flux:icon.sun
                        x-cloak
                        x-show="$flux.appearance === 'light'"
                        variant="mini"
                    />

                    <flux:icon.moon
                        x-cloak
                        x-show="$flux.appearance === 'dark'"
                        variant="mini"
                    />

                    <flux:icon.moon
                        x-cloak
                        x-show="$flux.appearance === 'system' && $flux.dark"
                        variant="mini"
                    />

                    <flux:icon.sun
                        x-cloak
                        x-show="$flux.appearance === 'system' && ! $flux.dark"
                        variant="mini"
                    />
                </flux:button>

                <flux:menu>
                    <flux:menu.item
                        icon="sun"
                        x-on:click="$flux.appearance = 'light'"
                    >
                        Light
                    </flux:menu.item>

                    <flux:menu.item
                        icon="moon"
                        x-on:click="$flux.appearance = 'dark'"
                    >
                        Dark
                    </flux:menu.item>

                    <flux:menu.item
                        icon="computer-desktop"
                        x-on:click="$flux.appearance = 'system'"
                    >
                        System
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </div>
    </nav>
</div>

<script>
(() => {
    'use strict';

    const stateKey = '__ywPortfolioNavigation';

    const state = window[stateKey] || (window[stateKey] = {
        root: null,
        observer: null,
        cleanup: null,
        signature: '',
        listenerBound: false,
    });

    function destroyObserver() {
        state.observer?.disconnect();
        state.observer = null;

        state.cleanup?.();
        state.cleanup = null;
    }

    function initializeNavigation() {
        const root = document.querySelector('[data-portfolio-navigation]');

        if (!root) {
            destroyObserver();
            state.root = null;
            state.signature = '';
            return;
        }

        const isHome = @json($isHome);

        const links = Array.from(
            root.querySelectorAll('.nav-link[data-section]')
        );

        if (!isHome || links.length === 0) {
            destroyObserver();
            state.root = root;
            state.signature = '';
            return;
        }

        const sectionIds = [
            ...new Set(links.map((link) => link.dataset.section)),
        ];

        const sections = sectionIds
            .map((id) => document.getElementById(id))
            .filter(Boolean);

        const signature = [
            ...links,
            ...sections,
        ].map((element) => {
            if (!element.dataset.navIdentity) {
                element.dataset.navIdentity =
                    Math.random().toString(36).slice(2);
            }

            return element.dataset.navIdentity;
        }).join('|');

        if (
            state.root === root &&
            state.signature === signature &&
            state.observer
        ) {
            return;
        }

        destroyObserver();

        state.root = root;
        state.signature = signature;

        if (sections.length === 0) {
            return;
        }

        const validIds = new Set(
            sections.map((section) => section.id)
        );

        const setActive = (id) => {
            links.forEach((link) => {
                link.dataset.active =
                    link.dataset.section === id ? 'true' : 'false';

                if (link.dataset.active === 'true') {
                    link.setAttribute('aria-current', 'location');
                } else {
                    link.removeAttribute('aria-current');
                }
            });
        };

        const wrapper = document.getElementById('vertical-wrapper');

        const isScrollable = (element) => {
            if (!element) {
                return false;
            }

            const style = window.getComputedStyle(element);

            return (
                /^(auto|scroll|overlay)$/.test(style.overflowY) &&
                element.scrollHeight > element.clientHeight + 1
            );
        };

        const scrollRoot = isScrollable(wrapper) ? wrapper : null;

        const getActivationLine = () => {
            if (scrollRoot) {
                const rect = scrollRoot.getBoundingClientRect();

                return rect.top + scrollRoot.clientHeight * 0.35;
            }

            return window.innerHeight * 0.35;
        };

        const getDistance = (section) => {
            const rect = section.getBoundingClientRect();
            const line = getActivationLine();

            if (rect.top <= line && rect.bottom >= line) {
                return 0;
            }

            return Math.min(
                Math.abs(rect.top - line),
                Math.abs(rect.bottom - line)
            );
        };

        const hash = decodeURIComponent(
            window.location.hash.slice(1)
        );

        const initialSection = validIds.has(hash)
            ? hash
            : sections.reduce((closest, section) => {
                return getDistance(section) < getDistance(closest)
                    ? section
                    : closest;
            }, sections[0]);

        setActive(initialSection);

        if (!('IntersectionObserver' in window)) {
            return;
        }

        const intersecting = new Map();

        const observer = new IntersectionObserver((entries) => {
            for (const entry of entries) {
                if (entry.isIntersecting) {
                    intersecting.set(entry.target, entry);
                } else {
                    intersecting.delete(entry.target);
                }
            }

            if (intersecting.size === 0) {
                return;
            }

            let activeEntry = null;
            let bestDistance = Infinity;

            for (const entry of intersecting.values()) {
                const distance = getDistance(entry.target);

                if (
                    distance < bestDistance ||
                    (
                        distance === bestDistance &&
                        entry.intersectionRatio >
                            (activeEntry?.intersectionRatio ?? -1)
                    )
                ) {
                    bestDistance = distance;
                    activeEntry = entry;
                }
            }

            if (activeEntry) {
                setActive(activeEntry.target.id);
            }
        }, {
            root: scrollRoot,
            threshold: [0, 0.25, 0.5, 0.75, 1],
        });

        sections.forEach((section) => observer.observe(section));

        state.observer = observer;

        const handleHashChange = () => {
            const id = decodeURIComponent(
                window.location.hash.slice(1)
            );

            if (validIds.has(id)) {
                setActive(id);
            }
        };

        window.addEventListener('hashchange', handleHashChange, {
            passive: true,
        });

        state.cleanup = () => {
            window.removeEventListener('hashchange', handleHashChange);
        };
    }

    if (!state.listenerBound) {
        document.addEventListener(
            'livewire:navigated',
            initializeNavigation
        );

        state.listenerBound = true;
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initializeNavigation,
            { once: true }
        );
    } else {
        initializeNavigation();
    }
})();
</script>
