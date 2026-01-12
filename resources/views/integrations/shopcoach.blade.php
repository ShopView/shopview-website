@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Heavy-Duty Shop AI That Makes Managing Effortless
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Make better and faster decisions about every aspect of your heavy-duty repair shop with AI. It's like having a team of service managers, without the cost or headcount.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Get Answers Fast Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Get The Answers You Need About Your Shop - FAST
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Analyze thousands of data points in seconds to get answers to your most important shop questions instantly. It's never been easier to understand how your team works on a deep level.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Complete Work Orders in 60 Seconds</h3>
                            <p class="text-white/60">
                                Build entire work orders from simple prompts like "2018 Peterbilt needs turbo replacement" and watch AI generate complete lines with parts, labor times, and estimates.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Never Miss Revenue Again</h3>
                            <p class="text-white/60">
                                Surface unclosed estimates, declined lines, and unbilled parts automatically. ShopCoach AI flags every opportunity before it walks out the door.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Ask Questions, Get Instant Answers</h3>
                            <p class="text-white/60">
                                Ask about technician history, declined work, service records, and profit margins - get answers in plain English instantly.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-lg flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Smart Performance Insights</h3>
                            <p class="text-white/60">
                                Track technician efficiency, parts pricing optimization, and labor margins across every job - all in plain English, no spreadsheets required.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How ShopCoach Works Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Leverage AI for Superior Shop Management
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                1
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fast, Clear Work Orders</h3>
                            <p class="text-white/60">
                                Type what the truck needs and ShopCoach builds complete work orders with parts, labor, and pricing.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                2
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Manage More Effectively</h3>
                            <p class="text-white/60">
                                Get insights into technician performance, job profitability, and missed revenue opportunities.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                3
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Save Time & Effort</h3>
                            <p class="text-white/60">
                                Eliminate manual data entry, searching through records, and building estimates from scratch.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- AI-Guided Management Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Make Faster, Better Decisions With AI
                            </h2>
                            <p class="text-white/80 mb-8">
                                ShopCoach AI turns your shop data into crystal clear insights that help you make faster, more accurate decisions, with less decision fatigue. Welcome to AI-guided shop management.
                            </p>
                            <div class="flex flex-wrap gap-3">
                                <span class="px-4 py-2 bg-white/10 rounded-full text-sm">Tech Stories</span>
                                <span class="px-4 py-2 bg-white/10 rounded-full text-sm">Labor Guide</span>
                                <span class="px-4 py-2 bg-white/10 rounded-full text-sm">Line Builder</span>
                                <span class="px-4 py-2 bg-white/10 rounded-full text-sm">Parts Look-up</span>
                                <span class="px-4 py-2 bg-white/10 rounded-full text-sm">Vehicle History Search</span>
                            </div>
                        </div>

                        <!-- Image Placeholder -->
                        <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                            <span class="text-white/40">ShopCoach AI Screenshot</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Features Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Explore More ShopView Features
                        </h2>
                        <p class="text-lg text-white/80">
                            ShopCoach AI works seamlessly with the rest of ShopView.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/integrations/labor-guides" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Labor Time Guide</h3>
                            <p class="text-white/60 text-sm">
                                VIN-specific labor times powered by AI.
                            </p>
                        </a>

                        <a href="/features/work-orders" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                            <p class="text-white/60 text-sm">
                                Build and manage jobs fast - fully detailed and ready in under 2 minutes.
                            </p>
                        </a>

                        <a href="/features/estimates-invoices" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Estimates & Invoices</h3>
                            <p class="text-white/60 text-sm">
                                Create accurate estimates and convert to invoices instantly.
                            </p>
                        </a>
                    </div>
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
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60">
                                Simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                Connects with accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60">
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
