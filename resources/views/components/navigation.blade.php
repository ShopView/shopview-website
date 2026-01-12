@php
$runTheShopLinks = [
    ['href' => '/features/work-orders', 'label' => 'Work Orders', 'desc' => 'Create work orders in under 2 minutes'],
    ['href' => '/features/estimates-invoices', 'label' => 'Estimates & Invoices', 'desc' => 'Professional quotes and billing'],
    ['href' => '/features/scheduling', 'label' => 'Scheduling', 'desc' => 'Smart technician scheduling'],
    ['href' => '/features/technician-time-tracking', 'label' => 'Time Clock', 'desc' => 'Track labor hours accurately'],
    ['href' => '/features/inventory-management', 'label' => 'Parts Inventory', 'desc' => 'Parts tracking and ordering'],
    ['href' => '/features/reporting-analytics', 'label' => 'Reporting', 'desc' => 'Insights to grow your business'],
];

$customerExperienceLinks = [
    ['href' => '/features/shoppay', 'label' => 'ShopPay', 'desc' => 'Accept payments anywhere', 'new' => true],
    ['href' => '/features/customer-portal', 'label' => 'Customer Portal', 'desc' => 'Self-service for customers', 'new' => true],
];

$growthServicesLinks = [
    ['href' => '/services/websites', 'label' => 'Website Creation', 'desc' => 'Professional shop websites'],
    ['href' => '/services/leads', 'label' => 'Lead Generation', 'desc' => 'Get more customers'],
    ['href' => '/services/bookkeeping', 'label' => 'Bookkeeping', 'desc' => 'Managed accounting services', 'new' => true],
];

$integrationsLinks = [
    ['href' => '/integrations/shopcoach', 'label' => 'ShopCoach AI', 'desc' => 'AI-powered shop assistant'],
    ['href' => '/integrations/quickbooks', 'label' => 'QuickBooks', 'desc' => 'Sync with QuickBooks Online'],
    ['href' => '/integrations/ibs', 'label' => 'IBS', 'desc' => 'Heavy-duty parts catalog'],
    ['href' => '/features/vin-decoder', 'label' => 'VIN Decoder', 'desc' => 'Instant vehicle identification'],
    ['href' => '/integrations/labor-guides', 'label' => 'Labor Guides', 'desc' => 'AI-powered labor times'],
];

$solutionsLinks = [
    ['href' => '/diesel-truck-repair-shop-software', 'label' => 'Diesel Truck Repair', 'desc' => 'Built for parts-heavy environments'],
    ['href' => '/heavy-equipment-repair-software', 'label' => 'Heavy Equipment Repair', 'desc' => 'Built for field service and complex machinery'],
    ['href' => '/fleet-maintenance-management-software', 'label' => 'Fleet Maintenance', 'desc' => 'Built for internal fleet operations'],
    ['href' => '/agriculture-equipment-repair-shop-software', 'label' => 'Agricultural Equipment', 'desc' => 'Built for seasonal demands'],
    ['href' => '/fire-truck-and-ambulance-repair-shop-software', 'label' => 'Fire Truck & Ambulance', 'desc' => 'Built for uptime and compliance'],
    ['href' => '/truck-and-trailer-repair-shop-software', 'label' => 'Truck & Trailer Repair', 'desc' => 'Built for combined unit repairs'],
    ['href' => '/construction-fleet-maintenance-software', 'label' => 'Construction Fleet', 'desc' => 'Built for jobsite demands'],
    ['href' => '/tow-truck-repair-shop-software', 'label' => 'Tow Truck Repair', 'desc' => 'Built for 24/7 operations'],
    ['href' => '/mobile-equipment-repair-shop-software', 'label' => 'Mobile Equipment Repair', 'desc' => 'Built for on-site service'],
    ['href' => '/rv-repair-shop-software', 'label' => 'RV Repair Shop', 'desc' => 'Built for multi-system repairs'],
];
@endphp

<nav class="fixed top-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-md border-b border-white/10">
    <div class="container">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img
                    src="/images/Logo Primary Dark Bg.svg"
                    alt="ShopView"
                    class="h-8 w-auto"
                />
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-6">
                <!-- Product Dropdown (Mega Menu) -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium text-white/80 hover:text-white transition-colors duration-200 py-2">
                        Product
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="bg-zinc-900 border border-white/10 rounded-xl p-6 shadow-2xl w-[720px]">
                            <div class="grid grid-cols-2 gap-6">
                                <!-- Left Column -->
                                <div>
                                    <!-- Run the Shop Section -->
                                    <div class="mb-6">
                                        <h3 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-3 px-3">Run the Shop</h3>
                                        <div class="space-y-1">
                                            @foreach($runTheShopLinks as $link)
                                                <a href="{{ $link['href'] }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/5 transition-colors group/item">
                                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors">
                                                        <svg class="w-4 h-4 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                        <div class="text-xs text-white/50">{{ $link['desc'] }}</div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Customer Experience Section -->
                                    <div>
                                        <h3 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-3 px-3">Customer Experience</h3>
                                        <div class="space-y-1">
                                            @foreach($customerExperienceLinks as $link)
                                                <a href="{{ $link['href'] }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/5 transition-colors group/item">
                                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors">
                                                        <svg class="w-4 h-4 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <div class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                            <div class="text-xs text-white/50">{{ $link['desc'] }}</div>
                                                        </div>
                                                        @if(isset($link['new']) && $link['new'])
                                                            <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase">New</span>
                                                        @endif
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div>
                                    <!-- Growth & Services Section -->
                                    <div class="mb-6">
                                        <h3 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-3 px-3">Growth & Services</h3>
                                        <div class="space-y-1">
                                            @foreach($growthServicesLinks as $link)
                                                <a href="{{ $link['href'] }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/5 transition-colors group/item">
                                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors">
                                                        <svg class="w-4 h-4 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <div class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                            <div class="text-xs text-white/50">{{ $link['desc'] }}</div>
                                                        </div>
                                                        @if(isset($link['new']) && $link['new'])
                                                            <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase">New</span>
                                                        @endif
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Integrations Section -->
                                    <div>
                                        <h3 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-3 px-3">Integrations</h3>
                                        <div class="space-y-1">
                                            @foreach($integrationsLinks as $link)
                                                <a href="{{ $link['href'] }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/5 transition-colors group/item">
                                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors">
                                                        <svg class="w-4 h-4 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                        <div class="text-xs text-white/50">{{ $link['desc'] }}</div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solutions Dropdown (Mega Menu) -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium text-white/80 hover:text-white transition-colors duration-200 py-2">
                        Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="bg-zinc-900 border border-white/10 rounded-xl p-6 shadow-2xl w-[700px]">
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($solutionsLinks as $link)
                                    <a href="{{ $link['href'] }}" class="flex items-start gap-3 p-3 rounded-lg hover:bg-white/5 transition-colors group/item">
                                        <!-- Icon Placeholder -->
                                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors">
                                            <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">
                                                {{ $link['label'] }}
                                            </div>
                                            <div class="text-xs text-white/50 mt-0.5">
                                                {{ $link['desc'] }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing -->
                <a href="/pricing" class="text-sm font-medium text-white/80 hover:text-white transition-colors duration-200">
                    Pricing
                </a>

                <div class="flex items-center gap-4 ml-6">
                    <a href="tel:+15874389423" class="text-sm font-medium text-white/80 hover:text-white transition-colors duration-200">
                        +1-587-438-9423
                    </a>
                    <a href="/login" class="text-sm font-medium text-white/80 hover:text-white transition-colors duration-200">
                        Login
                    </a>
                    <a href="/demo" class="btn btn-secondary text-sm">
                        Book a Demo
                    </a>
                    <a href="/trial" class="btn btn-primary text-sm">
                        Start Free Trial
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-button"
                class="lg:hidden p-2 text-white"
                aria-label="Toggle mobile menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="lg:hidden hidden bg-black/95 backdrop-blur-md border-t border-white/10 max-h-[80vh] overflow-y-auto">
        <div class="container py-6">
            <!-- Product Accordion -->
            <div class="border-b border-white/10 pb-4 mb-4">
                <button class="mobile-accordion-btn w-full flex items-center justify-between text-base font-medium text-white/80 hover:text-white transition-colors duration-200" data-target="mobile-product">
                    Product
                    <svg class="mobile-accordion-icon w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-product" class="hidden mt-3 ml-4 space-y-4">
                    <!-- Run the Shop -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-2">Run the Shop</h4>
                        <div class="space-y-2">
                            @foreach($runTheShopLinks as $link)
                                <a href="{{ $link['href'] }}" class="block text-sm text-white/60 hover:text-white transition-colors">
                                    {{ $link['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Customer Experience -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-2">Customer Experience</h4>
                        <div class="space-y-2">
                            @foreach($customerExperienceLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2 text-sm text-white/60 hover:text-white transition-colors">
                                    {{ $link['label'] }}
                                    @if(isset($link['new']) && $link['new'])
                                        <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase">New</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Growth & Services -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-2">Growth & Services</h4>
                        <div class="space-y-2">
                            @foreach($growthServicesLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2 text-sm text-white/60 hover:text-white transition-colors">
                                    {{ $link['label'] }}
                                    @if(isset($link['new']) && $link['new'])
                                        <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase">New</span>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Integrations -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-2">Integrations</h4>
                        <div class="space-y-2">
                            @foreach($integrationsLinks as $link)
                                <a href="{{ $link['href'] }}" class="block text-sm text-white/60 hover:text-white transition-colors">
                                    {{ $link['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solutions Accordion -->
            <div class="border-b border-white/10 pb-4 mb-4">
                <button class="mobile-accordion-btn w-full flex items-center justify-between text-base font-medium text-white/80 hover:text-white transition-colors duration-200" data-target="mobile-solutions">
                    Solutions
                    <svg class="mobile-accordion-icon w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-solutions" class="hidden mt-3 ml-4 space-y-2">
                    @foreach($solutionsLinks as $link)
                        <a href="{{ $link['href'] }}" class="block text-sm text-white/60 hover:text-white transition-colors">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Other Links -->
            <a href="/pricing" class="block text-base font-medium text-white/80 hover:text-white transition-colors duration-200 mb-4">
                Pricing
            </a>

            <div class="pt-4 border-t border-white/10 space-y-3">
                <a href="tel:+15874389423" class="block text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                    +1-587-438-9423
                </a>
                <a href="/login" class="block text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                    Login
                </a>
                <a href="/demo" class="btn btn-secondary text-sm w-full text-center">
                    Book a Demo
                </a>
                <a href="/trial" class="btn btn-primary text-sm w-full text-center">
                    Start Free Trial
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton?.addEventListener('click', () => {
            mobileMenu?.classList.toggle('hidden');
        });

        // Mobile accordion
        const accordionBtns = document.querySelectorAll('.mobile-accordion-btn');
        accordionBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.dataset.target;
                const target = document.getElementById(targetId);
                const icon = btn.querySelector('.mobile-accordion-icon');

                target?.classList.toggle('hidden');
                icon?.classList.toggle('rotate-180');
            });
        });
    });
</script>
