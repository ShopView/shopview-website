@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Reporting & Analytics That Drive More Profit
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        ShopView's repair shop reporting software turns your day-to-day operations into actionable insights - so you can make smarter decisions, faster.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Total Visibility Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Total Visibility Into Shop Performance
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            You can't improve what you can't see. ShopView gives you instant access to the numbers that actually matter - technician output, labor efficiency, inventory turnover, revenue trends, and more.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Live Revenue Reporting</h3>
                            <p class="text-white/60">
                                See how your shop is performing by day, week, or month - and spot patterns at a glance.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Technician Efficiency</h3>
                            <p class="text-white/60">
                                Track actual hours vs. billed hours to uncover missed profit and underutilized time.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Service Advisor Performance</h3>
                            <p class="text-white/60">
                                Easily identify your top-performing advisor to drive higher profits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Know Exactly Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Know Exactly Where Time and Money Are Going
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Whether you're managing one shop or several, ShopView's technician and maintenance software helps you stay in control of every corner of your business.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Labor Margin Insights</h3>
                            <p class="text-white/60">
                                Measure labor profitability down to the task - by job, by service advisor, or by technician.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Parts Margin Insights</h3>
                            <p class="text-white/60">
                                Measure margins by job and ensure you're hitting your targets - so your parts department stays profitable.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Technician Performance</h3>
                            <p class="text-white/60">
                                Track tech times accurately. Identify unbilled hours and optimize your heavy duty work order billing process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Smarter Decisions Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Smarter Decisions. Less Guesswork.
                            </h2>
                            <p class="text-white/80 mb-8">
                                You don't need to be a numbers person. ShopView's repair shop analytics tools do the heavy lifting - so you spend less time digging through spreadsheets and more time growing your business.
                            </p>
                        </div>

                        <!-- Image Placeholder -->
                        <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                            <span class="text-white/40">Analytics Dashboard Screenshot</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Explore More Tools from ShopView
                        </h2>
                        <p class="text-lg text-white/80">
                            Continue your product tour, dive deeper into each feature
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/features/work-orders" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                            <p class="text-white/60 text-sm">
                                Build and manage jobs fast - fully detailed and ready in under 2 minutes.
                            </p>
                        </a>

                        <a href="/features/technician-time-tracking" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Technician Time Clock</h3>
                            <p class="text-white/60 text-sm">
                                Track time by job, bay, or task for precise billing and reports.
                            </p>
                        </a>

                        <a href="/features/inventory-management" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Parts Inventory</h3>
                            <p class="text-white/60 text-sm">
                                Monitor stock levels in real time and manage usage with ease.
                            </p>
                        </a>

                        <a href="/features/estimates-invoices" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Estimates & Invoices</h3>
                            <p class="text-white/60 text-sm">
                                Create accurate estimates and convert to invoices instantly.
                            </p>
                        </a>

                        <a href="/features/scheduling" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Scheduling</h3>
                            <p class="text-white/60 text-sm">
                                Drag and drop to assign jobs, balance workloads, and stay on track.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built By Shop Owners Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built by Shop Owners for Insane Cash Flow
                    </h2>
                    <p class="text-white/80 mb-8 max-w-3xl mx-auto">
                        We built ShopView because sloppy data was killing our profits. We demanded clear metrics to make big money. Now, it's your turn to cash in with your shop. Our wallets are stuffed - let us show you how to make serious bucks!
                    </p>
                    <a href="/about" class="btn btn-primary text-lg px-8 py-4">
                        Learn More About Our Revolutionary Software
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on all devices</h3>
                            <p class="text-white/60 text-sm">
                                Simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless integration</h3>
                            <p class="text-white/60 text-sm">
                                Connects with accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive support</h3>
                            <p class="text-white/60 text-sm">
                                From onboarding to ongoing support, reach out anytime for help within 12 hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.reporting-analytics.title')"
            :sections="config('guides.reporting-analytics.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
