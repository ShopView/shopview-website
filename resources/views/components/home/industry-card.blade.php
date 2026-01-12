@props(['title', 'subtitle', 'icon', 'color'])

<div class="card group cursor-pointer h-full">
    <div class="w-16 h-16 rounded-lg bg-gradient-to-br {{ $color }} flex items-center justify-center mb-4 transition-transform duration-300 group-hover:scale-110">
        <span class="text-3xl">{{ $icon }}</span>
    </div>

    <h3 class="text-lg font-bold text-white mb-2">
        {{ $title }}
    </h3>

    <p class="text-sm text-white/70">
        {{ $subtitle }}
    </p>
</div>
