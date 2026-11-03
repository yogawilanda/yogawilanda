    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Design Playground — Showcase</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- GSAP & ScrollTrigger CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

        <style>
            :root {
                --bg-main: #080c14;
                --bg-card: #0f172a;
                --border-color: rgba(255, 255, 255, 0.08);
                --border-highlight: rgba(2, 132, 199, 0.4);
                --text-primary: #f8fafc;
                --text-secondary: #94a3b8;
                --text-muted: #64748b;
                --accent-blue: #0284c7;
                --accent-glow: rgba(2, 132, 199, 0.15);
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                background-color: var(--bg-main);
                color: var(--text-primary);
                font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
                min-height: 100vh;
                background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
                background-size: 24px 24px;
                overflow-x: hidden;
                -webkit-font-smoothing: antialiased;
            }

            /* Ambient Glow Background */
            .ambient-glow {
                position: fixed;
                top: -15%;
                left: 50%;
                transform: translateX(-50%);
                width: 900px;
                height: 450px;
                background: radial-gradient(circle, rgba(2, 132, 199, 0.12) 0%, rgba(8, 12, 20, 0) 70%);
                pointer-events: none;
                z-index: 0;
            }

            header, main {
                position: relative;
                z-index: 1;
                width: min(1280px, calc(100% - 48px));
                margin: auto;
            }

            /* Header Styling */
            header {
                padding: 80px 0 48px;
                border-bottom: 1px solid var(--border-color);
            }

            .eyebrow {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-family: 'Space Grotesk', monospace;
                font-size: 13px;
                letter-spacing: 0.15em;
                text-transform: uppercase;
                color: var(--text-secondary);
                margin-bottom: 20px;
            }

            .eyebrow a {
                color: var(--text-primary);
                text-decoration: none;
                transition: color 0.2s ease;
            }

            .eyebrow a:hover {
                color: var(--accent-blue);
            }

            .eyebrow-badge {
                display: inline-block;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background-color: var(--accent-blue);
                box-shadow: 0 0 10px var(--accent-blue);
            }

            h1 {
                font-size: clamp(40px, 6vw, 76px);
                font-weight: 700;
                letter-spacing: -0.04em;
                line-height: 1.05;
                background: linear-gradient(180deg, #ffffff 0%, #cbd5e1 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                margin-bottom: 20px;
            }

            header p {
                max-width: 600px;
                color: var(--text-secondary);
                font-size: 16px;
                line-height: 1.7;
                font-weight: 300;
            }

            /* Toolbar Styling */
            .toolbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 20px;
                margin: 40px 0 32px;
            }

            .counter-badge {
                font-family: 'Space Grotesk', monospace;
                font-size: 13px;
                color: var(--text-secondary);
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid var(--border-color);
                padding: 8px 16px;
                border-radius: 100px;
                letter-spacing: 0.05em;
            }

            .counter-badge span {
                color: var(--accent-blue);
                font-weight: 600;
            }

            .search-wrapper {
                position: relative;
                width: min(380px, 100%);
            }

            input[type="search"] {
                width: 100%;
                padding: 12px 18px 12px 42px;
                border: 1px solid var(--border-color);
                border-radius: 10px;
                background: rgba(15, 23, 42, 0.6);
                backdrop-filter: blur(12px);
                color: var(--text-primary);
                font-family: inherit;
                font-size: 14px;
                outline: none;
                transition: all 0.25s ease;
            }

            input[type="search"]:focus {
                border-color: var(--accent-blue);
                box-shadow: 0 0 0 3px var(--accent-glow);
                background: rgba(15, 23, 42, 0.9);
            }

            .search-icon {
                position: absolute;
                left: 14px;
                top: 50%;
                transform: translateY(-50%);
                width: 16px;
                height: 16px;
                stroke: var(--text-muted);
                pointer-events: none;
            }

            /* Grid & Cards */
            .grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 28px;
                padding-bottom: 96px;
            }

            article {
                position: relative;
                border: 1px solid var(--border-color);
                border-radius: 16px;
                background: var(--bg-card);
                overflow: hidden;
                transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
                display: flex;
                flex-direction: column;
            }

            article:hover {
                transform: translateY(-6px);
                border-color: var(--border-highlight);
                box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5), 0 0 30px var(--accent-glow);
            }

            .browser-bar {
                height: 32px;
                background: rgba(8, 12, 20, 0.7);
                border-bottom: 1px solid var(--border-color);
                display: flex;
                align-items: center;
                padding: 0 12px;
                gap: 6px;
            }

            .dot {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.15);
            }

            .preview-container {
                position: relative;
                width: 100%;
                height: 230px;
                background: #020617;
                overflow: hidden;
            }

            .preview {
                width: 100%;
                height: 100%;
                border: 0;
                pointer-events: none;
                opacity: 0.85;
                transition: opacity 0.3s ease;
            }

            article:hover .preview {
                opacity: 1;
            }

            .details {
                padding: 22px;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                justify-content: space-between;
                background: linear-gradient(180deg, rgba(15,23,42,0.8) 0%, rgba(15,23,42,1) 100%);
            }

            .number {
                font-family: 'Space Grotesk', monospace;
                color: var(--accent-blue);
                font-size: 11px;
                letter-spacing: 0.18em;
                font-weight: 600;
                margin-bottom: 8px;
            }

            h2 {
                font-size: 18px;
                font-weight: 600;
                line-height: 1.4;
                color: var(--text-primary);
                min-height: 52px;
                margin-bottom: 20px;
                letter-spacing: -0.01em;
            }

            .btn-link {
                display: inline-flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                padding: 12px 18px;
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid var(--border-color);
                color: var(--text-primary);
                font-size: 13px;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.25s ease;
            }

            .btn-link svg {
                width: 16px;
                height: 16px;
                stroke: var(--text-secondary);
                transition: transform 0.25s ease, stroke 0.25s ease;
            }

            article:hover .btn-link {
                background: var(--accent-blue);
                border-color: var(--accent-blue);
                color: #ffffff;
            }

            article:hover .btn-link svg {
                stroke: #ffffff;
                transform: translateX(4px);
            }

            .empty {
                grid-column: 1 / -1;
                padding: 64px 0;
                text-align: center;
                color: var(--text-muted);
                font-size: 15px;
            }

            /* Responsive Breakpoints */
            @media (max-width: 1024px) {
                .grid {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }

            @media (max-width: 640px) {
                header {
                    padding-top: 56px;
                }

                .grid {
                    grid-template-columns: 1fr;
                }

                .toolbar {
                    flex-direction: column;
                    align-items: stretch;
                }

                .search-wrapper {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <div class="ambient-glow"></div>

        <header>
            <div class="eyebrow gsap-header">
                <span class="eyebrow-badge"></span>
                <a href="{{ route('home') }}">Yogawilanda</a>
                <span>/</span>
                <span>Case_Studies</span>
            </div>
            <h1 class="gsap-header">Show. Don't Tell.</h1>
            <p class="gsap-header">
                A curated design prototypes.
            </p>
        </header>

        <main>
            <div class="toolbar gsap-toolbar">
                <div class="counter-badge">
                    <span id="visible-count">{{ count($previews) }}</span> DESIGNS ARCHIVED
                </div>

                <div class="search-wrapper">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input id="search" type="search" placeholder="Filter concept or design title..." aria-label="Cari desain">
                </div>
            </div>

            <section class="grid" id="gallery">
                @forelse ($previews as $index => $preview)
                <article class="gsap-card" data-name="{{ strtolower($preview['name']) }}">
                    <div class="browser-bar">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>

                    <div class="preview-container">
                        <iframe class="preview" src="{{ route('design-playground.content', $preview['slug']) }}"
                            sandbox="allow-scripts" loading="lazy" title="Preview {{ $preview['name'] }}">
                        </iframe>
                    </div>

                    <div class="details">
                        <div>
                            <div class="number">
                                DESIGN // {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>
                            <h2>{{ $preview['name'] }}</h2>
                        </div>

                        <a href="{{ route('design-playground.preview', $preview['slug']) }}" class="btn-link">
                            <span>Lihat desain</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </article>
                @empty
                <p class="empty">Belum ada file HTML untuk ditampilkan.</p>
                @endforelse
            </section>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                gsap.registerPlugin(ScrollTrigger);

                // Timeline Intro Animation
                const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

                tl.from('.gsap-header', {
                    y: 28,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.12
                })
                .from('.gsap-toolbar', {
                    y: 20,
                    opacity: 0,
                    duration: 0.6
                }, '-=0.3')
                .from('.gsap-card', {
                    y: 35,
                    opacity: 0,
                    duration: 0.7,
                    stagger: 0.08,
                    ease: 'power2.out'
                }, '-=0.2');

                // Interactive Live Search & Counter Update
                const searchInput = document.getElementById('search');
                const cards = document.querySelectorAll('#gallery article');
                const countDisplay = document.getElementById('visible-count');

                searchInput.addEventListener('input', () => {
                    const query = searchInput.value.toLowerCase().trim();
                    let visibleCount = 0;

                    cards.forEach(card => {
                        const isMatch = card.dataset.name.includes(query);

                        if (isMatch) {
                            visibleCount++;
                            if (card.style.display === 'none') {
                                card.style.display = 'flex';
                                gsap.fromTo(card,
                                    { opacity: 0, scale: 0.95 },
                                    { opacity: 1, scale: 1, duration: 0.3, ease: 'power2.out' }
                                );
                            }
                        } else {
                            if (card.style.display !== 'none') {
                                gsap.to(card, {
                                    opacity: 0,
                                    scale: 0.95,
                                    duration: 0.2,
                                    ease: 'power2.in',
                                    onComplete: () => {
                                        card.style.display = 'none';
                                    }
                                });
                            }
                        }
                    });

                    countDisplay.textContent = visibleCount;
                });
            });
        </script>
    </body>

    </html>
