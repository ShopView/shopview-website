@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section with Form -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Left: Headline and contact info -->
                    <div>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                            Let's Connect
                        </h1>
                        <p class="text-lg md:text-xl text-white/80 mb-8">
                            Have questions about how ShopView can transform your heavy duty repair shop? Our team is ready to help with inquiries, personalized demonstrations, or implementation guidance.
                        </p>

                        <!-- Contact Info -->
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: #247CFF;">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white/60 text-sm">Phone</p>
                                    <a href="tel:+15874389423" class="text-white font-semibold hover:text-primary-400 transition-colors">+1-587-438-9423</a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: #247CFF;">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white/60 text-sm">Email</p>
                                    <a href="mailto:sales@shopview.com" class="text-white font-semibold hover:text-primary-400 transition-colors">sales@shopview.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: HubSpot Form -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <h2 class="text-xl font-semibold mb-6 text-center">Book Your Free Demo</h2>
                        <div id="hubspot-demo-form"></div>
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
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Ease of Use</h3>
                            <p class="text-white/60">
                                Intuitive interface ensures quick onboarding, enabling your team to deliver exceptional service with minimal downtime.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                Connects with financial platforms and industry tools to reduce administrative burden and streamline operations.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60">
                                Our team provides assistance from initial setup through ongoing optimization, ensuring your success every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />

    <!-- HubSpot Form Script -->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "44523251",
            formId: "bde4aaaf-bf86-4928-9340-9a237c8fd226",
            target: "#hubspot-demo-form"
        });
    </script>
@endsection
