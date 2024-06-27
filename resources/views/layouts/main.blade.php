<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{ $metas ?? '' }}

    @if (!empty($settings->google_verification))
        <meta name="google-site-verification" content="{{ $settings->google_verification }}">
    @endif

    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}">

    @vite(['resources/css/app.css'])

    {{ $headerStyles ?? '' }}

    @if (!empty($settings->scripts_head))
        {!! $settings->scripts_head !!}
    @endif
</head>

<body class="antialiased">
    @if (app()->isDownForMaintenance())
        <div class="fixed bottom-0 left-0 right-0 bg-red-100 text-center p-4 text-red-700 font-bold">
            {{ trans('Maintenance mode - Website visible only by trusted IPs') }}
        </div>
    @endif

    <header>
        @include('partials.header')
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    @vite(['resources/js/app.js'])

    {{ $footerScripts ?? '' }}

    @if (!empty($settings->scripts_body))
        {!! $settings->scripts_body !!}
    @endif
</body>
</html>
