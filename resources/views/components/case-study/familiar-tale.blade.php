@props(['familiarTale'])

<section class="py-16 bg-[#0f1218]">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="flex gap-8 items-start">
                <!-- Icon -->
                <div class="hidden md:flex flex-shrink-0 w-16 h-16 bg-[#247CFF]/10 rounded-full items-center justify-center">
                    <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                
                <!-- Content -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold mb-6">
                        {{ $familiarTale['title'] }}
                    </h3>
                    
                    <ul class="space-y-4">
                        @foreach($familiarTale['points'] as $point)
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-2 h-2 mt-2 bg-[#247CFF] rounded-full"></span>
                                <span class="text-white/70">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
