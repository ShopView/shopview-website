@php
$runTheShopLinks = [
    ['href' => '/features/work-orders', 'label' => 'Work Orders', 'desc' => 'Create work orders in under 2 minutes', 'icon' => '/images/icons/Work Orders.webp'],
    ['href' => '/features/estimates-invoices', 'label' => 'Estimates & Invoices', 'desc' => 'Professional quotes and billing', 'icon' => '/images/icons/Estimates & Invoices.webp'],
    ['href' => '/features/scheduling', 'label' => 'Scheduling', 'desc' => 'Smart technician scheduling', 'icon' => '/images/icons/Scheduling.webp'],
    ['href' => '/features/technician-time-tracking', 'label' => 'Time Clock', 'desc' => 'Track labor hours accurately', 'icon' => '/images/icons/Time clock.webp'],
    ['href' => '/features/inventory-management', 'label' => 'Parts Inventory', 'desc' => 'Parts tracking and ordering', 'icon' => '/images/icons/Parts inventory.webp'],
    ['href' => '/features/reporting-analytics', 'label' => 'Reporting', 'desc' => 'Insights to grow your business', 'icon' => '/images/icons/Reporting.webp'],
];

$customerExperienceLinks = [
    ['href' => '/features/shoppay', 'label' => 'ShopPay', 'desc' => 'Accept payments anywhere', 'new' => true, 'icon' => '/images/icons/Customer Portal.webp'],
    ['href' => '/features/customer-portal', 'label' => 'Customer Portal', 'desc' => 'Self-service for customers', 'new' => true, 'icon' => '/images/icons/portal_247CFF.webp'],
];

$growthServicesLinks = [
    ['href' => '/services/websites', 'label' => 'Website Creation', 'desc' => 'Professional shop websites', 'icon' => '/images/icons/Website Creation.webp'],
    ['href' => '/services/leads', 'label' => 'Lead Generation', 'desc' => 'Get more customers', 'icon' => '/images/icons/Lead Generation.webp'],
    ['href' => '/services/bookkeeping', 'label' => 'Bookkeeping', 'desc' => 'Managed accounting services', 'new' => true, 'icon' => '/images/icons/Bookkeeping.webp'],
];

$integrationsLinks = [
    ['href' => '/integrations/shopcoach', 'label' => 'ShopCoach AI', 'desc' => 'AI-powered shop assistant', 'icon' => '/images/icons/ShopCoach ai.webp'],
    ['href' => '/integrations/quickbooks', 'label' => 'QuickBooks', 'desc' => 'Sync with QuickBooks Online', 'icon' => '/images/icons/quickbooks.webp'],
    ['href' => '/integrations/ibs', 'label' => 'IBS', 'desc' => 'Heavy-duty parts catalog', 'icon' => '/images/icons/ibs.webp'],
    ['href' => '/features/vin-decoder', 'label' => 'VIN Decoder', 'desc' => 'Instant vehicle identification', 'icon' => '/images/icons/vin.webp'],
    ['href' => '/integrations/labor-guides', 'label' => 'Labor Guides', 'desc' => 'AI-powered labor times', 'icon' => '/images/icons/labor.webp'],
];

$solutionsLinks = [
    ['href' => '/diesel-truck-repair-shop-software', 'label' => 'Diesel Truck Repair', 'desc' => 'Built for parts-heavy environments', 'icon' => '/images/icons/Diesel Truck Repair Shop.webp'],
    ['href' => '/heavy-equipment-repair-software', 'label' => 'Heavy Equipment Repair', 'desc' => 'Built for complex machinery', 'icon' => '/images/icons/Heavy Equipment Repair.webp'],
    ['href' => '/fleet-maintenance-management-software', 'label' => 'Fleet Maintenance', 'desc' => 'Built for internal fleet operations', 'icon' => '/images/icons/Fleet Maintenance Management.webp'],
    ['href' => '/agriculture-equipment-repair-shop-software', 'label' => 'Agricultural Equipment', 'desc' => 'Built for seasonal demands', 'icon' => '/images/icons/Agricultural_Equipment_Repair_247CFF.webp'],
    ['href' => '/fire-truck-and-ambulance-repair-shop-software', 'label' => 'Fire Truck & Ambulance', 'desc' => 'Built for uptime and compliance', 'icon' => '/images/icons/Fire Truck & Ambulance Repair.webp'],
    ['href' => '/truck-and-trailer-repair-shop-software', 'label' => 'Truck & Trailer Repair', 'desc' => 'Built for combined unit repairs', 'icon' => '/images/icons/Truck & Trailer Repair.webp'],
    ['href' => '/construction-fleet-maintenance-software', 'label' => 'Construction Fleet', 'desc' => 'Built for jobsite demands', 'icon' => '/images/icons/Construction Fleet Maintenance.webp'],
    ['href' => '/tow-truck-repair-shop-software', 'label' => 'Tow Truck Repair', 'desc' => 'Built for 24/7 operations', 'icon' => '/images/icons/Tow Truck Repair.webp'],
    ['href' => '/mobile-equipment-repair-shop-software', 'label' => 'Mobile Equipment Repair', 'desc' => 'Built for on-site service', 'icon' => '/images/icons/Mobile Equipment Repair.webp'],
    ['href' => '/rv-repair-shop-software', 'label' => 'RV Repair Shop', 'desc' => 'Built for multi-system repairs', 'icon' => '/images/icons/RV Repair.webp'],
];
@endphp

<nav class="fixed top-0 left-0 right-0 z-50 bg-[#12161b]/90 backdrop-blur-md border-b border-white/10">
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
                    <button class="flex items-center gap-1 text-base font-medium text-white/80 hover:text-white transition-colors duration-200 py-2">
                        Product
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="bg-[#1a1d24] border border-white/10 rounded-xl p-6 shadow-2xl w-[720px]">
                            <div class="grid grid-cols-2 gap-6">
                                <!-- Left Column -->
                                <div>
                                    <!-- Run the Shop Section -->
                                    <div class="mb-6">
                                        <h3 class="text-xs font-semibold text-white/40 uppercase tracking-wider mb-3 px-3">Run the Shop</h3>
                                        <div class="space-y-1">
                                            @foreach($runTheShopLinks as $link)
                                                <a href="{{ $link['href'] }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white/5 transition-colors group/item">
                                                    <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors overflow-hidden">
                                                        @if(!empty($link['icon']))
                                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-7 h-7 object-contain">
                                                        @else
                                                            <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                            </svg>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <div class="text-base font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                        <div class="text-sm text-white/50">{{ $link['desc'] }}</div>
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
                                                    <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors overflow-hidden">
                                                        @if(!empty($link['icon']))
                                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-7 h-7 object-contain">
                                                        @else
                                                            <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            </svg>
                                                        @endif
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <div class="text-base font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                            <div class="text-sm text-white/50">{{ $link['desc'] }}</div>
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
                                                    <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors overflow-hidden">
                                                        @if(!empty($link['icon']))
                                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-7 h-7 object-contain">
                                                        @else
                                                            <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                            </svg>
                                                        @endif
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <div class="text-base font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                            <div class="text-sm text-white/50">{{ $link['desc'] }}</div>
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
                                                    <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors overflow-hidden">
                                                        @if(!empty($link['icon']))
                                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-7 h-7 object-contain">
                                                        @else
                                                            <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                                            </svg>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <div class="text-base font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</div>
                                                        <div class="text-sm text-white/50">{{ $link['desc'] }}</div>
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
                    <button class="flex items-center gap-1 text-base font-medium text-white/80 hover:text-white transition-colors duration-200 py-2">
                        Solutions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="bg-[#1a1d24] border border-white/10 rounded-xl p-6 shadow-2xl w-[700px]">
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($solutionsLinks as $link)
                                    <a href="{{ $link['href'] }}" class="flex items-start gap-3 p-3 rounded-lg hover:bg-white/5 transition-colors group/item">
                                        <!-- Icon -->
                                        <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0 group-hover/item:bg-primary-500/20 transition-colors overflow-hidden">
                                            @if(!empty($link['icon']))
                                                <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-8 h-8 object-contain">
                                            @else
                                                <svg class="w-5 h-5 text-white/40 group-hover/item:text-primary-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="text-base font-medium text-white group-hover/item:text-primary-400 transition-colors">
                                                {{ $link['label'] }}
                                            </div>
                                            <div class="text-sm text-white/50 mt-0.5">
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
                <a href="/pricing" class="text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                    Pricing
                </a>

                <div class="flex items-center gap-4 ml-6">
                    <a href="tel:+15874389423" class="text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                        +1-587-438-9423
                    </a>
                    <a href="/login" class="text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                        Login
                    </a>
                    <a href="/demo" class="btn btn-secondary text-base">
                        Book a Demo
                    </a>
                    <a href="/trial" class="btn btn-primary text-base">
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
    <div id="mobile-menu" class="lg:hidden hidden bg-[#12161b]/95 backdrop-blur-md border-t border-white/10 max-h-[80vh] overflow-y-auto pt-3 pb-6">
        <div class="container py-4">
            <!-- Product Accordion -->
            <div class="border-b border-white/10 pb-3 mb-3">
                <button class="mobile-accordion-btn w-full flex items-center justify-between py-3 text-base font-semibold text-white hover:text-primary-400 transition-colors duration-200" data-target="mobile-product">
                    <span>Product</span>
                    <svg class="mobile-accordion-icon w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-product" class="hidden mt-2 space-y-4">
                    <!-- Run the Shop -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/50 uppercase tracking-wider mb-2 px-1">Run the Shop</h4>
                        <div class="space-y-1">
                            @foreach($runTheShopLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 p-2 rounded-lg hover:bg-white/5 active:bg-white/10 transition-all group/item">
                                    @if(!empty($link['icon']))
                                        <div class="w-8 h-8 bg-white/10 flex items-center justify-center shrink-0 rounded-lg group-hover/item:bg-primary-500/20 transition-colors">
                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-5 h-5 object-contain">
                                        </div>
                                    @endif
                                    <span class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Customer Experience -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/50 uppercase tracking-wider mb-2 px-1">Customer Experience</h4>
                        <div class="space-y-1">
                            @foreach($customerExperienceLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 p-2 rounded-lg hover:bg-white/5 active:bg-white/10 transition-all group/item">
                                    @if(!empty($link['icon']))
                                        <div class="w-8 h-8 bg-white/10 flex items-center justify-center shrink-0 rounded-lg group-hover/item:bg-primary-500/20 transition-colors">
                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-5 h-5 object-contain">
                                        </div>
                                    @endif
                                    <div class="flex items-center gap-2 flex-1 min-w-0">
                                        <span class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</span>
                                        @if(isset($link['new']) && $link['new'])
                                            <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase shrink-0">New</span>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Growth & Services -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/50 uppercase tracking-wider mb-2 px-1">Growth & Services</h4>
                        <div class="space-y-1">
                            @foreach($growthServicesLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 p-2 rounded-lg hover:bg-white/5 active:bg-white/10 transition-all group/item">
                                    @if(!empty($link['icon']))
                                        <div class="w-8 h-8 bg-white/10 flex items-center justify-center shrink-0 rounded-lg group-hover/item:bg-primary-500/20 transition-colors">
                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-5 h-5 object-contain">
                                        </div>
                                    @endif
                                    <div class="flex items-center gap-2 flex-1 min-w-0">
                                        <span class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</span>
                                        @if(isset($link['new']) && $link['new'])
                                            <span class="px-1.5 py-0.5 bg-primary-500/20 text-primary-400 text-[10px] font-semibold rounded uppercase shrink-0">New</span>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Integrations -->
                    <div>
                        <h4 class="text-xs font-semibold text-white/50 uppercase tracking-wider mb-2 px-1">Integrations</h4>
                        <div class="space-y-1">
                            @foreach($integrationsLinks as $link)
                                <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 p-2 rounded-lg hover:bg-white/5 active:bg-white/10 transition-all group/item">
                                    @if(!empty($link['icon']))
                                        <div class="w-8 h-8 bg-white/10 flex items-center justify-center shrink-0 rounded-lg group-hover/item:bg-primary-500/20 transition-colors">
                                            <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-5 h-5 object-contain">
                                        </div>
                                    @endif
                                    <span class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solutions Accordion -->
            <div class="border-b border-white/10 pb-3 mb-3">
                <button class="mobile-accordion-btn w-full flex items-center justify-between py-3 text-base font-semibold text-white hover:text-primary-400 transition-colors duration-200" data-target="mobile-solutions">
                    <span>Solutions</span>
                    <svg class="mobile-accordion-icon w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-solutions" class="hidden mt-2 space-y-1">
                    @foreach($solutionsLinks as $link)
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2.5 p-2 rounded-lg hover:bg-white/5 active:bg-white/10 transition-all group/item">
                            @if(!empty($link['icon']))
                                <div class="w-8 h-8 bg-white/10 flex items-center justify-center shrink-0 rounded-lg group-hover/item:bg-primary-500/20 transition-colors">
                                    <img src="{{ $link['icon'] }}" alt="{{ $link['label'] }}" class="w-5 h-5 object-contain">
                                </div>
                            @endif
                            <span class="text-sm font-medium text-white group-hover/item:text-primary-400 transition-colors">{{ $link['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Other Links -->
            <div class="border-b border-white/10 pb-3 mb-3">
                <a href="/pricing" class="flex items-center py-3 text-base font-semibold text-white hover:text-primary-400 transition-colors duration-200">
                    Pricing
                </a>
            </div>

            <div class="pt-2 space-y-2.5">
                <a href="tel:+15874389423" class="flex items-center gap-2 py-2.5 text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    +1-587-438-9423
                </a>
                <a href="/login" class="flex items-center gap-2 py-2.5 text-base font-medium text-white/80 hover:text-white transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Login
                </a>
                <div class="pt-2 space-y-2">
                    <a href="/demo" class="btn btn-secondary text-sm w-full text-center py-3">
                        Book a Demo
                    </a>
                    <a href="/trial" class="btn btn-primary text-sm w-full text-center py-3">
                        Start Free Trial
                    </a>
                </div>
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
