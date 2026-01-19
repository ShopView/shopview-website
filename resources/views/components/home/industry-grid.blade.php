@php
$industries = config('industries');
@endphp

<section class="py-20 bg-[#12161b]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Solutions for Every Type of Shop
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($industries as $industry)
                <x-home.industry-card
                    :title="$industry['title']"
                    :subtitle="$industry['subtitle']"
                    :icon="$industry['icon']"
                    :color="$industry['color']"
                />
            @endforeach
        </div>
    </div>
</section>
