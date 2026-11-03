@props([
    'eyebrow' => 'Layanan',
    'title' => 'Informasi lebih lanjut',
    'description' => null,
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'max-w-2xl ' . $class]) }}>
    <p class="font-mono text-xs uppercase tracking-[0.2em] text-zinc-500 dark:text-zinc-400">
        {{ filled($eyebrow) ? $eyebrow : 'Layanan' }}
    </p>

    <h2 class="mt-5 text-3xl font-semibold tracking-tight sm:text-4xl">
        {{ filled($title) ? $title : 'Informasi lebih lanjut' }}
    </h2>

    @if (filled($description))
        <p class="mt-5 text-base leading-7 text-zinc-600 dark:text-zinc-300">
            {{ $description }}
        </p>
    @endif
</div>