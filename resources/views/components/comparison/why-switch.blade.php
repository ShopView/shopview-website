@props(['heading', 'points'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-12">
                {{ $heading }}
            </h2>

            <div class="bg-white/5 border border-white/10 rounded-xl p-8">
                <ul class="space-y-4">
                    @foreach($points as $point)
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-white/80">{{ $point }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                <a href="https://app.shopview.com/register" class="btn btn-primary">
                    Start Free Trial
                </a>
                <a href="/demo" class="btn btn-secondary">
                    Book a Demo
                </a>
            </div>
        </div>
    </div>
</section>
