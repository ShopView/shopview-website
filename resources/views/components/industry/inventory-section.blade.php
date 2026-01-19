@props(['industry'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    {{ $industry['inventory']['title'] }}
                </h2>
                @if(isset($industry['inventory']['intro']))
                    <p class="text-lg text-white/80 max-w-3xl mx-auto">
                        {{ $industry['inventory']['intro'] }}
                    </p>
                @endif
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($industry['inventory']['features'] as $feature)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-white/60">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
