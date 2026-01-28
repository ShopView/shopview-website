@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="integrations/ibs"
            title="Heavy-Duty Repair Shop Billing Made Simple"
            description="Connect ShopView to Interstate Billing Service (IBS) and streamline your heavy-duty repair shop billing. Bill fleet accounts, track approvals more efficiently, and move jobs through your diesel repair bays faster, with fewer manual steps and less paperwork slowing you down."
            primary-href="/trial"
            primary-label="Start Free Trial"
        />

        <!-- Fast Accurate Billing Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Fast, Accurate Billing for Heavy-Duty Repairs
                        </h2>
                        <p class="text-white/80 max-w-3xl mx-auto">
                            ShopView's IBS integration helps reduce billing bottlenecks for diesel repair shops, trailer service centers, and heavy equipment facilities.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-file-text class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Bill Heavy-Duty Work Orders More Efficiently</h3>
                            <p class="text-white/60">
                                Submit charges directly from completed repairs, without rekeying data or relying on spreadsheets. Faster billing. Fewer mistakes.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-check-circle class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Faster Credit Approvals for Fleet Customers</h3>
                            <p class="text-white/60">
                                Send charges to IBS and receive approval feedback directly inside ShopView, helping you get invoices out faster.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-shield-check class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Minimize Billing Errors</h3>
                            <p class="text-white/60">
                                Charges sync straight from your work orders into your billing queue, reducing the chance of missed or incorrect entries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built for Diesel Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Built for Diesel, Heavy Truck, and Equipment Repair Shops
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Heavy-duty repair shops need billing that keeps up with the pace of operations.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-mouse-pointer-click class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">One-Click Billing for Fleet Accounts</h3>
                            <p class="text-white/60">
                                Submit billing requests to IBS directly from your work orders with a single click.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-eye class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Track Approval Status with Ease</h3>
                            <p class="text-white/60">
                                See the status of every billing request right inside ShopView - no switching between systems.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-monitor class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Works on Any Device</h3>
                            <p class="text-white/60">
                                Access billing features from your desktop, tablet, or phone - wherever you're working.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fast Setup Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Fast Setup. No IT Help Needed.
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-plug class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Connect Your Accounts in Minutes</h3>
                            <p class="text-white/60">
                                Link your IBS account to ShopView with just a few clicks - no technical setup required.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-refresh-cw class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Status Sync Built In</h3>
                            <p class="text-white/60">
                                Billing statuses update automatically - no manual refreshing or checking required.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <x-lucide-cloud class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Access Anywhere</h3>
                            <p class="text-white/60">
                                Cloud-based access means you can manage billing from the shop, the road, or home.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Other Integrations Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Explore Integrations Built for Heavy-Duty Shops
                        </h2>
                        <p class="text-lg text-white/80">
                            Connect ShopView with the systems your shop already uses - for faster workflows and fewer mistakes.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                        <a href="/features/vin-decoder" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">VIN Decoder</h3>
                            <p class="text-white/60 text-sm">
                                Pull full vehicle specs into your estimates, work orders, and history - no manual typing.
                            </p>
                        </a>

                        <a href="/integrations/quickbooks" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">QuickBooks Integration</h3>
                            <p class="text-white/60 text-sm">
                                Sync invoices, payments, and expenses automatically.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center mb-12">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Why Choose ShopView
                    </h2>
                    <p class="text-white/80 max-w-3xl mx-auto">
                        ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing.
                    </p>
                </div>

                <div class="max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <x-lucide-monitor class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on All Devices</h3>
                            <p class="text-white/60 text-sm">
                                Simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <x-lucide-link class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless Integration</h3>
                            <p class="text-white/60 text-sm">
                                Connects with accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <x-lucide-headphones class="w-8 h-8 text-[#247CFF]" />
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive Support</h3>
                            <p class="text-white/60 text-sm">
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
