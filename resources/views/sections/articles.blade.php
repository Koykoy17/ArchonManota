{{--
    sections/articles.blade.php
    ─────────────────────────────────────────────────────────────────
    Articles & Media Section (We are Archon)
    CSS: resources/css/sections/articles.css
    ─────────────────────────────────────────────────────────────────
--}}

<section id="articles" class="articles" aria-label="Articles & Media">
    {{-- Background Image (bg-articles.png) rendered crisp and 100% sharp --}}
    <img src="{{ asset('images/backgrounds/bg-articles.png') }}"
         alt=""
         class="articles__bg-shape"
         aria-hidden="true"
         loading="lazy"
         decoding="async">

    <div class="articles__container">

        {{-- ── Section Header (Centered) ────────────────────────────── --}}
        <div class="articles__header">
            <span class="articles__badge">Article</span>
            <h2 class="articles__heading">
                We are <span class="articles__heading-accent">Archon</span>
            </h2>
        </div>

        {{-- ── 3-Column Articles Grid ───────────────────────────────── --}}
        <div class="articles__grid">

            {{-- Card 1: Mother Nature --}}
            <article class="articles__card">
                <div class="articles__card-img-wrapper">
                    <img src="{{ asset('images/articles/article-1.png') }}"
                         alt="Archon gives back to Mother Nature tree planting event"
                         class="articles__card-img"
                         loading="lazy"
                         decoding="async">
                </div>

                <div class="articles__card-body">
                    <span class="articles__card-date">March 8, 2025</span>

                    <h3 class="articles__card-title">
                        Archon gives back to Mother Nature
                    </h3>

                    <a href="#article-1" class="articles__card-link" aria-label="Read article: Archon gives back to Mother Nature">
                        <svg class="articles__link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                        Read Article
                    </a>

                    <div class="articles__card-border-strip"></div>
                </div>
            </article>

            {{-- Card 2: Sinotruk Partnership --}}
            <article class="articles__card">
                <div class="articles__card-img-wrapper">
                    <img src="{{ asset('images/articles/article-2.png') }}"
                         alt="Archon, Sinotruk Strengthen partnership handshake"
                         class="articles__card-img"
                         loading="lazy"
                         decoding="async">
                </div>

                <div class="articles__card-body">
                    <span class="articles__card-date">March 8, 2025</span>

                    <h3 class="articles__card-title">
                        Archon, Sinotruk Strenghten partnership
                    </h3>

                    <a href="#article-2" class="articles__card-link" aria-label="Read article: Archon, Sinotruk Strengthen partnership">
                        <svg class="articles__link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                        Read Article
                    </a>

                    <div class="articles__card-border-strip"></div>
                </div>
            </article>

            {{-- Card 3: Philcon Event 2025 --}}
            <article class="articles__card">
                <div class="articles__card-img-wrapper">
                    <img src="{{ asset('images/articles/article-3.png') }}"
                         alt="Philcon Event 2025 conference"
                         class="articles__card-img"
                         loading="lazy"
                         decoding="async">
                </div>

                <div class="articles__card-body">
                    <span class="articles__card-date">March 8, 2025</span>

                    <h3 class="articles__card-title">
                        Philcon Event 2025
                    </h3>

                    <a href="#article-3" class="articles__card-link" aria-label="Read article: Philcon Event 2025">
                        <svg class="articles__link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                        Read Article
                    </a>

                    <div class="articles__card-border-strip"></div>
                </div>
            </article>

        </div>{{-- /.articles__grid --}}

    </div>{{-- /.articles__container --}}
</section>
