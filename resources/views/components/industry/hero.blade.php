@props(['industry'])

<section class="relative py-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img 
            src="/images/pictures/Service Advisor.jpg" 
            alt="" 
            class="w-full h-full object-cover"
        >
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a0c10]/90 via-[#0a0c10]/85 to-[#0a0c10]"></div>
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
