@php
$customerLogos = [
    'Customer Logo 1',
    'Customer Logo 2',
    'Customer Logo 3',
    'Customer Logo 4',
    'Customer Logo 5',
    'Customer Logo 6',
];
@endphp

<section class="py-16 bg-zinc-900/50">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">
                Trusted by Top Heavy-Duty Shops
            </h2>
            <p class="text-white/60 text-lg">
                Join the same world-class shops using ShopView to work smarter, move faster, and grow stronger.
            </p>
        </div>

        <!-- Placeholder logo grid -->
        <div class="flex flex-wrap justify-center items-center gap-8">
            @foreach($customerLogos as $name)
                <div class="w-40 h-20 flex items-center justify-center border border-white/20 rounded-lg bg-white/5">
                    <span class="text-white/40 text-sm">{{ $name }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
