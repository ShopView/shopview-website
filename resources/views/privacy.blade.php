@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Privacy Policy
                    </h1>
                    <p class="text-white/60">
                        Last Updated: April 25, 2025
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
                            <h2 class="text-2xl font-bold mb-6">1. What We Collect</h2>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">1.1 Information You Provide</h3>
                            <ul class="list-disc list-inside space-y-2 text-white/70 mb-6">
                                <li><strong class="text-white">Inquiry & Support:</strong> Name, email, company name, message content</li>
                                <li><strong class="text-white">Account Registration:</strong> Business name, billing address, email, phone, username/password</li>
                                <li><strong class="text-white">Payment Data:</strong> Payment card or bank details (tokenized via Stripe, PayPal)</li>
                                <li><strong class="text-white">Client Data:</strong> Information about owners, employees, representatives</li>
                                <li><strong class="text-white">Customer Data:</strong> Processed on behalf of clients</li>
                                <li><strong class="text-white">SMS & Mobile Communications:</strong> Expressly opted-in users only; reply STOP to cancel</li>
                            </ul>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">1.2 Information Collected Automatically</h3>
                            <ul class="list-disc list-inside space-y-2 text-white/70 mb-6">
                                <li><strong class="text-white">Log Data:</strong> IP address, browser type, device type, pages visited, access times</li>
                                <li><strong class="text-white">Usage Metrics:</strong> Feature usage, error logs, performance statistics</li>
                                <li><strong class="text-white">Cookies & Similar Technologies:</strong> Authentication, preferences, analytics, marketing</li>
                            </ul>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">1.3 Third-Party Analytics & Advertising</h3>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li>Google Analytics integration for Site usage tracking</li>
                                <li>Online advertising networks (Google Ads, DAA, NAI)</li>
                                <li>Opt-out available at optout.aboutads.info</li>
                            </ul>
                        </div>

                        <!-- Section 2 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">2. How We Use Information</h2>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Deliver & Improve Services:</strong> Authentication, billing, support, development</li>
                                <li><strong class="text-white">Communications:</strong> Transactional messages and marketing (where permitted)</li>
                                <li><strong class="text-white">Legal & Compliance:</strong> Fraud prevention, tax obligations, dispute resolution</li>
                                <li><strong class="text-white">Analytics & Personalization:</strong> Understand trends, personalize experience</li>
                            </ul>
                        </div>

                        <!-- Section 3 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">3. Disclosure of Personal Information</h2>
                            <p class="text-white/70 mb-4">We do not sell Personal Data. We may share with:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Service Providers:</strong> Under confidentiality agreements</li>
                                <li><strong class="text-white">Affiliates & Subprocessors:</strong> To support Services</li>
                                <li><strong class="text-white">Corporate Transactions:</strong> Mergers, acquisitions, asset sales</li>
                                <li><strong class="text-white">Legal Requirements:</strong> Comply with law, subpoenas, enforce rights</li>
                            </ul>
                            <p class="text-white/70 mt-4"><strong class="text-white">Note:</strong> No mobile information sharing with third parties for marketing purposes.</p>
                        </div>

                        <!-- Section 4 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">4. De-Identified & Aggregate Data</h2>
                            <p class="text-white/70">
                                We may aggregate and anonymize any data so it cannot be tied to an individual. We may use, share, or sell such data for lawful purposes, excluding mobile phone numbers and SMS consent information.
                            </p>
                        </div>

                        <!-- Section 5 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">5. Data Retention</h2>
                            <p class="text-white/70">
                                We keep Personal Data only as long as necessary to fulfill the purposes described in this policy or to satisfy legal/tax requirements.
                            </p>
                        </div>

                        <!-- Section 6 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">6. Your Choices</h2>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">6.1 Cookies</h3>
                            <p class="text-white/70 mb-6">You may disable cookies via browser settings; this may limit functionality.</p>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">6.2 Communications</h3>
                            <p class="text-white/70 mb-6">Unsubscribe links are included in all marketing emails. You cannot opt out of transactional emails. For SMS opt-out, reply STOP or email legal@shopview.com.</p>

                            <h3 class="text-xl font-semibold mb-4 text-white/90">6.3 Consent Withdrawal</h3>
                            <p class="text-white/70">You may withdraw any consent by contacting us, subject to legal/contractual restrictions.</p>
                        </div>

                        <!-- Section 7 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">7. Access, Correction & Deletion</h2>
                            <p class="text-white/70">
                                You may request access, correction, or deletion of Personal Data. Identity verification is required. If you are a customer of one of our Clients, please direct requests to them first.
                            </p>
                        </div>

                        <!-- Section 8 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">8. Security Safeguards</h2>
                            <p class="text-white/70">
                                We employ physical, technical and administrative measures—including encryption in transit and at rest, access controls, and periodic reviews. However, no system is impenetrable.
                            </p>
                        </div>

                        <!-- Section 9 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">9. Children's Privacy</h2>
                            <p class="text-white/70">
                                Our Services are intended for users 16 and older. We do not knowingly collect Personal Data from children under the applicable age of consent. Contact us to delete if applicable.
                            </p>
                        </div>

                        <!-- Section 10 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">10. Third-Party Links</h2>
                            <p class="text-white/70">
                                Our Services may contain links to third-party websites not governed by this Policy. Please review their privacy practices separately.
                            </p>
                        </div>

                        <!-- Section 11 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">11. Changes to This Policy</h2>
                            <p class="text-white/70">
                                We may update this policy and will post the revised version with an updated Effective Date. Material changes will be notified by email or in-app notification.
                            </p>
                        </div>

                        <!-- Section 12 -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">12. Contact Us</h2>
                            <p class="text-white/70 mb-4">
                                For privacy inquiries or rights requests, contact us at:
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
