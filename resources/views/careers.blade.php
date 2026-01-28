@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Build the Future of Shop Tech with Us
                    </h1>
                    <p class="text-lg md:text-xl text-white/80">
                        We're a lean, fast-moving team helping truck and auto repair shops run smarter. If you're into solving real problems, working with good people, and using AI to make work simpler - not harder - we'd love to meet you.
                    </p>
                </div>
            </div>
        </section>

        <!-- Open Positions -->
        <section class="py-20 bg-[#1a1d24]">
            <div class="container">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Open Positions
                        </h2>
                        <p class="text-white/60">
                            Join our growing team and help shape the future of shop management software.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <!-- Job Listing 1 -->
                        <a href="https://shopview.peopleforce.io/careers/v/172606-manual-qa-tester" target="_blank" rel="noopener noreferrer" class="block bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-colors group">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">(Manual) QA Tester</h3>
                                    <p class="text-white/60 text-sm mt-1">Quality Assurance · Remote</p>
                                </div>
                                <x-dynamic-component component="lucide-chevron-right" class="w-5 h-5 text-white/40 group-hover:text-primary-400 transition-colors" />
                            </div>
                        </a>

                        <!-- Job Listing 2 -->
                        <a href="https://shopview.peopleforce.io/careers/v/163076-shop-success-manager" target="_blank" rel="noopener noreferrer" class="block bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-colors group">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">Shop Success Manager</h3>
                                    <p class="text-white/60 text-sm mt-1">Customer Success · Remote</p>
                                </div>
                                <x-dynamic-component component="lucide-chevron-right" class="w-5 h-5 text-white/40 group-hover:text-primary-400 transition-colors" />
                            </div>
                        </a>

                        <!-- Job Listing 3 -->
                        <a href="https://shopview.peopleforce.io/careers/v/147925-shop-solutions-advisor-heavy-dutyauto" target="_blank" rel="noopener noreferrer" class="block bg-white/5 border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-colors group">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold group-hover:text-primary-400 transition-colors">Shop Solutions Advisor (Heavy-Duty/Auto)</h3>
                                    <p class="text-white/60 text-sm mt-1">Sales · Remote</p>
                                </div>
                                <x-dynamic-component component="lucide-chevron-right" class="w-5 h-5 text-white/40 group-hover:text-primary-400 transition-colors" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Don't See a Fit -->
        <section class="py-20">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">
                        Don't See the Right Role?
                    </h2>
                    <p class="text-white/80 text-lg mb-8">
                        We're always looking for talented people. Send us your resume and tell us how you can contribute to ShopView.
                    </p>
                    <a href="mailto:careers@shopview.com" class="btn btn-primary items-center justify-center gap-2" style="display: inline-flex;">
                        <x-dynamic-component component="lucide-mail" class="w-5 h-5 mr-2" />
                        <span>careers@shopview.com</span>
                    </a>
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />
@endsection
