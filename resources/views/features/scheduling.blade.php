@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Simplified Scheduling That Keeps Your Heavy-Duty Shop on Track
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Easily assign jobs, balance workloads, and prevent scheduling conflicts. ShopView's repair scheduling software gives you complete visibility into every technician, bay, and work order - so your heavy-duty repair shop runs smoother, every hour of the day.
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
                            Total Visibility Into Your Shop's Day
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            No more whiteboards, guesswork, or overlapping appointments. With ShopView, you get a real-time, drag-and-drop calendar that shows what's happening in your shop, and what's coming next.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Real-Time Calendar</h3>
                            <p class="text-white/60">
                                Instantly view technician availability, work order status, and upcoming jobs, all in one place.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Job Assignment Made Easy</h3>
                            <p class="text-white/60">
                                Assign work to technicians based on workload, shift schedule and tech availability
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Live Updates Across Devices</h3>
                            <p class="text-white/60">
                                Any changes update instantly across your team's devices, so everyone's on the same page, always.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avoid Conflicts Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Avoid Conflicts & Downtime
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            An efficient schedule means higher productivity - and less wasted time.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Smart Job Overlap Protection</h3>
                            <p class="text-white/60">
                                Get visual alerts for any job overlaps or gaps in the schedule that need to be filled.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Track Status at a Glance</h3>
                            <p class="text-white/60">
                                See whether a job is scheduled, in progress, delayed, or complete in real time.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Custom View Options</h3>
                            <p class="text-white/60">
                                Switch between daily, weekly, and technician-specific views to manage your floor how you want.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Boost Technician Utilization Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Boost Technician Utilization Without Adding Headcount
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            ShopView's scheduling tools help you get more out of your existing team. Balanced workloads = fewer delays, more completed jobs, and higher revenue per tech.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Manage Load Distribution</h3>
                            <p class="text-white/60">
                                See which techs are overbooked or underutilized - and reassign work in seconds.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Build Technician Schedules</h3>
                            <p class="text-white/60">
                                Plan ahead with visibility into service windows, shift planning, and technician time off.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Reduce Idle Time</h3>
                            <p class="text-white/60">
                                Fill gaps in your schedule and keep bays full - without overloading your team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products Section -->
        <section class="py-20 bg-[#1a1d24]">
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
                        Built By Heavy Duty Shop Owners Who Know the Grind
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        We spent decades running repair shops, and scheduling was always a bottleneck. That's why ShopView's scheduling tools were built to be fast, visual, and easy - no spreadsheets or sticky notes required.
                    </p>
                    <a href="/about" class="btn btn-primary text-lg px-8 py-4">
                        Learn More About Our Revolutionary Software
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire. When your shop runs more efficiently with ShopView, life's just better. There's more free time to spend doing what you want. Less stress. And fewer operational headaches. Better yet, ShopView is designed to pay for itself - many times over.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60">
                                ShopView is simple to set up and use on computers, smartphones and tablets. Then all your shop information is stored in the cloud and automatically synced across all devices.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                ShopView connects with the accounting and business systems you already use to connect all parts of your shop's operations and reduce administrative effort.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60">
                                From onboarding to ongoing support, just reach out to our team any time you need support and we'll be back in touch within 12 hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.scheduling.title')"
            :sections="config('guides.scheduling.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
