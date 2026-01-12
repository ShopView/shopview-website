@props(['title' => 'See It In Action', 'description' => 'A clean, intuitive interface designed for speed.'])

<section class="py-16 bg-zinc-900/50">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                {{ $title }}
            </h2>
            <p class="text-white/60 text-lg max-w-2xl mx-auto">
                {{ $description }}
            </p>
        </div>

        <!-- Screenshot Placeholder -->
        <div class="max-w-5xl mx-auto">
            <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                <span class="text-white/40">Screenshot Placeholder</span>
            </div>
        </div>
    </div>
</section>
