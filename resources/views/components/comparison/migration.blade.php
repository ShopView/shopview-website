@props(['competitor'])

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                Switching is Simple, And Worth It
            </h2>
            <p class="text-white/80 text-lg mb-4">
                Our team handles the heavy lifting so you can focus on repairs, not data entry.
            </p>
            <ul class="text-white/60 space-y-3 mb-8 max-w-2xl mx-auto">
                <li class="flex items-center justify-center gap-3">
                    <x-lucide-check class="w-6 h-6 text-primary-400 shrink-0" />
                    <span>Free data migration from {{ $competitor }}</span>
                </li>
                <li class="flex items-center justify-center gap-3">
                    <x-lucide-check class="w-6 h-6 text-primary-400 shrink-0" />
                    <span>Dedicated onboarding specialist</span>
                </li>
                <li class="flex items-center justify-center gap-3">
                    <x-lucide-check class="w-6 h-6 text-primary-400 shrink-0" />
                    <span>Live training for your whole team</span>
                </li>
                <li class="flex items-center justify-center gap-3">
                    <x-lucide-check class="w-6 h-6 text-primary-400 shrink-0" />
                    <span>Zero downtime during transition</span>
                </li>
            </ul>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
