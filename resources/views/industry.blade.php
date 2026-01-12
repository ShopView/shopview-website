@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <!-- Hero Section -->
        <x-industry.hero :industry="$industry" />

        <!-- Service Order Management Section -->
        <x-industry.service-management :industry="$industry" />

        <!-- Work Order Speed Section -->
        <x-industry.work-order-speed :industry="$industry" />

        <!-- Inventory Section -->
        <x-industry.inventory-section :industry="$industry" />

        <!-- Customer Uptime Section -->
        <x-industry.customer-uptime :industry="$industry" />

        <!-- Invoicing Section -->
        <x-industry.invoicing-section :industry="$industry" />

        <!-- Profitability Section -->
        <x-industry.profitability-section :industry="$industry" />

        <!-- Built By Shop Owners Section -->
        <x-industry.built-by-owners />

        <!-- Why Choose ShopView Section -->
        <x-industry.why-choose />

        @php
            // Map industry slugs to guide keys
            $guideKeyMap = [
                'diesel-truck-repair-shop-software' => 'diesel-truck',
                'heavy-equipment-repair-software' => 'heavy-equipment',
                'fleet-maintenance-management-software' => 'fleet-maintenance',
                'truck-and-trailer-repair-shop-software' => 'truck-trailer',
            ];
            $guideKey = $guideKeyMap[$industry['slug']] ?? null;
            $guide = $guideKey ? config("guides.{$guideKey}") : null;
        @endphp

        @if($guide)
            <x-guide-section
                :title="$guide['title']"
                :sections="$guide['sections']"
            />
        @endif

        <x-cta-section />
    </main>

    <x-footer />
@endsection
