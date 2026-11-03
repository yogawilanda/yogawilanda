@props([
    'items' => [],
    'marker' => '—',
    'emptyText' => 'Informasi fitur akan disesuaikan dengan kebutuhan.',
    'class' => '',
])

@php
    $safeItems = is_iterable($items) ? $items : [];
@endphp

@if (count($safeItems))
    <ul {{ $attributes->merge([
        'class' => 'mt-6 space-y-2 border-t border-zinc-200 pt-5 text-sm leading-6 dark:border-zinc-800 ' . $class,
    ]) }}>
        @foreach ($safeItems as $item)
            <li class="flex gap-2">
                <span class="shrink-0 text-zinc-400" aria-hidden="true">{{ $marker }}</span>
                <span>{{ is_array($item) ? ($item['label'] ?? 'Detail tersedia') : $item }}</span>
            </li>
        @endforeach
    </ul>
@else
    <p class="mt-6 text-sm leading-6 text-zinc-500 dark:text-zinc-400">
        {{ $emptyText }}
    </p>
@endif