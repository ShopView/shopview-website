@props(['competitor'])

<section class="py-20 bg-zinc-900/50">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                Switching is Simple, And Worth It
            </h2>
            <p class="text-white/80 text-lg mb-4">
                Our team handles the heavy lifting so you can focus on repairs, not data entry.
            </p>
            <ul class="text-white/60 space-y-2 mb-8">
                <li>Free data migration from {{ $competitor }}</li>
                <li>Dedicated onboarding specialist</li>
                <li>Live training for your whole team</li>
                <li>Zero downtime during transition</li>
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
