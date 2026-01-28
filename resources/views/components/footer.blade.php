@php
$currentYear = date('Y');

$footerLinks = [
    'product' => [
        'title' => 'Product',
        'links' => [
            ['href' => '/features/work-orders', 'label' => 'Work Orders'],
            ['href' => '/features/estimates-invoices', 'label' => 'Estimates & Invoices'],
            ['href' => '/features/inventory-management', 'label' => 'Parts Inventory'],
            ['href' => '/features/scheduling', 'label' => 'Scheduling'],
            ['href' => '/features/reporting-analytics', 'label' => 'Reporting'],
            ['href' => '/features/technician-time-tracking', 'label' => 'Time Clock'],
            ['href' => '/services/websites', 'label' => 'Website Creation'],
            ['href' => '/services/leads', 'label' => 'Lead Generation'],
            ['href' => '/integrations/shopcoach', 'label' => 'ShopCoach AI'],
            ['href' => '/integrations/labor-guides', 'label' => 'Labor Time Guide'],
            ['href' => '/features/shoppay', 'label' => 'ShopPay'],
            ['href' => '/features/customer-portal', 'label' => 'Customer Portal'],
            ['href' => '/services/bookkeeping', 'label' => 'Accounting & Bookkeeping'],
        ]
    ],
    'solutions' => [
        'title' => 'Solutions',
        'links' => [
            ['href' => '/diesel-truck-repair-shop-software', 'label' => 'Diesel Truck Repair'],
            ['href' => '/agriculture-equipment-repair-shop-software', 'label' => 'Agricultural Equipment'],
            ['href' => '/construction-fleet-maintenance-software', 'label' => 'Construction Fleet'],
            ['href' => '/heavy-equipment-repair-software', 'label' => 'Heavy Equipment'],
            ['href' => '/fire-truck-and-ambulance-repair-shop-software', 'label' => 'Fire Truck & Ambulance'],
            ['href' => '/tow-truck-repair-shop-software', 'label' => 'Tow Truck'],
            ['href' => '/fleet-maintenance-management-software', 'label' => 'Fleet Maintenance'],
            ['href' => '/truck-and-trailer-repair-shop-software', 'label' => 'Truck & Trailer'],
            ['href' => '/mobile-equipment-repair-shop-software', 'label' => 'Mobile Equipment'],
            ['href' => '/rv-repair-shop-software', 'label' => 'RV Repair'],
        ]
    ],
    'compare' => [
        'title' => 'Compare',
        'links' => [
            ['href' => '/compare/shopview-vs-fullbay', 'label' => 'ShopView vs Fullbay'],
            ['href' => '/compare/shopview-vs-shopmonkey', 'label' => 'ShopView vs Shopmonkey'],
            ['href' => '/compare/shopview-vs-shopboss', 'label' => 'ShopView vs ShopBoss'],
            ['href' => '/compare/shopview-vs-mitchell1', 'label' => 'ShopView vs Mitchell1'],
            ['href' => '/compare/shopview-vs-tekmetric', 'label' => 'ShopView vs Tekmetric'],
            ['href' => '/compare/shopview-vs-easy-truck-shop', 'label' => 'ShopView vs Easy Truck Shop'],
            ['href' => '/compare/shopview-vs-maintainx', 'label' => 'ShopView vs MaintainX'],
            ['href' => '/compare/shopview-vs-gem-car', 'label' => 'ShopView vs Gem-Car'],
            ['href' => '/compare/shopview-vs-autoleap', 'label' => 'ShopView vs Autoleap'],
            ['href' => '/compare/shopview-vs-quickbooks', 'label' => 'ShopView vs QuickBooks'],
            ['href' => '/compare/shopview-vs-other-alternatives', 'label' => 'ShopView vs Other Solutions'],
        ]
    ],
    'company' => [
        'title' => 'Company',
        'links' => [
            ['href' => '/about', 'label' => 'About Us'],
            ['href' => '/careers', 'label' => 'Careers'],
        ]
    ],
    'legal' => [
        'title' => 'Legal',
        'links' => [
            ['href' => '/terms', 'label' => 'Terms and Conditions'],
            ['href' => '/privacy', 'label' => 'Privacy Policy'],
            ['href' => '/candidate-privacy-policy', 'label' => 'Candidate Privacy Policy'],
        ]
    ],
];
@endphp

<footer class="bg-[#12161b] border-t border-white/10 pt-16 pb-8">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 mb-12">
            <!-- Logo and description -->
            <div class="lg:col-span-1">
                <img
                    src="/images/Logo Primary Dark Bg.svg"
                    alt="ShopView"
                    class="h-8 w-auto mb-4"
                />
                <p class="text-white/60 text-sm">
                    Heavy duty repair shop management software built by shop owners.
                </p>
            </div>

            <!-- Footer Links -->
            @foreach($footerLinks as $key => $section)
                <div>
                    <h3 class="text-white font-semibold mb-4">{{ $section['title'] }}</h3>
                    <ul class="space-y-2">
                        @foreach($section['links'] as $link)
                            <li>
                                <a
                                    href="{{ $link['href'] }}"
                                    class="text-white/60 hover:text-white text-sm transition-colors duration-200"
                                >
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Bottom section -->
        <div class="pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-white/40 text-sm">
                    &copy; {{ $currentYear }} ShopView. All rights reserved.
                </p>

                <!-- Social Links -->
                <div class="flex items-center gap-6">
                    <a href="https://twitter.com/shopview" target="_blank" rel="noopener noreferrer" class="text-white/40 hover:text-white transition-colors duration-200" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/shopviewapp/" target="_blank" rel="noopener noreferrer" class="text-white/40 hover:text-white transition-colors duration-200" aria-label="Facebook">
                        <x-dynamic-component component="lucide-facebook" class="w-5 h-5" />
                    </a>
                    <a href="https://linkedin.com/company/shopview" target="_blank" rel="noopener noreferrer" class="text-white/40 hover:text-white transition-colors duration-200" aria-label="LinkedIn">
                        <x-dynamic-component component="lucide-linkedin" class="w-5 h-5" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
