@props(['resultsChecklist'])

<section class="py-20 bg-[#0a0c10]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Placeholder -->
                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-green-500/20 to-green-500/5 rounded-2xl border border-green-500/20 flex items-center justify-center">
                        <div class="text-center text-white/30">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-sm">Results Image</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div>
                    <!-- Title -->
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-tight">
                        {{ $resultsChecklist['title'] }}
                    </h2>
                    
                    <!-- Intro -->
                    @if(isset($resultsChecklist['intro']))
                        <p class="text-white/70 mb-6">
                            {{ $resultsChecklist['intro'] }}
                        </p>
                    @endif
                    
                    <!-- Checklist Items -->
                    <ul class="space-y-4 mb-6">
                        @foreach($resultsChecklist['items'] as $item)
                            <li class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-green-500/20 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-white/90 text-lg">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                    
                    <!-- Outro -->
                    @if(isset($resultsChecklist['outro']))
                        <p class="text-white/70">
                            {!! $resultsChecklist['outro'] !!}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
