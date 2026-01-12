<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'ShopView | Heavy Duty Repair Shop Management Software',
    ]);
});

// Trial and Demo Pages
Route::get('/trial', function () {
    return view('trial', [
        'title' => 'Start Free Trial | ShopView',
    ]);
});

Route::get('/demo', function () {
    return view('demo', [
        'title' => 'Book a Demo | ShopView',
    ]);
});

// Industry Pages
Route::get('/diesel-truck-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.diesel-truck'),
        'title' => config('industries.diesel-truck.title') . ' | ShopView',
    ]);
});

Route::get('/heavy-equipment-repair-software', function () {
    return view('industry', [
        'industry' => config('industries.heavy-equipment'),
        'title' => config('industries.heavy-equipment.title') . ' | ShopView',
    ]);
});

Route::get('/fleet-maintenance-management-software', function () {
    return view('industry', [
        'industry' => config('industries.fleet-maintenance'),
        'title' => config('industries.fleet-maintenance.title') . ' | ShopView',
    ]);
});

Route::get('/agriculture-equipment-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.agriculture-equipment'),
        'title' => config('industries.agriculture-equipment.title') . ' | ShopView',
    ]);
});

Route::get('/fire-truck-and-ambulance-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.fire-truck-ambulance'),
        'title' => config('industries.fire-truck-ambulance.title') . ' | ShopView',
    ]);
});

Route::get('/truck-and-trailer-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.truck-trailer'),
        'title' => config('industries.truck-trailer.title') . ' | ShopView',
    ]);
});

Route::get('/construction-fleet-maintenance-software', function () {
    return view('industry', [
        'industry' => config('industries.construction-fleet'),
        'title' => config('industries.construction-fleet.title') . ' | ShopView',
    ]);
});

Route::get('/tow-truck-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.tow-truck'),
        'title' => config('industries.tow-truck.title') . ' | ShopView',
    ]);
});

Route::get('/mobile-equipment-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.mobile-equipment'),
        'title' => config('industries.mobile-equipment.title') . ' | ShopView',
    ]);
});

Route::get('/rv-repair-shop-software', function () {
    return view('industry', [
        'industry' => config('industries.rv-repair'),
        'title' => config('industries.rv-repair.title') . ' | ShopView',
    ]);
});

Route::get('/independent-repair-shop-management-software', function () {
    return view('industry', [
        'industry' => config('industries.independent-repair'),
        'title' => config('industries.independent-repair.title') . ' | ShopView',
    ]);
});

Route::get('/multi-location-repair-shop-management-software', function () {
    return view('industry', [
        'industry' => config('industries.multi-location'),
        'title' => config('industries.multi-location.title') . ' | ShopView',
    ]);
});

// Feature Pages
Route::get('/features/work-orders', function () {
    return view('features.work-orders', [
        'title' => 'Work Order Software | ShopView',
    ]);
});

Route::get('/features/estimates-invoices', function () {
    return view('features.estimates-invoices', [
        'title' => 'Estimates & Invoicing Software | ShopView',
    ]);
});

Route::get('/features/scheduling', function () {
    return view('features.scheduling', [
        'title' => 'Repair Scheduling Software | ShopView',
    ]);
});

Route::get('/features/technician-time-tracking', function () {
    return view('features.technician-time-tracking', [
        'title' => 'Technician Time Tracking Software | ShopView',
    ]);
});

Route::get('/features/inventory-management', function () {
    return view('features.inventory-management', [
        'title' => 'Parts & Inventory Management Software | ShopView',
    ]);
});

Route::get('/features/reporting-analytics', function () {
    return view('features.reporting-analytics', [
        'title' => 'Reporting & Analytics Software | ShopView',
    ]);
});

// Integration Pages
Route::get('/integrations/quickbooks', function () {
    return view('integrations.quickbooks', [
        'title' => 'QuickBooks Integration | ShopView',
    ]);
});

Route::get('/integrations/ibs', function () {
    return view('integrations.ibs', [
        'title' => 'IBS Integration | ShopView',
    ]);
});

Route::get('/features/vin-decoder', function () {
    return view('features.vin-decoder', [
        'title' => 'VIN Decoder | ShopView',
    ]);
});

Route::get('/integrations/shopcoach', function () {
    return view('integrations.shopcoach', [
        'title' => 'ShopCoach AI | ShopView',
    ]);
});

Route::get('/integrations/labor-guides', function () {
    return view('integrations.labor-guides', [
        'title' => 'Heavy-Duty Truck Labor Time Guide | ShopView',
    ]);
});

// Customer Experience Pages
Route::get('/features/shoppay', function () {
    return view('features.shoppay', [
        'title' => 'ShopPay - Payment Processing | ShopView',
    ]);
});

Route::get('/features/customer-portal', function () {
    return view('features.customer-portal', [
        'title' => 'Customer Portal | ShopView',
    ]);
});

// Growth & Services Pages
Route::get('/services/websites', function () {
    return view('services.websites', [
        'title' => 'Professional Websites for Repair Shops | ShopView',
    ]);
});

Route::get('/services/leads', function () {
    return view('services.leads', [
        'title' => 'Lead Generation & Sales Coaching | ShopView',
    ]);
});

Route::get('/services/bookkeeping', function () {
    return view('services.bookkeeping', [
        'title' => 'Accounting & Bookkeeping | ShopView',
    ]);
});

// Case Studies
Route::get('/case-studies', function () {
    return view('case-studies', [
        'title' => 'Customer Success Stories | ShopView',
    ]);
});

Route::get('/case-studies/case-study-foothills-group', function () {
    return view('case-study', [
        'study' => config('case-studies.foothills-group'),
        'title' => 'Foothills Group Case Study | ShopView',
    ]);
});

Route::get('/case-studies/haylock-truck-and-trailer', function () {
    return view('case-study', [
        'study' => config('case-studies.haylock-truck-and-trailer'),
        'title' => 'Haylock Truck & Trailer Case Study | ShopView',
    ]);
});

Route::get('/case-studies/ss-auto-repair-ltd', function () {
    return view('case-study', [
        'study' => config('case-studies.ss-auto-repair'),
        'title' => 'SS Auto Repair Case Study | ShopView',
    ]);
});

// Static Pages
Route::get('/pricing', function () {
    return view('pricing', [
        'title' => 'Pricing | ShopView',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us | ShopView',
    ]);
});

Route::get('/careers', function () {
    return view('careers', [
        'title' => 'Careers | ShopView',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us | ShopView',
    ]);
});

Route::get('/features', function () {
    return view('features', [
        'title' => 'Features | ShopView',
    ]);
});

// Legal Pages
Route::get('/privacy', function () {
    return view('privacy', [
        'title' => 'Privacy Policy | ShopView',
    ]);
});

Route::get('/terms', function () {
    return view('terms', [
        'title' => 'Terms of Use | ShopView',
    ]);
});

Route::get('/candidate-privacy-policy', function () {
    return view('candidate-privacy-policy', [
        'title' => 'Candidate Privacy Policy | ShopView',
    ]);
});

// Comparison Pages
Route::get('/compare/shopview-vs-fullbay', function () {
    return view('comparison', [
        'comparison' => config('comparisons.fullbay'),
        'title' => 'ShopView vs FullBay | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-shopmonkey', function () {
    return view('comparison', [
        'comparison' => config('comparisons.shopmonkey'),
        'title' => 'ShopView vs Shopmonkey | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-shopboss', function () {
    return view('comparison', [
        'comparison' => config('comparisons.shopboss'),
        'title' => 'ShopView vs ShopBoss | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-mitchell1', function () {
    return view('comparison', [
        'comparison' => config('comparisons.mitchell1'),
        'title' => 'ShopView vs Mitchell1 | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-tekmetric', function () {
    return view('comparison', [
        'comparison' => config('comparisons.tekmetric'),
        'title' => 'ShopView vs Tekmetric | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-easy-truck-shop', function () {
    return view('comparison', [
        'comparison' => config('comparisons.easy-truck-shop'),
        'title' => 'ShopView vs Easy Truck Shop | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-maintainx', function () {
    return view('comparison', [
        'comparison' => config('comparisons.maintainx'),
        'title' => 'ShopView vs MaintainX | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-gem-car', function () {
    return view('comparison', [
        'comparison' => config('comparisons.gem-car'),
        'title' => 'ShopView vs GEM-CAR | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-autoleap', function () {
    return view('comparison', [
        'comparison' => config('comparisons.autoleap'),
        'title' => 'ShopView vs AutoLeap | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-quickbooks', function () {
    return view('comparison', [
        'comparison' => config('comparisons.quickbooks'),
        'title' => 'ShopView vs QuickBooks | ShopView',
    ]);
});

Route::get('/compare/shopview-vs-other-alternatives', function () {
    return view('comparison', [
        'comparison' => config('comparisons.other-alternatives'),
        'title' => 'ShopView vs Other Alternatives | ShopView',
    ]);
});
