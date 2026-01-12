@props(['results'])

<section class="py-20">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    The Results
                </h2>
                <p class="text-white/60 text-lg">
                    Measurable impact on their business.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($results as $result)
                    <div class="text-center p-6 bg-white/5 border border-white/10 rounded-xl">
                        <div class="text-3xl md:text-4xl font-bold text-primary-400 mb-2">
                            {{ $result['metric'] }}
                        </div>
                        <p class="text-white/60 text-sm">
                            {{ $result['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
