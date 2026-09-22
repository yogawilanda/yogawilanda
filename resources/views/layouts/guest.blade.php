{{-- resources/views/layouts/guest.blade.php --}}
<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="antialiased h-full w-full overflow-hidden"
>
    <x-layouts::guest.head />

    <body
        data-authenticated="{{ auth()->check() ? 'true' : 'false' }}"
        class="h-full w-full overflow-hidden bg-zinc-50 text-zinc-900 antialiased dark:bg-[#09090b] dark:text-zinc-100"
    >

        <x-layouts::guest.nav />

        <main
            id="vertical-wrapper"
            class="h-full w-full overflow-y-auto overflow-x-hidden snap-y snap-proximity no-scrollbar"
        >
            {{ $slot }}
        </main>

        <x-layouts::guest.footer />

        @fluxScripts

    </body>
</html>
