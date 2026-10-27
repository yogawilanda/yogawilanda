{{-- SEO metadata with safe defaults --}}
@php
$seo = match (true) {
request()->routeIs('services') => [
'title' => 'Jasa Pembuatan Website untuk Bisnis | Yoga Wilanda',
'description' => 'Jasa pembuatan website, company profile, perbaikan sistem, dan otomasi proses bisnis. Solusi teknis
sesuai kebutuhan dan anggaran.',
],
request()->routeIs('about') => [
'title' => 'Tentang Yoga Wilanda | Software Engineer',
'description' => 'Kenali Yoga Wilanda, Software Engineer dengan pengalaman lintas bidang, product thinking, dan
pengembangan solusi digital.',
],
default => [
'title' => 'Yoga Wilanda | Software Engineer & Product Engineer',
'description' => 'Website resmi Yoga Wilanda, Software Engineer yang membangun produk digital, website bisnis, dan
solusi perangkat lunak.',
],
};

$pageTitle = trim($__env->yieldContent('title', $seo['title']));
$pageDescription = trim($__env->yieldContent('description', $seo['description']));
$canonicalUrl = url()->current();
$socialImage = asset('yogawilanda.png');
$robotsContent = app()->environment('production') ? 'index,follow' : 'noindex,nofollow';
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="robots" content="{{ $robotsContent }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <title>{{ $pageTitle }}</title>

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name', 'Yoga Wilanda') }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $socialImage }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $socialImage }}">

    @php
    $siteUrl = rtrim(config('app.url'), '/');

    $schemas = [
    [
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    '@id' => $siteUrl . '/#person',
    'name' => 'Yoga Wilanda',
    'url' => $siteUrl,
    'jobTitle' => 'Software Engineer',
    'image' => $socialImage,
    ],
    [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    '@id' => $siteUrl . '/#website',
    'url' => $siteUrl,
    'name' => 'Yoga Wilanda',
    'publisher' => [
    '@id' => $siteUrl . '/#person',
    ],
    ],
    ];

    if (request()->routeIs('services')) {
    $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => 'Jasa Pembuatan Website dan Solusi Digital',
    'serviceType' => 'Website development and digital solutions',
    'description' => $pageDescription,
    'url' => $canonicalUrl,
    'provider' => [
    '@id' => $siteUrl . '/#person',
    ],
    ];
    }
    @endphp

    <script type="application/ld+json">
        {!! json_encode(
    $schemas,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_HEX_TAG |
    JSON_HEX_APOS |
    JSON_HEX_AMP |
    JSON_HEX_QUOT
) !!}
    </script>


    {{-- Favicon & Web App --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=20260921" sizes="any">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=20260921">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}?v=20260921">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=20260921">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=20260921">

    {{-- Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @fluxAppearance

    @vite([
    'resources/css/app.css',
    'resources/css/guest_style.css',
    'resources/js/guest.js'
    ])
</head>
