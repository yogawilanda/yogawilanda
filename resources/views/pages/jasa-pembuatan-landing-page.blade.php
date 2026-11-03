@section('title', 'Jasa Pembuatan Landing Page untuk Bisnis | Yoga Wilanda')
@section('description', 'Jasa pembuatan landing page untuk promosi, kampanye, produk, dan layanan bisnis. Halaman responsif dengan struktur konten dan CTA yang terarah.')

@php
    $waNumber = '6285158986696';
    $waMessage = rawurlencode('Halo Yoga, saya ingin konsultasi pembuatan landing page untuk bisnis saya.');
    $waUrl = "https://wa.me/{$waNumber}?text={$waMessage}";

    $useCases = [
        ['number' => '01', 'title' => 'Promosi produk', 'description' => 'Jelaskan manfaat, keunggulan, dan penawaran produk melalui satu halaman khusus.'],
        ['number' => '02', 'title' => 'Kampanye pemasaran', 'description' => 'Arahkan pengunjung dari iklan atau kanal promosi menuju informasi yang relevan.'],
        ['number' => '03', 'title' => 'Pengumpulan inquiry', 'description' => 'Permudah calon pelanggan meminta informasi atau konsultasi.'],
        ['number' => '04', 'title' => 'Pendaftaran layanan', 'description' => 'Sajikan informasi program, jadwal, persyaratan, dan jalur pendaftaran.'],
    ];

    $elements = [
        ['title' => 'Headline dan value proposition', 'description' => 'Pengunjung langsung memahami apa yang ditawarkan dan manfaat utamanya.'],
        ['title' => 'Informasi dan penawaran', 'description' => 'Susun fitur, manfaat, detail layanan, harga, atau promo sesuai kebutuhan.'],
        ['title' => 'Bukti dan informasi pendukung', 'description' => 'Portfolio, dokumentasi, testimoni, atau data yang benar-benar tersedia.'],
        ['title' => 'Call to action', 'description' => 'Arahkan pengunjung menuju WhatsApp, formulir, checkout, atau pendaftaran.'],
        ['title' => 'Responsive design', 'description' => 'Tampilan dan interaksi yang nyaman pada desktop maupun perangkat mobile.'],
        ['title' => 'Tracking dan analytics', 'description' => 'Pengukuran kunjungan dan interaksi jika diperlukan.'],
    ];

    $process = [
        ['number' => '01', 'title' => 'Tujuan kampanye', 'description' => 'Tentukan audiens, penawaran, dan tindakan yang diharapkan dari pengunjung.'],
        ['number' => '02', 'title' => 'Struktur konten', 'description' => 'Susun pesan, urutan informasi, materi visual, dan CTA.'],
        ['number' => '03', 'title' => 'Desain dan development', 'description' => 'Bangun halaman sesuai identitas dan kebutuhan kampanye.'],
        ['number' => '04', 'title' => 'Review dan testing', 'description' => 'Uji tampilan, tautan, formulir, CTA, dan perangkat mobile.'],
        ['number' => '05', 'title' => 'Publikasi', 'description' => 'Hubungkan domain dan publikasikan halaman sesuai kesepakatan.'],
    ];

    $faqs = [
        ['q' => 'Berapa biaya pembuatan landing page?', 'a' => 'Estimasi awal mulai Rp500 ribu. Harga final mengikuti panjang konten, desain, integrasi, formulir, dan kebutuhan khusus.'],
        ['q' => 'Apakah landing page cocok untuk iklan?', 'a' => 'Bisa. Landing page dapat menjadi tujuan trafik dari iklan atau kanal pemasaran lainnya. Struktur halaman disusun berdasarkan tujuan kampanye.'],
        ['q' => 'Apakah saya perlu menyiapkan copywriting?', 'a' => 'Materi dasar seperti produk, layanan, penawaran, dan informasi bisnis perlu disiapkan. Bantuan penyusunan konten dapat dibicarakan dalam scope proyek.'],
        ['q' => 'Apakah bisa menggunakan WhatsApp atau formulir?', 'a' => 'Bisa. CTA dapat diarahkan ke WhatsApp, formulir inquiry, pendaftaran, atau sistem lain sesuai kebutuhan.'],
        ['q' => 'Apakah bisa menggunakan domain sendiri?', 'a' => 'Bisa. Landing page dapat dipasang pada domain utama atau subdomain. Domain dan hosting dibicarakan dalam penawaran.'],
        ['q' => 'Apakah halaman bisa dikembangkan kemudian?', 'a' => 'Bisa. Landing page dapat dikembangkan dengan halaman tambahan, integrasi, CMS, atau fitur lain sesuai kebutuhan.'],
    ];
@endphp

<x-layouts::guest>
    <section class="flex min-h-[82vh] snap-start items-center border-b border-zinc-200 bg-white px-6 py-24 dark:border-zinc-800 dark:bg-zinc-950 sm:px-10">
        <div class="mx-auto grid w-full max-w-7xl gap-14 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500">Landing page / Campaign page</p>
                <h1 class="mt-8 max-w-4xl text-4xl font-semibold leading-[1.12] tracking-tight sm:text-6xl lg:text-7xl">
                    Landing page yang mengarahkan pengunjung menuju tindakan.
                </h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                    Sajikan produk, penawaran, atau layanan melalui satu halaman yang terarah. Bantu pengunjung memahami informasi dan mengambil langkah berikutnya.
                </p>
                <div class="mt-10 flex flex-wrap gap-3">
                    <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-12 items-center bg-zinc-950 px-6 py-3 text-sm font-semibold text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-950">
                        Diskusikan landing page ↗
                    </a>
                    <a href="#struktur" class="inline-flex min-h-12 items-center border border-zinc-300 px-6 py-3 text-sm font-semibold dark:border-zinc-700">
                        Lihat struktur
                    </a>
                </div>
            </div>

            <div class="border-l border-zinc-200 pl-7 dark:border-zinc-800 lg:max-w-sm lg:justify-self-end">
                <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Investasi awal</p>
                <p class="mt-5 text-4xl font-semibold">Rp500 ribu+</p>
                <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                    Estimasi awal untuk landing page sederhana. Kebutuhan konten, desain, dan integrasi menentukan penawaran akhir.
                </p>
                <p class="mt-8 border-t border-zinc-200 pt-5 text-xs leading-6 text-zinc-500 dark:border-zinc-800">
                    Untuk promosi produk, kampanye, layanan profesional, event, dan pengumpulan prospek.
                </p>
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Penggunaan</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Satu halaman dengan tujuan yang jelas.
            </h2>
            <div class="mt-14 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2">
                @foreach ($useCases as $item)
                    <article class="bg-white p-7 dark:bg-zinc-950">
                        <p class="font-mono text-xs text-zinc-400">{{ $item['number'] }}</p>
                        <h3 class="mt-5 text-xl font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $item['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="struktur" class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Struktur halaman</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Setiap bagian mendukung perjalanan pengunjung.
            </h2>
            <div class="mt-14 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($elements as $element)
                    <article class="bg-white p-7 dark:bg-zinc-950">
                        <h3 class="font-semibold">{{ $element['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $element['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Proses pengerjaan</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Mulai dari tujuan kampanye, lalu susun pengalaman halamannya.
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
            <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-5xl">Pertanyaan tentang landing page.</h2>
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
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-400">Landing page development</p>
            <h2 class="mt-7 max-w-3xl text-4xl font-semibold tracking-tight sm:text-6xl">
                Punya kampanye atau penawaran yang ingin dipublikasikan?
            </h2>
            <p class="mt-6 max-w-2xl leading-8 text-zinc-300">
                Ceritakan tujuan, audiens, dan tindakan yang ingin dicapai. Kita susun halaman berdasarkan kebutuhan kampanyemu.
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