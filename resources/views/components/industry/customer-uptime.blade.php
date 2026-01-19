@props(['industry'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Screenshot -->
                <div class="rounded-xl overflow-hidden order-2 lg:order-1">
                    <img src="{{ asset('images/screenshots/Improve Customer Equipment Uptime.png') }}" alt="Customer Uptime Dashboard" class="w-full h-auto rounded-xl">
                </div>

                <div class="order-1 lg:order-2">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        {{ $industry['customerUptime']['title'] }}
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        {{ $industry['customerUptime']['description'] }}
                    </p>
                    <a href="/features/customer-portal" class="text-primary-400 hover:text-primary-300 font-medium inline-flex items-center gap-2">
                        Learn More About Our Uptime Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
