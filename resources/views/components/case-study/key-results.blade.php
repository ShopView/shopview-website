@props(['results', 'title' => 'Results with ShopView'])

<section class="py-16 bg-[#0f1218]">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">{{ $title }}</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($results as $result)
                    <div class="text-center p-6 bg-white/5 border border-white/10 rounded-xl">
                        <div class="text-3xl md:text-4xl font-bold text-[#247CFF] mb-2">
                            {{ $result['stat'] }}
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
