@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero -->
        <section class="py-32 bg-gradient-to-b from-zinc-900 to-black">
            <div class="container">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        Customer Success Stories
                    </h1>
                    <p class="text-lg md:text-xl text-white/80">
                        See how shops like yours are transforming their operations with ShopView.
                    </p>
                </div>
            </div>
        </section>

        <!-- Case Studies Grid -->
        <section class="py-20">
            <div class="container">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    @foreach(config('case-studies') as $key => $study)
                        <a href="/case-studies/{{ $study['slug'] }}" class="group block bg-white/5 border border-white/10 rounded-xl overflow-hidden hover:border-primary-500/50 transition-all">
                            <!-- Image Placeholder -->
                            <div class="aspect-video bg-white/5 flex items-center justify-center">
                                <span class="text-white/30 text-sm">Image Placeholder</span>
                            </div>

                            <div class="p-6">
                                <!-- Company Logo Placeholder -->
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-10 h-10 bg-white/10 flex items-center justify-center">
                                        <span class="text-white/40 text-xs">Logo</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-white group-hover:text-primary-400 transition-colors">
                                            {{ $study['company'] }}
                                        </h3>
                                        <p class="text-white/50 text-sm">{{ $study['industry'] }}</p>
                                    </div>
                                </div>

                                <p class="text-primary-400 font-medium mb-2">
                                    {{ $study['tagline'] }}
                                </p>

                                <p class="text-white/60 text-sm mb-4 line-clamp-2">
                                    {{ $study['summary'] }}
                                </p>

                                <!-- Key Metric -->
                                <div class="flex items-center gap-4 pt-4 border-t border-white/10">
                                    @foreach(array_slice($study['results'], 0, 2) as $result)
                                        <div>
                                            <span class="text-lg font-bold text-primary-400">{{ $result['metric'] }}</span>
                                            <span class="text-white/50 text-xs ml-1">{{ $result['label'] }}</span>
                                        </div>
                                    @endforeach
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
