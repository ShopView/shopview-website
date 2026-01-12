@props(['challenges'])

<section class="py-20">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    The Challenges
                </h2>
                <p class="text-white/60 text-lg">
                    What they were facing before ShopView.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach($challenges as $challenge)
                    <div class="bg-red-500/10 border border-red-500/20 rounded-xl p-6">
                        <!-- Icon -->
                        <div class="w-10 h-10 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>

                        <h3 class="text-lg font-semibold mb-2 text-red-300">
                            {{ $challenge['title'] }}
                        </h3>

                        <p class="text-white/60 text-sm">
                            {{ $challenge['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
