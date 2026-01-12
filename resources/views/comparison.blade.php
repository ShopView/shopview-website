@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-comparison.hero :comparison="$comparison" />

        <x-comparison.stats :stats="$comparison['stats']" />

        <x-comparison.value-props
            :valueProps="$comparison['valueProps']"
            :competitor="$comparison['competitor']"
        />

        @if(isset($comparison['comparisonTable']))
            <x-comparison.comparison-table
                :competitor="$comparison['competitor']"
                :competitorLogo="$comparison['competitorLogo'] ?? null"
                :categories="$comparison['comparisonTable']"
            />
        @endif

        <x-comparison.why-switch
            :heading="$comparison['whySwitchHeading']"
            :points="$comparison['whySwitchPoints']"
        />

        <x-comparison.workflow />

        <x-comparison.migration :competitor="$comparison['competitor']" />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
