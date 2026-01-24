@props(['study'])

@php
    $heroImages = config('hero-images.horizontal', []);
    if (!$heroImages) {
        $fallbackPath = base_path('config/hero-images.php');
        if (is_file($fallbackPath)) {
            $fallbackConfig = require $fallbackPath;
            $heroImages = $fallbackConfig['horizontal'] ?? [];
        }
    }
    $seed = $study['slug'] ?? $study['company'] ?? 'case-study';
    $heroImage = $heroImages ? $heroImages[(int) sprintf('%u', crc32($seed)) % count($heroImages)] : null;
    $heroImageUrl = $heroImage
        ? asset(str_replace([' ', '(', ')'], ['%20', '%28', '%29'], ltrim($heroImage, '/')))
        : null;
@endphp

<section class="relative pt-32 pb-16 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        @if($heroImageUrl)
            <img
                src="{{ $heroImageUrl }}"
                alt=""
                class="w-full h-full object-cover"
            >
        @else
            <div class="w-full h-full bg-gradient-to-br from-[#0a0c10] via-[#0f1218] to-[#0a0c10]"></div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a0c10]/75 via-[#0a0c10]/70 to-[#0a0c10]/90"></div>
    </div>

    <!-- Content -->
    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Main Headline -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                {{ $study['hero']['headline'] }}
                @if(isset($study['hero']['headlineHighlight']))
                    <span class="text-[#247CFF]">{{ $study['hero']['headlineHighlight'] }}</span>
                @endif
                @if(isset($study['hero']['headlineSuffix']))
                    {{ $study['hero']['headlineSuffix'] }}
                @endif
            </h1>

            <!-- Subheadline -->
            <p class="text-lg md:text-xl text-white/70 italic mb-8 max-w-3xl mx-auto">
                {{ $study['hero']['subheadline'] }}
            </p>

            <!-- Video Player (if exists) -->
            @if(isset($study['videoId']) && $study['videoId'])
                <div class="relative aspect-video max-w-3xl mx-auto mb-8 rounded-xl overflow-hidden shadow-2xl border border-white/10">
                    <iframe 
                        src="https://www.youtube.com/embed/{{ $study['videoId'] }}" 
                        class="absolute inset-0 w-full h-full"
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                    ></iframe>
                </div>
            @endif

            <!-- Tagline (if exists) -->
            @if(isset($study['hero']['tagline']))
                <p class="text-white/60 italic mb-8">
                    {{ $study['hero']['tagline'] }}
                </p>
            @endif

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/trial" class="inline-flex items-center justify-center px-8 py-4 bg-[#247CFF] text-white font-semibold rounded-lg hover:bg-[#1a5fd1] transition-colors">
                    Start Free Trial
                </a>
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-colors">
                    Talk to Our Team
                </a>
            </div>
        </div>
    </div>
</section>
