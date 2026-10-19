{{-- resources/views/services.blade.php --}}
<x-layouts::guest>
    <div class="bg-white text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">

        {{-- Hero --}}
        <section class="flex min-h-[85vh] items-center border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto w-full max-w-6xl px-6 py-28 sm:px-8 lg:px-6">
                <div class="max-w-4xl">
                    <p
                        class="mb-6 flex items-center gap-3 font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        <span class="h-px w-8 bg-zinc-400 dark:bg-zinc-600"></span>
                        Website Development
                    </p>

                    <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl lg:text-7xl">
                        Website profesional
                        <span class="text-zinc-400 dark:text-zinc-600">
                            untuk mengembangkan bisnis Anda.
                        </span>
                    </h1>

                    <p class="mt-8 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        Bangun kehadiran digital yang lebih profesional melalui website
                        yang dirancang sesuai kebutuhan bisnis. Mulai dari landing page
                        dan company profile hingga website dengan fitur khusus.
                    </p>

                    <div class="mt-10 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="#layanan"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            Lihat layanan
                            <span aria-hidden="true" class="ml-2">↓</span>
                        </a>

                        <a href="{{ route('home') }}#contact"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            Konsultasikan proyek
                        </a>
                    </div>
                </div>

                <div
                    class="mt-16 flex flex-wrap gap-x-8 gap-y-3 border-t border-zinc-200 pt-6 font-mono text-xs uppercase tracking-wider text-zinc-400 dark:border-zinc-800">
                    <span>Responsive Design</span>
                    <span>Performance</span>
                    <span>Business-focused</span>
                </div>
            </div>
        </section>

        {{-- Services --}}
        <section id="layanan" class="scroll-mt-8 border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-32">
                <div class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        Layanan
                    </p>

                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Website untuk kebutuhan yang berbeda.
                    </h2>

                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Pilih solusi berdasarkan tujuan bisnis dan kebutuhan yang ingin
                        diselesaikan. Ruang lingkup pengerjaan dibahas sebelum proyek dimulai.
                    </p>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    {{-- Landing Page --}}
                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">01 / LANDING PAGE</span>

                        <h3 class="mt-8 text-xl font-semibold">
                            Landing Page
                        </h3>

                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Halaman yang berfokus pada satu produk, layanan, atau
                            penawaran dengan informasi terarah dan ajakan bertindak yang jelas.
                        </p>

                        <div class="mt-8 border-t border-zinc-200 pt-5 dark:border-zinc-800">
                            <p class="text-xs font-medium uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                Cocok untuk
                            </p>
                            <p class="mt-2 text-sm leading-6">
                                Promosi layanan, kampanye pemasaran, dan penawaran produk.
                            </p>
                        </div>
                    </article>

                    {{-- Company Profile --}}
                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">02 / COMPANY PROFILE</span>

                        <h3 class="mt-8 text-xl font-semibold">
                            Website Bisnis
                        </h3>

                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Pusat informasi digital untuk memperkenalkan bisnis,
                            menampilkan layanan, membangun kredibilitas, dan membantu
                            calon pelanggan menemukan informasi yang dibutuhkan.
                        </p>

                        <div class="mt-8 border-t border-zinc-200 pt-5 dark:border-zinc-800">
                            <p class="text-xs font-medium uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                Cocok untuk
                            </p>
                            <p class="mt-2 text-sm leading-6">
                                UMKM, penyedia jasa, bisnis lokal, dan perusahaan.
                            </p>
                        </div>
                    </article>

                    {{-- Custom Website --}}
                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">03 / CUSTOM WEBSITE</span>

                        <h3 class="mt-8 text-xl font-semibold">
                            Website dengan Fitur Khusus
                        </h3>

                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Website dengan fungsi yang menyesuaikan kebutuhan,
                            mulai dari katalog dinamis hingga dashboard untuk mengelola konten.
                        </p>

                        <div class="mt-8 border-t border-zinc-200 pt-5 dark:border-zinc-800">
                            <p class="text-xs font-medium uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                Cocok untuk
                            </p>
                            <p class="mt-2 text-sm leading-6">
                                Bisnis yang membutuhkan alur kerja atau pengelolaan data khusus.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- Benefits --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div
                class="mx-auto grid max-w-6xl gap-12 px-6 py-24 sm:px-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20 lg:px-6 lg:py-32">
                <div>
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        Pendekatan
                    </p>

                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Bukan sekadar tampilan website.
                    </h2>

                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Website perlu membantu pengunjung memahami bisnis Anda,
                        menemukan informasi penting, dan mengambil langkah berikutnya.
                    </p>
                </div>

                <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    <div class="py-6 first:pt-0">
                        <h3 class="font-medium">Responsif di berbagai perangkat</h3>
                        <p class="mt-2 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Tampilan menyesuaikan ukuran layar ponsel, tablet, dan desktop.
                        </p>
                    </div>

                    <div class="py-6">
                        <h3 class="font-medium">Performa yang diperhatikan</h3>
                        <p class="mt-2 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Implementasi mempertimbangkan kecepatan akses dan efisiensi aset.
                        </p>
                    </div>

                    <div class="py-6">
                        <h3 class="font-medium">Struktur informasi yang jelas</h3>
                        <p class="mt-2 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Konten disusun agar pengunjung lebih mudah memahami produk,
                            layanan, dan informasi bisnis.
                        </p>
                    </div>

                    <div class="py-6">
                        <h3 class="font-medium">Dibangun sesuai kebutuhan</h3>
                        <p class="mt-2 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Fitur dan ruang lingkup disesuaikan dengan tujuan proyek,
                            tanpa menambahkan kompleksitas yang belum diperlukan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-32">
                <div class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        Proses kerja
                    </p>

                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Dari kebutuhan hingga website online.
                    </h2>
                </div>

                <div class="mt-12 grid gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-5">
                    @php
                    $steps = [
                    [
                    'number' => '01',
                    'title' => 'Konsultasi',
                    'description' => 'Membahas tujuan, kebutuhan, fitur, dan anggaran.',
                    ],
                    [
                    'number' => '02',
                    'title' => 'Perencanaan',
                    'description' => 'Menentukan ruang lingkup, biaya, dan estimasi waktu.',
                    ],
                    [
                    'number' => '03',
                    'title' => 'Pengembangan',
                    'description' => 'Membangun website berdasarkan kesepakatan proyek.',
                    ],
                    [
                    'number' => '04',
                    'title' => 'Pemeriksaan',
                    'description' => 'Memeriksa fungsi, tampilan, dan revisi yang disepakati.',
                    ],
                    [
                    'number' => '05',
                    'title' => 'Peluncuran',
                    'description' => 'Mempublikasikan dan menyerahkan website sesuai layanan.',
                    ],
                    ];
                    @endphp

                    @foreach ($steps as $step)
                    <article class="border-t border-zinc-300 pt-5 dark:border-zinc-700">
                        <span class="font-mono text-xs text-zinc-400">
                            {{ $step['number'] }}
                        </span>

                        <h3 class="mt-4 font-semibold">
                            {{ $step['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            {{ $step['description'] }}
                        </p>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Scope and pricing --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto grid max-w-6xl gap-10 px-6 py-24 sm:px-8 lg:grid-cols-2 lg:gap-20 lg:px-6 lg:py-32">
                <div>
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        Ruang lingkup
                    </p>

                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Jelas sebelum proyek dimulai.
                    </h2>

                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Setiap proyek memiliki kebutuhan yang berbeda. Penawaran dibuat
                        berdasarkan fitur dan ruang lingkup yang telah disepakati agar
                        biaya dan ekspektasi tetap jelas bagi kedua pihak.
                    </p>
                </div>

                <div class="border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                    <h3 class="font-semibold">Hal yang dibahas dalam penawaran</h3>

                    <ul class="mt-6 space-y-4 text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                        <li class="flex gap-3">
                            <span class="text-zinc-400" aria-hidden="true">—</span>
                            Fitur dan halaman yang termasuk dalam pengerjaan.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-zinc-400" aria-hidden="true">—</span>
                            Ketersediaan materi, konten, dan aset dari pelanggan.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-zinc-400" aria-hidden="true">—</span>
                            Biaya domain, hosting, dan kebutuhan layanan pihak ketiga.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-zinc-400" aria-hidden="true">—</span>
                            Batas revisi, waktu pengerjaan, dan ketentuan pembayaran.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-zinc-400" aria-hidden="true">—</span>
                            Dukungan setelah peluncuran dan biaya perpanjangan bila ada.
                        </li>
                    </ul>

                    <a href="{{ route('home') }}#contact"
                        class="mt-8 inline-flex min-h-11 items-center justify-center rounded-lg bg-zinc-950 px-5 py-3 text-sm font-medium text-white transition hover:bg-zinc-800 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                        Minta estimasi biaya
                        <span aria-hidden="true" class="ml-2">→</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div
                class="mx-auto grid max-w-6xl gap-10 px-6 py-24 sm:px-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20 lg:px-6 lg:py-32">
                <div>
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        FAQ
                    </p>

                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Pertanyaan yang sering diajukan.
                    </h2>
                </div>

                <div class="divide-y divide-zinc-200 dark:divide-zinc-800">
                    <details class="group py-5 first:pt-0">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium">
                            Berapa biaya pembuatan website?
                            <span class="text-zinc-400 transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Biaya bergantung pada jenis website, fitur, dan ruang lingkup
                            pengerjaan. Konsultasikan kebutuhan Anda untuk mendapatkan
                            estimasi yang sesuai.
                        </p>
                    </details>

                    <details class="group py-5">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium">
                            Berapa lama proses pengerjaannya?
                            <span class="text-zinc-400 transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Waktu pengerjaan mengikuti kompleksitas website, kesiapan materi,
                            dan fitur yang disepakati. Estimasi disampaikan sebelum proyek dimulai.
                        </p>
                    </details>

                    <details class="group py-5">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium">
                            Apakah website bisa dikelola sendiri?
                            <span class="text-zinc-400 transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Bisa, apabila kebutuhan pengelolaan konten atau dashboard admin
                            termasuk dalam ruang lingkup proyek.
                        </p>
                    </details>

                    <details class="group py-5">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium">
                            Apakah biaya hosting sudah termasuk?
                            <span class="text-zinc-400 transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Kebutuhan domain dan hosting dijelaskan dalam penawaran sebelum
                            proyek dimulai, termasuk biaya yang berlaku dan pengelolaannya.
                        </p>
                    </details>

                    <details class="group py-5">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-medium">
                            Apakah tersedia dukungan setelah website online?
                            <span class="text-zinc-400 transition group-open:rotate-45" aria-hidden="true">+</span>
                        </summary>
                        <p class="mt-4 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Ketentuan dukungan, pemeliharaan, dan pekerjaan lanjutan dibahas
                            berdasarkan layanan yang dipilih dan kesepakatan proyek.
                        </p>
                    </details>
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section id="konsultasi" class="scroll-mt-8">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-32">
                <div class="border border-zinc-200 p-8 dark:border-zinc-800 sm:p-12 lg:p-16">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        Mulai dari kebutuhan Anda
                    </p>

                    <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                        Punya rencana membuat website?
                    </h2>

                    <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        Ceritakan bisnis dan kebutuhan yang ingin diselesaikan.
                        Dapatkan rekomendasi solusi serta estimasi biaya sebelum memulai proyek.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="{{ route('home') }}#contact"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            Konsultasikan proyek
                            <span aria-hidden="true" class="ml-2">→</span>
                        </a>

                        <a href="{{ route('home') }}#projects"
                            class="inline-flex min-h-12 items-center justify-center rounded-lg border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            Lihat hasil kerja
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layouts::guest>
