@props(['title'])

<h1 {{ $attributes->merge(['class' => 'font-bold tracking-tight text-gray-900 text-3xl sm:text-4xl md:text-5xl']) }}>{{ $title }}</h1>
