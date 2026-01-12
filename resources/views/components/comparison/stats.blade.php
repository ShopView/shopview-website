@props(['stats'])

<section class="py-16 bg-zinc-900/50">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">
                Real Results from Shops That Made the Switch
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($stats as $stat)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-8 text-center">
                        <div class="text-4xl md:text-5xl font-bold text-primary-400 mb-2">
                            {{ $stat['value'] }}
                        </div>
                        <p class="text-white/70">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
