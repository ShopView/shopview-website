@props(['feature'])

<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
    <!-- Background with Gradient Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-gradient-to-br from-zinc-900 via-zinc-800 to-black flex items-center justify-center">
            <span class="text-white/20 text-sm">Screenshot Placeholder</span>
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black/90"></div>
    </div>

    <!-- Content -->
    <div class="container relative z-10 text-center py-20">
        <p class="text-primary-400 font-medium mb-4 uppercase tracking-wider">
            {{ $feature['tagline'] }}
        </p>

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 max-w-4xl mx-auto">
            {{ $feature['title'] }}
        </h1>

        <p class="text-lg md:text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            {{ $feature['description'] }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                Start Free Trial
            </a>
            <a href="/demo" class="btn btn-secondary text-lg px-8 py-4">
                Book a Demo
            </a>
        </div>

        <!-- Benefits Stats -->
        <div class="mt-12 flex flex-wrap justify-center items-center gap-8">
            @foreach($feature['benefits'] as $benefit)
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-primary-400">
                        {{ $benefit['metric'] }}
                    </div>
                    <p class="text-white/60 text-sm mt-1">
                        {{ $benefit['label'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
