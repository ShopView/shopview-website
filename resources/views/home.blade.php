@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        {{-- Hero --}}
        <x-home.hero />

        {{-- Trust Bar (Customer Logos) --}}
        <x-home.trust-bar />

        {{-- Customer Story with Video --}}
        <x-home.customer-story />

        {{-- Testimonials Carousel --}}
        <x-home.testimonials />

        {{-- Powerful Features Grid --}}
        <x-home.powerful-features />

        {{-- Work Order Section --}}
        <x-home.work-order-section />

        {{-- Scheduling Section --}}
        <x-home.scheduling-section />

        {{-- Reporting Section --}}
        <x-home.reporting-section />

        {{-- Results Metrics --}}
        <x-home.results-metrics />

        {{-- Origin Story --}}
        <x-home.origin-story />

        {{-- Role-Based Benefits --}}
        <x-home.role-benefits />

        {{-- Second Testimonials Carousel --}}
        <x-home.testimonials-second />

        {{-- Feature Highlights --}}
        <x-home.feature-highlights />

        {{-- Final CTA --}}
        <x-cta-section />
    </main>

    <x-footer />
@endsection
