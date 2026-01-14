@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section with Form -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Left: Headline and subtext -->
                    <div>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                            Ready to make your shop more profitable?
                        </h1>
                        <p class="text-lg md:text-xl text-white/80 mb-8">
                            Start your free trial today and see how ShopView can help you recover lost revenue, streamline operations, and grow your business.
                        </p>

                        <!-- Trust badges -->
                        <div class="flex flex-wrap gap-4 text-sm text-white/60 mb-8">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>No credit card required</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Free data migration</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Cancel anytime</span>
                            </div>
                        </div>

                        <!-- Customer Logos (Social Proof) -->
                        <div class="flex flex-wrap gap-4 items-center">
                            <img src="/images/logos/Customer Logo - Foothills-Group-Logo.png" alt="Foothills Group" class="h-10 w-auto object-contain opacity-70">
                            <img src="/images/logos/Customer Logo - Grizzly.webp" alt="Grizzly" class="h-10 w-auto object-contain opacity-70">
                            <img src="/images/logos/Customer Logo - HCRS.png" alt="HCRS" class="h-10 w-auto object-contain opacity-70">
                            <img src="/images/logos/Customer Logo - Iron-Resources.png" alt="Iron Resources" class="h-10 w-auto object-contain opacity-70">
                            <img src="/images/logos/Customer Logo - Short Track.webp" alt="Short Track" class="h-10 w-auto object-contain opacity-70">
                        </div>
                    </div>

                    <!-- Right: HubSpot Form -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <h2 class="text-xl font-semibold mb-6 text-center">Start Your Free Trial</h2>
                        <div id="hubspot-trial-form"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Value Props Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Shops Choose ShopView
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Lightning Fast</h3>
                            <p class="text-white/60">
                                Create work orders in under 2 minutes. Fewer clicks, faster turnaround, more jobs completed.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fast Invoicing</h3>
                            <p class="text-white/60">
                                Generate professional invoices instantly. Get paid faster with built-in payment processing.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">User-Friendly Design</h3>
                            <p class="text-white/60">
                                Intuitive interface that techs love. Minimal training required to get your team up and running.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROI Calculator -->
        <x-home.roi-calculator />

        <x-cta-section />
    </main>

    <x-footer />

    <!-- HubSpot Form Script -->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "44523251",
            formId: "290eb3c9-7931-4b14-a1e9-79142bb01e39",
            target: "#hubspot-trial-form"
        });
    </script>
@endsection
