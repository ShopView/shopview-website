@props(['title' => 'Ready to See What ShopView Can Do For Your Shop?', 'description' => null])

<section class="py-20 bg-gradient-to-br from-[#247CFF]/20 to-[#0f1218]">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                {{ $title }}
            </h2>
            
            @if($description)
                <p class="text-white/70 mb-8 text-lg">
                    {{ $description }}
                </p>
            @endif
            
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
