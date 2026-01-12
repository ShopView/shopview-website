# ShopView Laravel Website - Project Status

**Last Updated:** January 12, 2026

---

## Project Overview

Rebuilding the ShopView marketing website using Laravel Blade templates with Tailwind CSS dark theme. The goal is to match the existing shopview.com website structure and content exactly.

---

## Completed Pages

### Homepage
- [x] `home.blade.php` - Main homepage with all sections
- [x] Components in `components/home/` (hero, features, testimonials, ROI calculator, etc.)

### Industry Pages (12 pages)
All use shared template `industry.blade.php` with data from `config/industries.php`

| URL | Status |
|-----|--------|
| `/diesel-truck-repair-shop-software` | Complete |
| `/heavy-equipment-repair-software` | Complete |
| `/fleet-maintenance-management-software` | Complete |
| `/agriculture-equipment-repair-shop-software` | Complete |
| `/fire-truck-and-ambulance-repair-shop-software` | Complete |
| `/truck-and-trailer-repair-shop-software` | Complete |
| `/construction-fleet-maintenance-software` | Complete |
| `/tow-truck-repair-shop-software` | Complete |
| `/mobile-equipment-repair-shop-software` | Complete |
| `/rv-repair-shop-software` | Complete |
| `/independent-repair-shop-management-software` | Complete (NEW) |
| `/multi-location-repair-shop-management-software` | Complete (NEW) |

### Comparison Pages (11 pages)
All use shared template `comparison.blade.php` with data from `config/comparisons.php`
- All include comparison table component with feature comparisons

| URL | Status |
|-----|--------|
| `/compare/shopview-vs-fullbay` | Complete |
| `/compare/shopview-vs-shopmonkey` | Complete |
| `/compare/shopview-vs-shopboss` | Complete |
| `/compare/shopview-vs-mitchell1` | Complete |
| `/compare/shopview-vs-tekmetric` | Complete |
| `/compare/shopview-vs-easy-truck-shop` | Complete |
| `/compare/shopview-vs-maintainx` | Complete |
| `/compare/shopview-vs-gem-car` | Complete |
| `/compare/shopview-vs-autoleap` | Complete |
| `/compare/shopview-vs-quickbooks` | Complete |
| `/compare/shopview-vs-other-alternatives` | Complete |

### Marketing/Conversion Pages
| Page | Status | Notes |
|------|--------|-------|
| `/trial` | Complete | HubSpot form (ID: 290eb3c9-7931-4b14-a1e9-79142bb01e39) |
| `/demo` | Complete | HubSpot form (ID: bde4aaaf-bf86-4928-9340-9a237c8fd226) |
| `/contact` | Complete | HubSpot form (PLACEHOLDER - needs real form ID) |
| `/features` | Complete | Features overview/index page |
| `/pricing` | Exists | Content not verified |

### Company Pages
| Page | Status |
|------|--------|
| `/about` | Complete - verified against shopview.com |
| `/careers` | Complete - verified against shopview.com |

### Legal Pages
| Page | Status |
|------|--------|
| `/privacy` | Complete |
| `/terms` | Complete - 18 sections |
| `/candidate-privacy-policy` | Complete |

---

## Technical Components (Global)

All implemented in `resources/views/layouts/app.blade.php`:

| Component | Status | ID/Details |
|-----------|--------|------------|
| Google Tag Manager | Complete | `GTM-T9CR5RFW` |
| HubSpot Analytics | Complete | Portal `44523251` |
| Intercom Chat Widget | Complete | App ID `u6fon4u9` |
| Reddit Pixel | Complete | `a2_hbaudjdhk5kd` |
| JSON-LD Schema | Complete | SoftwareApplication (5.0 rating, 78 reviews) |
| Canonical URLs | Complete | Dynamic via `url()->current()` |
| Open Graph Tags | Complete | og:type, og:url, og:title, og:description, og:site_name |
| Twitter Cards | Complete | card, title, description |
| Meta Tags | Complete | robots, theme-color, description |

### Deferred Technical Items
| Item | Status | Notes |
|------|--------|-------|
| Contact HubSpot Form ID | Pending | Currently has placeholder |
| OG Image | Pending | `public/images/og-image.jpg` not created |
| favicon.svg | Pending | Referenced but file doesn't exist |
| Apple Touch Icon | Pending | `public/apple-touch-icon.png` not created |

See `docs/technical-components-audit.md` for full details.

---

## Pages Needing Content Verification

These pages have views and routes but content has NOT been verified against shopview.com:

### Feature Pages (6 pages)
| URL | View Exists | Content Verified |
|-----|-------------|------------------|
| `/features/work-orders` | Yes | NO |
| `/features/estimates-invoices` | Yes | NO |
| `/features/scheduling` | Yes | NO |
| `/features/technician-time-tracking` | Yes | NO |
| `/features/inventory-management` | Yes | NO |
| `/features/reporting-analytics` | Yes | NO |

### Integration Pages (4 pages)
| URL | View Exists | Content Verified |
|-----|-------------|------------------|
| `/integrations/quickbooks` | Yes | NO |
| `/integrations/ibs` | Yes | NO |
| `/integrations/shopcoach` | Yes | NO |
| `/integrations/labor-guides` | Yes | NO |

### Additional Feature Pages (3 pages)
| URL | View Exists | Content Verified |
|-----|-------------|------------------|
| `/features/vin-decoder` | Yes | NO |
| `/features/shoppay` | Yes | NO |
| `/features/customer-portal` | Yes | NO |

### Services Pages (3 pages)
| URL | View Exists | Content Verified |
|-----|-------------|------------------|
| `/services/websites` | Yes | NO |
| `/services/leads` | Yes | NO |
| `/services/bookkeeping` | Yes | NO |

### Case Studies
| URL | View Exists | Content Verified |
|-----|-------------|------------------|
| `/case-studies` (index) | Yes | NO |
| `/case-studies/case-study-foothills-group` | Yes | NO |
| `/case-studies/haylock-truck-and-trailer` | Yes | NO |
| `/case-studies/ss-auto-repair-ltd` | Yes | NO |

---

## TODO - Remaining Work

### High Priority
1. [ ] Get actual HubSpot form ID for `/contact` page
2. [ ] Verify and fix content for all Feature pages (6 pages)
3. [ ] Verify and fix content for all Integration pages (4 pages)
4. [ ] Verify and fix content for Pricing page

### Medium Priority
5. [ ] Verify and fix content for Services pages (3 pages)
6. [ ] Verify and fix content for Case Studies (index + 3 studies)
7. [ ] Verify VIN Decoder, ShopPay, Customer Portal pages
8. [ ] Create OG image for social sharing
9. [ ] Create favicon.svg and apple-touch-icon.png

### Low Priority
10. [ ] Create individual career detail pages (4 pages)
11. [ ] Add blog functionality (if needed)
12. [ ] Verify all navigation links are correct
13. [ ] Verify all footer links are correct

---

## File Structure

```
resources/views/
├── layouts/
│   └── app.blade.php          # Main layout with all tracking codes
├── components/
│   ├── navigation.blade.php
│   ├── footer.blade.php
│   ├── cta-section.blade.php
│   ├── home/                  # Homepage components
│   ├── industry/              # Industry page components
│   ├── comparison/            # Comparison page components (includes comparison-table)
│   ├── feature/               # Feature page components
│   └── case-study/            # Case study components
├── features/                  # Individual feature pages
├── integrations/              # Integration pages
├── services/                  # Services pages
├── home.blade.php
├── industry.blade.php
├── comparison.blade.php
├── feature.blade.php
├── case-study.blade.php
├── case-studies.blade.php
├── pricing.blade.php
├── about.blade.php
├── careers.blade.php
├── contact.blade.php          # NEW
├── features.blade.php         # NEW - Features overview
├── trial.blade.php            # NEW
├── demo.blade.php             # NEW
├── privacy.blade.php
├── terms.blade.php
└── candidate-privacy-policy.blade.php

config/
├── industries.php             # Data for 12 industry pages
├── comparisons.php            # Data for 11 comparison pages (with comparison tables)
└── case-studies.php           # Data for case studies

docs/
└── technical-components-audit.md  # Technical implementation tracking

routes/
└── web.php                    # All page routes
```

---

## Config Files

| File | Purpose | Status |
|------|---------|--------|
| `config/industries.php` | Industry page data (12 industries) | Complete |
| `config/comparisons.php` | Comparison page data (11 competitors) with comparison tables | Complete |
| `config/case-studies.php` | Case study data | Exists - needs verification |

---

## HubSpot Form IDs

| Form | Portal ID | Form ID |
|------|-----------|---------|
| Trial | 44523251 | `290eb3c9-7931-4b14-a1e9-79142bb01e39` |
| Demo | 44523251 | `bde4aaaf-bf86-4928-9340-9a237c8fd226` |
| Contact | 44523251 | `CONTACT_FORM_ID_PLACEHOLDER` (needs real ID) |
| ROI Calculator | 44523251 | `ef3c4500-e98e-4e22-ba1f-3b2dde8cb895` |

---

## Notes

- All content should match shopview.com exactly - no paraphrasing
- Dark theme with Tailwind CSS
- Reusable Blade components for consistency
- Config-driven pages for industries, comparisons, and case studies
- HubSpot form styling in `resources/css/app.css`
- JSON-LD uses `@@` to escape `@` symbols in Blade templates
