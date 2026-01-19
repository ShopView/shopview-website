@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Estimates & Invoicing Software Built for Speed, Accuracy & Heavy-Duty Profit
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Build accurate estimates and convert them into invoices in seconds. ShopView's repair invoice software is built for heavy-duty truck, diesel, and fleet repair shops - giving you fast, accurate billing with zero missed revenue.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- From Estimate to Invoice -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            From Estimate to Invoice in Just a Few Clicks
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Stop wasting time double-entering job data or manually calculating totals. ShopView makes it easy to turn detailed estimates into professional invoices, fast, with everything tracked, logged, and sent to the customer in seconds.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">One-Click Conversion</h3>
                            <p class="text-white/60 text-sm">
                                Turn approved estimates or completed work orders into invoices in seconds - using our truck repair shop invoicing software.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Auto-Populated Line Items</h3>
                            <p class="text-white/60 text-sm">
                                Tech time, labor rates, shop fees, and part costs are automatically added.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Professional, Branded Layouts</h3>
                            <p class="text-white/60 text-sm">
                                Clear invoices your customers understand - and pay faster.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Create Accurate Estimates -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Screenshot -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden order-2 lg:order-1">
                        <img src="{{ asset('images/screenshots/Work orders.png') }}" alt="ShopView Estimates Interface" class="w-full h-full object-cover">
                    </div>

                    <div class="order-1 lg:order-2">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            Create Accurate Estimates in Less Time
                        </h2>
                        <p class="text-lg text-white/80 mb-8">
                            ShopView's heavy-duty software helps you generate estimates that reflect real costs - without slowing down your workflow.
                        </p>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Fastest Estimate Build-Out</h3>
                                <p class="text-white/70">
                                    Complete estimates with labor, parts, taxes, and supplies in just minutes.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Smart Templates</h3>
                                <p class="text-white/70">
                                    Use pre-built jobs and pricing to save time and ensure consistency.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Custom Line Items</h3>
                                <p class="text-white/70">
                                    Add unique services or details on the fly - no rigid system restrictions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Get Paid Faster -->
        <section class="py-20">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            Get Paid Faster with Streamlined Billing
                        </h2>
                        <p class="text-lg text-white/80 mb-8">
                            No more chasing invoices or wondering what's outstanding. With ShopView's repair shop billing software, your estimates and invoices are always accurate, organized, and fast to deliver.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Send Invoices Instantly</h4>
                                    <p class="text-white/60 text-sm">Email or text customers as soon as the job is done, right from the system.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Track Invoice Status</h4>
                                    <p class="text-white/60 text-sm">Know exactly when invoices are sent, viewed, approved, and paid.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Customer Payments</h4>
                                    <p class="text-white/60 text-sm">Monitor customer payments and ensure their accounts are up to date</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Screenshot -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/screenshots/Payments & Batch Transactions.png') }}" alt="ShopView Invoice Tracking" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Explore More Tools from ShopView
                    </h2>
                    <p class="text-lg text-white/80">
                        Continue your product tour, dive deeper into each feature
                    </p>
                </div>

                <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
                    <a href="/features/work-orders" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                        <p class="text-white/60 text-sm">Build and manage jobs fast - fully detailed and ready in under 2 minutes.</p>
                    </a>

                    <a href="/features/technician-time-tracking" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Technician Time Clock</h3>
                        <p class="text-white/60 text-sm">Track time by job, bay, or task for precise billing and reports.</p>
                    </a>

                    <a href="/features/inventory-management" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Parts Inventory</h3>
                        <p class="text-white/60 text-sm">Monitor stock levels in real time and manage usage with ease.</p>
                    </a>

                    <a href="/features/scheduling" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Scheduling</h3>
                        <p class="text-white/60 text-sm">Drag and drop to assign jobs, balance workloads, and stay on track.</p>
                    </a>

                    <a href="/features/reporting-analytics" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Reporting & Analytics</h3>
                        <p class="text-white/60 text-sm">View trends, tech stats, and job margins to grow your business.</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Built for Heavy-Duty -->
        <section class="py-20 relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-black"></div>
            </div>
            <div class="container relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built for Heavy-Duty, Diesel & Fleet Shops
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        We built ShopView after spending 20+ years running repair shops. We knew invoicing needed to be faster, smarter, and more accurate. So we fixed it.
                    </p>
                    <a href="/about" class="btn btn-secondary">
                        Learn More About Our Revolutionary Software
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView -->
        <section class="py-20">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Why Choose ShopView?
                    </h2>
                    <p class="text-lg text-white/80 max-w-4xl mx-auto">
                        ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire. When your shop runs more efficiently with ShopView, life's just better. There's more free time to spend doing what you want. Less stress. And fewer operational headaches. Better yet, ShopView is designed to pay for itself - many times over.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-12">
                    <div class="text-center">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-white/60 mb-2">Available on All Devices</h3>
                        <p class="text-white/80">
                            ShopView is simple to set up and use on computers, smartphones and tablets. Then all your shop information is stored in the cloud and automatically synced across all devices.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-white/60 mb-2">Seamless Integration</h3>
                        <p class="text-white/80">
                            ShopView connects with the accounting and business systems you already use to connect all parts of your shop's operations and reduce administrative effort.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-white/60 mb-2">Comprehensive Support</h3>
                        <p class="text-white/80">
                            From onboarding to ongoing support, just reach out to our team any time you need support and we'll be back in touch within 12 hours.
                        </p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.estimates-invoices.title')"
            :sections="config('guides.estimates-invoices.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
