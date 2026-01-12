@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Simple, Transparent Pricing
                    </h1>
                    <p class="text-lg md:text-xl text-white/80">
                        No hidden fees. No long-term contracts. Just powerful software that pays for itself.
                    </p>
                </div>
            </div>
        </section>

        <!-- Pricing Cards -->
        <section class="py-20">
            <div class="container">
                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Starter Plan -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold mb-2">Starter</h3>
                            <p class="text-white/60 text-sm">For small shops getting started</p>
                        </div>

                        <div class="mb-6">
                            <span class="text-4xl font-bold">$199</span>
                            <span class="text-white/60">/month</span>
                        </div>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Up to 3 users</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Unlimited work orders</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Estimates & invoicing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Basic reporting</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Email support</span>
                            </li>
                        </ul>

                        <a href="/trial" class="btn btn-secondary w-full text-center">
                            Start Free Trial
                        </a>
                    </div>

                    <!-- Professional Plan (Featured) -->
                    <div class="bg-primary-500/10 border-2 border-primary-500 rounded-2xl p-8 relative">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary-500 text-white text-sm font-medium px-4 py-1 rounded-full">
                            Most Popular
                        </div>

                        <div class="mb-6">
                            <h3 class="text-xl font-bold mb-2">Professional</h3>
                            <p class="text-white/60 text-sm">For growing repair shops</p>
                        </div>

                        <div class="mb-6">
                            <span class="text-4xl font-bold">$399</span>
                            <span class="text-white/60">/month</span>
                        </div>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Up to 10 users</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Everything in Starter</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Inventory management</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Technician time tracking</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">QuickBooks integration</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Priority support</span>
                            </li>
                        </ul>

                        <a href="/trial" class="btn btn-primary w-full text-center">
                            Start Free Trial
                        </a>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-8">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold mb-2">Enterprise</h3>
                            <p class="text-white/60 text-sm">For multi-location operations</p>
                        </div>

                        <div class="mb-6">
                            <span class="text-4xl font-bold">Custom</span>
                        </div>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Unlimited users</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Everything in Professional</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Multi-location support</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Custom integrations</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">Dedicated account manager</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-primary-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-white/80 text-sm">On-site training</span>
                            </li>
                        </ul>

                        <a href="/demo" class="btn btn-secondary w-full text-center">
                            Contact Sales
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-zinc-900/50">
            <div class="container">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-4">
                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="font-semibold mb-2">Is there a free trial?</h3>
                            <p class="text-white/60 text-sm">Yes! All plans come with a 14-day free trial. No credit card required to start.</p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="font-semibold mb-2">Can I change plans later?</h3>
                            <p class="text-white/60 text-sm">Absolutely. You can upgrade or downgrade your plan at any time. Changes take effect on your next billing cycle.</p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="font-semibold mb-2">What's included in support?</h3>
                            <p class="text-white/60 text-sm">All plans include email support. Professional and Enterprise plans include priority phone support and dedicated onboarding.</p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="font-semibold mb-2">Is my data secure?</h3>
                            <p class="text-white/60 text-sm">Yes. We use bank-level encryption and your data is backed up daily. We're SOC 2 compliant and take security seriously.</p>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-xl p-6">
                            <h3 class="font-semibold mb-2">Are there any contracts?</h3>
                            <p class="text-white/60 text-sm">No long-term contracts. All plans are month-to-month. You can cancel anytime with no penalties.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-6">
                        Ready to Transform Your Shop?
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        Start your free trial today. No credit card required.
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
    </main>

    <x-footer />
@endsection
