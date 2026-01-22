@props(['resultsDeepDive'])

<section class="py-20 bg-[#0a0c10]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Placeholder -->
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-green-500/20 to-green-500/5 rounded-2xl border border-green-500/20 flex items-center justify-center">
                        <div class="text-center text-white/30">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                            <p class="text-sm">Results Image</p>
                        </div>
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
