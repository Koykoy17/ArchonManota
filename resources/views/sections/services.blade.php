{{--
    sections/services.blade.php
    ─────────────────────────────────────────────────────────────────
    Our Services Section (Best After Sales In Maintenance)
    CSS: resources/css/sections/services.css
    JS:  resources/js/components/accordion.js
    ─────────────────────────────────────────────────────────────────
--}}

<section id="services" class="services" aria-label="Our Services">
    <div class="services__container">

        {{-- ── Top Content Block — badge, heading, 1st paragraph on plain dark background ────── --}}
        <div class="services__top-block">
            <span class="services__badge">OUR SERVICES</span>

            <h2 class="services__heading">
                The Best After Sales <span class="services__heading-accent">In Maintenance.</span>
            </h2>

            <p class="services__intro-desc">
                An excellent After-Sales Maintenance Service with state of the art facility and<br>
                highly skilled After-Sales support team.
            </p>
        </div>

        {{-- ── Card Area — bg-service.png wraps ONLY image + accordion row ── --}}
        <div class="services__card-area">
            {{-- Decorative Background Shape Image (bg-service.png) --}}
            <img src="{{ asset('images/shapes/shape-service-bg.png') }}"
                 alt=""
                 class="services__bg-shape"
                 aria-hidden="true">

            <div class="services__card-content">
                {{-- 2nd paragraph inside bg-service.png, above image+accordion --}}
                <p class="services__card-desc">
                    We will assign a dedicated After-Sales Representative to cater to your servicing needs.<br>
                    A highly skilled mechanics are always ready to assist in all technical<br>
                    concerns.
                </p>

                {{-- Two-Column Row (Image Left, Accordion Right) --}}
                <div class="services__row">

                    {{-- LEFT — Image --}}
                    <div class="services__image-col">
                        <img src="{{ asset('images/services/services-maintenance.png') }}"
                             alt="Technicians working on truck engine maintenance"
                             class="services__img"
                             loading="lazy">
                    </div>

                    {{-- RIGHT — Accordion List with Vertical Red Indicator Bar --}}
                    <div class="services__accordion-col">
                        <div class="services__accordion-wrapper">

                            <div class="services__accordion" id="services-accordion" role="region" aria-label="Service Options">

                                {{-- Accordion Item 1 (Expanded / Active by default) --}}
                                <div class="services__accordion-item is-active" data-accordion-item>
                                    <button type="button"
                                            class="services__accordion-header"
                                            aria-expanded="true"
                                            aria-controls="service-desc-1">
                                        <span class="services__accordion-title">
                                            <span class="services__title-accent">Preventive</span> Maintenance Services
                                        </span>
                                        <span class="services__accordion-icon" aria-hidden="true">
                                            <svg class="services__arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="6" y1="18" x2="18" y2="6"></line>
                                                <polyline points="9 6 18 6 18 15"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="service-desc-1" class="services__accordion-body">
                                        <p class="services__accordion-text">
                                            To keep your units in tip-top shape and great condition, we conduct PMS.
                                        </p>
                                    </div>
                                </div>{{-- /.services__accordion-item --}}

                                {{-- Accordion Item 2 (Collapsed) --}}
                                <div class="services__accordion-item" data-accordion-item>
                                    <button type="button"
                                            class="services__accordion-header"
                                            aria-expanded="false"
                                            aria-controls="service-desc-2">
                                        <span class="services__accordion-title">
                                            <span class="services__title-accent">Truck</span> Rehab
                                        </span>
                                        <span class="services__accordion-icon" aria-hidden="true">
                                            <svg class="services__arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                <polyline points="9 18 18 18 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="service-desc-2" class="services__accordion-body" hidden>
                                        <p class="services__accordion-text">
                                            Comprehensive truck rehabilitation and restoration services to restore full operational strength.
                                        </p>
                                    </div>
                                </div>{{-- /.services__accordion-item --}}

                                {{-- Accordion Item 3 (Collapsed) --}}
                                <div class="services__accordion-item" data-accordion-item>
                                    <button type="button"
                                            class="services__accordion-header"
                                            aria-expanded="false"
                                            aria-controls="service-desc-3">
                                        <span class="services__accordion-title">
                                            <span class="services__title-accent">On-Site</span> Rescue
                                        </span>
                                        <span class="services__accordion-icon" aria-hidden="true">
                                            <svg class="services__arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                <polyline points="9 18 18 18 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="service-desc-3" class="services__accordion-body" hidden>
                                        <p class="services__accordion-text">
                                            Emergency 24/7 on-site technical assistance and mobile repair team deployment.
                                        </p>
                                    </div>
                                </div>{{-- /.services__accordion-item --}}

                                {{-- Accordion Item 4 (Collapsed) --}}
                                <div class="services__accordion-item" data-accordion-item>
                                    <button type="button"
                                            class="services__accordion-header"
                                            aria-expanded="false"
                                            aria-controls="service-desc-4">
                                        <span class="services__accordion-title">
                                            <span class="services__title-accent">Repair</span> or Replace
                                        </span>
                                        <span class="services__accordion-icon" aria-hidden="true">
                                            <svg class="services__arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                <polyline points="9 18 18 18 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="service-desc-4" class="services__accordion-body" hidden>
                                        <p class="services__accordion-text">
                                            Genuine parts replacement and expert mechanical repair for all major truck components.
                                        </p>
                                    </div>
                                </div>{{-- /.services__accordion-item --}}

                                {{-- Accordion Item 5 (Collapsed) --}}
                                <div class="services__accordion-item" data-accordion-item>
                                    <button type="button"
                                            class="services__accordion-header"
                                            aria-expanded="false"
                                            aria-controls="service-desc-5">
                                        <span class="services__accordion-title">
                                            Overhauling
                                        </span>
                                        <span class="services__accordion-icon" aria-hidden="true">
                                            <svg class="services__arrow-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                                <polyline points="9 18 18 18 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>

                                    <div id="service-desc-5" class="services__accordion-body" hidden>
                                        <p class="services__accordion-text">
                                            Complete engine, transmission, and heavy-duty chassis overhauling services.
                                        </p>
                                    </div>
                                </div>{{-- /.services__accordion-item --}}

                            </div>{{-- /.services__accordion --}}

                            {{-- Vertical Red/White Progress Indicator Bar --}}
                            <div class="services__scroll-bar" aria-hidden="true">
                                <div class="services__scroll-bar-red" id="services-bar-red"></div>
                                <div class="services__scroll-bar-white"></div>
                                <div class="services__scroll-thumb" id="services-bar-thumb"></div>
                            </div>

                        </div>{{-- /.services__accordion-wrapper --}}
                    </div>{{-- /.services__accordion-col --}}

                </div>{{-- /.services__row --}}
            </div>{{-- /.services__card-content --}}
        </div>{{-- /.services__card-area --}}

    </div>{{-- /.services__container --}}
</section>
