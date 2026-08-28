<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased h-full w-full overflow-hidden">

<x-layouts::guest.head />

<body data-authenticated="{{ auth()->check() ? 'true' : 'false' }}" class="h-full w-full bg-zinc-50 text-zinc-900 antialiased overflow-hidden dark:bg-[#09090b] dark:text-zinc-100">

    <x-layouts::guest.nav />

    {{-- Container utama diberi dot-pattern --}}
    <main id="vertical-wrapper" class="h-full w-full flex flex-col overflow-y-auto overflow-x-hidden snap-y snap-mandatory scroll-smooth no-scrollbar bg-dot-pattern">
        {{ $slot }}
    </main>

    {{-- <x-layouts::guest.scroll_hint /> --}}
    <x-layouts::guest.footer />


</body>
</html>
