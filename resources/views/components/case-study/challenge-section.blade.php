@props(['challenge'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div>
                    <!-- Label -->
                    <span class="inline-block px-4 py-2 bg-[#247CFF]/10 text-[#247CFF] text-sm font-semibold rounded-full mb-6">
                        {{ $challenge['label'] }}
                    </span>
                    
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-tight">
                        {{ $challenge['title'] }}
                    </h2>
                    
                    <!-- Decorative Line -->
                    <div class="w-16 h-1 bg-[#247CFF] mb-6"></div>
                    
                    <!-- Content paragraphs -->
                    @foreach($challenge['content'] as $paragraph)
                        <p class="text-white/70 mb-4 leading-relaxed">
                            {!! $paragraph !!}
                        </p>
                    @endforeach
                    
                    <!-- Bullet points if exist -->
                    @if(isset($challenge['bullets']))
                        <ul class="space-y-3 mb-6">
                            @foreach($challenge['bullets'] as $bullet)
                                <li class="flex items-start gap-3 text-white/70">
                                    <span class="text-red-400 mt-1">•</span>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!-- Content after bullets -->
                    @if(isset($challenge['contentAfter']))
                        @foreach($challenge['contentAfter'] as $paragraph)
                            <p class="text-white/70 mb-4 leading-relaxed">
                                {!! $paragraph !!}
                            </p>
                        @endforeach
                    @endif
                </div>
                
                <!-- Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden border border-white/10">
                        <img 
                            src="{{ $challenge['image'] ?? '/images/pictures/Onwer .jpg' }}" 
                            alt="Shop challenge - managing operations" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
