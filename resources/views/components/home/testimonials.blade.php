@php
$testimonials = [
    [
        'title' => 'Excellent Software, Amazing Customer Support',
        'quote' => "ShopView allows us to focus on getting the job done. As a technician, I love that I have the freedom to build jobs and switch between tasks without needing help from admin.",
        'author' => 'Heather F.',
        'role' => 'Administrator',
        'rating' => 5,
        'source' => 'g2',
    ],
    [
        'title' => 'ShopView is a game-changing program.',
        'quote' => "Everything is so fast and user-friendly. I can get to almost anything within two clicks. Their support team is amazing; they respond quickly and genuinely care about helping.",
        'author' => 'Taylor S.',
        'role' => 'General Manager',
        'rating' => 5,
        'source' => 'capterra',
    ],
    [
        'title' => 'Hands down the best platform for Fleets!',
        'quote' => "The software is easy to set up! It's also intuitive making it easy to train technicians. Customer support is by far the best I have ever dealt with.",
        'author' => 'Brian W.',
        'role' => 'Fleet Coordinator',
        'rating' => 5,
        'source' => 'g2',
    ],
];
@endphp

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                What Real Shops Are Saying
            </h2>
        </div>

        <!-- Two Column Layout: Image + Reviews -->
        <div class="grid lg:grid-cols-2 gap-8 max-w-7xl mx-auto items-center">
            <!-- Image Column -->
            <div class="rounded-xl overflow-hidden">
                <img 
                    src="{{ asset('images/pictures/Image-Under_Truck.jpg') }}" 
                    alt="Technician using ShopView on mobile while working under a truck" 
                    class="w-full h-full object-cover rounded-xl"
                >
            </div>

            <!-- Reviews Column -->
            <div class="flex flex-col gap-5">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white/5 border border-white/10 rounded-xl p-5">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-grow">
                                <!-- Stars -->
                                <div class="flex mb-2">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>

                                <p class="text-white/80 text-sm italic mb-3">"{{ $testimonial['quote'] }}"</p>

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-semibold text-sm">{{ $testimonial['author'] }}</p>
                                        @if($testimonial['role'])
                                            <p class="text-white/60 text-xs">{{ $testimonial['role'] }}</p>
                                        @endif
                                    </div>

                                    <!-- Review Source Logo -->
                                    <div>
                                        @if($testimonial['source'] === 'g2')
                                            <img src="/images/logos/g2-logo-white-black.webp" alt="G2 Review" class="h-5 w-auto object-contain opacity-70">
                                        @else
                                            <img src="/images/logos/Capterra - Transparent.png" alt="Capterra Review" class="h-5 w-auto object-contain opacity-70">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
