@props(['competitor', 'competitorLogo' => null, 'categories'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                    See How ShopView Compares to {{ $competitor }}
                </h2>
                <p class="text-lg text-white/70">
                    Real features that make your shop faster, leaner, and more profitable.
                </p>
            </div>

            <!-- Comparison Table -->
            <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden">
                <!-- Table Header -->
                <div class="grid grid-cols-3 bg-white/5 border-b border-white/10">
                    <div class="p-4 md:p-6">
                        <span class="text-white/60 text-sm font-medium">Feature</span>
                    </div>
                    <div class="p-4 md:p-6 text-center border-l border-white/10">
                        <div class="flex items-center justify-center gap-2">
                            <img
                                src="/images/Logo Primary Dark Bg.svg"
                                alt="ShopView"
                                class="h-6 md:h-8 w-auto"
                            />
                        </div>
                    </div>
                    <div class="p-4 md:p-6 text-center border-l border-white/10">
                        <div class="flex items-center justify-center gap-2">
                            @if($competitorLogo)
                                <img
                                    src="{{ $competitorLogo }}"
                                    alt="{{ $competitor }}"
                                    class="h-6 md:h-8 w-auto max-w-[120px] object-contain"
                                />
                            @else
                                <span class="text-white font-semibold text-sm md:text-base">{{ $competitor }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Table Body -->
                @foreach($categories as $category)
                    <!-- Category Header -->
                    <div class="bg-white/[0.03] border-b border-white/10 px-4 md:px-6 py-3">
                        <span class="text-primary-400 text-sm font-semibold uppercase tracking-wide">
                            {{ $category['name'] }}
                        </span>
                    </div>

                    <!-- Category Features -->
                    @foreach($category['features'] as $feature)
                        <div class="grid grid-cols-3 border-b border-white/5 hover:bg-white/[0.02] transition-colors">
                            <div class="p-4 md:px-6 md:py-4 flex items-center">
                                <span class="text-white/80 text-sm md:text-base">{{ $feature['name'] }}</span>
                            </div>
                            <div class="p-4 md:px-6 md:py-4 flex items-center justify-center border-l border-white/5">
                                @if($feature['shopview'] === true)
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-green-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                @elseif($feature['shopview'] === false)
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-red-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </div>
                                @elseif($feature['shopview'] === 'partial')
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-yellow-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"></path>
                                        </svg>
                                    </div>
                                @else
                                    <span class="text-white/80 text-xs md:text-sm text-center">{{ $feature['shopview'] }}</span>
                                @endif
                            </div>
                            <div class="p-4 md:px-6 md:py-4 flex items-center justify-center border-l border-white/5">
                                @if($feature['competitor'] === true)
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-green-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                @elseif($feature['competitor'] === false)
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-red-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </div>
                                @elseif($feature['competitor'] === 'partial')
                                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-yellow-500/20 flex items-center justify-center">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"></path>
                                        </svg>
                                    </div>
                                @else
                                    <span class="text-white/80 text-xs md:text-sm text-center">{{ $feature['competitor'] }}</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <!-- Legend -->
            <div class="flex flex-wrap items-center justify-center gap-6 mt-6 text-sm text-white/60">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-green-500/20 flex items-center justify-center">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span>Included</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center">
                        <svg class="w-3 h-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"></path>
                        </svg>
                    </div>
                    <span>Limited / Partial</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-red-500/20 flex items-center justify-center">
                        <svg class="w-3 h-3 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <span>Not Available</span>
                </div>
            </div>
        </div>
    </div>
</section>
