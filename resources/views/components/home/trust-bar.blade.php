@php
$customerLogos = [
    ['name' => 'Foothills Group', 'image' => '/images/logos/Customer Logo - Foothills-Group-Logo.png'],
    ['name' => 'Grizzly', 'image' => '/images/logos/Customer Logo - Grizzly.webp'],
    ['name' => 'HCRS', 'image' => '/images/logos/Customer Logo - HCRS.png'],
    ['name' => 'Iron Resources', 'image' => '/images/logos/Customer Logo - Iron-Resources.png'],
    ['name' => 'Short Track', 'image' => '/images/logos/Customer Logo - Short Track.webp'],
];
@endphp

<section class="py-16 bg-[#1a1d24]">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">
                Trusted by Top Heavy-Duty Shops
            </h2>
            <p class="text-white/60 text-lg">
                Join the same world-class shops using ShopView to work smarter, move faster, and grow stronger.
            </p>
        </div>

        <!-- Customer logo grid -->
        <div class="flex flex-wrap justify-center items-center gap-8">
            @foreach($customerLogos as $logo)
                <div class="w-40 h-20 flex items-center justify-center">
                    <img src="{{ $logo['image'] }}" alt="{{ $logo['name'] }}" class="max-h-16 max-w-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>
            @endforeach
        </div>
    </div>
</section>
