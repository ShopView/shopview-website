@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="pt-32 pb-16 bg-gradient-to-b from-[#0a0c10] to-[#0f1218]">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        How Heavy-Duty Repair Shops Boost Revenue and Save Time with ShopView
                    </h1>
                    <p class="text-lg md:text-xl text-white/70">
                        Real stories from shops that cut admin hours, eliminated downtime, and added thousands in monthly revenue using ShopView's all-in-one management system.
                    </p>
                </div>
            </div>
        </section>

        <!-- Case Studies Grid -->
        <section class="py-20">
            <div class="container">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    @foreach(config('case-studies') as $key => $study)
                        <a href="/case-studies/{{ $study['slug'] }}" class="group block bg-white/5 border border-white/10 rounded-xl overflow-hidden hover:border-[#247CFF]/50 transition-all hover:shadow-lg hover:shadow-[#247CFF]/10">
                            <!-- Image -->
                            <div class="aspect-video bg-gradient-to-br from-[#247CFF]/20 to-[#247CFF]/5 flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="relative z-10 text-center p-4">
                                    <div class="w-16 h-16 mx-auto mb-3 bg-white/10 rounded-full flex items-center justify-center">
                                        <svg class="w-8 h-8 text-[#247CFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <p class="text-white font-semibold">{{ $study['company'] }}</p>
                                </div>
                            </div>

                            <div class="p-6">
                                <!-- Card Title -->
                                <h3 class="font-bold text-lg text-white group-hover:text-[#247CFF] transition-colors mb-3 line-clamp-2">
                                    {{ $study['cardTitle'] ?? $study['company'] . ' Case Study' }}
                                </h3>

                                <!-- Industry & Location -->
                                <p class="text-white/50 text-sm mb-4">
                                    {{ $study['industry'] }} • {{ $study['location'] }}
                                </p>

                                <!-- Key Results Preview -->
                                @if(isset($study['keyResults']))
                                    <div class="flex items-center gap-4 pt-4 border-t border-white/10">
                                        @foreach(array_slice($study['keyResults'], 0, 2) as $result)
                                            <div>
                                                <span class="text-lg font-bold text-[#247CFF]">{{ $result['stat'] }}</span>
                                                <span class="text-white/50 text-xs ml-1">{{ $result['label'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @elseif(isset($study['resultsTable']))
                                    <div class="flex items-center gap-4 pt-4 border-t border-white/10">
                                        <div>
                                            <span class="text-lg font-bold text-[#247CFF]">{{ $study['resultsTable']['after'][1] ?? 'Improved' }}</span>
                                        </div>
                                    </div>
                                @endif

                                <!-- Read More -->
                                <div class="mt-4 flex items-center text-[#247CFF] font-medium text-sm group-hover:gap-2 transition-all">
                                    <span>Read Case Study</span>
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <x-cta-section />
    </main>

    <x-footer />
@endsection
