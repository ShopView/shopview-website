@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        We Build Simple-to-Use Technology that Makes Light Work of Your Heavy Duty Shop Operations
                    </h1>
                    <p class="text-lg md:text-xl text-white/80">
                        Find out why ShopView is the No.1 heavy duty truck shop software in the market that truck shop owners love to use.
                    </p>
                </div>
            </div>
        </section>

        <!-- 3 Principles -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            ShopView is Built on 3 Powerfully Simple Principles
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-full flex items-center justify-center mb-6">
                                <span class="text-2xl font-bold text-primary-400">1</span>
                            </div>
                            <p class="text-white/80">
                                Making running heavy-duty truck shops easier, less stressful, and more profitable by helping shop owners focus on business growth.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-full flex items-center justify-center mb-6">
                                <span class="text-2xl font-bold text-primary-400">2</span>
                            </div>
                            <p class="text-white/80">
                                Creating more happiness in shop owners' lives by taking the heavy lifting out of running their shops and giving them more freedom in life.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="w-12 h-12 bg-primary-500/20 rounded-full flex items-center justify-center mb-6">
                                <span class="text-2xl font-bold text-primary-400">3</span>
                            </div>
                            <p class="text-white/80">
                                Positively impact the transportation industry by keeping trucks on the road longer, building better relationships, and elevating the truck repair experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Founder Story -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                            We Know How Tough It Can Be Running Your Truck Shop. Because We Ran Them, Too, For 22+ Years.
                        </h2>
                        <div class="space-y-4 text-white/80">
                            <p>
                                Running a heavy duty repair shop is hard work. We know what it's like to spend long days pulling wrenches, calling customers, chasing technicians, and everything else that goes into running a truck shop. Because, as owners and operators, we've lived it too.
                            </p>
                            <p>
                                We know how easy it is to get stuck working IN your business, not ON it. That's why we built ShopView.
                            </p>
                            <p>
                                ShopView combines over two decades of industry knowledge with a team of successful technologists that has scaled multiple SaaS companies. The result? The most efficient and easy-to-use truck shop software ever created.
                            </p>
                        </div>
                    </div>

                    <!-- Image Placeholder -->
                    <div class="aspect-video bg-white/5 border border-white/20 rounded-xl flex items-center justify-center">
                        <span class="text-white/40">Founders Photo Placeholder</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Results Metrics -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Real Results for Real Shops
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="text-4xl md:text-5xl font-bold text-primary-400 mb-2">1.5 Hrs</div>
                            <p class="text-white/60">The average daily time saved on data entry and navigation per user.</p>
                        </div>
                        <div class="text-center bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="text-4xl md:text-5xl font-bold text-primary-400 mb-2">$5,200</div>
                            <p class="text-white/60">The average extra billable tech time per month</p>
                        </div>
                        <div class="text-center bg-white/5 border border-white/10 rounded-xl p-8">
                            <div class="text-4xl md:text-5xl font-bold text-primary-400 mb-2">$111,300</div>
                            <p class="text-white/60">The average total annual revenue increase</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Only Software -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        The ONLY Software Built Specifically for Heavy Duty Truck Shops, By Heavy Truck Shop Owners
                    </h2>
                    <div class="space-y-4 text-lg text-white/80 mb-8">
                        <p>
                            Unless you've walked in the shoes of an owner, there's no real way to know what operators need. That explains why software made for truck shop owners is slow, clunky and hard to use -- it wasn't built by people who know our industry.
                        </p>
                        <p>
                            After going through four different management systems in our shops, we said enough is enough. We took things into our own hands. Using real industry knowledge, we've built a truck shop management system that meets the exact needs of shop operators.
                        </p>
                        <p>
                            With ShopView, it's not about flashy features you don't need. It's about giving you only the features you need to run your day to day business faster and with less stress. Nothing more. Nothing less.
                        </p>
                    </div>
                    <a href="/demo" class="btn btn-primary text-lg px-8 py-4">
                        Book a Demo
                    </a>
                </div>
            </div>
        </section>

        <!-- The ShopView Difference -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            The ShopView Difference
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-16">
                        <!-- Existing Solutions -->
                        <div class="bg-white/5 border border-white/10 rounded-xl p-8">
                            <h3 class="text-xl font-semibold mb-6 text-white/60">Existing Solutions</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Built by industry outsiders</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Inefficient navigation (up to 12 clicks)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Slow load times</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Confusing user interface</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Time-consuming setup & onboarding</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Lacking support</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Extensive, redundant data entry</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span class="text-white/70">Not designed for HD shops</span>
                                </li>
                            </ul>
                        </div>

                        <!-- ShopView -->
                        <div class="bg-primary-500/10 border border-primary-500/30 rounded-xl p-8">
                            <h3 class="text-xl font-semibold mb-6 text-primary-400">ShopView</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Built by shop owners & operators</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Dead simple 2-click navigation</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Industry-leading speed</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">A clear dashboard that shows you everything</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Personalized onboarding</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Free, same-day customer support</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Automated data management</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-primary-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-white/90">Built exclusively for HD shops</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Supporting Benefits -->
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60">
                                Simple to set up and use on computers, smartphones and tablets. Your data syncs across all devices in real-time.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60">
                                From onboarding to ongoing support, reach out anytime for help. We guarantee a response within 12 hours.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary-500/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                Connects with accounting and business systems you already use, including QuickBooks, IBS, and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                        Based in Alberta, Serving North America
                    </h2>
                    <p class="text-white/80 text-lg mb-8">
                        Our headquarters is in Alberta, Canada, but we serve heavy-duty shops across the United States and Canada.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:+15874389423" class="btn btn-secondary">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            +1-587-438-9423
                        </a>
                        <a href="mailto:hello@shopview.com" class="btn btn-secondary">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            hello@shopview.com
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />
@endsection
