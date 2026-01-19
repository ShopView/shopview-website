@php
$testimonials = [
    [
        'quote' => "ShopView has transformed how we run our shop. The speed alone has saved us hours every week.",
        'author' => 'Mike R.',
        'role' => 'Shop Owner',
        'rating' => 5,
    ],
    [
        'quote' => "Finally, software that understands heavy-duty repair. The team behind ShopView actually knows our industry.",
        'author' => 'Sarah L.',
        'role' => 'Service Manager',
        'rating' => 5,
    ],
    [
        'quote' => "We switched from our old system and never looked back. Support is incredible and the software just works.",
        'author' => 'James T.',
        'role' => 'Operations Director',
        'rating' => 5,
    ],
    [
        'quote' => "The ROI was immediate. We saw improvements in the first month and it keeps getting better.",
        'author' => 'David M.',
        'role' => 'Fleet Manager',
        'rating' => 5,
    ],
    [
        'quote' => "My technicians actually enjoy using ShopView. That says everything you need to know.",
        'author' => 'Chris P.',
        'role' => 'Shop Owner',
        'rating' => 5,
    ],
];
@endphp

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Trusted by Shops That Keep Things Moving
            </h2>
        </div>

        <!-- Carousel Container -->
        <div class="relative max-w-4xl mx-auto">
            <div id="testimonials-carousel-2" class="overflow-hidden">
                <div id="testimonials-track-2" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="card text-center py-8 px-6">
                                <div class="flex justify-center mb-6">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                        <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    @endfor
                                </div>
                                <p class="text-white/70 mb-6 text-lg italic">"{{ $testimonial['quote'] }}"</p>
                                <div>
                                    <p class="font-semibold text-lg">{{ $testimonial['author'] }}</p>
                                    <p class="text-white/60">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation -->
            <button id="prev-testimonial-2" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 md:-translate-x-12 bg-white/10 hover:bg-white/20 p-3 rounded-full transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="next-testimonial-2" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 md:translate-x-12 bg-white/10 hover:bg-white/20 p-3 rounded-full transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="flex justify-center gap-2 mt-8">
                @foreach($testimonials as $index => $testimonial)
                    <button class="testimonial-dot-2 w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-white/30' }} transition-colors" data-index="{{ $index }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('testimonials-track-2');
        const dots = document.querySelectorAll('.testimonial-dot-2');
        const prevBtn = document.getElementById('prev-testimonial-2');
        const nextBtn = document.getElementById('next-testimonial-2');
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
