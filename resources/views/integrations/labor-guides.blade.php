@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="integrations/labor-guides"
            title="Heavy-Duty Truck Labor Time Guide, Smarter, Faster with AI"
            description="Say goodbye to static labor guides and manual lookups. ShopCoach AI delivers VIN-specific labor times and real-time estimates in seconds - all built directly into ShopView."
            primary-href="/trial"
            primary-label="Start Free Trial"
        />

        <!-- Problem Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            The Problem with Traditional Labor Time Estimating
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Manual Lookups Delay Job Approvals</h3>
                            <p class="text-white/60">
                                Manual lookups delay job approvals and slow down your entire workflow.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Outdated Averages</h3>
                            <p class="text-white/60">
                                Estimates are based on outdated averages that don't reflect actual job complexity.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-12 h-12 bg-red-500/20 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-red-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Missed Lines = Missed Revenue</h3>
                            <p class="text-white/60">
                                Missed lines = missed revenue. Every forgotten item costs your shop money.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solution Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            You Don't Need a Labor Time Guide, You Need This
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                1
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Type a Prompt</h3>
                            <p class="text-white/60">
                                "2018 Peterbilt needs turbo replacement"
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                2
                            </div>
                            <h3 class="text-lg font-semibold mb-2">ShopCoach AI Instantly Builds</h3>
                            <p class="text-white/60">
                                VIN-based labor time, parts suggestions from inventory, pre-written tech story, real-time pricing and markup.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                3
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Review and Approve</h3>
                            <p class="text-white/60">
                                Convert to a complete work order in seconds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparison Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why ShopCoach AI Outperforms Traditional Labor Guides
                        </h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="border-b border-white/20">
                                    <th class="text-left py-4 px-6 font-semibold">Feature</th>
                                    <th class="text-left py-4 px-6 font-semibold text-primary-400">ShopCoach AI</th>
                                    <th class="text-left py-4 px-6 font-semibold text-white/60">Traditional Guides</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-white/10">
                                    <td class="py-4 px-6">Estimate Speed</td>
                                    <td class="py-4 px-6 text-primary-400">Instant, AI-generated</td>
                                    <td class="py-4 px-6 text-white/60">Manual and slow</td>
                                </tr>
                                <tr class="border-b border-white/10">
                                    <td class="py-4 px-6">Accuracy</td>
                                    <td class="py-4 px-6 text-primary-400">VIN-specific labor times, real-time</td>
                                    <td class="py-4 px-6 text-white/60">Based on old averages</td>
                                </tr>
                                <tr class="border-b border-white/10">
                                    <td class="py-4 px-6">Workflow Integration</td>
                                    <td class="py-4 px-6 text-primary-400">Built into ShopView</td>
                                    <td class="py-4 px-6 text-white/60">Not connected</td>
                                </tr>
                                <tr class="border-b border-white/10">
                                    <td class="py-4 px-6">Revenue Recovery</td>
                                    <td class="py-4 px-6 text-primary-400">Flags missed/declined lines</td>
                                    <td class="py-4 px-6 text-white/60">None</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Benefits Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Key Benefits of ShopCoach AI for Labor Time Estimation
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Work Orders in Seconds</h3>
                            <p class="text-white/60">
                                Type one sentence. Get a complete estimate, instantly.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">More Revenue Per Job</h3>
                            <p class="text-white/60">
                                Never miss a line or a billed hour again.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Accurate by Design</h3>
                            <p class="text-white/60">
                                VIN data + real-time shop history = smart estimates every time.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Less Admin, More Repairs</h3>
                            <p class="text-white/60">
                                No more flat-rate flipping or retyping work orders.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Seamless Integration with ShopView
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-sm font-semibold">VIN Decoding + Service History</h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-sm font-semibold">Inventory & Parts Catalog Access</h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-sm font-semibold">QuickBooks Integration</h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-sm font-semibold">Cloud-Based + Mobile-Friendly</h3>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-10 h-10 flex items-center justify-center mx-auto mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-sm font-semibold">Use It on Day One, No Training Required</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Study Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white/5 border border-white/10 rounded-xl p-8 md:p-12">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl md:text-3xl font-bold mb-2">
                                Foothills Group: From Garage Startup to $20M+ Revenue
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-8 text-center">
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-primary-400 mb-2">$60,000+</div>
                                <p class="text-white/60">Extra Revenue per Month</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-primary-400 mb-2">1.5 Hours</div>
                                <p class="text-white/60">Saved per Tech per Day</p>
                            </div>
                            <div>
                                <div class="text-3xl md:text-4xl font-bold text-primary-400 mb-2">75%</div>
                                <p class="text-white/60">Faster Work Order Creation</p>
                            </div>
                        </div>

                        <div class="text-center mt-8">
                            <a href="/case-studies/case-study-foothills-group" class="text-primary-400 hover:text-primary-300 font-medium">
                                Read the full case study &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <blockquote class="text-xl md:text-2xl text-white/80 italic mb-6">
                        "ShopView allows us to focus on getting the job done. As a technician, I have the freedom to build jobs and switch between tasks without needing help from admin."
                    </blockquote>
                    <p class="text-white/60">— Heather F.</p>
                    <div class="flex items-center justify-center gap-1 mt-4">
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-yellow-400">&#9733;</span>
                        <span class="text-white/60 ml-2">5/5 from 50+ reviews</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Features Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Explore More ShopView Features
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/integrations/shopcoach" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">ShopCoach AI</h3>
                            <p class="text-white/60 text-sm">
                                AI-powered shop management and work order automation.
                            </p>
                        </a>

                        <a href="/features/work-orders" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                            <p class="text-white/60 text-sm">
                                Build and manage jobs fast - fully detailed and ready in under 2 minutes.
                            </p>
                        </a>

                        <a href="/features/vin-decoder" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">VIN Decoder</h3>
                            <p class="text-white/60 text-sm">
                                Instant vehicle identification and spec lookup.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Ready to Replace Your Labor Time Guide?
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        Start your free trial today and see how ShopCoach AI transforms your estimating process.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <x-guide-section
            :title="config('guides.labor-guides.title')"
            :sections="config('guides.labor-guides.sections')"
        />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
