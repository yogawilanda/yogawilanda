{{-- SEO metadata with safe defaults --}}
@php
$seo = match (true) {
request()->routeIs('services.company-profile') => [
'title' => 'Jasa Pembuatan Company Profile Profesional | Yoga Wilanda',
'description' => 'Jasa pembuatan website company profile untuk perusahaan dan bisnis. Tampilkan profil, layanan,
portfolio, pengalaman, dan kontak secara profesional.',
],request()->routeIs('services.online-store') => [
'title' => 'Jasa Pembuatan Toko Online untuk Bisnis | Yoga Wilanda',
'description' => 'Jasa pembuatan toko online untuk bisnis dan UMKM. Website katalog produk, keranjang, checkout,
pengelolaan pesanan, dan integrasi pembayaran sesuai kebutuhan.',
],request()->routeIs('services.landing-page') => [
'title' => 'Jasa Pembuatan Landing Page untuk Bisnis | Yoga Wilanda',
'description' => 'Jasa pembuatan landing page untuk promosi, kampanye, produk, dan layanan bisnis. Halaman responsif
dengan struktur konten dan CTA yang terarah.',
],request()->routeIs('services.umkm') => [
'title' => 'Jasa Pembuatan Website UMKM | Yoga Wilanda',
'description' => 'Jasa pembuatan website UMKM untuk memperkenalkan bisnis, layanan, produk, dan informasi kontak secara
profesional.',
],
request()->routeIs('services.catalog') => [
'title' => 'Jasa Pembuatan Website Katalog Produk | Yoga Wilanda',
'description' => 'Jasa pembuatan website katalog produk untuk menampilkan koleksi, spesifikasi, kategori, dan informasi
produk bisnis.',
],
request()->routeIs('services.web-app') => [
'title' => 'Jasa Pembuatan Web Application Custom | Yoga Wilanda',
'description' => 'Jasa pengembangan aplikasi web custom untuk dashboard, pengelolaan data, workflow, sistem internal,
dan integrasi bisnis.',
],request()->routeIs('website-jual-beli-mobil-bekas') => [
'title' => 'Jasa Website Jual Beli Mobil Bekas | Yoga Wilanda',
'description' => 'Pembuatan website showroom mobil bekas dengan katalog kendaraan, detail spesifikasi, filter pencarian,
panel pengelolaan stok, dan WhatsApp.',
],
request()->routeIs('aplikasi-kasir-bengkel') => [
'title' => 'Jasa Pembuatan Aplikasi Kasir Bengkel | Yoga Wilanda',
'description' => 'Aplikasi kasir bengkel untuk transaksi servis, data pelanggan, riwayat kendaraan, stok sparepart, dan
laporan operasional.',
],
request()->routeIs('website-bimbingan-belajar') => [
'title' => 'Jasa Pembuatan Website Bimbingan Belajar | Yoga Wilanda',
'description' => 'Website bimbingan belajar dan tempat les untuk menampilkan program, jadwal, pengajar, biaya, serta
pendaftaran siswa.',
],
request()->routeIs('services.website.sidoarjo') => [
'title' => 'Jasa Pembuatan Website Sidoarjo | Yoga Wilanda',
'description' => 'Jasa pembuatan website bisnis di Sidoarjo: company profile, katalog produk, website UMKM, dan aplikasi web custom.',
],
request()->routeIs('services.website-maintenance') => [
'title' => 'Jasa Maintenance Website | Yoga Wilanda',
'description' => 'Layanan maintenance website, pemeriksaan rutin, backup, pembaruan, dan perbaikan teknis untuk website bisnis.',
],
request()->routeIs('portfolio.wisata-mobil-bekas') => [
'title' => 'Portfolio Website Wisata Mobil Bekas | Yoga Wilanda',
'description' => 'Studi proyek pengembangan website showroom mobil bekas dengan katalog kendaraan dan pengelolaan konten.',
],
request()->routeIs('portfolio.downloadrumah') => [
'title' => 'Portfolio DownloadRumah | Yoga Wilanda',
'description' => 'Studi proyek pengembangan platform penemuan properti berbasis kebutuhan pengguna.',
],
request()->routeIs('pricing') => [
'title' => 'Harga Jasa Website dan Pengembangan Sistem | Yoga Wilanda',
'description' => 'Estimasi harga pembuatan website, perbaikan, maintenance, dan pengembangan aplikasi bisnis.',
],request()->routeIs('services.website-repair') => [
'title' => 'Jasa Perbaikan Website dan Troubleshooting | Yoga Wilanda',
'description' => 'Jasa perbaikan website error, lambat, dan bermasalah. Troubleshooting Laravel, PHP, WordPress,
database, tampilan, serta optimasi teknis website.',
],
request()->routeIs('services.website.surabaya') => [
'title' => 'Jasa Pembuatan Website Surabaya untuk Bisnis | Yoga Wilanda',
'description' => 'Jasa pembuatan website bisnis di Surabaya dan Sidoarjo. Website UMKM, company profile, katalog produk,
toko online, dan aplikasi web custom.',
],request()->routeIs('services') => [
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

    if (request()->routeIs(
    'services.umkm',
    'services.catalog',
    'services.web-app',
    'website-jual-beli-mobil-bekas',
    'aplikasi-kasir-bengkel',
    'website-bimbingan-belajar',
    'services.website-repair'
    )) {
    $serviceDetails = match (request()->route()->getName()) {
    'services.umkm' => [
    'name' => 'Jasa Pembuatan Website UMKM',
    'type' => 'Small Business Website Development',
    ],
    'services.catalog' => [
    'name' => 'Jasa Pembuatan Website Katalog Produk',
    'type' => 'Product Catalog Website Development',
    ],
    'website-jual-beli-mobil-bekas' => [
    'name' => 'Jasa Pembuatan Website Jual Beli Mobil Bekas',
    'type' => 'Used Car Showroom Website Development',
    ],
    'aplikasi-kasir-bengkel' => [
    'name' => 'Jasa Pembuatan Aplikasi Kasir Bengkel',
    'type' => 'Workshop Management Software Development',
    ],
    'services.website-repair' => [
    'name' => 'Jasa Perbaikan dan Optimasi Website',
    'type' => 'Website Troubleshooting and Maintenance',
    ],
    'website-bimbingan-belajar' => [
    'name' => 'Jasa Pembuatan Website Bimbingan Belajar',
    'type' => 'Tutoring Website Development',
    ],
    default => [
    'name' => 'Jasa Pembuatan Web Application Custom',
    'type' => 'Custom Web Application Development',
    ],
    };

    $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => $serviceDetails['name'],
    'serviceType' => $serviceDetails['type'],
    'description' => $pageDescription,
    'url' => $canonicalUrl,
    'provider' => ['@id' => $siteUrl . '/#person'],
    ];
    } elseif (request()->routeIs('services.landing-page')) {
    $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => 'Jasa Pembuatan Landing Page',
    'serviceType' => 'Landing Page Development',
    'description' => $pageDescription,
    'url' => $canonicalUrl,
    'provider' => ['@id' => $siteUrl . '/#person'],
    ];
    } elseif (request()->routeIs('services.online-store')) {
    $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => 'Jasa Pembuatan Website Toko Online',
    'serviceType' => 'E-commerce Website Development',
    'description' => $pageDescription,
    'url' => $canonicalUrl,
    'provider' => ['@id' => $siteUrl . '/#person'],
    ];
    } elseif (request()->routeIs('services.company-profile')) {
    $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => 'Jasa Pembuatan Website Company Profile',
    'serviceType' => 'Corporate Website Development',
    'description' => $pageDescription,
    'url' => $canonicalUrl,
    'provider' => ['@id' => $siteUrl . '/#person'],
    ];
    } elseif (request()->routeIs('services')) {
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
