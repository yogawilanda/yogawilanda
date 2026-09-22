<div>
    {{-- Desktop Side Navigation --}}

    {{-- Top Right Utilities --}}
    <div class="fixed right-6 top-6 z-50 flex items-center gap-2">

        {{-- Appearance --}}
        <flux:dropdown x-data align="end">
            <flux:button
                variant="subtle"
                square
                class="group size-9"
                aria-label="Preferred color scheme"
            >
                {{-- Light --}}
                <flux:icon.sun
                    x-show="$flux.appearance === 'light'"
                    variant="mini"
                    class="text-zinc-500 dark:text-zinc-300"
                />

                {{-- Dark --}}
                <flux:icon.moon
                    x-show="$flux.appearance === 'dark'"
                    variant="mini"
                    class="text-zinc-500 dark:text-zinc-300"
                />

                {{-- System + currently dark --}}
                <flux:icon.moon
                    x-show="$flux.appearance === 'system' && $flux.dark"
                    variant="mini"
                />

                {{-- System + currently light --}}
                <flux:icon.sun
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

            @foreach ([
                'about' => __('portfolio.nav.about'),
                'stack' => __('portfolio.nav.capabilities'),
                'projects' => __('portfolio.nav.work'),
                'contact' => __('portfolio.nav.contact'),
            ] as $hash => $label)

                <a
                    href="#{{ $hash }}"
                    data-section="{{ $hash }}"
                    class="nav-link group flex items-center gap-3 py-1 text-sm font-medium text-zinc-400 transition-colors dark:text-zinc-600"
                >
                    <span
                        class="nav-label translate-x-2 opacity-0 transition-all duration-300 group-hover:translate-x-0 group-hover:opacity-100"
                    >
                        {{ $label }}
                    </span>

                    <span
                        class="nav-indicator h-px w-5 bg-zinc-300 transition-all duration-300 dark:bg-zinc-700"
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

            @foreach ([
                'about' => 'Intro',
                'stack' => 'Stacks',
                'projects' => 'Projects',
                'contact' => 'Contacts',
            ] as $hash => $number)

            <a
                    href="#{{ $hash }}"
                    data-section="{{ $hash }}"
                    class="nav-link flex h-8 min-w-8 items-center justify-center rounded-lg px-2 text-[10px] font-medium text-zinc-400 transition dark:text-zinc-600"
                >
                    {{ $number }}
                </a>

            @endforeach


            <span
                class="mx-1 h-4 w-px bg-zinc-200 dark:bg-zinc-800"
            ></span>


            {{-- Mobile Appearance --}}
            <flux:dropdown x-data align="end">
                <flux:button
                    variant="subtle"
                    square
                    class="size-8 rounded-lg text-zinc-500 hover:bg-zinc-100 hover:text-zinc-900 dark:text-zinc-400 dark:hover:bg-zinc-900 dark:hover:text-zinc-100"
                    aria-label="Preferred color scheme"
                >
                    {{-- Light --}}
                    <flux:icon.sun
                        x-show="$flux.appearance === 'light'"
                        variant="mini"
                    />

                    {{-- Dark --}}
                    <flux:icon.moon
                        x-show="$flux.appearance === 'dark'"
                        variant="mini"
                    />

                    {{-- System + currently dark --}}
                    <flux:icon.moon
                        x-show="$flux.appearance === 'system' && $flux.dark"
                        variant="mini"
                    />

                    {{-- System + currently light --}}
                    <flux:icon.sun
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


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container =
                document.getElementById('vertical-wrapper');

            const links =
                document.querySelectorAll('.nav-link');

            const sections =
                document.querySelectorAll('section[id]');

            if (!container || !links.length || !sections.length) {
                return;
            }


            const setActive = (id) => {
                links.forEach((link) => {
                    const isActive =
                        link.dataset.section === id;

                    const indicator =
                        link.querySelector('.nav-indicator');

                    const label =
                        link.querySelector('.nav-label');


                    link.classList.toggle(
                        'text-zinc-950',
                        isActive
                    );

                    link.classList.toggle(
                        'dark:text-white',
                        isActive
                    );


                    if (indicator) {
                        indicator.classList.toggle(
                            'w-8',
                            isActive
                        );

                        indicator.classList.toggle(
                            'bg-zinc-950',
                            isActive
                        );

                        indicator.classList.toggle(
                            'dark:bg-white',
                            isActive
                        );

                        indicator.classList.toggle(
                            'bg-zinc-300',
                            !isActive
                        );

                        indicator.classList.toggle(
                            'dark:bg-zinc-700',
                            !isActive
                        );
                    }


                    if (label) {
                        label.classList.toggle(
                            'opacity-100',
                            isActive
                        );

                        label.classList.toggle(
                            'translate-x-0',
                            isActive
                        );
                    }
                });
            };


            const observer =
                new IntersectionObserver(
                    (entries) => {
                        const visible =
                            entries
                                .filter(
                                    (entry) =>
                                        entry.isIntersecting
                                )
                                .sort(
                                    (a, b) =>
                                        b.intersectionRatio -
                                        a.intersectionRatio
                                );


                        if (visible.length) {
                            setActive(
                                visible[0].target.id
                            );
                        }
                    },
                    {
                        root: container,
                        threshold: [
                            0.25,
                            0.5,
                            0.75
                        ],
                    }
                );


            sections.forEach((section) => {
                observer.observe(section);
            });


            setActive(sections[0].id);
        });
    </script>

</div>
