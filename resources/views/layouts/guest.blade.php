<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased h-full w-full overflow-hidden">

<x-layouts::guest.head />

<body class="h-full w-full bg-[#09090b] text-zinc-100 antialiased font-sans overflow-hidden">

    <x-layouts::guest.nav />

    {{-- Container utama diberi dot-pattern --}}
    <main id="horizontal-wrapper" class="h-full w-full flex overflow-x-auto overflow-y-hidden snap-x snap-mandatory scroll-smooth no-scrollbar bg-dot-pattern">
        {{ $slot }}
    </main>

    <x-layouts::guest.scroll_hint />
    <x-layouts::guest.footer />

    
</body>
</html>
