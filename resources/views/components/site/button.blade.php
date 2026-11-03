@props([
    'href' => '#',
    'variant' => 'primary',
    'target' => null,
    'rel' => null,
    'class' => '',
])

@php
    $variants = [
        'primary' => 'bg-zinc-950 text-white hover:bg-zinc-800 focus:ring-zinc-400 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200',
        'secondary' => 'border border-zinc-200 text-zinc-700 hover:bg-zinc-50 focus:ring-zinc-300 dark:border-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-900',
        'ghost' => 'text-zinc-600 hover:bg-zinc-100 focus:ring-zinc-300 dark:text-zinc-300 dark:hover:bg-zinc-900',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $safeHref = filled($href) ? $href : '#';
@endphp

<a
    href="{{ $safeHref }}"
    @if (filled($target)) target="{{ $target }}" @endif
    @if ($target === '_blank')
        rel="{{ $rel ?: 'noopener noreferrer' }}"
    @elseif (filled($rel))
        rel="{{ $rel }}"
    @endif
    {{ $attributes->merge([
        'class' => trim('inline-flex min-h-12 items-center justify-center rounded-none px-5 py-3 text-center text-sm font-medium transition focus:outline-none focus:ring-2 focus:ring-offset-2 ' . $variantClass . ' ' . $class),
    ]) }}
>
    {{ $slot }}
</a>