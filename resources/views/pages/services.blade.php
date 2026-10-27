{{-- resources/views/services.blade.php --}}
@php
    $wa_service_number = "6285158986696";
    $service_brand_name_capitalize = "Yoga";

    $pricing_web_build_standard = "1.5 Juta";
    $pricing_retainer_standard = "3.x Juta";

    $contact_from_service_hero = "Halo%20{$service_brand_name_capitalize},%20aku%20mau%20diskusi%20soal%20website%20dan%20kebutuhan%20IT%20bisnis%20yoga.%20(sumber:%20/services)";
    $contact_from_service_final = "Halo%20{$service_brand_name_capitalize},%20aku%20mau%20diskusi%20untuk%20merapikan%20bisnis%20yoga.%20(sumber:%20/services)";

    // Copy : Hero & General
    $text_badge_hero = "Jasa pembuatan website non wordpress";
    $text_headline_hero_1 = "Kamu fokus di bisnisnya";
    $text_headline_hero_2 = "Yoga urus websitenya";
    $text_subhero = "Buat usaha kamu lebih mudah ditemukan oleh calon pelanggan dengan website yang scale as you grow.";
    $text_micro_hero = "SEO, Hosting, Domain, teknisnya lainnya biar rekan Yoga Bantu. Ceritain aja mau kamu.";
    $text_cta_consult = "Konsultasi Langsung. Gratis.";
    $text_cta_scroll = "Baca baca dulu? scroll kebawah.";

    // Copy : Position Selector Sidebar/Card
    $position_title = "Kamu ada di posisi yang mana?";
    $position_items = [
        [
            'number' => '01',
            'title' => 'Belum punya website',
            'description' => 'Calon pelanggan bisa menemukan dan memahami bisnismu tanpa harus bertanya dulu.',
        ],
        [
            'number' => '02',
            'title' => 'Website ada, tapi bermasalah',
            'description' => 'yoga cek masalahnya, perbaiki bug dan tampilan, atau lanjutkan pengembangan yang terhenti.',
        ],
        [
            'number' => '03',
            'title' => 'Pekerjaan masih serba manual',
            'description' => 'Rekap data, laporan, dan input berulang bisa diotomatisasi.',
        ],
    ];

    // Copy : Bantuan / Services Section
    $section_help_badge = "Yang bisa yoga bantu";
    $section_help_title = "Mulai dari masalah bisnismu, bukan dari teknologinya.";
    $section_help_sub = "Setiap solusi yoga tentukan dari target dan budget kamu saat ini, supaya biayanya terpakai untuk hal yang paling berdampak.";

    $services_list = [
        [
            'tag' => '01 / MULAI',
            'title' => 'Bangun kehadiran online',
            'description' => 'Calon pelanggan mendapat informasi yang jelas tanpa harus bertanya satu per satu.',
            'features' => [
                'Landing page dan company profile',
                'Katalog produk atau layanan',
                'Struktur halaman yang mudah dinavigasi',
            ],
        ],
        [
            'tag' => '02 / PERBAIKI',
            'title' => 'Perbaiki sistem yang sudah ada',
            'description' => 'Tidak semua harus dibangun ulang. yoga audit dulu, lalu perbaiki yang paling mendesak.',
            'features' => [
                'Perbaikan bug dan tampilan',
                'Penambahan fitur penting',
                'Audit kode sistem lama',
            ],
        ],
        [
            'tag' => '03 / KEMBANGKAN',
            'title' => 'Otomatiskan pekerjaan manual',
            'description' => 'Kurangi pekerjaan berulang supaya waktu tim terpakai untuk hal lain dan data tersimpan di satu tempat.',
            'features' => [
                'Dashboard admin dan rekap data',
                'Integrasi dengan layanan lain (API)',
                'Rencana pengembangan jangka panjang',
            ],
        ],
    ];

    // Copy : Models Section
    $section_models_badge = "Skema kerja sama";
    $section_models_title = "Pilih skema yang sesuai kondisi bisnismu.";
    $section_models_sub = "Bisa proyek sekali jalan, bisa juga bantuan rutin tiap bulan.";

    $engagement_models = [
        [
            'tag' => 'MODEL 01',
            'title' => 'Proyek per paket',
            'description' => 'Satu target yang jelas: website baru, fitur tertentu, atau perbaikan bug.',
            'price' => "Mulai dari Rp {$pricing_web_build_standard}",
            'price_note' => 'Harga dapat naik dan turun mengikuti kebutuhan pengguna dengan batasan tertentu.',
            'is_highlighted' => false,
        ],
        [
            'tag' => 'MODEL 02',
            'title' => 'Retainer bulanan',
            'description' => 'Untuk bisnis yang butuh perawatan rutin, perbaikan kecil, dan teknisi yang siap dihubungi tanpa perlu merekrut developer sendiri.',
            'price' => "Mulai dari Rp {$pricing_retainer_standard}",
            'unit' => ' per bulan',
            'price_note' => 'Kuota jam kerja jelas setiap bulan.',
            'is_highlighted' => true,
        ],
        [
            'tag' => 'MODEL 03',
            'title' => 'Partner teknis',
            'description' => 'Sistem dikembangkan bertahap, mengikuti pertumbuhan dan perubahan arah bisnismu.',
            'price' => 'Custom',
            'price_note' => 'Target dan jadwal disesuaikan di setiap tahap.',
            'is_highlighted' => false,
        ],
    ];

    // Copy : Payment Section
    $section_payment_badge = "Pembayaran";
    $section_payment_title = "Bayar bertahap, sesuai progres.";
    $section_payment_sub = "Proyek dipecah menjadi beberapa tahap. Kamu membayar seiring pekerjaan yang sudah selesai.";

    $payment_steps = [
        [
            'step' => '01',
            'title' => 'DP saat mulai',
            'description' => 'Ruang lingkup disepakati, lalu pengerjaan dimulai.',
        ],
        [
            'step' => '02',
            'title' => 'Tahap tengah',
            'description' => 'Kamu meninjau draf atau fitur inti. Biaya server atau domain, jika ada, dihitung di tahap ini.',
        ],
        [
            'step' => '03',
            'title' => 'Serah terima',
            'description' => 'Pelunasan setelah sistem lolos pengujian bersama dan siap dipakai.',
        ],
    ];

    // Copy : Process Section
    $section_process_badge = "Cara kerja";
    $section_process_title = "Dari obrolan santai sampai rencana kerja yang jelas.";

    $steps = [
        [
            'number' => '01',
            'title' => 'Ceritakan masalahmu',
            'description' => 'Jelaskan dengan bahasa sehari-hari. yoga yang menerjemahkannya ke kebutuhan teknis.',
        ],
        [
            'number' => '02',
            'title' => 'Tentukan prioritas',
            'description' => 'Kita pilah mana yang harus ada sekarang dan mana yang bisa menyusul.',
        ],
        [
            'number' => '03',
            'title' => 'Sepakati lingkup dan harga',
            'description' => 'Spesifikasi, estimasi waktu, dan total biaya ditulis jelas sebelum pengerjaan dimulai.',
        ],
        [
            'number' => '04',
            'title' => 'Pengerjaan dan review',
            'description' => 'Kamu bisa melihat progres dan memberi masukan di setiap tahap.',
        ],
        [
            'number' => '05',
            'title' => 'Serah terima',
            'description' => 'Sistem siap dipakai. Kamu bisa mengelolanya sendiri atau lanjut dengan perawatan bulanan.',
        ],
    ];

    // Copy : Final CTA
    $section_cta_badge = "Langkah pertama";
    $section_cta_title = "Siap merapikan urusan IT bisnismu?";
    $section_cta_sub = "Ceritakan kebutuhanmu. yoga bantu pilih solusi yang masuk akal dari sisi teknis maupun biaya.";
    $text_cta_start = "Mulai diskusi";
    $text_cta_portfolio = "Lihat portofolio";

    // i saw there is bunch of repetitive html class which only has slight differences, we should exctract is as a component that scalably to be a component based, so next time we only need to call it, but make sure to make it has gracefull fallbacks so whenever i forget to put it there, at least it has default value.
@endphp

<x-layouts::guest>
    {{-- Aset animasi hanya dimuat di halaman ini --}}
    @push('scripts')
        @vite('resources/js/pages/services.js')
    @endpush

    <div class="bg-white text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
        {{-- Hero : Finished. Do not touch --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto grid min-h-[78vh] max-w-6xl items-center gap-12 px-6 py-[10%] sm:px-8 lg:grid-cols-[1.15fr_0.85fr] lg:px-6 lg:py-28">
                <div>
                    <p data-hero style="--i:0" class="mb-6 font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $text_badge_hero }}
                    </p>

                    <h1 data-hero style="--i:1" class="max-w-4xl text-4xl font-semibold tracking-tight sm:text-6xl lg:text-7xl">
                        {{ $text_headline_hero_1 }}
                        <span class="block text-zinc-500 dark:text-zinc-600">{{ $text_headline_hero_2 }}</span>
                    </h1>

                    <p data-hero style="--i:2" class="mt-8 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        {{ $text_subhero }}
                    </p>

                    <div data-hero style="--i:3" class="mt-10 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="https://wa.me/{{ $wa_service_number }}?text={{ $contact_from_service_hero }}"
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex min-h-12 items-center justify-center rounded-none bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            {{ $text_cta_consult }}
                        </a>
                        <a href="#cara-kerja"
                           class="inline-flex min-h-12 items-center justify-center rounded-none border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            {{ $text_cta_scroll }}
                        </a>
                    </div>

                    <p data-hero style="--i:4" class="mt-5 text-sm leading-6 text-zinc-500 dark:text-zinc-400">
                        {{ $text_micro_hero }}
                    </p>
                </div>

                <div data-hero style="--i:5" class="border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $position_title }}
                    </p>
                    <div class="mt-6 divide-y divide-zinc-200 dark:divide-zinc-800">
                        @foreach ($position_items as $item)
                            <a href="#bantuan" class="group flex gap-4 py-5 first:pt-0">
                                <span class="font-mono text-sm text-zinc-400">{{ $item['number'] }}</span>
                                <span class="flex-1">
                                    <span class="block font-medium">{{ $item['title'] }}</span>
                                    <span class="mt-1 block text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                                        {{ $item['description'] }}
                                    </span>
                                </span>
                                <span class="text-zinc-400 transition group-hover:translate-x-1" aria-hidden="true">→</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Needs --}}
        <section id="bantuan" class="scroll-mt-8 border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $section_help_badge }}
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ $section_help_title }}
                    </h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        {{ $section_help_sub }}
                    </p>
                </div>

                <div data-reveal-group class="mt-12 grid gap-5 md:grid-cols-3">
                    @foreach ($services_list as $service)
                        <article class="flex flex-col border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                            <span class="font-mono text-xs text-zinc-400">{{ $service['tag'] }}</span>
                            <h3 class="mt-7 text-xl font-semibold">{{ $service['title'] }}</h3>
                            <p class="mt-4 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                                {{ $service['description'] }}
                            </p>
                            <ul class="mt-6 space-y-2 border-t border-zinc-200 pt-5 text-sm leading-6 dark:border-zinc-800">
                                @foreach ($service['features'] as $feature)
                                    <li>— {{ $feature }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Engagement models --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $section_models_badge }}
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ $section_models_title }}
                    </h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        {{ $section_models_sub }}
                    </p>
                </div>

                <div data-reveal-group class="mt-12 grid gap-5 lg:grid-cols-3">
                    @foreach ($engagement_models as $model)
                        <article class="flex flex-col border p-6 sm:p-8 {{ $model['is_highlighted'] ? 'border-zinc-900 dark:border-zinc-100' : 'border-zinc-200 dark:border-zinc-800' }}">
                            <span class="font-mono text-xs text-zinc-400">{{ $model['tag'] }}</span>
                            <h3 class="mt-5 text-xl font-semibold">{{ $model['title'] }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                                {{ $model['description'] }}
                            </p>
                            <p class="mt-5 border-t border-zinc-200 pt-4 text-lg font-semibold dark:border-zinc-800">
                                {{ $model['price'] }}
                                @if (isset($model['unit']))
                                    <span class="text-sm font-normal text-zinc-500 dark:text-zinc-400">{{ $model['unit'] }}</span>
                                @endif
                                <span class="mt-1 block text-sm font-normal text-zinc-500 dark:text-zinc-400">
                                    {{ $model['price_note'] }}
                                </span>
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Payment --}}
        <section class="border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto grid max-w-6xl gap-10 px-6 py-24 sm:px-8 lg:grid-cols-[0.85fr_1.15fr] lg:gap-20 lg:px-6 lg:py-28">
                <div data-reveal>
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $section_payment_badge }}
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ $section_payment_title }}
                    </h2>
                    <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
                        {{ $section_payment_sub }}
                    </p>
                </div>

                <div data-reveal class="border border-zinc-200 p-6 dark:border-zinc-800 sm:p-8">
                    <div class="space-y-6">
                        @foreach ($payment_steps as $step)
                            <div class="flex gap-4">
                                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-zinc-100 font-mono text-sm dark:bg-zinc-900">
                                    {{ $step['step'] }}
                                </span>
                                <div>
                                    <h3 class="font-semibold">{{ $step['title'] }}</h3>
                                    <p class="mt-1 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                                        {{ $step['description'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section id="cara-kerja" class="scroll-mt-8 border-b border-zinc-200 dark:border-zinc-800">
            <div class="mx-auto max-w-6xl px-6 py-24 sm:px-8 lg:px-6 lg:py-28">
                <div data-reveal class="max-w-2xl">
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $section_process_badge }}
                    </p>
                    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
                        {{ $section_process_title }}
                    </h2>
                </div>

                <div data-reveal-group class="mt-12 grid gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-5">
                    @foreach ($steps as $step)
                        <article data-line class="pt-5 text-zinc-300 dark:text-zinc-700">
                            <span class="font-mono text-xs text-zinc-400">{{ $step['number'] }}</span>
                            <h3 class="mt-4 font-semibold text-zinc-900 dark:text-zinc-100">{{ $step['title'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-300">
                                {{ $step['description'] }}
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
                    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
                        {{ $section_cta_badge }}
                    </p>
                    <h2 class="mt-5 max-w-3xl text-3xl font-semibold tracking-tight sm:text-5xl">
                        {{ $section_cta_title }}
                    </h2>
                    <p class="mt-6 max-w-2xl text-base leading-8 text-zinc-600 dark:text-zinc-300 sm:text-lg">
                        {{ $section_cta_sub }}
                    </p>
                    <div class="mt-8 flex flex-col gap-3 min-[420px]:flex-row min-[420px]:flex-wrap">
                        <a href="https://wa.me/{{ $wa_service_number }}?text={{ $contact_from_service_final }}"
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex min-h-12 items-center justify-center rounded-none bg-zinc-950 px-5 py-3 text-center text-sm font-medium text-white transition hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-zinc-400 focus:ring-offset-2 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                            {{ $text_cta_start }}
                            <span aria-hidden="true" class="ml-2">↗</span>
                        </a>
                        <a href="{{ route('home') }}#projects"
                           class="inline-flex min-h-12 items-center justify-center rounded-none border border-zinc-200 px-5 py-3 text-center text-sm font-medium text-zinc-700 transition hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-300 focus:ring-offset-2 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900">
                            {{ $text_cta_portfolio }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts::guest>
