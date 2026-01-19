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
                            Ready to boost your shop's productivity?
                        </h1>
                        <p class="text-lg md:text-xl text-white/80 mb-8">
                            Book a personalized demo with our team. We'll show you exactly how ShopView can transform your heavy-duty repair shop operations.
                        </p>

                        <!-- What to expect -->
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-white/80">30-minute personalized walkthrough</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-white/80">See features tailored to your shop's needs</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-white/80">Get answers to all your questions</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-white/80">No pressure, no obligation</span>
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
                        <p class="text-lg text-white/70 max-w-3xl mx-auto">
                            Built by shop owners, for shop owners. We understand the unique challenges of heavy-duty repair.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Easy to Use</h3>
                            <p class="text-white/60">
                                Intuitive interface designed for busy shops. Your team will be up and running in no time with minimal training required.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60">
                                Connects with QuickBooks, parts suppliers, and the tools you already use. No more double entry or manual syncing.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Dedicated Support</h3>
                            <p class="text-white/60">
                                Real people who understand heavy-duty repair. Get help when you need it from a team that speaks your language.
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
