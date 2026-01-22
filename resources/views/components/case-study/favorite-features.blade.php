@props(['favoriteFeatures'])

<section class="py-20">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <!-- Title -->
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-12">
                @php
                    $titleParts = explode("'s", $favoriteFeatures['title'], 2);
                @endphp
                @if(count($titleParts) > 1)
                    {{ $titleParts[0] }}'s <span class="text-[#247CFF]">{{ trim($titleParts[1]) }}</span>
                @else
                    {{ $favoriteFeatures['title'] }}
                @endif
            </h2>
            
            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($favoriteFeatures['features'] as $feature)
                    <div class="p-6 bg-white/5 border border-white/10 rounded-xl hover:border-[#247CFF]/30 transition-colors">
                        <h3 class="text-lg font-semibold text-white mb-3">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-white/60 leading-relaxed">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
