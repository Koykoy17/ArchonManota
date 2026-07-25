{{--
    components/navbar.blade.php
    ─────────────────────────────────────────────────────────────────
    Site-wide Navigation Bar
    CSS:  resources/css/layout/navbar.css
    JS:   resources/js/components/navbar.js

    Design reference: Archon_Resources/Archon_Website_Sample.png
    Logo: uses actual archon-logo.png image (not a text lettermark)
    Nav links: About Us | Products | Services | Articles
    CTA: "Get in Touch" pill → #quote
    ─────────────────────────────────────────────────────────────────
--}}

<header id="navbar" class="navbar" role="banner">
    <div class="navbar__inner">

        {{-- ── Logo — real Archon image (as shown in design sample) ── --}}
        <a href="#home"
           class="navbar__logo"
           aria-label="Archon Special Machineries — Back to top of Hero section">
            <img
                src="{{ asset('images/logos/archon-logo.png') }}"
                alt="Archon Special Machineries"
                class="navbar__logo-img"
                width="120"
                height="40"
                loading="eager"
                decoding="async">
        </a>

        {{-- ── Desktop Navigation ───────────────────────────────────── --}}
        <nav aria-label="Primary navigation">
            <ul class="navbar__nav" role="list">

                <li class="navbar__nav-item">
                    <a href="#about"
                       class="navbar__nav-link"
                       aria-label="Go to About Us section">
                        About Us
                    </a>
                </li>

                <li class="navbar__nav-item">
                    <a href="#products"
                       class="navbar__nav-link"
                       aria-label="Go to Products section">
                        Products
                    </a>
                </li>

                <li class="navbar__nav-item">
                    <a href="#services"
                       class="navbar__nav-link"
                       aria-label="Go to Services section">
                        Services
                    </a>
                </li>

                <li class="navbar__nav-item">
                    <a href="#articles"
                       class="navbar__nav-link"
                       aria-label="Go to Articles section">
                        Articles
                    </a>
                </li>

            </ul>
        </nav>

        {{-- ── CTA Button — "Get in Touch" ─────────────────────────── --}}
        <a href="#quote"
           class="navbar__cta"
           aria-label="Get in Touch — Go to quote form">
            Get in Touch
        </a>

        {{-- ── Hamburger (mobile only) ──────────────────────────────── --}}
        <button
            id="navbar-hamburger"
            class="navbar__hamburger"
            type="button"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="navbar-mobile-menu">
            <span class="navbar__hamburger-bar" aria-hidden="true"></span>
            <span class="navbar__hamburger-bar" aria-hidden="true"></span>
            <span class="navbar__hamburger-bar" aria-hidden="true"></span>
        </button>

    </div>{{-- /.navbar__inner --}}

    {{-- ── Mobile Menu Dropdown Card ────────────────────────────────── --}}
    <div id="navbar-mobile-menu"
         class="navbar__mobile-menu"
         role="dialog"
         aria-label="Mobile navigation menu"
         aria-modal="false"
         aria-hidden="true">

        <nav aria-label="Mobile primary navigation">
            <ul class="navbar__mobile-nav" role="list">

                <li class="navbar__mobile-nav-item">
                    <a href="#about"
                       class="navbar__mobile-nav-link"
                       aria-label="Go to About Us section">
                        About Us
                    </a>
                </li>

                <li class="navbar__mobile-nav-item">
                    <a href="#products"
                       class="navbar__mobile-nav-link"
                       aria-label="Go to Products section">
                        Products
                    </a>
                </li>

                <li class="navbar__mobile-nav-item">
                    <a href="#services"
                       class="navbar__mobile-nav-link"
                       aria-label="Go to Services section">
                        Services
                    </a>
                </li>

                <li class="navbar__mobile-nav-item">
                    <a href="#articles"
                       class="navbar__mobile-nav-link"
                       aria-label="Go to Articles section">
                        Articles
                    </a>
                </li>

            </ul>
        </nav>

        <a href="#quote"
           class="navbar__mobile-cta"
           aria-label="Get in Touch — Go to quote form">
            Get in Touch
        </a>

    </div>{{-- /#navbar-mobile-menu --}}

</header>
