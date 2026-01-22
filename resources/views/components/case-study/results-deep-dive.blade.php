@props(['resultsDeepDive'])

<section class="py-20 bg-[#0a0c10]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-green-500/20 shadow-lg shadow-green-500/10">
                        <img 
                            src="{{ $resultsDeepDive['image'] ?? '/images/pictures/Image-Under_Truck.jpg' }}" 
                            alt="Technician working efficiently" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
                
                <!-- Content -->
                <div>
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-tight">
                        {{ $resultsDeepDive['title'] }}
                    </h2>
                    
                    <!-- Decorative Line -->
                    <div class="w-16 h-1 bg-[#247CFF] mb-6"></div>
                    
                    <!-- Content paragraphs -->
                    @foreach($resultsDeepDive['content'] as $paragraph)
                        <p class="text-white/70 mb-4 leading-relaxed">
                            {!! $paragraph !!}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
