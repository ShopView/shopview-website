@php
$roles = [
    [
        'title' => 'Shop Owner',
        'benefits' => [
            'Real-time visibility into shop performance',
            'Track profitability by job, tech, and customer',
            'Make data-driven decisions',
        ],
    ],
    [
        'title' => 'Service Manager',
        'benefits' => [
            'Assign jobs with confidence',
            'Monitor technician workload at a glance',
            'Reduce scheduling conflicts',
        ],
    ],
    [
        'title' => 'Technician',
        'benefits' => [
            'Focus on repairs, not paperwork',
            'Easy time tracking and job logging',
            'Access job history instantly',
        ],
    ],
    [
        'title' => 'Parts Manager',
        'benefits' => [
            'Track inventory in real-time',
            'Automate reorder points',
            'Manage multiple vendors easily',
        ],
    ],
    [
        'title' => 'Administrator',
        'benefits' => [
            'Invoice in seconds, not minutes',
            'Streamlined billing workflows',
            'Easy payroll time tracking',
        ],
    ],
];
@endphp

<section class="py-20 bg-[#12161b]">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Making Life Easier for Everyone in Your Shop
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start max-w-6xl mx-auto">
            <!-- Accordion -->
            <div class="space-y-4">
                @foreach($roles as $index => $role)
                    <div class="border border-white/20 rounded-xl overflow-hidden">
                        <button
                            class="role-accordion-btn w-full flex items-center justify-between p-5 text-left bg-white/5 hover:bg-white/10 transition-colors"
                            data-index="{{ $index }}"
                        >
                            <span class="text-lg font-semibold" style="color: #247CFF;">{{ $role['title'] }}</span>
                            <svg class="role-accordion-icon w-5 h-5 transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="role-accordion-content" data-index="{{ $index }}">
                            <div class="p-5 pt-0 bg-white/5">
                                <ul class="space-y-3">
                                    @foreach($role['benefits'] as $benefit)
                                        <li class="text-white/70 flex items-start gap-3">
                                            <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $benefit }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Service Manager Image -->
            <div class="rounded-xl overflow-hidden sticky top-24">
                <img 
                    src="{{ asset('images/pictures/Service Manager Vertical.jpg') }}" 
                    alt="Service Manager using ShopView" 
                    class="w-full h-auto rounded-xl"
                >
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.role-accordion-btn');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const index = button.dataset.index;
                const content = document.querySelector(`.role-accordion-content[data-index="${index}"]`);
                const icon = button.querySelector('.role-accordion-icon');
                
                // Toggle the clicked item
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>
