<div class="my-8 md:my-16 mx-auto flex items-center justify-center not-prose">
    <div @class([
        'flex flex-col-reverse md:flex-row',
        'md:flex-row-reverse' => $position === 'left',
    ])>
        <div @class([
            'md:w-1/3 mt-6 md:mt-0 flex flex-col justify-center',
            $position === 'left' ? 'md:ml-8' : 'md:mr-8',
        ])>
            @if (!empty($title))
                <h3 class="mb-4 font-medium text-gray-900 text-2xl md:text-2xl lg:text-3xl">{{ $title }}</h3>
            @endif

            @if (!empty($content))
                <div class="mt-2 text-base text-gray-500">
                    {!! $content !!}
                </div>
            @endif
        </div>

        @if (!empty($image))
            <div class="md:w-2/3">
                <img class="relative block overflow-hidden rounded-lg object-cover object-center hover:opacity-90 transition-opacity duration-200" src="{{ $image }}" alt="{{ $alt }}" />
            </div>
        @endif
    </div>
</div>
