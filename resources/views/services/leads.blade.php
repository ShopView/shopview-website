@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="services/leads"
            title="Lead Generation + Sales Coaching for Diesel Repair Shops"
            description="Real leads. Real playbooks. Real growth. You don't need fluff. You need more work from the right customers - fleets, municipalities, contractors. ShopView delivers local commercial leads plus a full sales training system to help you win them and grow smarter over time."
            primary-href="/trial"
            primary-label="Start Free Trial"
        />

        <!-- Growth System Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Build a Repeatable Growth System, Not Just a Lead List
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            We combine high-quality outreach data with a proven system to help diesel shops consistently close new business.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Target Local Fleets</h3>
                            <p class="text-white/60">
                                Get curated lists of commercial trucking, public fleet, and field service prospects.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Learn How to Sell</h3>
                            <p class="text-white/60">
                                Get coaching and training on how to pitch, quote, and close - no marketing background needed.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Grow What You've Got</h3>
                            <p class="text-white/60">
                                We help you retain, upsell, and expand existing accounts so you earn more per customer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What You Get Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            What You Get
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Local Prospect Lists</h3>
                            <p class="text-white/60">
                                Curated lists of commercial accounts in your service area.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Email, SMS & Call Scripts</h3>
                            <p class="text-white/60">
                                Ready-to-use outreach templates that work.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">12-Month Strategic Plan</h3>
                            <p class="text-white/60">
                                A roadmap for sustainable growth throughout the year.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Sales Coaching & Roleplay</h3>
                            <p class="text-white/60">
                                Practice pitches and get feedback from experts.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Account Retention Playbook</h3>
                            <p class="text-white/60">
                                Keep customers coming back and spending more.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">ShopView Integration</h3>
                            <p class="text-white/60">
                                Everything connects to your shop management system.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            How It Works
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                1
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Define Targets</h3>
                            <p class="text-white/60 text-sm">
                                Identify the types of accounts you want to win.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                2
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Source Leads</h3>
                            <p class="text-white/60 text-sm">
                                Get curated prospect lists for your area.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                3
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Launch with Coaching</h3>
                            <p class="text-white/60 text-sm">
                                Start outreach with expert guidance.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                4
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Track & Expand</h3>
                            <p class="text-white/60 text-sm">
                                Measure results and grow your customer base.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Supporting Tools Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Supporting Tools
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Estimate Requests</h3>
                            <p class="text-white/60 text-sm">
                                Capture leads directly from your website.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Customer Portal Access</h3>
                            <p class="text-white/60 text-sm">
                                Give prospects easy access to request services.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Payments</h3>
                            <p class="text-white/60 text-sm">
                                Make it easy for new customers to pay.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Work Order Syncing</h3>
                            <p class="text-white/60 text-sm">
                                Turn leads into active jobs automatically.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Campaign Reporting</h3>
                            <p class="text-white/60 text-sm">
                                Track what's working and optimize your approach.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Section -->
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
                            <h3 class="text-lg font-semibold mb-2">Tailored for Diesel & Fleet</h3>
                            <p class="text-white/60">
                                Not generic marketing - leads and coaching designed for heavy-duty repair.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Integrated with Your Workflow</h3>
                            <p class="text-white/60">
                                Leads flow directly into ShopView so nothing falls through the cracks.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Sales Coaching Included</h3>
                            <p class="text-white/60">
                                Learn how to close deals, not just generate leads.
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
