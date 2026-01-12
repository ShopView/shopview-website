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

<footer class="bg-black border-t border-white/10 pt-16 pb-8">
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
                    <a href="https://twitter.com/shopview" class="text-white/40 hover:text-white transition-colors duration-200" aria-label="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/company/shopview" class="text-white/40 hover:text-white transition-colors duration-200" aria-label="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
