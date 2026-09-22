<?php

return [

    'nav' => [
        'about' => 'Hello',
        'capabilities' => 'What I Bring',
        'work' => 'What I’m Building',
        'contact' => 'Get in Touch',
    ],


    'hero' => [

        'eyebrow' => '01 / HELLO',

        'name' => 'Yoga Wilanda',

        'title' => 'Better products start with',
        'title_accent' => 'the right problem.',

        'description' => 'Turning ideas, challenges, and opportunities into thoughtful digital products. Combining technology, product thinking, and a practical approach to getting things done.',

        'actions' => [
            'work' => 'Explore my work',
            'contact' => 'Get in touch',
        ],

        'capabilities' => [

            'engineering' => [
                'title' => 'Engineering',
                'description' => 'Solid engineering turns product ideas into reliable software. across interfaces, applications, APIs, data, and the systems behind them.',
            ],

            'product' => [
                'title' => 'Product',
                'description' => 'The problem comes first: understanding the need, defining the outcome, and finding a practical solution worth building.',
            ],

            'approach' => [
                'title' => 'Approach',
                'description' => 'Adaptable to different problems, technologies, and ways of working. choosing the tools and approach that fit the work.',
            ],

        ],

        'meta' => [
            'background' => 'Software Engineer',
            'full_stack' => 'Full-stack Developer',
            'product_minded' => 'Product-minded',
            'role_to_chase' => 'Product Engineering',
        ],

    ],

    'capabilities' => [

        'eyebrow' => '02 / WHAT I BRING',

        'title' => 'From ideas to',
        'title_accent' => 'something useful.',

        'description' => 'Different problems call for different ways of thinking. The work often moves between understanding what matters, finding a practical direction, and making it real.',

        'items' => [

            'build' => [
                'label' => 'Making',
                'title' => 'Build',
                'description' => 'Turn a direction into something people can actually use. from the first interface to the systems behind it.',
                'points' => [
                    'Web and mobile products',
                    'APIs and application systems',
                    'Interfaces and user experiences',
                ],
            ],

            'solve' => [
                'label' => 'Thinking',
                'title' => 'Solve',
                'description' => 'Step back from the obvious answer, understand what is getting in the way, and find a way forward.',
                'points' => [
                    'Breaking down complex problems',
                    'Finding root causes',
                    'Making practical trade-offs',
                ],
            ],

            'shape' => [
                'label' => 'Product',
                'title' => 'Shape',
                'description' => 'Good products are not just about what can be built, but what is worth building in the first place.',
                'points' => [
                    'Understanding people and their needs',
                    'Exploring and prioritizing ideas',
                    'Turning concepts into clear directions',
                ],
            ],

            'ship' => [
                'label' => 'Execution',
                'title' => 'Move',
                'description' => 'Keep things moving from an early idea to something tangible, learning and adapting along the way.',
                'points' => [
                    'Working independently',
                    'Iterating quickly',
                    'Adapting to new tools and technologies',
                ],
            ],

        ],

        'tools' => [
            'label' => 'Tools I work with',
            'list' => 'Laravel · Livewire · React · Flutter · PHP · JavaScript · MySQL · Java',
        ],

    ],

    'work' => [

        'eyebrow' => '03 / WHAT I’M BUILDING',

        'title' => 'Products shaped by',
        'title_accent' => 'real needs.',

        'description' => 'A selection of products and experiments at different stages. from something actively being developed to ideas currently on hold.',

        'context' => [
            'label' => 'Why it exists',
            'focus' => 'Current focus',
        ],

        'items' => [

            'download_rumah' => [
                'type' => 'Product',
                'status' => 'Active',

                'description' => 'A property discovery product designed to help people clarify what they need before connecting with property providers.',

                'context' => 'Built from the observation that property discovery often starts with listings and sales conversations, rather than the needs of the person searching. DownloadRumah explores a different approach: understand intent first, then help people find a reasonable direction.',

                'points' => [
                    'Understanding user intent before matching',
                    'Designing trust into the discovery process',
                    'Building and validating a real product',
                ],
            ],

            'ngundang' => [
                'type' => 'Product',
                'status' => 'On hold',

                'description' => 'A product exploring a simpler way to create and manage digital invitations.',
            ],

            'void_calls' => [
                'type' => 'Experiment',
                'status' => 'On hold',

                'description' => 'A real-time communication experiment exploring peer-to-peer voice and text communication on the web.',
            ],

        ],

        'earlier' => [
            'label' => 'Earlier work',
            'description' => 'Previous projects and experiments are available on GitHub.',
        ],

        'actions' => [
            'visit' => 'Visit product',
            'github' => 'Explore GitHub',
        ],

    ],

];
