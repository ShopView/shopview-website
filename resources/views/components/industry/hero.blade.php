@props(['industry'])

<section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
    <div class="container">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                {{ $industry['heroTitle'] }}
            </h1>
            <p class="text-lg md:text-xl text-white/80 mb-8">
                {{ $industry['heroDescription'] }}
            </p>
            <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                Start Free Trial
            </a>
        </div>
    </div>
</section>
