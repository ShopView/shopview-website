@props(['features'])

<section class="py-20">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Powerful Features
            </h2>
            <p class="text-white/60 text-lg max-w-2xl mx-auto">
                Everything you need to streamline your operations.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @foreach($features as $feature)
                <div class="bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-primary-500/50 transition-all">
                    <!-- Icon Placeholder -->
                    <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <h3 class="text-lg font-semibold mb-2">
                        {{ $feature['title'] }}
                    </h3>

                    <p class="text-white/60 text-sm">
                        {{ $feature['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
