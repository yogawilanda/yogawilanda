@section('title', 'Jasa Pembuatan Company Profile Profesional | Yoga Wilanda')
@section('description', 'Jasa pembuatan website company profile untuk perusahaan dan bisnis. Tampilkan profil, layanan, portfolio, pengalaman, dan kontak secara profesional.')

@php
    $waNumber = '6285158986696';
    $waMessage = rawurlencode('Halo Yoga, saya ingin konsultasi pembuatan website company profile.');
    $waUrl = "https://wa.me/{$waNumber}?text={$waMessage}";

    $features = [
        ['title' => 'Profil perusahaan', 'description' => 'Sejarah, identitas, visi, misi, dan informasi perusahaan.'],
        ['title' => 'Layanan dan produk', 'description' => 'Penjelasan layanan atau produk agar mudah dipahami calon pelanggan.'],
        ['title' => 'Portfolio dan pengalaman', 'description' => 'Dokumentasi proyek, klien, dan pengalaman yang dapat diverifikasi.'],
        ['title' => 'Kontak perusahaan', 'description' => 'Alamat, email, telepon, WhatsApp, dan jalur inquiry.'],
        ['title' => 'Responsive design', 'description' => 'Tampilan yang menyesuaikan desktop, tablet, dan perangkat mobile.'],
        ['title' => 'SEO foundation', 'description' => 'Metadata, struktur halaman, sitemap, dan schema yang relevan.'],
    ];

    $process = [
        ['number' => '01', 'title' => 'Diskusi kebutuhan', 'description' => 'Kenali bisnis, target audiens, dan tujuan website.'],
        ['number' => '02', 'title' => 'Struktur konten', 'description' => 'Susun halaman, informasi, materi visual, dan fitur.'],
        ['number' => '03', 'title' => 'Desain dan development', 'description' => 'Implementasikan website sesuai identitas perusahaan.'],
        ['number' => '04', 'title' => 'Review dan testing', 'description' => 'Periksa konten, tampilan, navigasi, dan fungsi website.'],
        ['number' => '05', 'title' => 'Publikasi', 'description' => 'Website diluncurkan dan akses diserahkan sesuai kesepakatan.'],
    ];

    $faqs = [
        ['q' => 'Berapa biaya pembuatan company profile?', 'a' => 'Estimasi awal mulai Rp1,5 juta. Harga final mengikuti jumlah halaman, konten, fitur, dan kebutuhan integrasi.'],
        ['q' => 'Apa saja materi yang perlu disiapkan?', 'a' => 'Logo, profil perusahaan, deskripsi layanan, foto, portfolio, alamat, dan informasi kontak. Materi dapat disiapkan bertahap.'],
        ['q' => 'Apakah website bisa dikelola sendiri?', 'a' => 'Bisa. CMS atau dashboard pengelolaan konten dapat disiapkan sesuai kebutuhan dan ruang lingkup proyek.'],
        ['q' => 'Apakah domain dan hosting sudah termasuk?', 'a' => 'Domain dan hosting dibicarakan dalam penawaran. Kepemilikan akun dan biaya perpanjangan dijelaskan sejak awal.'],
        ['q' => 'Apakah tersedia maintenance?', 'a' => 'Tersedia layanan maintenance dan bantuan teknis lanjutan berdasarkan paket yang disepakati.'],
    ];
@endphp

<x-layouts::guest>
    <section class="flex min-h-[82vh] snap-start items-center border-b border-zinc-200 bg-white px-6 py-24 dark:border-zinc-800 dark:bg-zinc-950 sm:px-10">
        <div class="mx-auto grid w-full max-w-7xl gap-14 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500">Company profile / Corporate website</p>
                <h1 class="mt-8 max-w-4xl text-4xl font-semibold leading-[1.12] tracking-tight sm:text-6xl">
                    Website company profile untuk memperkenalkan perusahaan secara profesional.
                </h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                    Tampilkan identitas, layanan, pengalaman, dan informasi perusahaan dalam satu website resmi yang mudah diakses calon pelanggan maupun mitra bisnis.
                </p>
                <div class="mt-10 flex flex-wrap gap-3">
                    <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-12 items-center bg-zinc-950 px-6 py-3 text-sm font-semibold text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-950">
                        Konsultasi company profile ↗
                    </a>
                    <a href="#fitur" class="inline-flex min-h-12 items-center border border-zinc-300 px-6 py-3 text-sm font-semibold dark:border-zinc-700">
                        Lihat fitur
                    </a>
                </div>
            </div>
            <div class="border-l border-zinc-200 pl-7 dark:border-zinc-800 lg:max-w-sm lg:justify-self-end">
                <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Investasi awal</p>
                <p class="mt-5 text-4xl font-semibold">Rp1,5 juta+</p>
                <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                    Estimasi awal untuk company profile sederhana. Penawaran final mengikuti kebutuhan dan ruang lingkup proyek.
                </p>
                <p class="mt-8 border-t border-zinc-200 pt-5 text-xs leading-6 text-zinc-500 dark:border-zinc-800">
                    Untuk perusahaan, kontraktor, distributor, konsultan, penyedia jasa, dan bisnis profesional.
                </p>
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Tujuan website</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Berikan gambaran yang utuh tentang perusahaanmu.
            </h2>
            <p class="mt-6 max-w-2xl leading-8 text-zinc-600 dark:text-zinc-400">
                Website perusahaan menjadi kanal resmi untuk menyatukan informasi yang sebelumnya tersebar di dokumen, presentasi, media sosial, dan percakapan.
            </p>
        </div>
    </section>

    <section id="fitur" class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Struktur dan fitur</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Semua informasi penting tersusun dalam alur yang jelas.
            </h2>
            <div class="mt-14 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($features as $feature)
                    <article class="bg-white p-7 dark:bg-zinc-950">
                        <h3 class="font-semibold">{{ $feature['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $feature['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Cara kerja</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Dari kebutuhan perusahaan hingga website siap digunakan.
            </h2>
            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($process as $step)
                    <article class="border-t border-zinc-200 pt-5 dark:border-zinc-800">
                        <p class="font-mono text-xs text-zinc-400">{{ $step['number'] }}</p>
                        <h3 class="mt-5 font-semibold">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $step['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-4xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">FAQ</p>
            <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-5xl">Pertanyaan umum.</h2>
            <div class="mt-12 divide-y divide-zinc-200 border-y border-zinc-200 dark:divide-zinc-800 dark:border-zinc-800">
                @foreach ($faqs as $faq)
                    <details class="group py-6">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 font-medium">
                            {{ $faq['q'] }}
                            <span class="text-zinc-400 transition-transform group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 max-w-3xl text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start bg-zinc-950 px-6 py-24 text-white sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-400">Mulai konsultasi</p>
            <h2 class="mt-7 max-w-3xl text-4xl font-semibold tracking-tight sm:text-6xl">
                Siapkan kanal resmi untuk perusahaanmu.
            </h2>
            <p class="mt-6 max-w-2xl leading-8 text-zinc-300">
                Ceritakan profil dan kebutuhan perusahaan. Kita tentukan struktur, fitur, dan estimasi pengerjaan berdasarkan prioritas bisnis.
            </p>
            <div class="mt-10 flex flex-wrap gap-5">
                <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-12 items-center bg-white px-6 py-3 text-sm font-semibold text-zinc-950 hover:bg-zinc-200">
                    Konsultasi melalui WhatsApp ↗
                </a>
                <a href="{{ route('services.website.surabaya') }}" class="inline-flex min-h-12 items-center text-sm text-zinc-300 underline underline-offset-4">
                    Jasa pembuatan website Surabaya
                </a>
            </div>
        </div>
    </section>
</x-layouts::guest>