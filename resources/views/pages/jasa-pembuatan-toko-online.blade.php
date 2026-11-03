@section('title', 'Jasa Pembuatan Toko Online untuk Bisnis | Yoga Wilanda')
@section('description', 'Jasa pembuatan toko online untuk bisnis dan UMKM. Website katalog produk, keranjang, checkout, pengelolaan pesanan, dan integrasi pembayaran sesuai kebutuhan.')

@php
    $waNumber = '6285158986696';
    $waMessage = rawurlencode('Halo Yoga, saya ingin konsultasi pembuatan toko online untuk bisnis saya.');
    $waUrl = "https://wa.me/{$waNumber}?text={$waMessage}";

    $capabilities = [
        ['title' => 'Katalog produk', 'description' => 'Kategori, foto, deskripsi, harga, dan informasi produk.'],
        ['title' => 'Detail produk', 'description' => 'Halaman khusus untuk informasi dan pilihan produk.'],
        ['title' => 'Keranjang belanja', 'description' => 'Pengunjung dapat mengumpulkan produk sebelum melakukan pemesanan.'],
        ['title' => 'Checkout dan pesanan', 'description' => 'Alur pengisian data pembeli dan pencatatan pesanan.'],
        ['title' => 'Pembayaran', 'description' => 'Opsi pembayaran dapat disesuaikan dengan kebutuhan dan penyedia layanan.'],
        ['title' => 'Dashboard pengelolaan', 'description' => 'Pengelolaan produk dan pesanan melalui akses admin sesuai scope.'],
    ];

    $stages = [
        ['number' => '01', 'title' => 'Kebutuhan bisnis', 'description' => 'Pahami produk, variasi, pelanggan, dan cara bisnis menerima pesanan.'],
        ['number' => '02', 'title' => 'Alur transaksi', 'description' => 'Tentukan katalog, keranjang, checkout, pembayaran, dan pemrosesan pesanan.'],
        ['number' => '03', 'title' => 'Development', 'description' => 'Bangun tampilan toko dan fitur berdasarkan prioritas yang disepakati.'],
        ['number' => '04', 'title' => 'Pengujian transaksi', 'description' => 'Uji alur belanja, validasi data, notifikasi, dan pengelolaan pesanan.'],
        ['number' => '05', 'title' => 'Launch dan handover', 'description' => 'Publikasikan website dan serahkan akses serta panduan penggunaan.'],
    ];

    $faqs = [
        ['q' => 'Berapa biaya membuat toko online?', 'a' => 'Estimasi awal mulai Rp2,5 juta. Biaya akhir bergantung pada jumlah produk, variasi, alur checkout, pembayaran, dan fitur pengelolaan.'],
        ['q' => 'Apakah toko online bisa menerima pembayaran otomatis?', 'a' => 'Bisa melalui integrasi penyedia pembayaran yang sesuai. Biaya layanan pihak ketiga dan kebutuhan integrasinya dihitung terpisah.'],
        ['q' => 'Apakah saya bisa mengelola produk sendiri?', 'a' => 'Bisa. Dashboard pengelolaan produk dan pesanan dapat disiapkan sesuai ruang lingkup proyek.'],
        ['q' => 'Apakah bisa menggunakan WhatsApp untuk menerima pesanan?', 'a' => 'Bisa. Alur pemesanan dapat diarahkan ke WhatsApp atau menggunakan checkout dan pencatatan pesanan di website.'],
        ['q' => 'Apakah website bisa dikembangkan kemudian?', 'a' => 'Bisa. Fitur seperti stok, promo, kupon, laporan, dan integrasi tambahan dapat dikembangkan bertahap.'],
        ['q' => 'Apakah domain dan hosting termasuk?', 'a' => 'Domain dan hosting dibicarakan secara terpisah dalam penawaran, termasuk kepemilikan akun dan biaya perpanjangan.'],
    ];
@endphp

<x-layouts::guest>
    <section class="flex min-h-[82vh] snap-start items-center border-b border-zinc-200 bg-white px-6 py-24 dark:border-zinc-800 dark:bg-zinc-950 sm:px-10">
        <div class="mx-auto grid w-full max-w-7xl gap-14 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500">E-commerce / Online store</p>
                <h1 class="mt-8 max-w-4xl text-4xl font-semibold leading-[1.12] tracking-tight sm:text-6xl lg:text-7xl">
                    Toko online untuk mengelola produk dan menerima pesanan melalui website sendiri.
                </h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">
                    Bangun pengalaman belanja digital yang sesuai dengan cara bisnismu menjual produk, memproses transaksi, dan melayani pelanggan.
                </p>
                <div class="mt-10 flex flex-wrap gap-3">
                    <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex min-h-12 items-center bg-zinc-950 px-6 py-3 text-sm font-semibold text-white hover:bg-zinc-700 dark:bg-white dark:text-zinc-950">
                        Diskusikan toko online ↗
                    </a>
                    <a href="#fitur" class="inline-flex min-h-12 items-center border border-zinc-300 px-6 py-3 text-sm font-semibold dark:border-zinc-700">
                        Lihat fitur
                    </a>
                </div>
            </div>
            <div class="border-l border-zinc-200 pl-7 dark:border-zinc-800 lg:max-w-sm lg:justify-self-end">
                <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Investasi awal</p>
                <p class="mt-5 text-4xl font-semibold">Rp2,5 juta+</p>
                <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">
                    Estimasi awal untuk toko online sederhana. Fitur transaksi dan integrasi disesuaikan dengan kebutuhan bisnis.
                </p>
                <p class="mt-8 border-t border-zinc-200 pt-5 text-xs leading-6 text-zinc-500 dark:border-zinc-800">
                    Untuk retail, fashion, makanan, kosmetik, distributor, dan bisnis berbasis produk.
                </p>
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Alur penjualan</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Dari produk yang ditemukan hingga pesanan yang diproses.
            </h2>
            <div class="mt-14 grid gap-5 md:grid-cols-4">
                @foreach ([
                    ['number' => '01', 'title' => 'Temukan produk', 'description' => 'Pelanggan menjelajahi katalog dan kategori.'],
                    ['number' => '02', 'title' => 'Pilih produk', 'description' => 'Pelanggan melihat detail dan menentukan pilihan.'],
                    ['number' => '03', 'title' => 'Buat pesanan', 'description' => 'Pelanggan mengisi informasi dan menyelesaikan checkout.'],
                    ['number' => '04', 'title' => 'Proses pesanan', 'description' => 'Bisnis menerima dan menindaklanjuti pesanan.'],
                ] as $stage)
                    <article class="border-t border-zinc-200 pt-5 dark:border-zinc-800">
                        <p class="font-mono text-xs text-zinc-400">{{ $stage['number'] }}</p>
                        <h3 class="mt-5 font-semibold">{{ $stage['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $stage['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="fitur" class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Kapabilitas toko online</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Fitur mengikuti kebutuhan operasional tokomu.
            </h2>
            <div class="mt-14 grid gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($capabilities as $capability)
                    <article class="bg-white p-7 dark:bg-zinc-950">
                        <h3 class="font-semibold">{{ $capability['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $capability['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Pengembangan bertahap</p>
                <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-5xl">
                    Mulai dari alur inti. Kembangkan saat bisnis siap.
                </h2>
                <p class="mt-6 leading-8 text-zinc-600 dark:text-zinc-400">
                    Kebutuhan toko online setiap bisnis berbeda. Fitur lanjutan dapat diprioritaskan berdasarkan volume transaksi dan proses operasional.
                </p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2">
                @foreach ([
                    ['title' => 'Manajemen stok', 'description' => 'Jumlah stok, status ketersediaan, dan variasi produk.'],
                    ['title' => 'Promo dan kupon', 'description' => 'Diskon, kode promo, dan aturan penawaran.'],
                    ['title' => 'Laporan penjualan', 'description' => 'Ringkasan pesanan dan performa penjualan.'],
                    ['title' => 'Integrasi eksternal', 'description' => 'Koneksi ke layanan pembayaran, pengiriman, atau sistem lain.'],
                ] as $item)
                    <div class="border-t border-zinc-200 pt-5 dark:border-zinc-800">
                        <h3 class="font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start border-y border-zinc-200 bg-zinc-100 px-6 py-24 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Proses pengerjaan</p>
            <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                Bangun toko online berdasarkan proses bisnis yang nyata.
            </h2>
            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($stages as $stage)
                    <article class="border-t border-zinc-300 pt-5 dark:border-zinc-700">
                        <p class="font-mono text-xs text-zinc-400">{{ $stage['number'] }}</p>
                        <h3 class="mt-5 font-semibold">{{ $stage['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $stage['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="snap-start px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-4xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">FAQ</p>
            <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-5xl">Pertanyaan tentang toko online.</h2>
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
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-400">Online store development</p>
            <h2 class="mt-7 max-w-3xl text-4xl font-semibold tracking-tight sm:text-6xl">
                Siapkan toko online yang mengikuti cara bisnismu berjualan.
            </h2>
            <p class="mt-6 max-w-2xl leading-8 text-zinc-300">
                Ceritakan produk, cara menerima pesanan, dan kebutuhan transaksi. Kita susun fitur berdasarkan prioritas operasional.
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