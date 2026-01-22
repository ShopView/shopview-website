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
                
                <!-- Image Placeholder -->
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/10 to-white/5 rounded-2xl border border-white/10 flex items-center justify-center">
                        <div class="text-center text-white/30">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-sm">Challenge Image</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
