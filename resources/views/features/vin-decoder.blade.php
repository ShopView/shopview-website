@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        VIN Decoder Built for Heavy-Duty Repair Shops
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        Decode heavy trucks, trailers, and equipment instantly. ShopView's VIN Decoder integration pulls verified vehicle data directly into work orders, estimates, and service records - no manual entry, no missed details, no downtime.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </section>

        <!-- Instant VIN Decoding Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Instant VIN Decoding, Smarter Service Intake
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            When you're running a heavy-duty or diesel repair shop, speed and accuracy matter. ShopView's repair software with VIN decoder turns every VIN into full, verified vehicle data - ready to populate work orders, estimates, and invoices in seconds.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Full Vehicle Specs in One Click</h3>
                            <p class="text-white/60">
                                Scan or enter a VIN to instantly pull make, model, year, and engine specs into your service system.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Made for Diesel & Trailer Shops</h3>
                            <p class="text-white/60">
                                Decode everything from heavy trucks to trailers to heavy equipment built for the real demands of diesel, trailer, and fleet maintenance operations.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Eliminate Manual Errors</h3>
                            <p class="text-white/60">
                                No typos. No second-guessing. No missed information slowing your repairs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Speed Up Jobs Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Speed Up Jobs, Save Time at Every Step
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            Time is money in the heavy-duty world. ShopView's VIN decoder for truck repair streamlines intake, reduces repair delays, and keeps your technicians focused.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fast VIN Intake</h3>
                            <p class="text-white/60">
                                Scan VINs at the desk or in the bay - no extra steps, no delays.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Auto-Fill Orders & Estimates</h3>
                            <p class="text-white/60">
                                VIN data flows straight into work orders and estimates - no manual entry.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Track Service History</h3>
                            <p class="text-white/60">
                                Each VIN links to past jobs so you know what's done - and what's next.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built-In Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Built-In for Heavy-Duty Shops. No Apps Required.
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            ShopView's VIN Decoder integration works inside your existing workflow - no extra apps, plugins, or bouncing between systems.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Decode Anywhere You Work</h3>
                            <p class="text-white/60">
                                Whether you're using desktop, tablet, or mobile, VIN decoding stays with your team on the floor.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Real-Time Updates</h3>
                            <p class="text-white/60">
                                VIN data syncs instantly across work orders, customer profiles, and reports.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Simple Setup</h3>
                            <p class="text-white/60">
                                Activate the VIN Decoder inside ShopView and start using it in minutes - no IT team required.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Other Integrations Section -->
        <section class="py-20 bg-zinc-900/50">
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
                        <a href="/integrations/ibs" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Interstate Billing Service</h3>
                            <p class="text-white/60 text-sm">
                                Sync credit, billing, and payments automatically - no manual work, no missed funding.
                            </p>
                        </a>

                        <a href="/integrations/quickbooks" class="bg-white/5 border border-white/10 rounded-xl p-6 hover:border-primary-500/50 transition-colors group">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">QuickBooks Integration</h3>
                            <p class="text-white/60 text-sm">
                                Sync invoices, payments, and expenses automatically - no double entry, no missed data.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Built By Shop Owners Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Built By Heavy Duty Shop Owners Who Know the Grind
                    </h2>
                    <p class="text-white/80 mb-8 max-w-3xl mx-auto">
                        Running a truck shop is hard work. We know. We've been doing it collectively for 20+ years. And clunky heavy equipment repair shop software only adds to the struggle. That's why we built ShopView. Simply, ShopView is designed to make your shop more profitable. It's easy to use, fast, and is the only software built by shop owners. ShopView made our shops more productive and efficient - and it will do the same for yours.
                    </p>
                    <a href="/about" class="btn btn-primary text-lg px-8 py-4">
                        Learn More About Our Revolutionary Software
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose ShopView Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            ShopView gets you out of the day-to-day weeds of running your shop by simplifying all your time-consuming admin, management and billing. It dramatically increases the output of your team, without making a single new hire. When your shop runs more efficiently with ShopView, life's just better. There's more free time to spend doing what you want. Less stress. And fewer operational headaches. Better yet, ShopView is designed to pay for itself - many times over.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Available on all devices</h3>
                            <p class="text-white/60 text-sm">
                                Simple to set up and use on computers, smartphones and tablets.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamless integration</h3>
                            <p class="text-white/60 text-sm">
                                Connects with accounting and business systems you already use.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4" style="background-color: #247CFF;">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Comprehensive support</h3>
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
