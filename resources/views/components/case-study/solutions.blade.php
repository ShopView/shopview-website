@props(['solutions'])

<section class="py-20 bg-zinc-900/50">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    The Solution
                </h2>
                <p class="text-white/60 text-lg">
                    How ShopView helped them transform.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach($solutions as $solution)
                    <div class="bg-primary-500/10 border border-primary-500/20 rounded-xl p-6">
                        <!-- Icon -->
                        <div class="w-10 h-10 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>

                        <h3 class="text-lg font-semibold mb-2 text-primary-300">
                            {{ $solution['title'] }}
                        </h3>

                        <p class="text-white/60 text-sm">
                            {{ $solution['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
