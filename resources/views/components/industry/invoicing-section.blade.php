@props(['industry'])

<section class="py-20">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    {{ $industry['invoicing']['title'] }}
                </h2>
                @if(isset($industry['invoicing']['intro']))
                    <p class="text-lg text-white/80 max-w-3xl mx-auto">
                        {{ $industry['invoicing']['intro'] }}
                    </p>
                @endif
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($industry['invoicing']['features'] as $feature)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            @php
                                $iconComponent = 'lucide-' . $feature['icon'];
                            @endphp
                            <x-dynamic-component :component="$iconComponent" class="w-8 h-8 text-[#247CFF]" />
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
