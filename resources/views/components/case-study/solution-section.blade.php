@props(['solution'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div>
                    <!-- Label -->
                    <span class="inline-block px-4 py-2 bg-green-500/10 text-green-400 text-sm font-semibold rounded-full mb-6">
                        {{ $solution['label'] }}
                    </span>
                    
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-tight">
                        {{ $solution['title'] }}
                    </h2>
                    
                    <!-- Decorative Line -->
                    <div class="w-16 h-1 bg-[#247CFF] mb-6"></div>
                    
                    <!-- Content paragraphs -->
                    @foreach($solution['content'] as $paragraph)
                        <p class="text-white/70 mb-4 leading-relaxed">
                            {!! $paragraph !!}
                        </p>
                    @endforeach
                    
                    <!-- Bullet points if exist -->
                    @if(isset($solution['bullets']))
                        <ul class="space-y-3 mb-6">
                            @foreach($solution['bullets'] as $bullet)
                                <li class="flex items-start gap-3 text-white/70">
                                    <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!-- Content after bullets -->
                    @if(isset($solution['contentAfter']))
                        @foreach($solution['contentAfter'] as $paragraph)
                            <p class="text-white/70 mb-4 leading-relaxed">
                                {!! $paragraph !!}
                            </p>
                        @endforeach
                    @endif
                </div>
                
                <!-- Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-[#247CFF]/20 shadow-lg shadow-[#247CFF]/10">
                        <img 
                            src="{{ $solution['image'] ?? '/images/pictures/Service Advisor.jpg' }}" 
                            alt="ShopView solution in action" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </div>
            
            <!-- Quote if exists -->
            @if(isset($solution['quote']))
                <div class="mt-12 max-w-3xl mx-auto text-center">
                    <blockquote class="text-xl md:text-2xl text-white/90 italic mb-4">
                        "{{ $solution['quote']['text'] }}"
                    </blockquote>
                    <p class="text-white/60">
                        {{ $solution['quote']['author'] }} - {{ $solution['quote']['company'] }}
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>
