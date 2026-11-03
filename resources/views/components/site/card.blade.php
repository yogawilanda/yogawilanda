@props([
    'padding' => 'md',
    'highlighted' => false,
    'class' => '',
])

@php
    $paddingClasses = [
        'sm' => 'p-4',
        'md' => 'p-6',
        'lg' => 'p-6 sm:p-8',
        'xl' => 'p-8 sm:p-12',
    ];

    $paddingClass = $paddingClasses[$padding] ?? $paddingClasses['md'];

    $borderClass = $highlighted
        ? 'border-zinc-900 dark:border-zinc-100'
        : 'border-zinc-200 dark:border-zinc-800';
@endphp

<article {{ $attributes->merge([
    'class' => trim('flex flex-col border ' . $borderClass . ' ' . $paddingClass . ' ' . $class),
]) }}>
    {{ $slot }}
</article>