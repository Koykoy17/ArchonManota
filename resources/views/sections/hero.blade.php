{{--
    sections/hero.blade.php
    ─────────────────────────────────────────────────────────────────
    Hero Section — Design Spec Exact Layout
    ─────────────────────────────────────────────────────────────────
--}}

<section id="home"
         class="hero"
         aria-labelledby="hero-heading">

    {{-- Full-width dark background image --}}
    <div class="hero__bg" aria-hidden="true">
        <img
            src="{{ asset('images/hero/hero-background.png') }}"
            alt=""
            class="hero__bg-img"
            loading="eager"
            fetchpriority="high"
            decoding="async">
    </div>

    {{-- Main Container --}}
    <div class="hero__inner">

        {{-- Left Content Column --}}
        <div class="hero__content">

            {{-- 1st Row: YOUR RELIABLE / 2nd Row: HEAVY DUTY TRUCK / 3rd Row: PROVIDER --}}
            <h1 id="hero-heading" class="hero__headline">
                <span class="hero__line">
                    <span class="hero__word--white">YOUR</span> <span class="hero__word--red">RELIABLE</span>
                </span>
                <span class="hero__line hero__line--white">HEAVY DUTY TRUCK</span>
                <span class="hero__line hero__line--gold">PROVIDER</span>
            </h1>

            {{-- Slide Arrows (Positioned under PROVIDER, shifted) --}}
            <div class="hero__arrows" role="group" aria-label="Slide navigation">
                <button class="hero__arrow hero__arrow--next" type="button" aria-label="Next slide">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="64" height="48" viewBox="0 0 64 48"
                         fill="none" stroke="currentColor"
                         stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="24" x2="60" y2="24"></line>
                        <polyline points="38 4 60 24 38 44"></polyline>
                    </svg>
                </button>
                <button class="hero__arrow hero__arrow--prev" type="button" aria-label="Previous slide">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="64" height="48" viewBox="0 0 64 48"
                         fill="none" stroke="currentColor"
                         stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="62" y1="24" x2="4" y2="24"></line>
                        <polyline points="26 4 4 24 26 44"></polyline>
                    </svg>
                </button>
            </div>

            {{-- Left Paragraph --}}
            <p class="hero__description">
                Archon is the premier distributor of<br class="hero__desc-br">
                China's renowned brands, specializing<br class="hero__desc-br">
                in HOWO trucks and heavy equipment.
            </p>

            {{-- Watch Video CTA (Gold Spec) --}}
            <a href="#" class="hero__watch" aria-label="Watch our company overview video">
                <span class="hero__watch-circle" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="#CB9F53">
                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                    </svg>
                </span>
                <span class="hero__watch-text">Watch Video</span>
            </a>

        </div>{{-- /.hero__content --}}

        {{-- Right Top Block (Paragraph + Request Quote CTA) --}}
        <div class="hero__aside">
            <div class="hero__top-bar">
                <p class="hero__top-bar-text">
                    Archon is the top distributor of China's famous brands – HOWO trucks heavy equipment
                </p>
                <a href="#quote" class="hero__quote-btn" aria-label="Request a quote">
                    Request Quote
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="16" height="16" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor"
                         stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>

    </div>{{-- /.hero__inner --}}

    {{--
        Truck Image Banner (img-banner.png / hero-truck.png)
        ABSOLUTELY POSITIONED AT BOTTOM-RIGHT
    --}}
    <div class="hero__truck-card">
        <img
            src="{{ asset('images/hero/hero-truck.png') }}"
            alt="HOWO Heavy Duty Truck"
            class="hero__truck-img"
            loading="eager"
            fetchpriority="high"
            decoding="async">
    </div>

</section>
