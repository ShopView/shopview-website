@props(['quote'])

<section class="py-16 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Quote Icon -->
            <div class="w-10 h-10 rounded-full flex items-center justify-center mx-auto mb-6" style="background-color: #247CFF;">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
            </div>

            <!-- Quote Text -->
            <blockquote class="text-xl md:text-2xl text-white/90 italic mb-6">
                "{{ $quote['text'] }}"
            </blockquote>

            <!-- Attribution -->
            <div>
                <p class="font-semibold text-white">{{ $quote['author'] }}</p>
                <p class="text-white/60 text-sm">{{ $quote['title'] }}</p>
            </div>
        </div>
    </div>
</section>
