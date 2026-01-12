<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T9CR5RFW');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $defaultDescription = "Increase your heavy-duty repair shop's revenue by 20%+ with ShopView. Boost technician efficiency and manage jobs profitably with our platform.";
    @endphp
    <meta name="description" content="{{ $description ?? $defaultDescription }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#257CFF">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="ShopView">
    <meta property="og:title" content="{{ $title ?? 'ShopView' }}">
    <meta property="og:description" content="{{ $description ?? $defaultDescription }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ $title ?? 'ShopView' }}">
    <meta property="twitter:description" content="{{ $description ?? $defaultDescription }}">

    <title>{{ $title ?? 'ShopView' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- HubSpot Analytics -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/44523251.js"></script>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SoftwareApplication",
        "name": "ShopView",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web",
        "url": "https://shopview.com",
        "offers": {
            "@@type": "Offer",
            "price": "0",
            "priceCurrency": "USD",
            "description": "Free trial available"
        },
        "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "5.0",
            "reviewCount": "78"
        },
        "featureList": ["Work orders", "QuickBooks integration", "Digital vehicle inspections", "Inventory management", "Technician time tracking", "Estimates and invoicing"]
    }
    </script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9CR5RFW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @yield('content')

    <!-- Intercom -->
    <script>
        window.intercomSettings = {
            api_base: "https://api-iam.intercom.io",
            app_id: "u6fon4u9"
        };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/u6fon4u9';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

    <!-- Reddit Pixel -->
    <script>
    !function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);
    rdt('init','a2_hbaudjdhk5kd');
    rdt('track', 'PageVisit');
    </script>
</body>
</html>
