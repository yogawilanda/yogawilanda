{{-- resources/views/layouts/guest/head.blade.php --}}

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Yoga Wilanda Portfolio - Software Engineer">

    {{-- Favicon & Web App --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=20260921" sizes="any">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=20260921">

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}?v=20260921">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=20260921">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=20260921">

    <title>
        {{ $title ?? config('app.name', 'Yoga Wilanda') }}
    </title>


    {{-- Fonts & Icons --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    {{-- Flux appearance initialization --}}
    @fluxAppearance


    {{-- Application assets --}}
    @vite([
    'resources/css/app.css',
    'resources/css/guest_style.css',
    'resources/js/guest.js'
    ])
</head>
