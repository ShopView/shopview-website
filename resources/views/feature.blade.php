@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-feature.hero :feature="$feature" />

        <x-feature.how-it-works :steps="$feature['howItWorks']" />

        <x-feature.screenshot-section />

        <x-feature.feature-grid :features="$feature['features']" />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
