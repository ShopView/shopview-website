# Technical Components Audit - Match shopview.com

## Overview
Audit and implement all technical components (tracking codes, meta tags, schema, etc.) to match shopview.com across all pages.

## Gap Analysis

### What shopview.com Has (That We're Missing)

| Component | shopview.com | Our Site | Status |
|-----------|--------------|----------|--------|
| Google Tag Manager | `GTM-T9CR5RFW` | None | Missing |
| HubSpot Analytics | Portal 44523251, page tracking | Forms only, no analytics | Missing |
| Intercom Chat | App ID `u6fon4u9` | None | Missing |
| Reddit Pixel | `a2_hbaudjdhk5kd` | None | Missing |
| JSON-LD Schema | SoftwareApplication (5.0 stars, 78 reviews) | None | Missing |
| og:image | Set | Not set | Missing |
| og:url | Set | Not set | Missing |
| Canonical URL | Set | Not set | Missing |
| favicon.svg | Present | Referenced but file missing | Missing |

### What We Already Have
- Basic meta tags (charset, viewport, description)
- Open Graph tags (og:type, og:title, og:description)
- Twitter Card tags (card, title, description)
- favicon.ico
- HubSpot forms on trial/demo/contact pages
- Vite asset bundling

---

## Tracking IDs Summary

| Service | ID |
|---------|-----|
| Google Tag Manager | `GTM-T9CR5RFW` |
| HubSpot Portal | `44523251` |
| Intercom App | `u6fon4u9` |
| Reddit Pixel | `a2_hbaudjdhk5kd` |

---

## Implementation Status

### Completed
- [x] Google Tag Manager (head + noscript) - `GTM-T9CR5RFW`
- [x] HubSpot Analytics tracking - Portal `44523251`
- [x] Intercom Chat widget - App ID `u6fon4u9`
- [x] Reddit Pixel - `a2_hbaudjdhk5kd`
- [x] JSON-LD Schema (SoftwareApplication with 5.0 rating, 78 reviews)
- [x] Enhanced meta tags (canonical, og:url, og:site_name, robots, theme-color)

### Deferred / TODO

#### Contact Page HubSpot Form ID
- **File:** `resources/views/contact.blade.php`
- **Issue:** Currently has `CONTACT_FORM_ID_PLACEHOLDER`
- **Action:** Replace with actual HubSpot form ID from HubSpot account

#### Image Assets Needed
| Asset | Location | Size/Format |
|-------|----------|-------------|
| OG Image | `public/images/og-image.jpg` | 1200x630px |
| Favicon SVG | `public/favicon.svg` | SVG format |
| Apple Touch Icon | `public/apple-touch-icon.png` | 180x180px |

---

## Verification Checklist

After implementation, verify:

1. **GTM**: Check browser DevTools Network tab for gtm.js loading
2. **HubSpot**: Verify hs-scripts.com loading, check HubSpot dashboard for page views
3. **Intercom**: Verify chat widget appears in bottom-right corner
4. **Reddit Pixel**: Check Network tab for redditstatic.com/ads/pixel.js
5. **Meta Tags**: Use Facebook Sharing Debugger and Twitter Card Validator
6. **JSON-LD**: Use Google Rich Results Test tool
7. **All Pages**: Verify tracking fires on navigation between pages

---

## Code Snippets for Reference

### Google Tag Manager (Head)
```html
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T9CR5RFW');</script>
<!-- End Google Tag Manager -->
```

### Google Tag Manager (Body noscript)
```html
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9CR5RFW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
```

### HubSpot Analytics
```html
<!-- HubSpot Analytics -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/44523251.js"></script>
```

### Intercom
```html
<!-- Intercom -->
<script>
  window.intercomSettings = {
    api_base: "https://api-iam.intercom.io",
    app_id: "u6fon4u9"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/u6fon4u9';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
```

### Reddit Pixel
```html
<!-- Reddit Pixel -->
<script>
!function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);
rdt('init','a2_hbaudjdhk5kd');
rdt('track', 'PageVisit');
</script>
```

### JSON-LD Schema
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ShopView",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "description": "Free trial available"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "78"
  },
  "featureList": ["Work orders", "QuickBooks integration", "Digital vehicle inspections", "Inventory management"]
}
</script>
```
