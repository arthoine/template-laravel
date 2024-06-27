<x-main-layout>
    <x-metas
        :title="!empty($page->seo_title) ? $page->seo_title : $page->title"
        :description="$page->seo_description ?? ''"
        :robots="$page->robotsDirective()"
        :og_title="!empty($page->og_title) ? $page->og_title : (!empty($page->seo_title) ? $page->seo_title : $page->title)"
        :og_description="$page->og_description ?? ''"
        :og_image="$page->og_image ?? ''"
        :og_type="'website'"
    />

    <div class="container mx-auto px-4 md:px-0">
        @if (! empty($visual))
            <div class="max-w-4xl mx-auto">
                <img class="rounded-lg overflow-hidden aspect-[3/1] object-cover"
                    height="300"
                    src="{{ $visual }}"
                    loading="lazy"
                    alt="">
            </div>
        @endif

        @if (! empty($page->title))
            <x-page-title :title="$page->title" class="text-center mt-6 md:mt-8" />
        @endif

        @if (!empty($content))
            <div class="mx-auto prose lg:prose-2xl max-w-6xl">
                {!! $content !!}
            </div>
        @endif
    </div>
</x-main-layout>
