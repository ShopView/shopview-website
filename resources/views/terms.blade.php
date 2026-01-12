@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Terms of Use
                    </h1>
                    <p class="text-white/60">
                        Last Updated: September 3, 2025
                    </p>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto prose prose-invert prose-lg">
                    <div class="space-y-12">
                        <!-- Section 1 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">1. Definitions</h2>
                            <p class="text-white/70">
                                This section establishes key terms used throughout this agreement including Account, Authorized User, Client Data, Order Form, and Fees.
                            </p>
                        </div>

                        <!-- Section 2 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">2. Grant of Rights</h2>
                            <p class="text-white/70">
                                ShopView grants users a limited, non-exclusive, non-transferable right to access and use the Service solely for your internal business purposes during the subscription term.
                            </p>
                        </div>

                        <!-- Section 3 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">3. Accounts and Authorized Users</h2>
                            <p class="text-white/70">
                                You must provide accurate registration information. Each Account is non-transferable and corresponds to one user license. Sharing credentials may result in immediate suspension or termination.
                            </p>
                        </div>

                        <!-- Section 4 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">4. Usage Limits and Fees</h2>
                            <p class="text-white/70 mb-4">Billing terms:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li>Monthly subscriptions are auto-charged</li>
                                <li>Annual subscriptions are invoiced within 7 days</li>
                                <li>Overdue amounts accrue interest at 1.5% per month (18% per annum) or the legal maximum</li>
                            </ul>
                        </div>

                        <!-- Section 5 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">5. User Restrictions</h2>
                            <p class="text-white/70 mb-4">You may not:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li>Reverse engineer or decompile the Service</li>
                                <li>Sublicense or transfer your access</li>
                                <li>Use automated scraping tools</li>
                                <li>Build competing products using our Service</li>
                                <li>Transmit unauthorized content</li>
                            </ul>
                        </div>

                        <!-- Section 6 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">6. Intellectual Property</h2>
                            <p class="text-white/70">
                                ShopView claims ownership of all service components. Users assign all rights, title, and interest in Client Data to ShopView, granting a perpetual, royalty-free license for platform operations and training AI models (including ShopCoach AI).
                            </p>
                        </div>

                        <!-- Section 7 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">7. Support and Maintenance</h2>
                            <p class="text-white/70">
                                ShopView may update the Service from time to time, provided that material functionality is not reduced.
                            </p>
                        </div>

                        <!-- Section 8 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">8. Confidentiality</h2>
                            <p class="text-white/70">
                                Both parties agree to protect confidential information disclosed during the relationship. Note: Client Data is expressly excluded from confidentiality provisions.
                            </p>
                        </div>

                        <!-- Section 9 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">9. Term and Termination</h2>
                            <p class="text-white/70">
                                Upon termination, user access ends immediately. Client Data may be deleted 30 days post-termination unless exported by the user.
                            </p>
                        </div>

                        <!-- Section 10 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">10. Disclaimers</h2>
                            <p class="text-white/70">
                                The Service is provided "AS-IS" without warranties of any kind. ShopView does not guarantee uptime, data security, or accuracy of outputs, recommendations, or results provided by the Service.
                            </p>
                        </div>

                        <!-- Section 11 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">11. Limitation of Liability</h2>
                            <p class="text-white/70">
                                ShopView's liability is capped at the Fees paid by you in the one (1) month preceding the claim for direct damages.
                            </p>
                        </div>

                        <!-- Section 12 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">12. Indemnification</h2>
                            <p class="text-white/70">
                                You agree to indemnify ShopView against third-party claims arising from your violation of these terms or unlawful use of the Service.
                            </p>
                        </div>

                        <!-- Section 13 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">13. Governing Law and Dispute Resolution</h2>
                            <p class="text-white/70">
                                These terms are governed by Delaware law with exclusive jurisdiction in Delaware courts.
                            </p>
                        </div>

                        <!-- Section 14 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">14. Miscellaneous</h2>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li>This constitutes the entire agreement between parties</li>
                                <li>Users may not assign these terms</li>
                                <li>ShopView may assign these terms</li>
                                <li>Invalid provisions are severable</li>
                                <li>Force majeure applies to both parties</li>
                            </ul>
                        </div>

                        <!-- Section 15 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">15. ShopCoach AI</h2>
                            <p class="text-white/70">
                                Users remain solely responsible for validating AI outputs. ShopView disclaims all liability for inaccurate or unreliable recommendations provided by ShopCoach AI.
                            </p>
                        </div>

                        <!-- Section 16 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">16. ShopView Payments and Payment Compliance</h2>
                            <p class="text-white/70">
                                Merchants are solely responsible for surcharge legality compliance. ShopView disclaims all responsibility and liability for your use of ShopPay in violation of applicable laws.
                            </p>
                        </div>

                        <!-- Section 17 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">17. Use of Your Business Name and Logos</h2>
                            <p class="text-white/70">
                                ShopView retains non-exclusive rights to display client business names and logos in marketing materials. Users may withdraw permission with 30-day written notice.
                            </p>
                        </div>

                        <!-- Section 18 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">18. Changes to These Terms</h2>
                            <p class="text-white/70 mb-4">
                                Material modifications require 30-day advance notice via email or in-app notification. Continued use after changes constitutes acceptance.
                            </p>
                            <p class="text-white/70">
                                For questions about these terms, contact us at:
                            </p>
                            <a href="mailto:legal@shopview.com" class="text-primary-400 hover:text-primary-300">
                                legal@shopview.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
