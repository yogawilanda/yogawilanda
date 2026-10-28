<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Playground — AI Design Previews</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f5f2;
            color: #20211f;
            font-family: Inter, Arial, sans-serif;
        }

        header,
        main {
            width: min(1200px, calc(100% - 40px));
            margin: auto;
        }

        header {
            padding: 64px 0 36px;
            border-bottom: 1px solid #deded7;
        }

        .eyebrow {
            color: #77786f;
            font-size: 12px;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        h1 {
            margin: 16px 0;
            font-size: clamp(36px, 6vw, 66px);
            letter-spacing: -.055em;
            line-height: 1;
        }

        header p {
            max-width: 560px;
            color: #66675f;
            line-height: 1.7;
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: center;
            margin: 28px 0;
        }

        input {
            width: min(340px, 100%);
            padding: 12px 14px;
            border: 1px solid #d8d8d0;
            border-radius: 8px;
            background: white;
            font: inherit;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            padding-bottom: 64px;
        }

        article {
            overflow: hidden;
            border: 1px solid #e1e1da;
            border-radius: 12px;
            background: white;
        }

        .preview {
            display: block;
            width: 100%;
            height: 220px;
            border: 0;
            background: #eeeee9;
            pointer-events: none;
        }

        .details {
            padding: 18px;
        }

        .number {
            color: #898a81;
            font-size: 11px;
            letter-spacing: .12em;
        }

        h2 {
            min-height: 48px;
            margin: 10px 0 18px;
            font-size: 17px;
            line-height: 1.45;
        }

        a {
            display: inline-block;
            padding: 10px 14px;
            border-radius: 6px;
            background: #20211f;
            color: white;
            font-size: 13px;
            text-decoration: none;
        }

        a:hover {
            background: #44453f;
        }

        .empty {
            color: #77786f;
        }

        @media (max-width: 850px) {
            .grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            header {
                padding-top: 42px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .toolbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .preview {
                height: 240px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="eyebrow">Design Lab / Selected Experiments</div>
        <h1>Ideas, made visible.</h1>
        <p>
            A collection of website concepts, interface explorations,
            and AI-assisted design experiments.
        </p>
    </header>

    <main>
        <div class="toolbar">
            <strong>{{ count($previews) }} design previews</strong>
            <input id="search" type="search" placeholder="Cari desain..." aria-label="Cari desain">
        </div>

        <section class="grid" id="gallery">
            @forelse ($previews as $index => $preview)
            <article data-name="{{ strtolower($preview['name']) }}">
                <iframe class="preview" src="{{ route('design-playground.content', $preview['slug']) }}"
                    sandbox="allow-scripts" loading="lazy" title="Preview {{ $preview['name'] }}">
                </iframe>

                <div class="details">
                    <div class="number">
                        DESIGN {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>
                    <h2>{{ $preview['name'] }}</h2>
                    <a href="{{ route('design-playground.preview', $preview['slug']) }}">
                        Lihat desain →
                    </a>
                </div>
            </article>
            @empty
            <p class="empty">Belum ada file HTML untuk ditampilkan.</p>
            @endforelse
        </section>
    </main>

    <script>
        const search = document.getElementById('search');

        search.addEventListener('input', () => {
            const query = search.value.toLowerCase().trim();

            document.querySelectorAll('#gallery article').forEach(card => {
                card.hidden = !card.dataset.name.includes(query);
            });
        });
    </script>
</body>

</html>
