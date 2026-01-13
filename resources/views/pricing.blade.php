@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <p class="text-primary-400 font-semibold uppercase tracking-wider mb-4">ShopView Pricing</p>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                        Built for Shops of All Sizes
                    </h1>
                    <p class="text-2xl md:text-3xl text-white/60 mb-6">
                        From Solo Techs to Full Fleets
                    </p>
                    <p class="text-lg md:text-xl text-white/80 max-w-3xl mx-auto mb-10">
                        Whether you're a one-man operation or managing multiple bays and techs, we'll build a setup and a price that fits your workflow and your budget.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/demo" class="btn btn-secondary text-lg px-8 py-4">
                            Talk to Our Team
                        </a>
                        <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                            Start Free Trial
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Benefits Section -->
        <section class="py-20">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Maximize Shop Output Without Adding More Bays
                    </h2>
                    <p class="text-lg text-white/70">
                        ShopView helps you increase billed hours, reduce admin time, and keep jobs moving.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Increase Billable Hours</h3>
                        <p class="text-white/70">Shops average 18% more hours billed with the same headcount.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Reduce Admin Load</h3>
                        <p class="text-white/70">Save 1.5 hours daily on invoicing, data entry, and paperwork.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Optimize Shop Efficiency</h3>
                        <p class="text-white/70">Speed up job flow and reduce downtime between repairs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section 1 -->
        <section class="py-20">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Trusted by Heavy-Duty Truck Repair Shops Around The World
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-6 text-sm leading-relaxed">
                            "ShopView allows us to focus on getting the job done. As a technician, I love that I have the freedom to build jobs and switch between tasks without needing help from admin. It saves me time, makes my workflow smoother, and has really boosted our productivity in the shop."
                        </p>
                        <div>
                            <div class="font-semibold">Heather F.</div>
                            <div class="text-white/60 text-sm">Administrator</div>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-6 text-sm leading-relaxed">
                            "I find ShopView easy to navigate through work orders. From setting up work orders to adding parts, managing inventory with the ability to cycle count to keep inventory up to date, and managing tech times and payroll timesheets makes tracking times for payroll a breeze."
                        </p>
                        <div>
                            <div class="font-semibold">Kerri W.</div>
                            <div class="text-white/60 text-sm">Parts Specialist</div>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-6 text-sm leading-relaxed">
                            "The software is easy to set up! It's also intuitive making it easy to train technicians. Customer support is by far the best I have ever dealt with. Fast replies and go above and beyond to help you solve your problem. Being browser based, it was easy to deploy on tablets..."
                        </p>
                        <div>
                            <div class="font-semibold">Brian W.</div>
                            <div class="text-white/60 text-sm">Fleet Coordinator</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What's Included Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto mb-16">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        What's Included in Every Plan
                    </h2>
                    <p class="text-lg text-white/70">
                        With ShopView, everything you need to run your heavy-duty repair shop is included. No tiers. No hidden fees. Just the tools and insights to help your team work smarter, reduce admin, and grow profitably.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 max-w-7xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Work Orders & Invoicing</h3>
                        <p class="text-white/60 text-sm">Easily create estimates, convert them into work orders, and send invoices in just a few clicks. Speed up billing and get paid faster.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Inventory Management</h3>
                        <p class="text-white/60 text-sm">Track parts in real time, automate purchase orders, and manage stock across multiple locations without the headaches.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Smart Time Tracking</h3>
                        <p class="text-white/60 text-sm">Our built-in timeclock keeps technicians accountable, reduces downtime, and ensures accurate labor billing.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Advanced Reporting</h3>
                        <p class="text-white/60 text-sm">From technician productivity to shop profitability, get the insights you need to make confident, data-driven decisions.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">QuickBooks Integration</h3>
                        <p class="text-white/60 text-sm">Seamlessly sync your shop data with QuickBooks Online for effortless accounting and financial management.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Customer Portal</h3>
                        <p class="text-white/60 text-sm">Give your customers self-service access to view estimates, approve work, and track job status online.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">ShopCoach (AI Insights)</h3>
                        <p class="text-white/60 text-sm">Our AI advisor delivers insights to streamline operations, capture more billable work, and drive smarter business decisions.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Cloud-Based Access</h3>
                        <p class="text-white/60 text-sm">Manage your shop anywhere, anytime; on desktop, tablet, or mobile. Perfect for teams on the move.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Dedicated Support</h3>
                        <p class="text-white/60 text-sm">Get real answers from real people. Our support team responds fast and helps your shop every step of the way.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-2">Free Onboarding & Training</h3>
                        <p class="text-white/60 text-sm">Hit the ground running with hands-on onboarding and role-based training for your team, at no extra cost.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pain Points Section -->
        <section class="py-20">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Reduce Downtime and Overhead from Day One
                    </h2>
                    <p class="text-lg text-white/70">
                        Eliminate the common issues slowing your team down; manual systems, inventory confusion, and lost wrench time.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Missed Jobs</h3>
                        <p class="text-white/70">Paper and outdated systems leave gaps. ShopView closes them.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Parts Chaos</h3>
                        <p class="text-white/70">Wrong parts, rush orders, and overstocked shelves all cost time and cash.</p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8 text-center">
                        <div class="w-16 h-16 bg-red-500/20 rounded-xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Wasted Tech Time</h3>
                        <p class="text-white/70">Techs shouldn't be walking the shop to ask what's next. Now they don't have to.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- More Reviews Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Proven Results from Real Shops
                    </h2>
                    <p class="text-lg text-white/70">
                        From better workflows to higher profits, see why shop owners are making the switch to ShopView.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-4 text-sm leading-relaxed">
                            "The greatest appreciation that I have for ShopView stems from it's modern aesthetic and curb appeal. Unlike other software that I have utilized in the past, there is not a hodgepodge of unnecessary information or gimmicky hyperlinks to lead you astray."
                        </p>
                        <div>
                            <div class="font-semibold text-sm">Hudson P.</div>
                            <div class="text-white/60 text-xs">Technician</div>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-4 text-sm leading-relaxed">
                            "Setting up was simple, the interface is so intuitive, and it was easy to get our technicians on board. The customer support team is always quick to respond and super helpful. Plus, the fact that I can access from any tablet or operating system makes our work so much more flexible."
                        </p>
                        <div>
                            <div class="font-semibold text-sm">Brian W.</div>
                            <div class="text-white/60 text-xs">Fleet Coordinator</div>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-4 text-sm leading-relaxed">
                            "ShopView is a game-changing program. Everything is so fast and user-friendly. I can get to almost anything within two clicks. Their support team is amazing; they respond quickly and genuinely care about helping. I also love that they listen to feedback and keep improving the software."
                        </p>
                        <div>
                            <div class="font-semibold text-sm">Taylor S.</div>
                            <div class="text-white/60 text-xs">General Manager</div>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <div class="flex gap-1 mb-4">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-white/80 mb-4 text-sm leading-relaxed">
                            "ShopView allows us to focus on getting the job done. As a technician, I love that I have the freedom to build jobs and switch between tasks without needing help from admin. It saves me time, makes my workflow smoother, and has really boosted our productivity in the shop."
                        </p>
                        <div>
                            <div class="font-semibold text-sm">Heather F.</div>
                            <div class="text-white/60 text-xs">Administrator</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Free Trial Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-r from-primary-500/20 to-primary-600/10 border border-primary-500/30 rounded-3xl p-10 md:p-16 text-center">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Free ShopView Test Drive
                        </h2>
                        <p class="text-lg text-white/80 mb-4">
                            Experience the full power of ShopView with zero risk. You and your team can use every feature - no payment upfront, no contracts, and no limitations.
                        </p>
                        <p class="text-white/70 mb-8">
                            Test real workflows, track real numbers, and see real results. And if you need help getting started, our team is ready to support you every step of the way.
                        </p>
                        <a href="/trial" class="btn btn-primary text-lg px-10 py-4">
                            Start Free Trial
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            Why Choose ShopView?
                        </h2>
                        <p class="text-lg text-white/70 leading-relaxed">
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire. When your shop runs more efficiently with ShopView, life's just better. There's more free time to spend doing what you want. Less stress. And fewer operational headaches. Better yet, ShopView is designed to pay for itself - many times over.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Available on All Devices</h3>
                            <p class="text-white/70 text-sm">ShopView is simple to set up and use on computers, smartphones and tablets. Then all your shop information is stored in the cloud and automatically synced across all devices.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Seamless Integration</h3>
                            <p class="text-white/70 text-sm">ShopView connects with the accounting and business systems you already use to connect all parts of your shop's operations and reduce administrative effort.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-primary-400 uppercase tracking-wider mb-3">Comprehensive Support</h3>
                            <p class="text-white/70 text-sm">From onboarding to ongoing support, just reach out to our team any time you need support and we'll be back in touch within 12 hours.</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="/trial" class="btn btn-primary text-lg px-10 py-4">
                            Start Free Trial
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
