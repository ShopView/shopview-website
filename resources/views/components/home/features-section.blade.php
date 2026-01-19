@php
$features = [
    [
        'title' => 'Simple task management',
        'description' => 'Save time with fast, simple allocation and tracking of technician tasks.',
        'icon' => '✅',
    ],
    [
        'title' => 'Easily review tech performance',
        'description' => 'Set clear expectations and goals for technicians and then measure against efficiency and productivity stats.',
        'icon' => '📊',
    ],
    [
        'title' => 'Best-in-industry inventory management',
        'description' => 'Control inventory levels, parts categorization, and cycle counting—all in one place.',
        'icon' => '📦',
    ],
    [
        'title' => 'Efficient order management',
        'description' => 'Manage vendor accounts and track deliveries to avoid delays, get paid on time, and keep customers happy.',
        'icon' => '📋',
    ],
];
@endphp

<section class="py-20 bg-[#1a1d24]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Everything You Need to Run Your Shop
            </h2>
            <p class="text-lg text-white/60 max-w-3xl mx-auto">
                Less time on computers, more time making money. Fast, simple allocation and tracking of technician tasks.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 max-w-5xl mx-auto">
            @foreach($features as $feature)
                <div class="flex gap-4">
                    <div class="text-3xl flex-shrink-0">{{ $feature['icon'] }}</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-white/60">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="/features" class="btn btn-primary text-lg px-8 py-4">
                Explore All Features
            </a>
        </div>
    </div>
</section>
