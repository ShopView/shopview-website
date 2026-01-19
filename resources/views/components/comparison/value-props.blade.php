@props(['valueProps', 'competitor'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    Built by Heavy-Duty Shop Owners. Designed to Get You Paid Faster.
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($valueProps as $prop)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $prop['title'] }}</h3>
                        <p class="text-white/60 text-sm">
                            {{ $prop['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
