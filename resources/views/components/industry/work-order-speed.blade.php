@props(['industry'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        {{ $industry['workOrderSpeed']['title'] }}
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        {{ $industry['workOrderSpeed']['description'] }}
                    </p>
                    <a href="/features/work-orders" class="text-primary-400 hover:text-primary-300 font-medium inline-flex items-center gap-2">
                        Learn More About Our Work Order Features
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Screenshot Placeholder -->
                <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                    <span class="text-white/40">Work Order Screenshot</span>
                </div>
            </div>
        </div>
    </div>
</section>
