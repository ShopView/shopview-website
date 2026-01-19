@props(['steps'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                How It Works
            </h2>
            <p class="text-white/60 text-lg max-w-2xl mx-auto">
                Get started in minutes with a simple, intuitive workflow.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            @foreach($steps as $step)
                <div class="relative">
                    <!-- Step Number -->
                    <div class="w-12 h-12 bg-primary-500 rounded-full flex items-center justify-center text-white font-bold text-lg mb-4">
                        {{ $step['step'] }}
                    </div>

                    <!-- Connector Line (hidden on last item) -->
                    @if(!$loop->last)
                        <div class="hidden lg:block absolute top-6 left-12 w-full h-0.5 bg-white/10"></div>
                    @endif

                    <h3 class="text-lg font-semibold mb-2">
                        {{ $step['title'] }}
                    </h3>

                    <p class="text-white/60 text-sm">
                        {{ $step['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
