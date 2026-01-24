@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="features/shoppay"
            title="Integrated Payment Processing for Heavy-Duty Repair Shops"
            description="ShopPay is the secure, built-in payments platform inside ShopView. From work order to invoice to payment, accept cards, ACH, and fleet billing online while syncing directly to QuickBooks. No extra tools. No double entry."
            badge="NEW"
            primary-href="/trial"
            primary-label="Start Free Trial"
            secondary-href="/demo"
            secondary-label="Book a Demo"
        />

        <!-- Accept Payments Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Accept Credit Card & ACH Payments Online
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Give customers the payment options they expect in one workflow.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Credit Card Payments</h3>
                            <p class="text-white/60">
                                Accept all major credit cards with clear per-transaction fees and reporting.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">ACH Bank Transfers</h3>
                            <p class="text-white/60">
                                Lower fees for larger fleet payments with direct bank transfers.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fleet Billing</h3>
                            <p class="text-white/60">
                                Bill fleet accounts directly with integrated invoicing and payment tracking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transparent Fees Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Transparent Fees & PCI Compliance
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Payment processing shouldn't bring hidden costs or compliance headaches. ShopPay keeps it simple, secure, and predictable.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Clear Per-Transaction Fees</h3>
                            <p class="text-white/60">
                                No hidden costs. Clear per-transaction credit card fees with full reporting.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">PCI-Compliant Security</h3>
                            <p class="text-white/60">
                                PCI-compliant tokenization, no card data stored locally.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QuickBooks Sync Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            QuickBooks Sync & Automatic Reconciliation
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Stop double entry and keep A/R accurate automatically.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Automatic Sync</h3>
                            <p class="text-white/60">
                                Invoices, payments, deposits, fees, and refunds flow into QuickBooks.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Customer & Job Mapping</h3>
                            <p class="text-white/60">
                                Payments map to customers and jobs automatically.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Easy Reconciliation</h3>
                            <p class="text-white/60">
                                Export deposits and fees for reconciliation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Order to Paid Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                From Work Order to Paid, Fast
                            </h2>
                            <p class="text-white/80 mb-8">
                                Convert jobs into cash without delays. ShopPay connects your entire workflow from work order to invoice to payment in one seamless process.
                            </p>
                        </div>

                        <!-- Screenshot -->
                        <div class="rounded-xl overflow-hidden">
                            <img src="{{ asset('images/screenshots/Secure Payments.png') }}" alt="ShopPay Payment Interface" class="w-full h-auto rounded-xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Portal Integration Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            ShopPay + Customer Portal = Faster Payments, Fewer Calls
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Together, they give fleets a seamless self-service experience.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        <a href="/features/customer-portal" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Customer Portal</h3>
                            <p class="text-white/60 text-sm">
                                Approvals and payments in one place.
                            </p>
                        </a>

                        <a href="/integrations/quickbooks" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">QuickBooks Integration</h3>
                            <p class="text-white/60 text-sm">
                                Sync invoices, payments, and expenses automatically.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built for Heavy-Duty Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built for Heavy-Duty, Diesel & Fleet Repair
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        Not auto-retail payments, fleet workflows built in. A complete payments platform for heavy-duty shops - one place for every payment need.
                    </p>
                    <a href="/about" class="btn btn-primary text-lg px-8 py-4">
                        Learn More About ShopView
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60 text-sm">
                                Simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60 text-sm">
                                Connects with accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60 text-sm">
                                From onboarding to ongoing support, reach out anytime for help within 12 hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />
@endsection
