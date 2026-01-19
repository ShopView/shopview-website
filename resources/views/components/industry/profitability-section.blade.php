@props(['industry'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    {{ $industry['profitability']['title'] }}
                </h2>
                @if(isset($industry['profitability']['intro']))
                    <p class="text-lg text-white/80 max-w-3xl mx-auto">
                        {{ $industry['profitability']['intro'] }}
                    </p>
                @endif
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($industry['profitability']['features'] as $feature)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
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
