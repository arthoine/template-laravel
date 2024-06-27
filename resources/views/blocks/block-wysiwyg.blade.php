<section class="block-image-text my-8 md:my-16">
    <div class="mx-auto max-w-4xl">
        @if (!empty($content))
            <div class="prose prose-lg prose-black max-w-none">
                {!! $content !!}
            </div>
        @endif
    </div>
</section>
