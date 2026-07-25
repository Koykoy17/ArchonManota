{{--
    components/product-modals.blade.php
    ─────────────────────────────────────────────────────────────────
    Interactive Quick View & Compare Modals for Featured Products
    ─────────────────────────────────────────────────────────────────
--}}

{{-- ── Quick View Modal ───────────────────────────────────────────── --}}
<div id="product-quickview-modal" class="product-modal" hidden aria-hidden="true">
    <div class="product-modal__backdrop" id="quickview-backdrop"></div>

    <div class="product-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="quickview-title">
        <button type="button" class="product-modal__close" id="quickview-close" aria-label="Close modal">&times;</button>

        <div class="product-modal__content">
            {{-- Left Column: Truck Image Showcase --}}
            <div class="product-modal__image-col">
                <div class="product-modal__img-wrap">
                    <img id="quickview-img" src="" alt="" class="product-modal__img" loading="lazy" decoding="async">
                </div>
                <div class="product-modal__badge-wrap">
                    <span class="product-modal__badge">SINOTRUK Genuine Unit</span>
                    <span class="product-modal__warranty-badge">★ 1-Year Warranty Included</span>
                </div>
            </div>

            {{-- Right Column: Specs & Details --}}
            <div class="product-modal__info-col">
                <span class="product-modal__category" id="quickview-category">Heavy Duty Dump Truck</span>
                <h3 class="product-modal__title" id="quickview-title">Howo v7-x Dump Truck</h3>

                <p class="product-modal__desc" id="quickview-desc">
                    Engineered for high performance, maximum durability, and superior fuel economy in demanding mining and construction operations.
                </p>

                {{-- Specs Grid --}}
                <div class="product-modal__specs-grid">
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Engine Model</span>
                        <span class="product-modal__spec-val" id="quickview-spec-engine">WD615.47 Euro IV</span>
                    </div>
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Horsepower</span>
                        <span class="product-modal__spec-val" id="quickview-spec-hp">371 HP @ 2200rpm</span>
                    </div>
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Max Payload</span>
                        <span class="product-modal__spec-val" id="quickview-spec-payload">30 Tons</span>
                    </div>
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Transmission</span>
                        <span class="product-modal__spec-val" id="quickview-spec-trans">HW19710 10-Speed</span>
                    </div>
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Drive Line</span>
                        <span class="product-modal__spec-val" id="quickview-spec-axle">6x4 Heavy Duty</span>
                    </div>
                    <div class="product-modal__spec-item">
                        <span class="product-modal__spec-label">Fuel Tank</span>
                        <span class="product-modal__spec-val" id="quickview-spec-fuel">400L Aluminum</span>
                    </div>
                </div>

                {{-- Features List --}}
                <div class="product-modal__highlights">
                    <span class="product-modal__highlight-tag">✓ Air-Conditioned Cabin</span>
                    <span class="product-modal__highlight-tag">✓ Sleeper Bed Included</span>
                    <span class="product-modal__highlight-tag">✓ ABS Braking System</span>
                    <span class="product-modal__highlight-tag">✓ 24/7 On-Site Rescue</span>
                </div>

                {{-- Modal Actions --}}
                <div class="product-modal__actions">
                    <a href="#quote" class="product-modal__cta-btn" id="quickview-quote-btn">
                        Request Quote for this Model &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ── Compare Models Modal ────────────────────────────────────────── --}}
<div id="product-compare-modal" class="product-modal product-modal--compare" hidden aria-hidden="true">
    <div class="product-modal__backdrop" id="compare-backdrop"></div>

    <div class="product-modal__dialog product-modal__dialog--wide" role="dialog" aria-modal="true" aria-labelledby="compare-title">
        <button type="button" class="product-modal__close" id="compare-close" aria-label="Close modal">&times;</button>

        <div class="product-modal__header">
            <h3 class="product-modal__title" id="compare-title">Compare Truck Specifications</h3>
            <p class="product-modal__subtitle">Compare features, horsepower, payload capacity, and transmission specs side-by-side.</p>
        </div>

        <div class="product-modal__compare-body">
            {{-- Compare Cards Container (2 columns) --}}
            <div class="product-modal__compare-grid">

                {{-- Left Truck (Base Selection / Selector A) --}}
                <div class="product-modal__compare-col product-modal__compare-col--base">
                    <div class="product-modal__compare-card">
                        <div class="product-modal__slideshow-controls">
                            <span class="product-modal__compare-tag" id="compare-tag-a">Selected Model</span>
                        </div>

                        {{-- Dropdown Selector for Model A --}}
                        <div class="product-modal__select-wrap">
                            <select id="compare-select-a" class="product-modal__select">
                                <option value="1">Howo v7-x Dump Truck</option>
                                <option value="2">Howo v7 Dump Truck</option>
                                <option value="3">Howo TX Dump Truck</option>
                                <option value="4">Howo A7 | T7 Prime Mover</option>
                                <option value="5">Howo 7 Prime Truck</option>
                                <option value="6">Howo A7 | T7 Dump Truck</option>
                            </select>
                        </div>

                        <img id="compare-img-a" src="" alt="" class="product-modal__compare-img" loading="lazy" decoding="async">
                        <h4 id="compare-name-a" class="product-modal__compare-name">Howo v7-x Dump Truck</h4>
                        <span id="compare-cat-a" class="product-modal__compare-cat">Dump Truck / 6x4</span>
                    </div>

                    <table class="product-modal__compare-table">
                        <tr>
                            <th>Engine</th>
                            <td id="compare-engine-a">WD615.47 (371 HP)</td>
                        </tr>
                        <tr>
                            <th>Horsepower</th>
                            <td id="compare-hp-a">371 HP</td>
                        </tr>
                        <tr>
                            <th>Payload</th>
                            <td id="compare-payload-a">30 Tons</td>
                        </tr>
                        <tr>
                            <th>Transmission</th>
                            <td id="compare-trans-a">10-Speed Manual</td>
                        </tr>
                        <tr>
                            <th>Drive Axle</th>
                            <td id="compare-axle-a">6x4 Heavy Duty</td>
                        </tr>
                        <tr>
                            <th>Fuel Capacity</th>
                            <td id="compare-fuel-a">400 L</td>
                        </tr>
                        <tr>
                            <th>Key Features</th>
                            <td id="compare-features-a">Extended Sleeper Cab</td>
                        </tr>
                    </table>
                </div>

                {{-- VS Divider Badge --}}
                <div class="product-modal__vs-badge">VS</div>

                {{-- Right Truck (Target Selection / Selector B) --}}
                <div class="product-modal__compare-col product-modal__compare-col--target">
                    <div class="product-modal__compare-card">
                        <div class="product-modal__slideshow-controls">
                            <button type="button" class="product-modal__slide-btn" id="compare-prev-btn" aria-label="Previous truck">&lsaquo;</button>
                            <span class="product-modal__compare-tag" id="compare-tag-b">Compare With</span>
                            <button type="button" class="product-modal__slide-btn" id="compare-next-btn" aria-label="Next truck">&rsaquo;</button>
                        </div>

                        {{-- Dropdown Selector for Quick Model Switching --}}
                        <div class="product-modal__select-wrap">
                            <select id="compare-select-b" class="product-modal__select">
                                <option value="1">Howo v7-x Dump Truck</option>
                                <option value="2">Howo v7 Dump Truck</option>
                                <option value="3">Howo TX Dump Truck</option>
                                <option value="4">Howo A7 | T7 Prime Mover</option>
                                <option value="5">Howo 7 Prime Truck</option>
                                <option value="6">Howo A7 | T7 Dump Truck</option>
                            </select>
                        </div>

                        <img id="compare-img-b" src="" alt="" class="product-modal__compare-img" loading="lazy" decoding="async">
                        <h4 id="compare-name-b" class="product-modal__compare-name">Howo A7 | T7 Prime Mover</h4>
                        <span id="compare-cat-b" class="product-modal__compare-cat">Prime Mover / 6x4</span>
                    </div>

                    <table class="product-modal__compare-table">
                        <tr>
                            <th>Engine</th>
                            <td id="compare-engine-b">D12.42 Euro V</td>
                        </tr>
                        <tr>
                            <th>Horsepower</th>
                            <td id="compare-hp-b">420 HP</td>
                        </tr>
                        <tr>
                            <th>Payload</th>
                            <td id="compare-payload-b">50 Tons GCVW</td>
                        </tr>
                        <tr>
                            <th>Transmission</th>
                            <td id="compare-trans-b">12-Speed AMT</td>
                        </tr>
                        <tr>
                            <th>Drive Axle</th>
                            <td id="compare-axle-b">6x4 Air Suspension</td>
                        </tr>
                        <tr>
                            <th>Fuel Capacity</th>
                            <td id="compare-fuel-b">600 L Dual</td>
                        </tr>
                        <tr>
                            <th>Key Features</th>
                            <td id="compare-features-b">Air Suspension &amp; AMT</td>
                        </tr>
                    </table>
                </div>

            </div>{{-- /.product-modal__compare-grid --}}
        </div>

        <div class="product-modal__footer">
            <a href="#quote" class="product-modal__cta-btn" id="compare-quote-btn">Request Quote for Comparison &rarr;</a>
        </div>
    </div>
</div>
