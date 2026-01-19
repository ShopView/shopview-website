@props(['study'])

<section class="relative min-h-[50vh] flex items-center overflow-hidden">
    <!-- Background with Gradient -->
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-gradient-to-br from-zinc-900 via-zinc-800 to-black"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
    </div>

    <!-- Content -->
    <div class="container relative z-10 py-20">
        <div class="max-w-4xl">
            <!-- Breadcrumb -->
            <nav class="mb-6">
                <a href="/case-studies" class="text-primary-400 hover:text-primary-300 text-sm">
                    Case Studies
                </a>
                <span class="text-white/40 mx-2">/</span>
                <span class="text-white/60 text-sm">{{ $study['company'] }}</span>
            </nav>

            <!-- Company Badge -->
            <div class="flex items-center gap-4 mb-6">
                <!-- Logo Placeholder -->
                <div class="w-16 h-16 bg-white/10 flex items-center justify-center">
                    <span class="text-white/40 text-xs">Logo</span>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                        {{ $study['company'] }}
                    </h1>
                    <p class="text-white/60 mt-1">
                        {{ $study['industry'] }} &bull; {{ $study['location'] }}
                    </p>
                </div>
            </div>

            <!-- Tagline -->
            <p class="text-xl md:text-2xl text-primary-400 font-medium mb-4">
                {{ $study['tagline'] }}
            </p>

            <!-- Summary -->
            <p class="text-lg text-white/80 max-w-3xl">
                {{ $study['summary'] }}
            </p>
        </div>
    </div>
</section>
