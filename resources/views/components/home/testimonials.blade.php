@php
$testimonials = [
    [
        'title' => 'Excellent Software, Amazing Customer Support',
        'quote' => "ShopView allows us to focus on getting the job done. As a technician, I love that I have the freedom to build jobs and switch between tasks without needing help from admin. It saves me time, makes my workflow smoother, and has really boosted our productivity in the shop.",
        'author' => 'Heather F.',
        'role' => 'Administrator',
        'rating' => 5,
    ],
    [
        'title' => 'Automotive & HD shop management software',
        'quote' => "I find ShopView easy to navigate through work orders. From setting up work orders to adding parts, managing inventory with the ability to cycle count to keep inventory up to date, and managing tech times and payroll timesheets makes tracking times for payroll a breeze.",
        'author' => 'Kerri W.',
        'role' => 'Parts Specialist',
        'rating' => 5,
    ],
    [
        'title' => 'ShopView is a game-changing program.',
        'quote' => "ShopView is a game-changing program. Everything is so fast and user-friendly. I can get to almost anything within two clicks. Their support team is amazing; they respond quickly and genuinely care about helping. I also love that they listen to feedback and keep improving the software.",
        'author' => 'Taylor S.',
        'role' => 'General Manager',
        'rating' => 5,
    ],
    [
        'title' => 'Hands down the best platform for Fleets!',
        'quote' => "The software is easy to set up! It's also intuitive making it easy to train technicians. Customer support is by far the best I have ever dealt with. Fast replies and go above and beyond to help you solve your problem.",
        'author' => 'Brian W.',
        'role' => 'Fleet Coordinator',
        'rating' => 5,
    ],
    [
        'title' => 'Finally, a system that lets technicians focus on the work',
        'quote' => "The greatest appreciation that I have for ShopView stems from its modern aesthetic and curb appeal. Unlike other software that I have utilized in the past, there is not a hodgepodge of unnecessary information or gimmicky hyperlinks to lead you astray.",
        'author' => 'Hudson P.',
        'role' => 'Technician',
        'rating' => 5,
    ],
];
@endphp

<section class="py-20 bg-zinc-900/50">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                What Real Shops Are Saying
            </h2>
        </div>

        <!-- Carousel Container -->
        <div class="relative max-w-4xl mx-auto">
            <!-- Testimonials Slider -->
            <div id="testimonials-carousel" class="overflow-hidden">
                <div id="testimonials-track" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="card text-center py-8 px-6">
                                <!-- Stars -->
                                <div class="flex justify-center mb-6">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                        <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>

                                <h3 class="text-xl font-semibold mb-4">{{ $testimonial['title'] }}</h3>

                                <p class="text-white/70 mb-6 text-lg italic">"{{ $testimonial['quote'] }}"</p>

                                <div>
                                    <p class="font-semibold text-lg">{{ $testimonial['author'] }}</p>
                                    @if($testimonial['role'])
                                        <p class="text-white/60">{{ $testimonial['role'] }}</p>
                                    @endif
                                </div>

                                <!-- Company Logo Placeholder -->
                                <div class="mt-6 flex justify-center">
                                    <div class="w-24 h-12 border border-white/20 rounded bg-white/5 flex items-center justify-center">
                                        <span class="text-white/40 text-xs">Logo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="prev-testimonial" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 bg-white/10 hover:bg-white/20 p-3 rounded-full transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="next-testimonial" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 bg-white/10 hover:bg-white/20 p-3 rounded-full transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Dots -->
            <div class="flex justify-center gap-2 mt-8">
                @foreach($testimonials as $index => $testimonial)
                    <button class="testimonial-dot w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-white/30' }} transition-colors" data-index="{{ $index }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('testimonials-track');
        const dots = document.querySelectorAll('.testimonial-dot');
        const prevBtn = document.getElementById('prev-testimonial');
        const nextBtn = document.getElementById('next-testimonial');
        let currentIndex = 0;
        const totalSlides = {{ count($testimonials) }};

        function updateCarousel() {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-white', i === currentIndex);
                dot.classList.toggle('bg-white/30', i !== currentIndex);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.dataset.index);
                updateCarousel();
            });
        });
    });
</script>
