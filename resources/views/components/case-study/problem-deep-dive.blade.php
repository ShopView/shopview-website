@props(['problemDeepDive'])

<section class="py-20 bg-[#0a0c10]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Placeholder -->
                <div class="relative order-2 lg:order-1">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/10 to-white/5 rounded-2xl border border-white/10 flex items-center justify-center">
                        <div class="text-center text-white/30">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-sm">Problem Image</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="order-1 lg:order-2">
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-tight">
                        {{ $problemDeepDive['title'] }}
                    </h2>
                    
                    <!-- Decorative Line -->
                    <div class="w-16 h-1 bg-[#247CFF] mb-6"></div>
                    
                    <!-- Content paragraphs -->
                    @foreach($problemDeepDive['content'] as $paragraph)
                        <p class="text-white/70 mb-4 leading-relaxed">
                            {!! $paragraph !!}
                        </p>
                    @endforeach
                    
                    <!-- Quote if exists -->
                    @if(isset($problemDeepDive['quote']))
                        <div class="mt-8 p-6 bg-white/5 border-l-4 border-[#247CFF] rounded-r-lg">
                            <p class="text-white/90 italic mb-3">
                                "{{ $problemDeepDive['quote']['text'] }}"
                            </p>
                            <p class="text-white/60 text-sm">
                                {{ $problemDeepDive['quote']['author'] }} - {{ $problemDeepDive['quote']['company'] }}
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
