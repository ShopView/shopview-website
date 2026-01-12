@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Candidate Privacy Policy
                    </h1>
                    <p class="text-white/60">
                        Last Updated: June 24, 2025
                    </p>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto prose prose-invert prose-lg">
                    <div class="space-y-12">
                        <!-- Introduction -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Introduction</h2>
                            <p class="text-white/70">
                                This Candidate Privacy Policy explains how ShopView collects, uses, and shares personal data from job applicants. ShopView provides business management software for heavy-duty truck repair and operates globally with presence in Serbia, Pakistan, Albania, and India.
                            </p>
                            <p class="text-white/70 mt-4">
                                This policy covers all prospective employees, including those who submit unsolicited applications.
                            </p>
                        </div>

                        <!-- Personal Data We Process -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Personal Data We Process</h2>
                            <p class="text-white/70 mb-4">We may collect the following information:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Contact Information:</strong> Name, email address, phone number, mailing address</li>
                                <li><strong class="text-white">Professional History:</strong> Resume, CV, cover letter, employment background</li>
                                <li><strong class="text-white">Educational History:</strong> Degrees, certifications, training</li>
                                <li><strong class="text-white">Interview Information:</strong> Notes, feedback, assessment results</li>
                                <li><strong class="text-white">Publicly Available Information:</strong> LinkedIn profiles and professional networks</li>
                                <li><strong class="text-white">Voluntary Information:</strong> Salary expectations, references, work authorization status</li>
                            </ul>
                        </div>

                        <!-- Legal Basis for Processing -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Legal Basis for Processing</h2>
                            <p class="text-white/70 mb-4">We process your data under the following GDPR grounds:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Legitimate Interest:</strong> Assessing your suitability for employment and managing our recruitment process</li>
                                <li><strong class="text-white">Consent:</strong> When we wish to keep your information for future opportunities (you may withdraw this consent at any time)</li>
                                <li><strong class="text-white">Legal Obligation:</strong> To comply with applicable laws and regulations</li>
                            </ul>
                        </div>

                        <!-- How We Use Your Personal Data -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">How We Use Your Personal Data</h2>
                            <p class="text-white/70 mb-4">We use your personal data to:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li>Assess your skills, qualifications, and suitability for roles</li>
                                <li>Communicate with you about your application and the recruitment process</li>
                                <li>Manage and improve our recruitment processes</li>
                                <li>Comply with legal and regulatory requirements</li>
                                <li>Contact you about future job openings (with your consent)</li>
                            </ul>
                        </div>

                        <!-- Data Retention -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Data Retention</h2>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Successful Applicants:</strong> Your data will be transferred to your employee file</li>
                                <li><strong class="text-white">Unsuccessful Applicants:</strong> We retain your data for 24 months to consider you for future opportunities</li>
                                <li><strong class="text-white">Extended Retention:</strong> With your explicit consent, we may retain your data longer</li>
                            </ul>
                        </div>

                        <!-- Data Sharing -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Data Sharing</h2>
                            <p class="text-white/70 mb-4">Your data may be shared with:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Internal Teams:</strong> HR personnel and hiring managers involved in recruitment</li>
                                <li><strong class="text-white">Service Providers:</strong> Third-party vendors who assist with recruitment, under appropriate data protection agreements</li>
                                <li><strong class="text-white">Legal Authorities:</strong> When required by law or regulation</li>
                            </ul>
                        </div>

                        <!-- Your Rights -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Your Rights</h2>
                            <p class="text-white/70 mb-4">Under GDPR, you have the right to:</p>
                            <ul class="list-disc list-inside space-y-2 text-white/70">
                                <li><strong class="text-white">Access:</strong> Request a copy of the personal data we hold about you</li>
                                <li><strong class="text-white">Rectification:</strong> Request corrections to inaccurate or incomplete data</li>
                                <li><strong class="text-white">Erasure:</strong> Request deletion of your personal data ("Right to be Forgotten")</li>
                                <li><strong class="text-white">Restriction:</strong> Request that we limit how we process your data</li>
                                <li><strong class="text-white">Portability:</strong> Receive your data in a portable format</li>
                                <li><strong class="text-white">Object:</strong> Object to processing of your personal data</li>
                                <li><strong class="text-white">Withdraw Consent:</strong> Withdraw previously given consent at any time</li>
                            </ul>
                            <p class="text-white/70 mt-4">
                                To exercise these rights, contact us at <a href="mailto:careers@shopview.com" class="text-primary-400 hover:text-primary-300">careers@shopview.com</a>.
                            </p>
                        </div>

                        <!-- Complaints -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Complaints</h2>
                            <p class="text-white/70">
                                If you believe we have not handled your personal data appropriately, you have the right to lodge a complaint with the relevant data protection authority in your jurisdiction.
                            </p>
                        </div>

                        <!-- Policy Updates -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Policy Updates</h2>
                            <p class="text-white/70">
                                ShopView reserves the right to update this policy at any time. We will notify you of significant changes by posting the updated policy on our website.
                            </p>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
                            <p class="text-white/70 mb-4">
                                For questions about this Candidate Privacy Policy or how we handle your personal data, please contact:
                            </p>
                            <a href="mailto:careers@shopview.com" class="text-primary-400 hover:text-primary-300">
                                careers@shopview.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
