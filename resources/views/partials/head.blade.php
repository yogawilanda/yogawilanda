<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

{{-- Favicon & Web App --}}
<link rel="icon" href="{{ asset('favicon.ico') }}?v=20260921" sizes="any">

<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=20260921">

<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}?v=20260921">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=20260921">

<link rel="manifest" href="{{ asset('site.webmanifest') }}?v=20260921">

@fonts

@viteReactRefresh
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
