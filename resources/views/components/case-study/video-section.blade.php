@props(['videoId'])

@if($videoId)
<section class="py-16 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="aspect-video rounded-xl overflow-hidden border border-white/10">
                <iframe
                    class="w-full h-full"
                    src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="Customer Story Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
</section>
@endif
