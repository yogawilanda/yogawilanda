{{-- resources/views/services.blade.php --}}
@php
$wa_service_number = "6285158986696";
$service_brand_name_capitalize = "Yoga";

$pricing_web_build_standard = "3,x Juta";
$pricing_retainer_standard = "1,5 Juta";

$contact_from_service_hero =
"Halo%20{$service_brand_name_capitalize},%20aku%20mau%20diskusi%20soal%20website%20dan%20kebutuhan%20IT%20bisnis%20yoga.%20(sumber:%20/services)";

$contact_from_service_final =
"Halo%20{$service_brand_name_capitalize},%aku%mau%20diskusi%20untuk%20merapikan%20%20bisnis%20yoga.%20(sumber:%20/services)";

// Copy: pakai "yoga" (kamu) dan "kamu" (pengunjung) secara konsisten
$text_badge_hero = "Jasa pembuatan website non wordpress";
$text_headline_hero_1 = "Kamu fokus di bisnisnya";
$text_headline_hero_2 = "Yoga urus websitenya";
$text_subhero = "Buat usaha kamu lebih mudah ditemukan oleh calon pelanggan dengan website yang scale as you grow.";
$text_micro_hero = "SEO, Hosting, Domain, teknisnya lainnya biar rekan Yoga Bantu. Ceritain aja mau kamu.";

$steps = [
['number' => '01', 'title' => 'Ceritakan masalahmu', 'description' => 'Jelaskan dengan bahasa sehari-hari. yoga yang
menerjemahkannya ke kebutuhan teknis.'],
['number' => '02', 'title' => 'Tentukan prioritas', 'description' => 'Kita pilah mana yang harus ada sekarang dan mana
yang bisa menyusul.'],
['number' => '03', 'title' => 'Sepakati lingkup dan harga', 'description' => 'Spesifikasi, estimasi waktu, dan total
biaya ditulis jelas sebelum pengerjaan dimulai.'],
['number' => '04', 'title' => 'Pengerjaan dan review', 'description' => 'Kamu bisa melihat progres dan memberi masukan
di setiap tahap.'],
['number' => '05', 'title' => 'Serah terima', 'description' => 'Sistem siap dipakai. Kamu bisa mengelolanya sendiri atau
lanjut dengan perawatan bulanan.'],
];
@endphp

<x-layouts::guest>
    {{-- Aset animasi hanya dimuat di halaman ini --}}
    @push('scripts')
    @vite('resources/js/pages/services.js')
    @endpush

    <div class="bg-white text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
        {{-- Hero --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div
                class="mx-auto grid min-h-[78vh] max-w-6xl items-center gap-12 px-6 py-[10%] sm:px-8 lg:grid-cols-[1.15fr_0.85fr] lg:px-6 lg:py-28">
                <div>
                    <p data-hero style="--i:0"
                        class="mb-6 font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $text_badge_hero }}
                    </p>

                    <h1 data-hero style="--i:1"
                        class="max-w-4xl text-4xl font-semibold tracking-tight sm:text-6xl lg:text-7xl">
                        {{ $text_headline_hero_1 }}
                        <span class="block text-zinc-500 dark:text-zinc-600">{{ $text_headline_hero_2 }}</span>
                    </h1>

                    <p data-hero style="--i:2"
                        class="mt-8 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        {{ $text_subhero }}
                    </p>

                    <div data-hero style="--i:3"
                        class="mt-10 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="https://wa.me/{{ $wa_service_number }}?text={{ $contact_from_service_hero }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex min-h-12 items-center justify-center rounded-none bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            Konsultasi Langsung. Gratis.
                        </a>
                        <a href="#cara-kerja"
                            class="inline-flex min-h-12 items-center justify-center rounded-none border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            Baca baca dulu? scroll kebawah.
                        </a>
                    </div>

                    <p data-hero style="--i:4" class="mt-5 text-sm leading-6 text-zinc-500 dark:text-zinc-400">
                        {{ $text_micro_hero }}
                    </p>
                </div>

                <div data-hero style="--i:5" class="border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Kamu ada di
                        posisi yang mana?</p>
                    <div class="mt-6 divide-y divide-zinc-200 dark:divide-zinc-800">
                        <a href="#bantuan" class="group flex gap-4 py-5 first:pt-0">
                            <span class="font-mono text-sm text-zinc-400">01</span>
                            <span class="flex-1">
                                <span class="block font-medium">Belum punya website</span>
                                <span class="mt-1 block text-sm leading-6 text-zinc-600 dark:text-zinc-300">Calon
                                    pelanggan bisa menemukan dan memahami bisnismu tanpa harus bertanya dulu.</span>
                            </span>
                            <span class="text-zinc-400 transition group-hover:translate-x-1" aria-hidden="true">→</span>
                        </a>
                        <a href="#bantuan" class="group flex gap-4 py-5">
                            <span class="font-mono text-sm text-zinc-400">02</span>
                            <span class="flex-1">
                                <span class="block font-medium">Website ada, tapi bermasalah</span>
                                <span class="mt-1 block text-sm leading-6 text-zinc-600 dark:text-zinc-300">yoga cek
                                    masalahnya, perbaiki bug dan tampilan, atau lanjutkan pengembangan yang
                                    terhenti.</span>
                            </span>
                            <span class="text-zinc-400 transition group-hover:translate-x-1" aria-hidden="true">→</span>
                        </a>
                        <a href="#bantuan" class="group flex gap-4 py-5">
                            <span class="font-mono text-sm text-zinc-400">03</span>
                            <span class="flex-1">
                                <span class="block font-medium">Pekerjaan masih serba manual</span>
                                <span class="mt-1 block text-sm leading-6 text-zinc-600 dark:text-zinc-300">Rekap data,
                                    laporan, dan input berulang bisa diotomatisasi.</span>
                            </span>
                            <span class="text-zinc-400 transition group-hover:translate-x-1" aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Needs --}}
        <section id="bantuan" class="scroll-mt-8 border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Yang bisa
                        yoga bantu</p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">Mulai dari masalah bisnismu,
                        bukan dari teknologinya.</h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Setiap solusi yoga tentukan dari target dan budget kamu saat ini, supaya biayanya terpakai untuk
                        hal yang paling berdampak.
                    </p>
                </div>

                <div data-reveal-group class="mt-12 grid gap-5 md:grid-cols-3">
                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">01 / MULAI</span>
                        <h3 class="mt-7 text-xl font-semibold">Bangun kehadiran online</h3>
                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Calon pelanggan mendapat informasi yang jelas tanpa harus bertanya satu per satu.
                        </p>
                        <ul class="mt-6 space-y-2 border-t border-zinc-200 pt-5 text-sm leading-6 dark:border-zinc-800">
                            <li>— Landing page dan company profile</li>
                            <li>— Katalog produk atau layanan</li>
                            <li>— Struktur halaman yang mudah dinavigasi</li>
                        </ul>
                    </article>

                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">02 / PERBAIKI</span>
                        <h3 class="mt-7 text-xl font-semibold">Perbaiki sistem yang sudah ada</h3>
                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Tidak semua harus dibangun ulang. yoga audit dulu, lalu perbaiki yang paling mendesak.
                        </p>
                        <ul class="mt-6 space-y-2 border-t border-zinc-200 pt-5 text-sm leading-6 dark:border-zinc-800">
                            <li>— Perbaikan bug dan tampilan</li>
                            <li>— Penambahan fitur penting</li>
                            <li>— Audit kode sistem lama</li>
                        </ul>
                    </article>

                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">03 / KEMBANGKAN</span>
                        <h3 class="mt-7 text-xl font-semibold">Otomatiskan pekerjaan manual</h3>
                        <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Kurangi pekerjaan berulang supaya waktu tim terpakai untuk hal lain dan data tersimpan di
                            satu tempat.
                        </p>
                        <ul class="mt-6 space-y-2 border-t border-zinc-200 pt-5 text-sm leading-6 dark:border-zinc-800">
                            <li>— Dashboard admin dan rekap data</li>
                            <li>— Integrasi dengan layanan lain (API)</li>
                            <li>— Rencana pengembangan jangka panjang</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- Engagement models --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Skema kerja
                        sama</p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">Pilih skema yang sesuai kondisi
                        bisnismu.</h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Bisa proyek sekali jalan, bisa juga bantuan rutin tiap bulan.
                    </p>
                </div>

                <div data-reveal-group class="mt-12 grid gap-5 lg:grid-cols-3">
                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">MODEL 01</span>
                        <h3 class="mt-5 text-xl font-semibold">Proyek per paket</h3>
                        <p class="mt-3 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Satu target yang jelas: website baru, fitur tertentu, atau perbaikan bug.
                        </p>
                        <p class="mt-5 border-t border-zinc-200 pt-4 text-lg font-semibold dark:border-zinc-800">
                            Mulai dari Rp {{ $pricing_web_build_standard }}
                            <span class="mt-1 block text-sm font-normal text-zinc-500 dark:text-zinc-400">Harga dan
                                hasil akhir disepakati sebelum mulai.</span>
                        </p>
                    </article>

                    <article class="flex flex-col border border-zinc-900 p-6 dark:border-zinc-100 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">MODEL 02</span>
                        <h3 class="mt-5 text-xl font-semibold">Retainer bulanan</h3>
                        <p class="mt-3 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Untuk bisnis yang butuh perawatan rutin, perbaikan kecil, dan teknisi yang siap dihubungi
                            tanpa perlu merekrut developer sendiri.
                        </p>
                        <p class="mt-5 border-t border-zinc-200 pt-4 text-lg font-semibold dark:border-zinc-800">
                            Mulai dari Rp {{ $pricing_retainer_standard }}<span
                                class="text-sm font-normal text-zinc-500 dark:text-zinc-400"> per bulan</span>
                            <span class="mt-1 block text-sm font-normal text-zinc-500 dark:text-zinc-400">Kuota jam
                                kerja jelas setiap bulan.</span>
                        </p>
                    </article>

                    <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                        <span class="font-mono text-xs text-zinc-400">MODEL 03</span>
                        <h3 class="mt-5 text-xl font-semibold">Partner teknis</h3>
                        <p class="mt-3 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                            Sistem dikembangkan bertahap, mengikuti pertumbuhan dan perubahan arah bisnismu.
                        </p>
                        <p class="mt-5 border-t border-zinc-200 pt-4 text-lg font-semibold dark:border-zinc-800">
                            Custom
                            <span class="mt-1 block text-sm font-normal text-zinc-500 dark:text-zinc-400">Target dan
                                jadwal disesuaikan di setiap tahap.</span>
                        </p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Payment --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div
                class="mx-auto grid max-w-6xl gap-10 px-6 py-24 sm:px-8 lg:grid-cols-[0.85fr_1.15fr] lg:gap-20 lg:px-6 lg:py-28">
                <div data-reveal>
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Pembayaran
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">Bayar bertahap, sesuai progres.
                    </h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        Proyek dipecah menjadi beberapa tahap. Kamu membayar seiring pekerjaan yang sudah selesai.
                    </p>
                </div>

                <div data-reveal class="border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-zinc-100 font-mono text-sm dark:bg-zinc-900">01</span>
                            <div>
                                <h3 class="font-semibold">DP saat mulai</h3>
                                <p class="mt-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">Ruang lingkup
                                    disepakati, lalu pengerjaan dimulai.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-zinc-100 font-mono text-sm dark:bg-zinc-900">02</span>
                            <div>
                                <h3 class="font-semibold">Tahap tengah</h3>
                                <p class="mt-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">Kamu meninjau draf
                                    atau fitur inti. Biaya server atau domain, jika ada, dihitung di tahap ini.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-zinc-100 font-mono text-sm dark:bg-zinc-900">03</span>
                            <div>
                                <h3 class="font-semibold">Serah terima</h3>
                                <p class="mt-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">Pelunasan setelah
                                    sistem lolos pengujian bersama dan siap dipakai.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section id="cara-kerja" class="scroll-mt-8 border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Cara kerja
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">Dari obrolan santai sampai
                        rencana kerja yang jelas.</h2>
                </div>

                <div data-reveal-group class="mt-12 grid gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-5">
                    @foreach ($steps as $step)
                    <article data-line class="pt-5 text-zinc-300 dark:text-zinc-700">
                        <span class="font-mono text-xs text-zinc-400">{{ $step['number'] }}</span>
                        <h3 class="mt-4 font-semibold text-zinc-900 dark:text-zinc-100">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-300">{{ $step['description'] }}
                        </p>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section id="konsultasi" class="scroll-mt-8">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="border border-zinc-200 p-8 dark:border-zinc-800 sm:p-12 lg:p-16">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">Langkah
                        pertama</p>
                    <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                        Siap merapikan urusan IT bisnismu?
                    </h2>
                    <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        Ceritakan kebutuhanmu. yoga bantu pilih solusi yang masuk akal dari sisi teknis maupun biaya.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="https://wa.me/{{ $wa_service_number }}?text={{ $contact_from_service_final }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex min-h-12 items-center justify-center rounded-none bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            Mulai diskusi
                            <span aria-hidden="true" class="ml-2">↗</span>
                        </a>
                        <a href="{{ route('home') }}#projects"
                            class="inline-flex min-h-12 items-center justify-center rounded-none border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            Lihat portofolio
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts::guest>
