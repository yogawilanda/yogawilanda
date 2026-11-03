<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $preview['name'] }} — Design Playground</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-panel: rgba(15, 23, 42, 0.88);
            --border-panel: rgba(255, 255, 255, 0.1);
            --border-hover: rgba(2, 132, 199, 0.4);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --accent-blue: #0284c7;
            --accent-glow: rgba(2, 132, 199, 0.25);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #080c14;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Iframe Full Screen 100% tanpa navbar atas */
        iframe {
            display: block;
            width: 100vw;
            height: 100dvh;
            border: 0;
            background: #ffffff;
        }

        /* Floating Side Clip Container - Sisi Kanan Tengah */
        .preview-side-clip {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            align-items: center;
        }

        .side-clip-card {
            display: flex;
            align-items: center;
            gap: 12px;
            background: var(--bg-panel);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--border-panel);
            border-right: none;
            padding: 12px 16px 12px 14px;
            border-radius: 14px 0 0 14px;
            box-shadow: -10px 10px 30px rgba(0, 0, 0, 0.4), 0 0 20px var(--accent-glow);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            user-select: none;
        }

        .side-clip-card:hover {
            border-color: var(--border-hover);
            box-shadow: -12px 14px 40px rgba(0, 0, 0, 0.6), 0 0 30px var(--accent-glow);
            transform: translateX(-4px);
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--border-panel);
            color: var(--text-primary);
            text-decoration: none;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .btn-back:hover {
            background: var(--accent-blue);
            border-color: var(--accent-blue);
            color: #ffffff;
            transform: scale(1.05);
        }

        .btn-back svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
            stroke-width: 2;
        }

        .info-group {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .info-tag {
            font-family: 'Space Grotesk', monospace;
            font-size: 10px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--accent-blue);
            font-weight: 600;
        }

        .info-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
            max-width: 180px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Responsive Breakpoint */
        @media (max-width: 640px) {
            .side-clip-card {
                padding: 10px 12px 10px 10px;
                gap: 8px;
                border-radius: 10px 0 0 10px;
            }
            .info-title {
                max-width: 120px;
                font-size: 12px;
            }
            .btn-back {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Fullscreen Iframe Preview (100dvh) -->
    <iframe
        src="{{ route('design-playground.content', $preview['slug']) }}"
        sandbox="allow-scripts allow-forms allow-popups"
        allowfullscreen
        title="{{ $preview['name'] }}">
    </iframe>

    <!-- Side Floating Clip Widget (Sisi Kanan Tengah) -->
    <aside class="preview-side-clip">
        <div class="side-clip-card">
            <a href="{{ route('design-playground.index') }}" class="btn-back" title="Kembali ke Galeri Desain (All designs)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
            <div class="info-group">
                <span class="info-tag">Study Case</span>
                <span class="info-title" title="{{ $preview['name'] }}">{{ $preview['name'] }}</span>
            </div>
        </div>
    </aside>

</body>
</html>
