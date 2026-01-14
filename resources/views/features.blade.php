@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Everything You Need to Run a Better Shop
                    </h1>
                    <p class="text-lg md:text-xl text-white/80 mb-8">
                        ShopView gives you the tools to accelerate workflows, optimize technician productivity, speed up payment cycles, and boost parts department profitability. It's like doubling the size of your team, without the cost.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/trial" class="btn btn-primary text-lg px-8 py-4">
                            Start Free Trial
                        </a>
                        <a href="/demo" class="btn btn-secondary text-lg px-8 py-4">
                            Book a Demo
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Run the Shop -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12">
                        <p class="text-primary-400 font-semibold uppercase tracking-wide mb-2">Run the Shop</p>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">
                            Core Operations
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/features/work-orders" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Work Orders</h3>
                            <p class="text-white/60">Build jobs in 2 minutes or less with templates and saved services.</p>
                        </a>

                        <a href="/features/estimates-invoices" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Estimates & Invoices</h3>
                            <p class="text-white/60">Fast, accurate, reliable billing that gets you paid faster.</p>
                        </a>

                        <a href="/features/scheduling" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Scheduling</h3>
                            <p class="text-white/60">Fill your calendar with zero waste and keep bays running.</p>
                        </a>

                        <a href="/features/technician-time-tracking" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Time Clock</h3>
                            <p class="text-white/60">Track every minute, every job with zero-slip time tracking.</p>
                        </a>

                        <a href="/features/inventory-management" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Parts Inventory</h3>
                            <p class="text-white/60">Know what you have. Never run short on critical parts.</p>
                        </a>

                        <a href="/features/reporting-analytics" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Reporting</h3>
                            <p class="text-white/60">Visualize productivity & profitability with powerful analytics.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Experience -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12">
                        <p class="text-primary-400 font-semibold uppercase tracking-wide mb-2">Customer Experience</p>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">
                            Delight Your Customers
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="/features/shoppay" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #247CFF;">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">ShopPay</h3>
                                        <span class="text-xs bg-primary-500/20 text-primary-400 px-2 py-0.5 rounded-full">NEW</span>
                                    </div>
                                    <p class="text-white/60">Simple, secure customer payments that speed up your cash flow.</p>
                                </div>
                            </div>
                        </a>

                        <a href="/features/customer-portal" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #247CFF;">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">Customer Portal</h3>
                                        <span class="text-xs bg-primary-500/20 text-primary-400 px-2 py-0.5 rounded-full">NEW</span>
                                    </div>
                                    <p class="text-white/60">Approvals and payments in one place for a seamless customer experience.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Growth & Services -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12">
                        <p class="text-primary-400 font-semibold uppercase tracking-wide mb-2">Growth & Services</p>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">
                            Grow Your Business
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <a href="/services/websites" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Website Creation</h3>
                            <p class="text-white/60">Launch a professional site that gets found fast and drives leads.</p>
                        </a>

                        <a href="/services/leads" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4" style="background-color: #247CFF;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Lead Generation</h3>
                            <p class="text-white/60">Tools to acquire more service jobs and grow your customer base.</p>
                        </a>

                        <a href="/services/bookkeeping" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: #247CFF;">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">Bookkeeping</h3>
                                        <span class="text-xs bg-primary-500/20 text-primary-400 px-2 py-0.5 rounded-full">NEW</span>
                                    </div>
                                    <p class="text-white/60">Accounting automation designed specifically for repair shops.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Integrations -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-6xl mx-auto">
                    <div class="mb-12">
                        <p class="text-primary-400 font-semibold uppercase tracking-wide mb-2">Integrations</p>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">
                            Connect Your Tools
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <a href="/integrations/quickbooks" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">QuickBooks Online</h3>
                            <p class="text-white/60">Seamless accounting sync for streamlined financial operations.</p>
                        </a>

                        <a href="/integrations/ibs" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">IBS</h3>
                            <p class="text-white/60">Interstate Billing Systems integration for fleet billing.</p>
                        </a>

                        <a href="/features/vin-decoder" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">VIN Decoder</h3>
                            <p class="text-white/60">Instant vehicle identification and specification lookup.</p>
                        </a>

                        <a href="/integrations/labor-guides" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">Labor Guides</h3>
                            <p class="text-white/60">Industry-standard labor time estimates for accurate billing.</p>
                        </a>

                        <a href="/integrations/shopcoach" class="group bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 hover:border-white/20 transition-all">
                            <h3 class="text-lg font-semibold mb-2 group-hover:text-primary-400 transition-colors">ShopCoach AI</h3>
                            <p class="text-white/60">AI-powered assistant for diagnostics and recommendations.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />
@endsection
