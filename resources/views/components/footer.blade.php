{{--
    components/footer.blade.php
    ─────────────────────────────────────────────────────────────────
    Site-wide Footer Component
    CSS: resources/css/layout/footer.css
    ─────────────────────────────────────────────────────────────────
--}}

<footer id="footer" class="footer" role="contentinfo" aria-label="Site footer">

    {{-- ── Floating Main Container ──────────────────────────────────── --}}
    <div class="footer__floating-container">
        <div class="footer__grid">

            {{-- ── Column 1: Quick Contact ─────────────────────────── --}}
            <div class="footer__contact-col">
                <h3 class="footer__col-heading">Quick Contact</h3>
                <p class="footer__contact-sub">If you have any questions or need assistance, don't hesitate to reach out to our team.</p>

                <hr class="footer__col-divider">

                {{-- Where we located --}}
                <div class="footer__contact-block">
                    <p class="footer__contact-label">Where we located:</p>
                    <div class="footer__contact-row">
                        <img src="{{ asset('images/icons/icon-location.png') }}" alt="" class="footer__contact-icon" aria-hidden="true">
                        <a href="https://maps.google.com/?q=Door+14-18+Asiaprime+Center+G+Del+Pilar+St+Davao+City"
                           class="footer__contact-link footer__contact-link--gold"
                           target="_blank" rel="noopener noreferrer">
                            Door 14-18 Asiaprime Center, G. Del Pilar St. Corner Dacudao Avenue, Brgy. Agdao Proper, Agdao District, Davao City
                        </a>
                    </div>
                </div>

                <hr class="footer__col-divider">

                {{-- Send us email --}}
                <div class="footer__contact-block">
                    <p class="footer__contact-label">Send us email:</p>
                    <div class="footer__contact-row">
                        <img src="{{ asset('images/icons/icon-email.png') }}" alt="" class="footer__contact-icon" aria-hidden="true">
                        <a href="mailto:archon.salesdivision@gmail.com"
                           class="footer__contact-link footer__contact-link--gold">
                            archon.salesdivision@gmail.com
                        </a>
                    </div>
                </div>

                <hr class="footer__col-divider">

                {{-- Dial us today --}}
                <div class="footer__contact-block">
                    <p class="footer__contact-label">Dial us today:</p>
                    <div class="footer__contact-row">
                        <img src="{{ asset('images/icons/icon-call.png') }}" alt="" class="footer__contact-icon" aria-hidden="true">
                        <a href="tel:+639171330643"
                           class="footer__contact-link footer__contact-link--gold">
                            (63) 917 133 0643
                        </a>
                    </div>
                </div>

                <hr class="footer__col-divider">

                {{-- Social icons --}}
                <div class="footer__social-block">
                    <p class="footer__contact-label">Follow us on</p>
                    <ul class="footer__social" role="list" aria-label="Social media links">
                        <li class="footer__social-item">
                            <a href="https://www.facebook.com/krian.manota.16/" class="footer__social-link" aria-label="Follow us on Facebook" rel="noopener noreferrer" target="_blank">
                                <img src="{{ asset('images/icons/icon-facebook.png') }}" alt="Facebook" class="footer__social-img">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="https://www.linkedin.com/login" class="footer__social-link" aria-label="Follow us on LinkedIn" rel="noopener noreferrer" target="_blank">
                                <img src="{{ asset('images/icons/icon-linkedin.png') }}" alt="LinkedIn" class="footer__social-img">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="https://www.tiktok.com/" class="footer__social-link" aria-label="Follow us on TikTok" rel="noopener noreferrer" target="_blank">
                                <img src="{{ asset('images/icons/icon-tiktok.png') }}" alt="TikTok" class="footer__social-img">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="https://www.youtube.com/" class="footer__social-link" aria-label="Watch us on YouTube" rel="noopener noreferrer" target="_blank">
                                <img src="{{ asset('images/icons/icon-youtube.png') }}" alt="YouTube" class="footer__social-img">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>{{-- /.footer__contact-col --}}

            {{-- ── Column 2 + 3: Right area ───────────────────────── --}}
            <div class="footer__right-area">

                {{-- Top row: Quick Links + Brand --}}
                <div class="footer__right-top">

                    {{-- Quick Links --}}
                    <div class="footer__links-col">
                        <h3 class="footer__col-heading">Quick Links</h3>
                        <div class="footer__links-two-col">
                            <ul class="footer__links-list" role="list">
                                <li><a href="#about" class="footer__link">About us</a></li>
                                <li><a href="#products" class="footer__link">Products</a></li>
                                <li><a href="#" class="footer__link">Brand New</a></li>
                                <li><a href="#" class="footer__link">Parts</a></li>
                            </ul>
                            <ul class="footer__links-list" role="list">
                                <li><a href="#services" class="footer__link">Services</a></li>
                                <li><a href="#articles" class="footer__link">News</a></li>
                                <li><a href="#quote" class="footer__link">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>{{-- /.footer__links-col --}}

                    {{-- Brand --}}
                    <div class="footer__brand-col">
                        <div class="footer__brand-logo">
                            <img src="{{ asset('images/logos/archon-footer-logo.png') }}"
                                 alt="Archon Special Machineries Inc. logo badge"
                                 class="footer__brand-badge">
                        </div>
                        <h4 class="footer__brand-name">ARCHON SPECIAL MACHINERIES INC.</h4>
                        <p class="footer__brand-desc">
                            is the leading distributor of trucks &amp; heavy equipment nationwide. We are a certified partner and dealer of SINOTRUK, the largest and number one manufacturer of trucks and heavy equipment in China.
                        </p>
                    </div>{{-- /.footer__brand-col --}}

                </div>{{-- /.footer__right-top --}}

                {{-- Newsletter — below Quick Links + Brand --}}
                <div class="footer__newsletter-container">
                    <div class="footer__newsletter-wrap">
                        <form class="footer__newsletter-form" aria-label="Newsletter signup" action="#" method="POST">
                            @csrf
                            <label for="footer-email" class="sr-only">Email address</label>
                            <input
                                id="footer-email"
                                class="footer__newsletter-input"
                                type="email"
                                name="email"
                                placeholder="Enter your email to receive curated content, including industry alerts, news, and insights..."
                                autocomplete="email"
                                required
                                aria-label="Enter your email address">
                            <button
                                type="submit"
                                class="footer__newsletter-btn"
                                aria-label="Subscribe to newsletter">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>{{-- /.footer__newsletter-container --}}

            </div>{{-- /.footer__right-area --}}

        </div>{{-- /.footer__grid --}}

        {{-- ── Bottom bar (inside floating container) ─────────────── --}}
        <div class="footer__bottom">
            <div class="footer__bottom-inner">
                <p class="footer__copyright">
                    Copyright Archon Special Machineries Inc {{ date('Y') }}, Designed and Developed by R Web Solutions
                </p>
                <ul class="footer__legal-links" role="list" aria-label="Legal links">
                    <li class="footer__legal-item">
                        <a href="#" class="footer__legal-link">Terms and Conditions</a>
                    </li>
                    <li class="footer__legal-item footer__legal-separator" aria-hidden="true">|</li>
                    <li class="footer__legal-item">
                        <a href="#" class="footer__legal-link">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>{{-- /.footer__bottom --}}

    </div>{{-- /.footer__floating-container --}}

</footer>
