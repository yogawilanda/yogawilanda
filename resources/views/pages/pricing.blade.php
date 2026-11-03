<x-layouts::guest>
    <section class="px-6 py-24 sm:px-10">
        <div class="mx-auto max-w-6xl">
            <p class="font-mono text-xs uppercase tracking-widest text-zinc-500">Investasi digital</p>
            <h1 class="mt-8 max-w-4xl text-5xl font-semibold tracking-tight sm:text-7xl">Harga jasa website dan pengembangan sistem.</h1>
            <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-300">Mulai dari kebutuhan yang paling penting. Lingkup, fitur, dan estimasi disepakati sebelum pengerjaan.</p>
        </div>
    </section>
    <section class="border-y border-zinc-200 bg-zinc-100 px-6 py-20 dark:border-zinc-800 dark:bg-zinc-900/40 sm:px-10">
        <div class="mx-auto grid max-w-6xl gap-px border border-zinc-200 bg-zinc-200 dark:border-zinc-800 dark:bg-zinc-800 md:grid-cols-2">
            @foreach ([
                ['name' => 'Diagnosis website', 'price' => 'Rp100.000', 'desc' => 'Pemeriksaan awal dan identifikasi masalah teknis.'],
                ['name' => 'Facelift dan website sederhana', 'price' => 'Rp500 ribu–1,5 juta', 'desc' => 'Penyegaran tampilan atau website sederhana sesuai scope.'],
                ['name' => 'Website bisnis dan CMS', 'price' => 'Mulai Rp2,5 juta', 'desc' => 'Website bisnis dengan pengelolaan konten dan fitur sesuai kebutuhan.'],
                ['name' => 'Aplikasi dan sistem custom', 'price' => 'Mulai Rp10 juta', 'desc' => 'Pengembangan sistem yang membutuhkan modul dan workflow lebih luas.'],
                ['name' => 'Maintenance website', 'price' => 'Mulai Rp1,5 juta/bulan', 'desc' => 'Dukungan teknis dan pemeliharaan rutin dengan kuota kerja.'],
            ] as $item)
                <article class="bg-white p-8 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">{{ $item['name'] }}</h2>
                    <p class="mt-5 text-3xl font-semibold">{{ $item['price'] }}</p>
                    <p class="mt-3 text-sm leading-7 text-zinc-600 dark:text-zinc-400">{{ $item['desc'] }}</p>
                </article>
            @endforeach
        </div>
        <p class="mx-auto mt-8 max-w-6xl text-xs leading-6 text-zinc-500">Harga merupakan estimasi awal. Biaya final ditentukan setelah kebutuhan, kondisi sistem, dan ruang lingkup pekerjaan diperiksa.</p>
    </section>
    <section class="px-6 py-20 sm:px-10">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-3xl font-semibold">Mulai dari diskusi kebutuhan.</h2>
            <a class="mt-7 inline-flex bg-zinc-950 px-6 py-4 text-sm font-semibold text-white dark:bg-white dark:text-zinc-950" href="https://wa.me/6285158986696">Konsultasi melalui WhatsApp ↗</a>
        </div>
    </section>
</x-layouts::guest>