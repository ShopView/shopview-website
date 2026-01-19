@php
$roles = [
    [
        'title' => 'Shop Owner',
        'benefits' => [
            'Real-time visibility into shop performance',
            'Track profitability by job, tech, and customer',
            'Make data-driven decisions',
            'Reclaim your nights and weekends',
        ],
    ],
    [
        'title' => 'Service Manager',
        'benefits' => [
            'Assign jobs with confidence',
            'Monitor technician workload at a glance',
            'Reduce scheduling conflicts',
            'Keep customers informed automatically',
        ],
    ],
    [
        'title' => 'Technician',
        'benefits' => [
            'Focus on repairs, not paperwork',
            'Easy time tracking and job logging',
            'Access job history instantly',
            'Switch between tasks seamlessly',
        ],
    ],
    [
        'title' => 'Parts Manager',
        'benefits' => [
            'Track inventory in real-time',
            'Automate reorder points',
            'Manage multiple vendors easily',
            'Reduce parts delays',
        ],
    ],
    [
        'title' => 'Administrator',
        'benefits' => [
            'Invoice in seconds, not minutes',
            'Streamlined billing workflows',
            'Easy payroll time tracking',
            'Professional customer communications',
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
                            <svg class="role-accordion-icon w-5 h-5 transition-transform duration-300 {{ $index === 0 ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="role-accordion-content {{ $index === 0 ? '' : 'hidden' }}" data-index="{{ $index }}">
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

            <!-- Screenshot Placeholder -->
            <div class="aspect-[4/3] bg-white/5 border border-white/20 rounded-xl flex items-center justify-center sticky top-24">
                <span class="text-white/40">Screenshot Placeholder</span>
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
                const isOpen = !content.classList.contains('hidden');

                // Close all
                document.querySelectorAll('.role-accordion-content').forEach(c => c.classList.add('hidden'));
                document.querySelectorAll('.role-accordion-icon').forEach(i => i.classList.remove('rotate-180'));

                // Open clicked if it was closed
                if (!isOpen) {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    });
</script>
