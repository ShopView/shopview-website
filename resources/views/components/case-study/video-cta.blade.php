@props(['study'])

@if(isset($study['videoId']) && $study['videoId'] && isset($study['videoTitle']))
<section class="py-20 bg-gradient-to-b from-[#0f1218] to-[#0a0c10]">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                @php
                    $words = explode(' ', $study['videoTitle']);
                    $lastWords = array_splice($words, -3);
                @endphp
                {{ implode(' ', $words) }} <span class="text-[#247CFF]">{{ implode(' ', $lastWords) }}</span>
            </h2>
            
            <!-- Description -->
            @if(isset($study['videoDescription']))
                <p class="text-white/70 mb-8 max-w-2xl mx-auto leading-relaxed">
                    {{ $study['videoDescription'] }}
                </p>
            @endif
            
            <!-- Video Player -->
            <div class="relative aspect-video max-w-3xl mx-auto mb-10 rounded-xl overflow-hidden shadow-2xl border border-white/10">
                <iframe 
                    src="https://www.youtube.com/embed/{{ $study['videoId'] }}" 
                    class="absolute inset-0 w-full h-full"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                ></iframe>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/trial" class="inline-flex items-center justify-center px-8 py-4 bg-[#247CFF] text-white font-semibold rounded-lg hover:bg-[#1a5fd1] transition-colors">
                    Start Free Trial
                </a>
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-colors">
                    Talk to Our Team
                </a>
            </div>
        </div>
    </div>
</section>
@endif
