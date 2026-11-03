@section('title', 'Jasa Pembuatan Website Surabaya untuk Bisnis | Yoga Wilanda')
@section('description', 'Jasa pembuatan website bisnis di Surabaya dan Sidoarjo. Website UMKM, company profile, katalog produk, toko online, dan aplikasi web custom.')

@php
    $waNumber = '6285158986696';
    $waMessage = rawurlencode('Halo Yoga, saya ingin konsultasi jasa pembuatan website untuk bisnis saya. Saya menemukan website Yoga Wilanda dari halaman jasa pembuatan website Surabaya.');
    $waUrl = "https://wa.me/{$waNumber}?text={$waMessage}";

    $websiteTypes = [
        [
            'number' => '01',
            'title' => 'Website bisnis & UMKM',
            'description' => 'Perkenalkan bisnis, layanan, lokasi, dan informasi penting agar calon pelanggan lebih mudah mengenal usahamu.',
            'price' => 'Mulai Rp1 juta',
        ],
        [
            'number' => '02',
            'title' => 'Company profile',
            'description' => 'Tampilkan profil perusahaan, layanan, pengalaman, portfolio, dan jalur komunikasi dalam satu website profesional.',
            'price' => 'Mulai Rp1,5 juta',
        ],
        [
            'number' => '03',
            'title' => 'Katalog produk',
            'description' => 'Susun produk berdasarkan kategori dengan halaman detail dan jalur inquiry yang mudah digunakan.',
            'price' => 'Mulai Rp2 juta',
        ],
        [
            'number' => '04',
            'title' => 'Toko online',
            'description' => 'Bangun pengalaman katalog dan pemesanan online dengan alur transaksi yang disesuaikan kebutuhan bisnis.',
            'price' => 'Mulai Rp2,5 juta',
        ],
        [
            'number' => '05',
            'title' => 'Landing page',
            'description' => 'Fokus pada satu produk, layanan, atau campaign dengan informasi terarah dan CTA yang jelas.',
            'price' => 'Mulai Rp500 ribu',
        ],
        [
            'number' => '06',
            'title' => 'Aplikasi web custom',
            'description' => 'Dashboard, manajemen data, autentikasi, role pengguna, dan workflow khusus untuk operasional bisnis.',
            'price' => 'Mulai Rp5 juta',
        ],
    ];

    $businessSegments = [
        ['name' => 'Kuliner & F&B', 'detail' => 'Menu digital, katalog, reservasi, dan pemesanan.'],
        ['name' => 'Retail & otomotif', 'detail' => 'Katalog produk, detail kendaraan, dan inquiry pelanggan.'],
        ['name' => 'Jasa profesional', 'detail' => 'Profil perusahaan, portfolio, dan formulir penawaran.'],
        ['name' => 'Beauty & lifestyle', 'detail' => 'Daftar layanan, galeri, dan booking.'],
        ['name' => 'Properti & hospitality', 'detail' => 'Listing, fasilitas, informasi lokasi, dan inquiry.'],
        ['name' => 'Pendidikan & komunitas', 'detail' => 'Program, informasi, dan pendaftaran.'],
    ];

    $processSteps = [
        ['number' => '01', 'title' => 'Konsultasi kebutuhan', 'detail' => 'Ceritakan bisnis, masalah, target, dan budget yang tersedia.'],
        ['number' => '02', 'title' => 'Scope dan penawaran', 'detail' => 'Kita sepakati fitur, halaman, timeline, dan biaya secara tertulis.'],
        ['number' => '03', 'title' => 'Implementasi', 'detail' => 'Website dibangun sesuai scope dengan progres yang dapat ditinjau.'],
        ['number' => '04', 'title' => 'Review dan pengujian', 'detail' => 'Periksa tampilan, fungsi, responsivitas, dan alur penggunaan.'],
        ['number' => '05', 'title' => 'Launch dan handover', 'detail' => 'Website diluncurkan dan akses pengelolaan diserahkan sesuai kesepakatan.'],
    ];

    $faqs = [
        [
            'question' => 'Berapa biaya pembuatan website?',
            'answer' => 'Harga indikatif mulai Rp500 ribu untuk landing page, Rp1 juta untuk website bisnis sederhana, dan menyesuaikan fitur untuk kebutuhan yang lebih kompleks. Estimasi final diberikan setelah scope disepakati.',
        ],
        [
            'question' => 'Berapa lama pengerjaan website?',
            'answer' => 'Durasi bergantung pada jumlah halaman, fitur, kesiapan konten, dan kompleksitas integrasi. Timeline disampaikan dalam penawaran sebelum pengerjaan dimulai.',
        ],
        [
            'question' => 'Apakah domain dan hosting sudah termasuk?',
            'answer' => 'Domain, hosting, dan layanan pihak ketiga dibicarakan terpisah dalam penawaran agar biaya dan kepemilikan akun jelas.',
        ],
        [
            'question' => 'Apakah website bisa saya kelola sendiri?',
            'answer' => 'Bisa. CMS atau dashboard admin dapat disiapkan sesuai kebutuhan agar kamu dapat memperbarui konten dan data tanpa mengubah kode.',
        ],
        [
            'question' => 'Apakah tersedia maintenance?',
            'answer' => 'Tersedia dukungan teknis dan maintenance berkelanjutan berdasarkan paket serta ruang lingkup yang disepakati.',
        ],
        [
            'question' => 'Bisakah fitur ditambahkan setelah website selesai?',
            'answer' => 'Bisa. Website dapat dikembangkan bertahap. Penambahan fitur akan diperiksa dan diestimasi sebagai pekerjaan lanjutan.',
        ],
    ];
@endphp

<x-layouts::guest>
    <section class="relative flex min-h-[85vh] snap-start items-center border-b border-zinc-200 bg-white px-6 py-24 dark:border-zinc-800 dark:bg-zinc-950 sm:px-10">
        <div class="mx-auto grid w-full max-w-7xl gap-16 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.22em] text-zinc-500">
                    Website development / Surabaya & Sidoarjo
                </p>

                <h1 class="mt-8 max-w-4xl text-4xl font-semibold leading-[1.12] tracking-tight text-zinc-950 dark:text-white sm:text-6xl lg:text-7xl">
                    Jasa pembuatan website untuk bisnis yang ingin berkembang.
                </h1>

                <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                    Bangun kehadiran online, tampilkan produk dan layanan, serta rapikan proses bisnis melalui website yang dirancang sesuai kebutuhan usahamu.
                </p>

                <div class="mt-10 flex flex-wrap gap-3">
                    <x-site.button :href="$waUrl" target="_blank">
                        Konsultasi kebutuhan
                        <span class="ml-3" aria-hidden="true">↗</span>
                    </x-site.button>

                    <x-site.button href="#pilihan-website" variant="secondary">
                        Lihat pilihan website
                    </x-site.button>
                </div>

                <p class="mt-6 text-xs leading-6 text-zinc-500">
                    Dikerjakan langsung oleh Yoga Wilanda · Product Engineer
                </p>
            </div>

            <div class="border-l border-zinc-200 pl-7 dark:border-zinc-800 lg:ml-auto lg:max-w-sm">
                <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Area layanan utama</p>
                <p class="mt-5 text-2xl font-semibold">Surabaya & Sidoarjo</p>
                <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                    Diskusi dan pengerjaan dapat dilakukan secara langsung maupun remote. Proyek dari area lain tetap dapat didiskusikan.
                </p>
                <div class="mt-8 border-t border-zinc-200 pt-5 dark:border-zinc-800">
                    <p class="text-sm text-zinc-500">Harga indikatif</p>
                    <p class="mt-1 text-3xl font-semibold">Rp500 ribu+</p>
                    <p class="mt-2 text-xs leading-5 text-zinc-500">Mengikuti jenis website dan ruang lingkup pekerjaan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pilihan-website" class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <x-site.section-heading
                eyebrow="Pilihan kebutuhan"
                title="Website seperti apa yang dibutuhkan bisnismu?"
                description="Mulai dari halaman promosi sederhana sampai sistem web dengan workflow khusus. Pilih berdasarkan kebutuhan yang ingin diselesaikan."
            />

            <div class="mt-14 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($websiteTypes as $item)
                    <article class="flex min-h-64 flex-col bg-white p-7 dark:bg-zinc-950">
                        <p class="font-mono text-xs text-zinc-400">{{ $item['number'] }}</p>
                        <h2 class="mt-7 text-xl font-semibold">{{ $item['title'] }}</h2>
                        <p class="mt-3 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $item['description'] }}</p>
                        <p class="mt-7 border-t border-zinc-200 pt-4 text-sm font-semibold dark:border-zinc-800">{{ $item['price'] }}</p>
                    </article>
                @endforeach
            </div>
            <p class="mt-5 text-xs leading-6 text-zinc-500">
                Harga merupakan titik awal untuk pengujian paket, bukan harga final. Biaya akhir mengikuti scope, konten, integrasi, dan kebutuhan operasional.
            </p>
        </div>
    </section>

    <section class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <x-site.section-heading
                eyebrow="Bidang usaha"
                title="Setiap bisnis punya kebutuhan digital yang berbeda."
                description="Struktur dan fitur website disesuaikan dengan cara pelanggan mengenal, mempertimbangkan, dan menghubungi bisnismu."
            />

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($businessSegments as $segment)
                    <div class="border-t border-zinc-300 pt-5 dark:border-zinc-700">
                        <h3 class="font-semibold">{{ $segment['name'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $segment['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <x-site.section-heading
                eyebrow="Contoh pekerjaan"
                title="Website sebagai bagian dari sistem bisnis."
                description="Beberapa contoh proyek yang dapat dilihat untuk memahami pendekatan pengembangan dan jenis solusi yang dikerjakan."
            />

            <div class="mt-14 grid gap-6 md:grid-cols-2">
                <x-site.card padding="lg">
                    <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Automotive / Digital presence</p>
                    <h3 class="mt-5 text-2xl font-semibold">Wisata Mobil Bekas</h3>
                    <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                        Pengembangan website showroom mobil bekas dengan halaman katalog kendaraan dan jalur inquiry untuk calon pembeli.
                    </p>
                    <a href="https://wisatamobilbekas.id" target="_blank" rel="noopener noreferrer" class="mt-8 inline-flex text-sm font-medium underline underline-offset-4">
                        Kunjungi website ↗
                    </a>
                </x-site.card>

                <x-site.card padding="lg">
                    <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Property / Product development</p>
                    <h3 class="mt-5 text-2xl font-semibold">DownloadRumah</h3>
                    <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                        Pengembangan platform discovery properti dengan pendekatan pencarian berdasarkan kebutuhan pengguna.
                    </p>
                    <a href="https://downloadrumah.yogawilanda.com" target="_blank" rel="noopener noreferrer" class="mt-8 inline-flex text-sm font-medium underline underline-offset-4">
                        Kunjungi platform ↗
                    </a>
                </x-site.card>
            </div>
            <p class="mt-5 text-xs text-zinc-500">Ruang lingkup dan kontribusi pada setiap proyek berbeda.</p>
        </div>
    </section>

    <section class="snap-start border-y border-zinc-200 bg-white px-6 py-24 dark:border-zinc-800 dark:bg-zinc-950 sm:px-10">
        <div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <x-site.section-heading
                    eyebrow="Kemampuan teknis"
                    title="Fondasi yang bisa dikembangkan."
                    description="Teknologi dipilih berdasarkan kebutuhan proyek, skala penggunaan, dan proses yang ingin didukung."
                />
            </div>

            <div class="grid gap-7 sm:grid-cols-2">
                @foreach ([
                    ['title' => 'Website responsif', 'detail' => 'Tampilan yang menyesuaikan desktop, tablet, dan perangkat mobile.'],
                    ['title' => 'CMS & katalog', 'detail' => 'Pengelolaan halaman, kategori, produk, dan konten.'],
                    ['title' => 'Integrasi API', 'detail' => 'Menghubungkan website dengan layanan dan sistem lain.'],
                    ['title' => 'Dashboard & akses pengguna', 'detail' => 'Autentikasi, role-based access, dan manajemen data.'],
                    ['title' => 'Custom workflow', 'detail' => 'Alur kerja dan proses digital yang mengikuti kebutuhan operasional.'],
                    ['title' => 'SEO technical foundation', 'detail' => 'Struktur halaman, metadata, sitemap, dan data terstruktur.'],
                ] as $capability)
                    <div class="border-t border-zinc-200 pt-5 dark:border-zinc-800">
                        <h3 class="font-semibold">{{ $capability['title'] }}</h3>
                        <p class="mt-2 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $capability['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <x-site.section-heading
                eyebrow="Cara kerja"
                title="Pekerjaan dimulai dengan scope yang jelas."
                description="Kamu mengetahui apa yang dikerjakan, apa yang termasuk dalam biaya, dan bagaimana proses serah terimanya."
            />

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($processSteps as $step)
                    <div class="border-t border-zinc-300 pt-5 dark:border-zinc-700">
                        <p class="font-mono text-xs text-zinc-400">{{ $step['number'] }}</p>
                        <h3 class="mt-5 font-semibold">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $step['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <x-site.section-heading
                    eyebrow="Dukungan setelah launch"
                    title="Website perlu tetap terurus."
                    description="Setelah website aktif, kebutuhan teknis dapat berlanjut mengikuti aktivitas dan perkembangan bisnis."
                />
            </div>
            <div class="grid gap-6 sm:grid-cols-2">
                @foreach ([
                    ['title' => 'Maintenance', 'detail' => 'Pembaruan, pemeriksaan, dan bantuan teknis sesuai paket.'],
                    ['title' => 'Backup & monitoring', 'detail' => 'Pengelolaan backup dan pemantauan sesuai ruang lingkup layanan.'],
                    ['title' => 'Update konten', 'detail' => 'Perubahan informasi, produk, dan konten berdasarkan kebutuhan.'],
                    ['title' => 'Pengembangan fitur', 'detail' => 'Penambahan kemampuan website seiring kebutuhan baru.'],
                ] as $support)
                    <div class="border-t border-zinc-300 pt-5 dark:border-zinc-700">
                        <h3 class="font-semibold">{{ $support['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $support['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-4xl">
            <x-site.section-heading
                eyebrow="Pertanyaan umum"
                title="Sebelum mulai membuat website."
                description="Beberapa hal yang biasanya perlu diketahui sebelum menentukan scope dan anggaran."
            />

            <div class="mt-12 divide-y divide-zinc-200 border-y border-zinc-200 dark:divide-zinc-800 dark:border-zinc-800">
                @foreach ($faqs as $faq)
                    <details class="group py-6">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 font-medium">
                            {{ $faq['question'] }}
                            <span class="text-zinc-400 transition-transform group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 max-w-3xl text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                            {{ $faq['answer'] }}
                        </p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start bg-zinc-950 px-6 py-24 text-white sm:px-10">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[1fr_auto] lg:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-400">Mulai dari kebutuhanmu</p>
                <h2 class="mt-7 max-w-3xl text-4xl font-semibold tracking-tight sm:text-6xl">
                    Ceritakan website yang ingin kamu bangun.
                </h2>
                <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-300">
                    Diskusikan kebutuhan, prioritas, dan anggaran. Kamu akan mendapat gambaran scope sebelum memutuskan melanjutkan proyek.
                </p>
            </div>
            <div class="flex flex-col items-start gap-4">
                <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-12 items-center bg-white px-6 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-zinc-200">
                    Konsultasi melalui WhatsApp ↗
                </a>
                <a href="{{ route('services') }}" class="text-sm text-zinc-300 underline underline-offset-4">
                    Lihat ringkasan layanan
                </a>
            </div>
        </div>
    </section>
</x-layouts::guest>