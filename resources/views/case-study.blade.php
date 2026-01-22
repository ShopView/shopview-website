@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        {{-- Hero Section --}}
        <x-case-study.hero :study="$study" />

        {{-- Key Results (for Foothills with stats) or Results Table (for others with before/after) --}}
        @if(isset($study['keyResults']))
            <x-case-study.key-results :results="$study['keyResults']" />
        @elseif(isset($study['resultsTable']))
            <x-case-study.results-table :resultsTable="$study['resultsTable']" />
        @endif

        {{-- Featured Quote --}}
        @if(isset($study['featuredQuote']))
            <x-case-study.featured-quote :quote="$study['featuredQuote']" />
        @endif

        {{-- Challenge Section --}}
        @if(isset($study['challenge']))
            <x-case-study.challenge-section :challenge="$study['challenge']" />
        @endif

        {{-- Problem Deep Dive --}}
        @if(isset($study['problemDeepDive']))
            <x-case-study.problem-deep-dive :problemDeepDive="$study['problemDeepDive']" />
        @endif

        {{-- Familiar Tale (Common Pain Points) --}}
        @if(isset($study['familiarTale']))
            <x-case-study.familiar-tale :familiarTale="$study['familiarTale']" />
        @endif

        {{-- Solution Section --}}
        @if(isset($study['solution']))
            <x-case-study.solution-section :solution="$study['solution']" />
        @endif

        {{-- Results Deep Dive (for Foothills) --}}
        @if(isset($study['resultsDeepDive']))
            <x-case-study.results-deep-dive :resultsDeepDive="$study['resultsDeepDive']" />
        @endif

        {{-- Results Checklist (for Haylock and SS Auto) --}}
        @if(isset($study['resultsChecklist']))
            <x-case-study.results-checklist :resultsChecklist="$study['resultsChecklist']" />
        @endif

        {{-- Favorite Features --}}
        @if(isset($study['favoriteFeatures']))
            <x-case-study.favorite-features :favoriteFeatures="$study['favoriteFeatures']" />
        @endif

        {{-- Final Quote --}}
        @if(isset($study['finalQuote']))
            <x-case-study.final-quote :quote="$study['finalQuote']" />
        @endif

        {{-- Video CTA Section (bottom video for Foothills) --}}
        @if(isset($study['videoTitle']))
            <x-case-study.video-cta :study="$study" />
        @endif

        {{-- Final CTA --}}
        <x-case-study.cta-section />
    </main>

    <x-footer />
@endsection
