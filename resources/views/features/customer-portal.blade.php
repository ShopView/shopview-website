@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <span class="inline-block px-3 py-1 bg-primary-500/20 text-primary-400 text-sm font-medium rounded-full mb-4">NEW</span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Customer Portal for Heavy-Duty and Fleet Shops
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Give fleets the transparency they expect. Track units in the shop, submit service requests, and pay invoices online with ShopPay. Simple, secure, and purpose-built for diesel and heavy-duty repair.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                            Start Free Trial
                        </a>
                        <a href="/demo" class="btn btn-secondary text-lg px-8 py-4">
                            Book a Demo
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Request to Payment Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            From Service Request to Payment - Fast
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            One connected flow that keeps your customers moving.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">See Units & History</h3>
                            <p class="text-white/60">
                                Fleets view which vehicles are in the shop today and check complete service records on past work.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Submit Requests Online</h3>
                            <p class="text-white/60">
                                A simple form on your site or inside the portal creates a new job instantly in ShopView.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Review & Pay Invoices</h3>
                            <p class="text-white/60">
                                Customers pay securely by card or ACH through ShopPay. No phone calls. No paper checks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built for Fleets Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            One Portal, Built for Fleets
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fleet Managers</h3>
                            <p class="text-white/60">
                                Track unit status in real time, approve new requests, and pay invoices from any device.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Accounting Teams</h3>
                            <p class="text-white/60">
                                Every payment flows into QuickBooks automatically. No more manual reconciliation or missed deposits.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Shop Staff</h3>
                            <p class="text-white/60">
                                Service history, notes, invoices, and customer communications are all in one place, easy to search and act on.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Generic Portals Don't Work Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Why Generic Portals Don't Work for Fleets
                            </h2>
                            <p class="text-white/80 mb-8">
                                Fleet customers need more than a basic login. They need real-time visibility into their units, easy approval workflows, and seamless payment options. ShopView's Customer Portal delivers all of this in one place.
                            </p>
                        </div>

                        <!-- Screenshot -->
                        <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden">
                            <img src="{{ asset('images/screenshots/Fleet Growth Target List & Chart.png') }}" alt="ShopView Customer Portal" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Communication Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Clearer Communication, Less Back-and-Forth
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Stop playing phone tag with fleet managers. The Customer Portal keeps everyone informed automatically.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless with Your Website</h3>
                            <p class="text-white/60">
                                Embed the portal directly on your site for a seamless customer experience.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Get Paid Faster with ShopPay</h3>
                            <p class="text-white/60">
                                Integrated payments mean customers can pay instantly without leaving the portal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Features Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Works with Your Back Office
                        </h2>
                        <p class="text-lg text-white/80">
                            The Customer Portal connects seamlessly with other ShopView features.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/features/shoppay" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">ShopPay</h3>
                            <p class="text-white/60 text-sm">
                                Simple, secure customer payments.
                            </p>
                        </a>

                        <a href="/features/work-orders" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                            <p class="text-white/60 text-sm">
                                Build and manage jobs fast - fully detailed and ready in under 2 minutes.
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
                        Built for Heavy-Duty Shops
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        The Customer Portal was designed specifically for diesel, fleet, and heavy-duty repair operations - not generic auto shops.
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
