@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Parts Inventory Made Simple, Accurate, and Profitable
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        ShopView's repair shop inventory management software keeps your inventory lean, accurate, and ready for every job that rolls in - whether you're running a diesel, fleet, or heavy-duty repair shop.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Stay Accurate Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Stay Accurate with Cycle Counts
                            </h2>
                            <p class="text-white/80 mb-8">
                                Keep inventory accurate year-round without shutting down operations. ShopView lets you schedule targeted cycle counts, catch discrepancies early, and maintain real-time accuracy. Perfect for shops balancing multiple bays or locations.
                            </p>
                        </div>

                        <!-- Image Placeholder -->
                        <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                            <span class="text-white/40">Cycle Counts Screenshot</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inventory Control Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Inventory Control Without the Headaches
                        </h2>
                        <p class="text-white/80 max-w-3xl mx-auto">
                            Stop guessing what's on the shelf or over-ordering out of fear. ShopView's diesel inventory management system gives you total visibility - and saves hours every week.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Real-Time Inventory Levels</h3>
                            <p class="text-white/60">
                                Always know what you have, what you need, and what's on the way.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Organized Parts Catalog</h3>
                            <p class="text-white/60">
                                Sort and categorize by item, vendor, or job - and view full purchase history.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Automatic Purchase Order Generation</h3>
                            <p class="text-white/60">
                                ShopView auto-generates POs, so you focus on repairs, not paperwork.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Multi-Location Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Multi-Location, One View
                        </h2>
                        <p class="text-white/80 max-w-3xl mx-auto">
                            Whether managing one bay or five shops, ShopView keeps your parts system centralized, connected, and synced.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Cross-Location Visibility</h3>
                            <p class="text-white/60">
                                Track parts usage and availability across all shop locations in one dashboard.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Transfer & Reallocate Parts</h3>
                            <p class="text-white/60">
                                Move stock between shops in seconds - avoid delays, stockouts, or overordering.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Consolidated Reporting</h3>
                            <p class="text-white/60">
                                View inventory levels, usage trends, and cost reports in one place.
                            </p>
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

                        <a href="/features/reporting-analytics" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Reporting & Analytics</h3>
                            <p class="text-white/60 text-sm">
                                View trends, tech stats, and job margins to grow your business.
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
                        Built By Shop Owners Who've Been Through It
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        We've run the same parts rooms you're running. And we built ShopView to eliminate the mess. No more spreadsheets, no more surprises. Just clear, easy, real-time inventory management that makes sense for your shop.
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
            :title="config('guides.inventory-management.title')"
            :sections="config('guides.inventory-management.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
