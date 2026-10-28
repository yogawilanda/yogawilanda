
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $preview['name'] }} — Design Playground</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            color: #20211f;
            background: #f5f5f2;
            font-family: Arial, sans-serif;
        }
        nav {
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 0 20px;
            background: white;
            border-bottom: 1px solid #deded7;
        }
        nav a { color: inherit; text-decoration: none; font-size: 13px; }
        h1 { margin: 0; font-size: 14px; font-weight: 600; }
        iframe {
            display: block;
            width: 100%;
            height: calc(100dvh - 56px);
            border: 0;
            background: white;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('design-playground.index') }}">← All designs</a>
        <h1>{{ $preview['name'] }}</h1>
        <a href="{{ route('design-playground.index') }}">Design Playground</a>
    </nav>

    <iframe
        src="{{ route('design-playground.content', $preview['slug']) }}"
        sandbox="allow-scripts allow-forms allow-popups"
        allowfullscreen
        title="{{ $preview['name'] }}">
    </iframe>
</body>
</html>
