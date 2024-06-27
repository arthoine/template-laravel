@if (!empty($platform) && !empty($video_id))
    <section class="block-video my-8 md:my-16">
        <div class="mx-auto max-w-4xl">
            @switch($platform)
                @case('youtube')
                    <iframe
                        class="w-full"
                        loading="lazy"
                        style="aspect-ratio: {{ $format }}"
                        src="https://www.youtube-nocookie.com/embed/{{ $video_id }}?enablejsapi&modestbranding=1"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    @break
                @case('vimeo')
                    <iframe
                        class="w-full"
                        loading="lazy"
                        style="aspect-ratio: {{ $format }}"
                        src="https://player.vimeo.com/video/{{ $video_id }}?byline=0"
                        title="Vimeo video player"
                        frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen></iframe>
                    <script src="https://player.vimeo.com/api/player.js"></script>
                    @break
            @endswitch
        </div>
    </section>
@endif
