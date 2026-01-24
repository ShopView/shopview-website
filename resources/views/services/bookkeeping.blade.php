@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="services/bookkeeping"
            title="Accounting & Bookkeeping Built for Heavy Duty Repair Shops"
            description="Fully managed accounting and bookkeeping designed for heavy-duty shops. Every invoice, payment, customer, and vendor syncs with QuickBooks - no more manual errors, lost data, or missed close-outs."
            badge="NEW"
            primary-href="/trial"
            primary-label="Start Free Trial"
        />

        <!-- Why Shops Struggle Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Shops Struggle With Bookkeeping
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Time-Consuming Manual Entry</h3>
                            <p class="text-white/60">
                                Manual entry and reconciliations take away hours weekly from running your shop.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Generic Services Don't Get It</h3>
                            <p class="text-white/60">
                                Generic bookkeeping services don't "get" heavy-duty repair.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Missed Data = Financial Stress</h3>
                            <p class="text-white/60">
                                Missed data = inaccurate profitability and financial stress.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ShopView + QuickBooks Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            ShopView + QuickBooks = Accounting Made Simple
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            With ShopView, your books stay accurate and up-to-date without you lifting a finger.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fully Managed Accounting</h3>
                            <p class="text-white/60">
                                We handle reconciliation, reporting, and closeouts every month.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">QuickBooks Sync</h3>
                            <p class="text-white/60">
                                Invoices and payments flow directly into QuickBooks, along with customer and vendor records.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Real-Time Financials</h3>
                            <p class="text-white/60">
                                Always-accurate P&L, job costing, and revenue visibility.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Error-Free Closeouts</h3>
                            <p class="text-white/60">
                                No manual cleanups or missing entries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Features That Keep Your Books Clean
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Built for the unique needs of heavy-duty repair shops, ShopView Accounting connects directly with QuickBooks and gives you the clarity, accuracy, and confidence your shop needs to grow.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Month-End Made Easy</h3>
                            <p class="text-white/60">
                                Stay on top of your books without the stress. ShopView handles reconciliation and reporting every month, delivering accurate P&L and detailed reports you can trust - without the manual effort.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Built for Heavy-Duty Shops</h3>
                            <p class="text-white/60">
                                Unlike generic bookkeeping tools, ShopView was designed for diesel, fleet, and repair operations. Invoices and payments flow seamlessly into QuickBooks, along with customer and vendor records, supported by shop-specific accounting expertise.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Real Visibility Into Your Shop</h3>
                            <p class="text-white/60">
                                Know exactly where your business stands. From labor and parts profitability to gross margins and up-to-date balances, ShopView gives you financial visibility you can act on - anytime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Benefits Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Key Benefits for Shop Owners
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Save Hours Every Week</h3>
                            <p class="text-white/60 text-sm">
                                We do the reconciliations, not you.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Accuracy You Can Trust</h3>
                            <p class="text-white/60 text-sm">
                                Shop-specific accounting, zero guesswork.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Financial Confidence</h3>
                            <p class="text-white/60 text-sm">
                                Monthly closeouts with no missed data.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">More Time to Run Your Shop</h3>
                            <p class="text-white/60 text-sm">
                                Spend less time on spreadsheets, more on customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView for Your Accounting?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            Most bookkeeping services don't understand heavy-duty repair businesses. ShopView Accounting was designed for them. With our QuickBooks integration, you'll see the difference: invoices, payments, customer, and vendor data sync in real time and we manage the bookkeeping for you.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Direct QuickBooks Integration</h3>
                            <p class="text-white/60">
                                No third-party hacks.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Managed Accounting Services</h3>
                            <p class="text-white/60">
                                Built for repair shops.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Clean Books</h3>
                            <p class="text-white/60">
                                Your accountant will love.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Ready to Stop Worrying About Your Books?
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        ShopView Accounting gives you reconciled books, reliable reports, and stress-free monthly closeouts - all fully managed for you.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.bookkeeping.title')"
            :sections="config('guides.bookkeeping.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
