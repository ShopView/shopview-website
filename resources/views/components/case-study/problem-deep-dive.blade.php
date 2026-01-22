@props(['problemDeepDive'])

<section class="py-20 bg-[#0a0c10]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image -->
                <div class="relative order-2 lg:order-1">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-white/10">
                        <img 
                            src="{{ $problemDeepDive['image'] ?? '/images/pictures/Service Manager Vertical.jpg' }}" 
                            alt="Service manager using shop software" 
                            class="w-full h-full object-cover"
                        >
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
