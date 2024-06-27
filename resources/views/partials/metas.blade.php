@if (!empty($title))
    <title>{{ $title }}</title>
@endif

@if (!empty($description))
    <meta name="description" content="{{ $description }}">
@endif

@if (!empty($robots))
    <meta name="robots" content="{{ $robots }}">
@endif

<!-- Open Graph and Twitter meta tags -->
<meta name="twitter:card" content="summary" />
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />

@if (!empty($og_type))
    <meta property="og:type" content="{{ $og_type }}" />
@else
    <meta property="og:type" content="website" />
@endif

@if (!empty($og_title))
    <meta property="og:title" content="{{ $og_title }}" />
    <meta name="twitter:title" content="{{ $og_title }}" />
@endif

@if (!empty($og_description))
    <meta property="og:description" content="{{ $og_description }}" />
    <meta name="twitter:description" content="{{ $og_description }}" />
@endif

<meta property="og:url" content="{{ \Illuminate\Support\Facades\URL::current() }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />

@if (!empty($og_image))
    <meta property="og:image" content="{{ asset('storage/' . $og_image) }}" />
    <meta name="twitter:image" content="{{ asset('storage/' . $og_image) }}" />
@endif
