# Archon Website — Asset Inventory
**Project:** Archon_Website (Laravel 12)
**Source of Truth:** `Archon_Resources/` (read-only client archive — DO NOT MODIFY)
**Working Assets:** `resources/images/` → mirrored to `public/images/`
**Brand Font:** Poppins (Google Fonts)

> All application code (Blade, CSS, JS) must reference assets ONLY from
> `public/images/` using Laravel's `asset('images/...')` helper.
> Never reference `Archon_Resources/` inside application code.

---

## Brand Colors
Source: `Archon_Resources/Color Hex - Font Style.txt`
Defined in: `resources/css/base/variables.css`

| CSS Token       | Hex                       | Role                                  |
|-----------------|---------------------------|---------------------------------------|
| --primary       | #9D0211                   | Brand red — CTA buttons, highlights   |
| --secondary     | #151616                   | Dark background — page base           |
| --accent        | #CB9F53                   | Gold — headings, badges, hover links  |
| --background    | #151616                   | Page background color                 |
| --surface       | #272727                   | Card / panel surface                  |
| --text          | #ffffff                   | Primary body text (dark theme)        |
| --heading       | #ffffff                   | Heading text color                    |
| --border        | rgba(255, 255, 255, 0.10) | Default border                        |
| --muted         | #888888                   | Muted / caption text                  |
| --reddish       | #D95B40                   | Warm reddish — hover states           |
| --blue          | #293378                   | Dim blue — secondary accents          |

---

## Logos
Folder: `resources/images/logos/` | Served: `public/images/logos/`

| Working File            | Original File      | Usage                              |
|-------------------------|--------------------|------------------------------------|
| archon-logo.png         | Archon Logo.png    | Primary logo — navbar, hero        |
| archon-footer-logo.png  | footer-logo.png    | Footer logo variant                |

```blade
{{ asset('images/logos/archon-logo.png') }}
{{ asset('images/logos/archon-footer-logo.png') }}
```

---

## Hero
Folder: `resources/images/hero/` | Served: `public/images/hero/`

| Working File          | Original File   | Usage                                      |
|-----------------------|-----------------|--------------------------------------------|
| hero-truck.png        | img-banner.png  | Truck photo — hero right column (LCP)      |
| hero-background.png   | bg-banner.png   | Full-width dark textured background        |

```blade
{{ asset('images/hero/hero-truck.png') }}
{{ asset('images/hero/hero-background.png') }}
```

Performance: both images use `fetchpriority="high"` — above-the-fold LCP candidates.

---

## Products
Folder: `resources/images/products/` | Served: `public/images/products/`

| Working File          | Original File | Product (from design sample)     |
|-----------------------|---------------|----------------------------------|
| product-truck-1.png   | truck1.png    | Howo A7-X Dump Truck             |
| product-truck-2.png   | truck2.png    | Howo A7 Dump Truck               |
| product-truck-3.png   | truck3.png    | Howo TX Dump Truck               |
| product-truck-4.png   | truck4.png    | Howo A7 Prime Mover              |
| product-truck-5.png   | truck5.png    | Howo 7 Prime Truck               |
| product-truck-6.png   | truck6.png    | Howo A7 T7 Dump Truck            |

```blade
{{ asset('images/products/product-truck-1.png') }}
...
{{ asset('images/products/product-truck-6.png') }}
```

---

## Services
Folder: `resources/images/services/` | Served: `public/images/services/`

| Working File              | Original File     | Usage                              |
|---------------------------|-------------------|------------------------------------|
| services-maintenance.png  | img-services.png  | "Best After Sales" section photo   |

```blade
{{ asset('images/services/services-maintenance.png') }}
```

---

## Articles
Folder: `resources/images/articles/` | Served: `public/images/articles/`

| Working File   | Original File | Article Title (from design)                   |
|----------------|---------------|-----------------------------------------------|
| article-1.png  | news1.png     | Archon gives back to Mother Nature            |
| article-2.png  | news2.png     | Archon Sinotruk Strengthen Partnership        |
| article-3.png  | news3.png     | PhilCon Event 2025                            |

```blade
{{ asset('images/articles/article-1.png') }}
{{ asset('images/articles/article-2.png') }}
{{ asset('images/articles/article-3.png') }}
```

---

## Partners
Folder: `resources/images/partners/` | Served: `public/images/partners/`

| Working File              | Original File | Partner                   |
|---------------------------|---------------|---------------------------|
| partner-howo-sinotruk.png | partner1.png  | HOWO Sinotruk logo        |
| partner-gateway.png       | partner2.png  | Gateway logo              |

```blade
{{ asset('images/partners/partner-howo-sinotruk.png') }}
{{ asset('images/partners/partner-gateway.png') }}
```

---

## Backgrounds
Folder: `resources/images/backgrounds/` | Served: `public/images/backgrounds/`

| Working File              | Original File          | Section Used In                          |
|---------------------------|------------------------|------------------------------------------|
| bg-articles.png           | bg-article.png         | Articles section background texture      |
| bg-world-map.png          | world map 2.png        | About section — decorative world map     |
| bg-download-brochure.png  | download brochure.png  | Quote/About — Industry Solutions card    |

```blade
{{ asset('images/backgrounds/bg-articles.png') }}
{{ asset('images/backgrounds/bg-world-map.png') }}
{{ asset('images/backgrounds/bg-download-brochure.png') }}
```

---

## Shapes
Folder: `resources/images/shapes/` | Served: `public/images/shapes/`
All shapes are decorative — always use `aria-hidden="true"` in HTML.

| Working File              | Original File           | Usage                                |
|---------------------------|-------------------------|--------------------------------------|
| shape-truck-overlay.png   | bg-truck-shape.png      | Hero section — ghost truck silhouette|
| shape-service-bg.png      | bg-service.png          | Services section background shape    |
| shape-quote-bg.png        | bg-rqst quote.png       | Quote section background shape       |
| shape-partners-divider.png| partners line stroke.png| Partners strip — line divider        |

```blade
{{ asset('images/shapes/shape-truck-overlay.png') }}
{{ asset('images/shapes/shape-service-bg.png') }}
{{ asset('images/shapes/shape-quote-bg.png') }}
{{ asset('images/shapes/shape-partners-divider.png') }}
```

---

## Icons
Folder: `resources/images/icons/` | Served: `public/images/icons/`

### Feature Icons (About Section)
| Working File              | Original File          | Feature                   |
|---------------------------|------------------------|---------------------------|
| icon-free-delivery.png    | free delivery.png      | Free Delivery             |
| icon-onsite-repair.png    | on-site repair.png     | On-site Repair            |
| icon-one-year-warranty.png| one year warranty.png  | One Year Warranty         |
| icon-24-hours.png         | 24 hours.png           | 24-Hour Service           |

### Contact Icons
| Working File       | Original File | Usage           |
|--------------------|---------------|-----------------|
| icon-call.png      | call.png      | Phone number    |
| icon-email.png     | email.png     | Email address   |
| icon-location.png  | location.png  | Physical address|

### UI Icons
| Working File   | Original File | Usage                         |
|----------------|---------------|-------------------------------|
| icon-play.png  | Play.png      | Hero "Watch Video" CTA button |

### Social Media Icons
| Working File        | Original File  | Platform  |
|---------------------|----------------|-----------|
| icon-facebook.png   | fb.png         | Facebook  |
| icon-linkedin.png   | LinkedIn.png   | LinkedIn  |
| icon-tiktok.png     | tiktok.png     | TikTok    |
| icon-youtube.png    | yt.png         | YouTube   |

```blade
{{ asset('images/icons/icon-free-delivery.png') }}
{{ asset('images/icons/icon-onsite-repair.png') }}
{{ asset('images/icons/icon-one-year-warranty.png') }}
{{ asset('images/icons/icon-24-hours.png') }}
{{ asset('images/icons/icon-call.png') }}
{{ asset('images/icons/icon-email.png') }}
{{ asset('images/icons/icon-location.png') }}
{{ asset('images/icons/icon-play.png') }}
{{ asset('images/icons/icon-facebook.png') }}
{{ asset('images/icons/icon-linkedin.png') }}
{{ asset('images/icons/icon-tiktok.png') }}
{{ asset('images/icons/icon-youtube.png') }}
```

---

## Total Asset Count

| Category    | Files | Notes                              |
|-------------|-------|------------------------------------|
| Logos       | 2     | Primary + footer variant           |
| Hero        | 2     | Truck photo + bg texture           |
| Products    | 6     | All 6 HOWO truck variants          |
| Services    | 1     | Maintenance section photo          |
| Articles    | 3     | News card thumbnails               |
| Partners    | 2     | Brand partner logos                |
| Backgrounds | 3     | Section background textures        |
| Shapes      | 4     | Decorative overlays (aria-hidden)  |
| Icons       | 12    | Features + contact + social + UI   |
| **TOTAL**   | **35**|                                    |

---

## Client Archive Mapping (Read-Only)

| Location                            | Files | Status                              |
|-------------------------------------|-------|-------------------------------------|
| Archon_Resources/Archon Logo.png    | 1     | Archived → logos/archon-logo.png    |
| Archon_Resources/footer-logo.png    | 1     | Archived → logos/archon-footer-logo.png |
| Archon_Resources/Color Hex *.txt    | 1     | Archived → extracted to variables.css |
| Archon_Resources/Archon_Website_Sample.png | 1 | Design reference only — not deployed |
| Archon_Resources/images/ (17 files) | 17    | Archived → organized in resources/images/ |
| Archon_Resources/icons/ (12 files)  | 12    | Archived → resources/images/icons/  |
| Archon_Resources/shapes-line/ (4 files) | 4 | Archived → resources/images/shapes/ |

**Total client originals: 37 files — all untouched.**

---

## Directory Tree

```
resources/images/
├── articles/
│   ├── article-1.png
│   ├── article-2.png
│   └── article-3.png
├── backgrounds/
│   ├── bg-articles.png
│   ├── bg-download-brochure.png
│   └── bg-world-map.png
├── hero/
│   ├── hero-background.png
│   └── hero-truck.png
├── icons/
│   ├── icon-24-hours.png
│   ├── icon-call.png
│   ├── icon-email.png
│   ├── icon-facebook.png
│   ├── icon-free-delivery.png
│   ├── icon-linkedin.png
│   ├── icon-location.png
│   ├── icon-one-year-warranty.png
│   ├── icon-onsite-repair.png
│   ├── icon-play.png
│   ├── icon-tiktok.png
│   └── icon-youtube.png
├── logos/
│   ├── archon-footer-logo.png
│   └── archon-logo.png
├── partners/
│   ├── partner-gateway.png
│   └── partner-howo-sinotruk.png
├── products/
│   ├── product-truck-1.png
│   ├── product-truck-2.png
│   ├── product-truck-3.png
│   ├── product-truck-4.png
│   ├── product-truck-5.png
│   └── product-truck-6.png
├── services/
│   └── services-maintenance.png
└── shapes/
    ├── shape-partners-divider.png
    ├── shape-quote-bg.png
    ├── shape-service-bg.png
    └── shape-truck-overlay.png

public/images/  ← identical mirror (Laravel serves static assets from here)
```

---

*This document is the single source of truth for asset organization throughout the Archon Website project.*
*Update this file whenever new assets are added.*
