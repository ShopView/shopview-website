@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-product-hero
            seed="services/websites"
            title="Professional Websites Built to Book More Jobs"
            description="Custom websites built specifically for heavy-duty repair shops, fully integrated with your ShopView system. No generic templates or pretty sites that just sit there. We build websites that capture leads, convert visitors into customers, and turn service requests into profitable jobs."
            primary-href="/trial"
            primary-label="Start Free Trial"
        />

        <!-- Core Features Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Websites Built Like Your Shop - No Nonsense, All Performance
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Rank in Search</h3>
                            <p class="text-white/60">
                                Optimized to show up first when customers in your area search for heavy-duty repair.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Capture Real Leads</h3>
                            <p class="text-white/60">
                                Contact forms and service requests that actually convert visitors into paying customers.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Work on Any Device</h3>
                            <p class="text-white/60">
                                Fast loading and fully functional on any device, from the office to the roadside.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Easy to Find</h3>
                            <p class="text-white/60">
                                Search-optimized and designed for local visibility, so your shop ranks high when customers need help.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Built for Action</h3>
                            <p class="text-white/60">
                                Contact forms, schedule requests, and customer portals are built in, not bolted on.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Mobile First</h3>
                            <p class="text-white/60">
                                Loads fast, looks great, and works perfectly on any device, even when your customer is stuck roadside.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integration Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            The Only Website Platform Built for Shop Integration
                        </h2>
                        <p class="text-lg text-white/80 max-w-3xl mx-auto">
                            No extra tools. No manual entry. ShopView Websites plug straight into your shop operations.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Customer Portal Access</h3>
                            <p class="text-white/60">
                                Give customers direct access to their service history and invoices.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Mobile & Tablet Ready</h3>
                            <p class="text-white/60">
                                Optimized layouts make it easy to book, browse, and pay on the go.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Local SEO Structure</h3>
                            <p class="text-white/60">
                                Keywords, map embeds, and metadata ensure you rank where it matters.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <div class="w-10 h-10 flex items-center justify-center mb-4">
                                <div class="w-6 h-6 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Secure Hosting</h3>
                            <p class="text-white/60">
                                Fast load speeds and enterprise-level security, no headaches, no downtime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Migration Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                                Upgrade Your Outdated Site in One Smooth Move
                            </h2>
                            <p class="text-white/80 mb-8">
                                If your current website is slow, clunky, or just not performing, we'll handle the upgrade for you. We migrate your existing content, enhance the design, speed, and SEO, and fully integrate it with your ShopView system. No headaches, no downtime.
                            </p>
                        </div>

                        <!-- Screenshot -->
                        <div class="rounded-xl overflow-hidden">
                            <img src="{{ asset('images/screenshots/Work Order Home.png') }}" alt="ShopView Website Integration" class="w-full h-auto rounded-xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            What Happens Next
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                1
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Fill Out the Intake Form</h3>
                            <p class="text-white/60">
                                Tell us about your shop, services, logo, and what you want customers to see.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                2
                            </div>
                            <h3 class="text-lg font-semibold mb-2">We Build Your Site</h3>
                            <p class="text-white/60">
                                Our team designs and launches your custom ShopView website fast.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6 text-center">
                            <div class="w-12 h-12 bg-primary-500 text-black font-bold rounded-full flex items-center justify-center mx-auto mb-4">
                                3
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Go Live</h3>
                            <p class="text-white/60">
                                Your site is connected to ShopView. Schedule requests, payments, portals done.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Extra Tools Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Extra Tools That Make Your Website Even More Valuable
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Lead Generation Support</h3>
                            <p class="text-white/60 text-sm">
                                Reach more commercial and fleet accounts.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Customer Portal Access</h3>
                            <p class="text-white/60 text-sm">
                                Reduce phone calls and increase return visits.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Work Order Syncing</h3>
                            <p class="text-white/60 text-sm">
                                Turn web requests into real jobs.
                            </p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="text-lg font-semibold mb-2">Analytics Dashboard</h3>
                            <p class="text-white/60 text-sm">
                                See what's working, and where traffic is coming from.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Value Proposition Section -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        We Don't Just Build Websites - We Build Systems That Work
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        You don't need another static site. You need a connected, high-performing tool that drives real results. That's why we build your site for you, plug it into your ShopView workflow, and support it long after launch to make sure it keeps working hard for your shop.
                    </p>
                    <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                        Get Started
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose Section -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Why Choose ShopView Websites?
                        </h2>
                        <p class="text-lg text-white/80 max-w-4xl mx-auto">
                            Most shop websites are worthless. They sit there looking pretty while you answer the same phone calls and emails all day long. We build websites that actually work. Book jobs while you sleep. Handle customer requests automatically. Connect straight to your ShopView system so everything just flows.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Works on All Devices</h3>
                            <p class="text-white/60">
                                Whether your customers are stuck roadside or back at the office, your ShopView Website loads fast and works perfectly - on phones, tablets, and desktops.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Seamlessly Connected</h3>
                            <p class="text-white/60">
                                We don't build standalone sites. Every ShopView Website plugs directly into your tech stack - from work orders to customer portals to payments.
                            </p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <div class="w-8 h-8 bg-primary-400/40 rounded"></div>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Optimized to Win</h3>
                            <p class="text-white/60">
                                Our sites aren't just pretty - they're performance-driven. Built-in SEO, lightning-fast speed, and conversion-ready structure help bring the right customers straight to your door.
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
