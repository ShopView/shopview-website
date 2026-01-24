@props(['industry'])

@php
    $heroImages = config('hero-images.horizontal', []);
    if (!$heroImages) {
        $fallbackPath = base_path('config/hero-images.php');
        if (is_file($fallbackPath)) {
            $fallbackConfig = require $fallbackPath;
            $heroImages = $fallbackConfig['horizontal'] ?? [];
        }
    }
    $seed = $industry['slug'] ?? $industry['heroTitle'] ?? 'industry';
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
        @endif
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a0c10]/75 via-[#0a0c10]/70 to-[#0a0c10]/90"></div>
    </div>
    
    <!-- Content -->
    <div class="container relative z-10">
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
