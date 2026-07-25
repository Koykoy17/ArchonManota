{{--
    sections/about.blade.php
    ─────────────────────────────────────────────────────────────────
    About Us Section — Exact Spec Match
    CSS: resources/css/sections/about.css
    ─────────────────────────────────────────────────────────────────
--}}

<section id="about" class="about" aria-label="About Us">
    <div class="about__container">
        {{-- Decorative World Map Background --}}
        <div class="about__bg-map" aria-hidden="true">
            <img src="{{ asset('images/backgrounds/bg-world-map.png') }}"
                 alt=""
                 class="about__map-img"
                 loading="lazy"
                 decoding="async">
        </div>

        <div class="about__inner">
            {{-- Section Header --}}
            <div class="about__header">
                <span class="about__badge">About Us</span>
                <h2 class="about__title">
                    Archon is the leading provider of Sinotruk Machineries heavy equipment in the Philippines.
                </h2>
            </div>

            {{-- Main Layout Grid --}}
            <div class="about__grid">
                {{-- Top Cards Row (Cards 01, 02, 03) --}}
                <div class="about__cards-top">
                    {{-- Card 01: Free Delivery (Brand Red Highlight) --}}
                    <div class="about__card about__card--primary">
                        <div class="about__card-header">
                            <span class="about__card-number">01</span>
                            <img src="{{ asset('images/icons/icon-free-delivery.png') }}"
                                 alt="Free Delivery icon"
                                 class="about__card-icon"
                                 loading="lazy"
                                 decoding="async">
                        </div>
                        <h3 class="about__card-heading">Free Delivery</h3>
                        <p class="about__card-desc">
                            Getting hold of your new truck is no hassle because we deliver them to you at your doorstep!
                        </p>
                    </div>

                    {{-- Card 02: On-site Repair --}}
                    <div class="about__card about__card--dark">
                        <div class="about__card-header">
                            <span class="about__card-number">02</span>
                            <img src="{{ asset('images/icons/icon-onsite-repair.png') }}"
                                 alt="On-site Repair icon"
                                 class="about__card-icon"
                                 loading="lazy"
                                 decoding="async">
                        </div>
                        <h3 class="about__card-heading">On-site Repair</h3>
                        <p class="about__card-desc">
                            Have troubles with your truck? Don't worry! We'll be there wherever your site may be.
                        </p>
                    </div>

                    {{-- Card 03: One Year Warranty --}}
                    <div class="about__card about__card--dark">
                        <div class="about__card-header">
                            <span class="about__card-number">03</span>
                            <img src="{{ asset('images/icons/icon-one-year-warranty.png') }}"
                                 alt="One Year Warranty icon"
                                 class="about__card-icon"
                                 loading="lazy"
                                 decoding="async">
                        </div>
                        <h3 class="about__card-heading">One Year Warranty</h3>
                        <p class="about__card-desc">
                            We prioritize your peace of mind. Rest assured that all your units have a one-year warranty.
                        </p>
                    </div>
                </div>{{-- /.about__cards-top --}}

                {{-- Bottom Row (Card 04 + Right Copy) --}}
                <div class="about__cards-bottom">
                    {{-- Card 04: 24-Hour Service --}}
                    <div class="about__card about__card--dark">
                        <div class="about__card-header">
                            <span class="about__card-number">04</span>
                            <img src="{{ asset('images/icons/icon-24-hours.png') }}"
                                 alt="24-Hour Service icon"
                                 class="about__card-icon"
                                 loading="lazy"
                                 decoding="async">
                        </div>
                        <h3 class="about__card-heading">24-Hour Service</h3>
                        <p class="about__card-desc">
                            We have you covered, whether at 2pm or 2am! Call our sales associates and service advisors for any concerns you have, and we'll respond!
                        </p>
                    </div>

                    {{-- Right Column Story Copy --}}
                    <div class="about__story">
                        {{-- CLARIFY: confirm final copy --}}
                        <p class="about__story-text">
                            Since 2014, Archon has set its eyes on continuous growth. What started as a young entrant in the industry with only three (3) surplus units on hand has now become a top player with over 1,000 employees nationwide.
                        </p>
                        <p class="about__story-text">
                            We have partnered with China's leading brands, created multiple service stations nationwide, and established Gateway – the reliable parts provider, making us a one-stop shop for all our clients.
                        </p>
                    </div>
                </div>{{-- /.about__cards-bottom --}}

            </div>{{-- /.about__grid --}}
        </div>{{-- /.about__inner --}}
    </div>{{-- /.about__container --}}
</section>
