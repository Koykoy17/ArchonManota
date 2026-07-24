{{--
    sections/products.blade.php
    ─────────────────────────────────────────────────────────────────
    Featured Products Section
    CSS: resources/css/sections/products.css
    ─────────────────────────────────────────────────────────────────
--}}

<section id="products" class="products" aria-label="Featured Products">
    <div class="products__container">

        {{-- Section Header (Centered above grid) --}}
        <div class="products__header">
            <span class="products__badge">Durable & Efficient</span>
            <h2 class="products__title">Featured Products</h2>
        </div>

        {{-- Product Grid (3 columns on desktop, 6 products total) --}}
        <div class="products__grid">

            {{-- Product Card 1 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    {{-- Background shape overlay (appears on hover behind truck) --}}
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    {{-- Truck Image (in front of bg shape) --}}
                    <img src="{{ asset('images/products/product-truck-1.png') }}"
                         alt="Howo v7-x Dump Truck"
                         class="product-card__img"
                         loading="lazy">
                </div>

                {{-- Interactive Bottom Row (Swatches default, Quick View/Compare on hover) --}}
                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                {{-- Product Name --}}
                <h3 class="product-card__name">Howo v7-x Dump Truck</h3>
            </div>

            {{-- Product Card 2 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    <img src="{{ asset('images/products/product-truck-2.png') }}"
                         alt="Howo v7 Dump Truck"
                         class="product-card__img"
                         loading="lazy">
                </div>

                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                <h3 class="product-card__name">Howo v7 Dump Truck</h3>
            </div>

            {{-- Product Card 3 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    <img src="{{ asset('images/products/product-truck-3.png') }}"
                         alt="Howo TX Dump Truck"
                         class="product-card__img"
                         loading="lazy">
                </div>

                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                <h3 class="product-card__name">Howo TX Dump Truck</h3>
            </div>

            {{-- Product Card 4 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    <img src="{{ asset('images/products/product-truck-4.png') }}"
                         alt="Howo A7 | T7 Prime Mover"
                         class="product-card__img"
                         loading="lazy">
                </div>

                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                <h3 class="product-card__name">Howo A7 | T7 Prime Mover</h3>
            </div>

            {{-- Product Card 5 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    <img src="{{ asset('images/products/product-truck-5.png') }}"
                         alt="Howo 7 Prime Truck"
                         class="product-card__img"
                         loading="lazy">
                </div>

                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                <h3 class="product-card__name">Howo 7 Prime Truck</h3>
            </div>

            {{-- Product Card 6 --}}
            <div class="product-card">
                <div class="product-card__image-wrap">
                    <img src="{{ asset('images/shapes/shape-truck-overlay.png') }}"
                         alt=""
                         class="product-card__bg-shape"
                         aria-hidden="true">

                    <img src="{{ asset('images/products/product-truck-6.png') }}"
                         alt="Howo A7 | T7 Dump Truck"
                         class="product-card__img"
                         loading="lazy">
                </div>

                <div class="product-card__bottom-row">
                    <div class="product-card__swatches" aria-label="Available colors">
                        <span class="product-card__swatch product-card__swatch--white" title="White"></span>
                        <span class="product-card__swatch product-card__swatch--red" title="Red / Orange"></span>
                        <span class="product-card__swatch product-card__swatch--blue" title="Blue / Navy"></span>
                    </div>

                    <div class="product-card__actions">
                        <button type="button" class="product-card__btn product-card__btn--quickview">
                            Quick View
                        </button>
                        <button type="button" class="product-card__btn product-card__btn--compare">
                            Compare
                        </button>
                    </div>
                </div>

                <h3 class="product-card__name">Howo A7 | T7 Dump Truck</h3>
            </div>

        </div>{{-- /.products__grid --}}

    </div>{{-- /.products__container --}}
</section>
