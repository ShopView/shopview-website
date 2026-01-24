@props(['comparison'])

@php
    $heroImages = config('hero-images.horizontal', []);
    if (!$heroImages) {
        $fallbackPath = base_path('config/hero-images.php');
        if (is_file($fallbackPath)) {
            $fallbackConfig = require $fallbackPath;
            $heroImages = $fallbackConfig['horizontal'] ?? [];
        }
    }
    $seed = $comparison['slug'] ?? $comparison['heroHeading'] ?? 'comparison';
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
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                {{ $comparison['heroHeading'] }}
            </h1>
            <p class="text-lg md:text-xl text-white/80 mb-8">
                {{ $comparison['heroSubheading'] }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="https://app.shopview.com/register" class="btn btn-primary">
                    Start Free Trial
                </a>
                <a href="/demo" class="btn btn-secondary">
                    Book a Demo
                </a>
            </div>
            @if(isset($comparison['migrationNote']))
                <p class="text-white/60 text-sm">
                    {{ $comparison['migrationNote'] }}
                </p>
            @endif
        </div>
    </div>
</section>
