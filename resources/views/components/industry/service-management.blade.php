@props(['industry'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    {{ $industry['serviceManagement']['title'] }}
                </h2>
                @if(isset($industry['serviceManagement']['intro']))
                    <p class="text-lg text-white/80 max-w-3xl mx-auto">
                        {{ $industry['serviceManagement']['intro'] }}
                    </p>
                @endif
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($industry['serviceManagement']['features'] as $feature)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
