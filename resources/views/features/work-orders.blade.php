@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Work Orders That Get Jobs Done Faster - Built for Heavy-Duty Repair Shops
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Create and manage service work orders in under 2 minutes with ShopView. It's the fastest way to keep your heavy-duty repair shop running smooth, efficient, and profitable - without the stress.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Key Value Proposition -->
        <section class="py-20">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            Fastest Work Order Build-Out in the Industry
                        </h2>
                        <p class="text-lg text-white/80">
                            Time is money. That's why ShopView gives you the tools to build fully detailed work orders or estimates in less than 2 minutes - start to finish. Whether you're writing up a new repair, reviewing past service history, or converting an estimate into an invoice, ShopView's repair shop work order software gets it done faster.
                        </p>
                    </div>
                    <!-- Screenshot -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/screenshots/Work Order Home.png') }}" alt="ShopView Work Order Interface" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Simplified Service Order Management -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Simplified Service Order Management
                    </h2>
                    <p class="text-lg text-white/80 max-w-3xl mx-auto">
                        From intake to invoice, ShopView simplifies every step of the service process - no bottlenecks, no delays. Just one straight line from job start to payment.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                        <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Effortless Job Creation</h3>
                        <p class="text-white/60 text-sm">
                            Instantly assign techs, add labor, parts, and customer notes - all from one place.
                        </p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                        <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Clear Communication</h3>
                        <p class="text-white/60 text-sm">
                            Eliminate back-and-forth with smart fields, service status tracking, and automatic updates your whole team can see.
                        </p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                        <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Instant Visibility</h3>
                        <p class="text-white/60 text-sm">
                            Get real-time insights into job progress, technician time, and work order status across every bay.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collaborative Workflows -->
        <section class="py-20">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Screenshot -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden order-2 lg:order-1">
                        <img src="{{ asset('images/screenshots/Work orders & Track Time.png') }}" alt="ShopView Collaborative Workflow" class="w-full h-full object-cover">
                    </div>

                    <div class="order-1 lg:order-2">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Collaborative Workflows for Your Whole Team
                        </h2>
                        <p class="text-white/80 mb-8">
                            Work orders shouldn't live on sticky notes. ShopView connects your entire team with an intuitive, centralized system.
                        </p>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Technician Friendly Workflow</h3>
                                <p class="text-white/70">
                                    Techs can clock in, update tasks, add photos, and complete jobs - right from their tablet or phone.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Zero-Slip Time Clock</h3>
                                <p class="text-white/70">
                                    Ensure accurate time tracking with clock-in/out automation tied directly to each work order. No more guessing where your labor hours went.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold mb-2 text-primary-400">Live Job Progress</h3>
                                <p class="text-white/70">
                                    Managers see exactly what's happening - without chasing people down for updates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Invoicing Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            From Work Order to Invoice in Seconds
                        </h2>
                        <p class="text-lg text-white/80 mb-8">
                            Convert completed work orders into professional invoices with just a few clicks. ShopView captures all labor, parts, shop supplies, and tax data - so you get paid faster, with zero missed revenue.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">One-Click Conversion</h4>
                                    <p class="text-white/60 text-sm">Finalize and send invoices to customers directly from the work order.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Accurate Billing</h4>
                                    <p class="text-white/60 text-sm">Pull in technician time, part costs, and margins automatically for precise, profitable invoicing.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Approval Tracking Made Easy</h4>
                                    <p class="text-white/60 text-sm">See status at a glance. No paperwork. No guesswork. Just clean billing.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Screenshot -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl overflow-hidden">
                        <img src="{{ asset('images/screenshots/Work orders_v2.png') }}" alt="ShopView Work Order to Invoice" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section class="py-20">
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
                    <a href="/features/technician-time-tracking" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Technician Time Clock</h3>
                        <p class="text-white/60 text-sm">Track time by job, bay, or task for precise billing and reports.</p>
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

                    <a href="/features/inventory-management" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Parts Inventory</h3>
                        <p class="text-white/60 text-sm">Monitor stock levels in real time and manage usage with ease.</p>
                    </a>

                    <a href="/features/estimates-invoices" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-all group">
                        <div class="w-10 h-10 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2 group-hover:text-primary-400 transition-colors">Estimates & Invoices</h3>
                        <p class="text-white/60 text-sm">Create accurate estimates and convert to invoices instantly.</p>
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
                </div>
            </div>
        </section>

        <!-- Built By Shop Owners -->
        <section class="py-20 bg-[#1a1d24] relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="w-full h-full bg-gradient-to-br from-zinc-800 to-black"></div>
            </div>
            <div class="container relative z-10">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built By Heavy Duty Shop Owners Who Know the Grind
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        We didn't just imagine a better work order system - we built the one we wish we had in our own shops. After 20+ years of running repair shops, we knew there had to be a faster, simpler way. ShopView is that way. It's everything you need, nothing you don't - built by people who've been there.
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
            :title="config('guides.work-orders.title')"
            :sections="config('guides.work-orders.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
