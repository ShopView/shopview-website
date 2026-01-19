@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Technician Time Clock That Boosts Billable Hours
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Never miss another minute of tech time. Increase your tech billable hours by up to 2 hours per day, per tech!
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Simple for Techs Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Simple for Techs. Powerful for Owners.
                            </h2>
                            <p class="text-white/80 mb-8">
                                ShopView's time clock is built right into your fleet maintenance software - no extra apps, no confusing steps.
                            </p>
                        </div>

                        <!-- Screenshot -->
                        <div class="rounded-xl overflow-hidden">
                            <img src="{{ asset('images/screenshots/Staff & Technician Efficiency.png') }}" alt="ShopView Time Clock Interface" class="w-full h-auto rounded-xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clock In, Clock Out Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Clock In, Clock Out - Automatically
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            ShopView eliminates time tracking errors and streamlines technician workflows by embedding the time clock directly into the tools your techs already use.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Job-Based Time Tracking</h3>
                            <p class="text-white/60">
                                Time is logged per job - so every minute is accounted for.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Start/Stop Simplicity</h3>
                            <p class="text-white/60">
                                Techs tap once to clock in and again to clock into the next job. That's it.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">No More Missed Time</h3>
                            <p class="text-white/60">
                                Time data syncs directly into work orders and invoices, so nothing slips through the cracks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Maximize Billable Hours Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Maximize Billable Hours, Minimize Admin
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Manual time sheets? Gone. ShopView's digital technician time clock ensures you're capturing every billable second.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Instant Payroll Reports</h3>
                            <p class="text-white/60">
                                View total hours, jobs completed, and idle time by technician or team.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">More Billable Time</h3>
                            <p class="text-white/60">
                                Shops using ShopView's time clock average 20% more billable technician time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Real-Time Visibility Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Real-Time Visibility for Managers
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            No more guessing who's working on what. With ShopView, you get a live look at your entire team's activity.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Live Activity View</h3>
                            <p class="text-white/60">
                                See which techs are clocked in, what they're working on, and what they are doing next.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Track Efficiency</h3>
                            <p class="text-white/60">
                                Compare billed hours to actual job time to spot inefficiencies, boost output, and coach your team.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Audit-Ready Logs</h3>
                            <p class="text-white/60">
                                Every punch is recorded and stored for transparency and reporting.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products Section -->
        <section class="py-20">
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
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built by Shop Owners Who Know the Cost of Missed Time
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        We've been in your boots. As heavy-duty shop owners, we know how much billable time slips through the cracks when you're using paper timesheets or generic software. That's why we built ShopView's time clock to be fast, accurate, and built for the way real shops work.
                    </p>
                    <a href="/about" class="btn btn-primary text-lg px-8 py-4">
                        Learn More About Our Revolutionary Software
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
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60">
                                ShopView is simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                ShopView connects with the accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60">
                                From onboarding to ongoing support, just reach out to our team any time you need support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.technician-time-tracking.title')"
            :sections="config('guides.technician-time-tracking.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
