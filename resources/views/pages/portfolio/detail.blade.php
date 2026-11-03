@php
$projects = [
    'portfolio.wisata-mobil-bekas' => [
        'name' => 'Wisata Mobil Bekas',
        'category' => 'Automotive · Website showroom',
        'intro' => 'Pengembangan website untuk membantu showroom menampilkan stok kendaraan dan informasi produk secara online.',
        'scope' => ['Landing page showroom', 'Katalog dan detail kendaraan', 'Pengelolaan produk dan artikel', 'Jalur inquiry melalui WhatsApp', 'Struktur SEO dasar'],
        'stack' => 'Laravel, Inertia React, Tailwind CSS',
        'url' => 'https://wisatamobilbekas.id',
    ],
    'portfolio.downloadrumah' => [
        'name' => 'DownloadRumah',
        'category' => 'Property · Property discovery platform',
        'intro' => 'Platform penemuan properti berbasis kebutuhan pengguna, dengan alur pencocokan hunian, informasi properti, dan perencanaan.',
        'scope' => ['Intent-first property discovery', 'Alur kebutuhan pencari hunian', 'Pengelolaan listing properti', 'Informasi dan bukti properti', 'Fondasi SEO dan kesiapan mesin pencari'],
        'stack' => 'Laravel, Livewire, Volt, Alpine.js, Tailwind CSS',
        'url' => 'https://downloadrumah.yogawilanda.com',
    ],
];
$project = $projects[request()->route()->getName()];
@endphp

<x-layouts::guest>
    <section class="min-h-[75vh] px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-6xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">{{ $project['category'] }}</p>
            <h1 class="mt-8 max-w-4xl text-5xl font-semibold tracking-tight sm:text-7xl">{{ $project['name'] }}</h1>
            <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">{{ $project['intro'] }}</p>
            <a class="mt-8 inline-flex border-b border-current pb-2 text-sm" href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">Kunjungi proyek ↗</a>
        </div>
    </section>
    <section class="border-y border-zinc-200 bg-zinc-100 px-6 py-20 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-3xl font-semibold">Lingkup pengembangan</h2>
            <div class="mt-10 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2">
                @foreach ($project['scope'] as $item)
                    <div class="bg-white p-6 dark:bg-zinc-950">{{ $item }}</div>
                @endforeach
            </div>
            <p class="mt-10 text-sm text-zinc-500">Teknologi: {{ $project['stack'] }}</p>
        </div>
    </section>
    <section class="px-6 py-20 sm:px-10">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-3xl font-semibold">Punya kebutuhan serupa?</h2>
            <p class="mt-4 text-zinc-600 dark:text-zinc-400">Diskusikan kebutuhan website atau aplikasi bisnismu.</p>
            <a class="mt-7 inline-flex bg-zinc-950 px-6 py-4 text-sm font-semibold text-white dark:bg-white dark:text-zinc-950" href="https://wa.me/6285158986696">Diskusikan proyek ↗</a>
        </div>
    </section>
</x-layouts::guest>