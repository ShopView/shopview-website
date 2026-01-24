@props([
    'seed',
    'title',
    'description',
    'badge' => null,
    'primaryHref' => '/trial',
    'primaryLabel' => 'Start Free Trial',
    'secondaryHref' => null,
    'secondaryLabel' => null,
])

@php
    $heroImages = config('hero-images.horizontal', []);
    if (!$heroImages) {
        $fallbackPath = base_path('config/hero-images.php');
        if (is_file($fallbackPath)) {
            $fallbackConfig = require $fallbackPath;
            $heroImages = $fallbackConfig['horizontal'] ?? [];
        }
    }
    $heroImage = $heroImages ? $heroImages[(int) sprintf('%u', crc32($seed)) % count($heroImages)] : null;
    $heroImageUrl = $heroImage
        ? asset(str_replace([' ', '(', ')'], ['%20', '%28', '%29'], ltrim($heroImage, '/')))
        : null;
@endphp

<section class="relative py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        @if($heroImageUrl)
            <img
                src="{{ $heroImageUrl }}"
                alt=""
                class="w-full h-full object-cover"
            >
        @else
            <div class="w-full h-full bg-gradient-to-b from-zinc-900 to-black"></div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a0c10]/75 via-[#0a0c10]/70 to-[#0a0c10]/90"></div>
    </div>

    <div class="container relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            @if($badge)
                <span class="inline-block px-3 py-1 bg-primary-500/20 text-primary-400 text-sm font-medium rounded-full mb-4">{{ $badge }}</span>
            @endif
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                {{ $title }}
            </h1>
            <p class="text-lg md:text-xl text-white/80 mb-8">
                {{ $description }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ $primaryHref }}" class="btn btn-primary text-lg px-8 py-4">
                    {{ $primaryLabel }}
                </a>
                @if($secondaryHref && $secondaryLabel)
                    <a href="{{ $secondaryHref }}" class="btn btn-secondary text-lg px-8 py-4">
                        {{ $secondaryLabel }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
