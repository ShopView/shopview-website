@props(['comparison'])

<section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                {{ $comparison['heroHeading'] }}
            </h1>
            <p class="text-lg md:text-xl text-white/80 mb-8">
                {{ $comparison['heroSubheading'] }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="https://app.shopview.com/register" class="btn btn-primary">
                    Start Free Trial
                </a>
                <a href="/demo" class="btn btn-secondary">
                    Book a Demo
                </a>
            </div>
            @if(isset($comparison['migrationNote']))
                <p class="text-white/60 text-sm">
                    {{ $comparison['migrationNote'] }}
                </p>
            @endif
        </div>
    </div>
</section>
