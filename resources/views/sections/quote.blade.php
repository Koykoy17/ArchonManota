{{--
    sections/quote.blade.php
    ─────────────────────────────────────────────────────────────────
    Request a Quote Section — Floating Card Overlapping About Us
    CSS: resources/css/sections/quote.css
    Controller: App\Http\Controllers\QuoteController@store
    ─────────────────────────────────────────────────────────────────
--}}

<section id="quote" class="quote" aria-label="Request a Quote">
    <div class="quote__container">
        {{-- Card using shape-quote-bg.png directly as background --}}
        <div class="quote__card">
            <img src="{{ asset('images/shapes/shape-quote-bg.png') }}"
                 alt=""
                 class="quote__card-bg"
                 aria-hidden="true">

            <div class="quote__grid">
                {{-- Left Side: Form --}}
                <div class="quote__form-side">
                    <div class="quote__header">
                        <span class="quote__badge">Let's Get Started</span>
                        <h2 class="quote__title">Request a Quote</h2>
                        <p class="quote__subtitle">
                            All quotations are free of charge. Fill up the form below, and we'll reach out to you.
                        </p>
                    </div>

                    {{-- Success Flash Alert Banner --}}
                    @if(session('quote_success'))
                        <div class="quote__alert-success" role="alert">
                            <svg class="quote__alert-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>{{ session('quote_success') }}</span>
                        </div>
                    @endif

                    <form class="quote__form" action="{{ route('quote.store') }}" method="POST">
                        @csrf

                        {{-- Invisible Honeypot Anti-Spam Field --}}
                        <div style="display: none;" aria-hidden="true">
                            <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                        </div>

                        {{-- Row 1: Full Name & Email Address --}}
                        <div class="quote__form-row">
                            <div class="quote__field">
                                <label for="quote-name" class="quote__label">Full Name</label>
                                <input type="text"
                                       id="quote-name"
                                       name="full_name"
                                       class="quote__input @error('full_name') is-invalid @enderror"
                                       placeholder="Jack Benedict"
                                       value="{{ old('full_name') }}"
                                       required>
                                @error('full_name')
                                    <span class="quote__field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="quote__field">
                                <label for="quote-email" class="quote__label">Email Address</label>
                                <input type="email"
                                       id="quote-email"
                                       name="email"
                                       class="quote__input @error('email') is-invalid @enderror"
                                       placeholder="jack@example.com"
                                       value="{{ old('email') }}"
                                       required>
                                @error('email')
                                    <span class="quote__field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Row 2: Trucks & Phone Number --}}
                        <div class="quote__form-row">
                            <div class="quote__field">
                                <label for="quote-trucks" class="quote__label">Trucks</label>
                                <div class="quote__select-wrap">
                                    <select id="quote-trucks" name="trucks" class="quote__select @error('trucks') is-invalid @enderror" required>
                                        <option value="" disabled {{ old('trucks') ? '' : 'selected' }}>Select Truck Model</option>
                                        <option value="dump-truck" {{ old('trucks') === 'dump-truck' ? 'selected' : '' }}>Dump Truck</option>
                                        <option value="prime-mover" {{ old('trucks') === 'prime-mover' ? 'selected' : '' }}>Prime Mover</option>
                                        <option value="tractor" {{ old('trucks') === 'tractor' ? 'selected' : '' }}>Tractor Head</option>
                                        <option value="cargo" {{ old('trucks') === 'cargo' ? 'selected' : '' }}>Cargo Truck</option>
                                        <option value="other" {{ old('trucks') === 'other' ? 'selected' : '' }}>Other Heavy Equipment</option>
                                    </select>
                                </div>
                                @error('trucks')
                                    <span class="quote__field-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="quote__field">
                                <label for="quote-phone" class="quote__label">Phone Number</label>
                                <input type="text"
                                       id="quote-phone"
                                       name="phone"
                                       class="quote__input @error('phone') is-invalid @enderror"
                                       placeholder="09171234567"
                                       value="{{ old('phone') }}"
                                       inputmode="numeric"
                                       maxlength="11"
                                       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                       required>
                                @error('phone')
                                    <span class="quote__field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Row 3: Additional Details --}}
                        <div class="quote__field quote__field--full">
                            <label for="quote-details" class="quote__label">Additional Details</label>
                            <textarea id="quote-details"
                                      name="additional_details"
                                      class="quote__textarea @error('additional_details') is-invalid @enderror"
                                      rows="4"
                                      placeholder="Tell us about your fleet requirement...">{{ old('additional_details') }}</textarea>
                            @error('additional_details')
                                <span class="quote__field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Checkbox --}}
                        <div class="quote__checkbox-field">
                            <label class="quote__checkbox-label">
                                <input type="checkbox" name="terms" value="1" class="quote__checkbox" {{ old('terms') ? 'checked' : '' }} required>
                                <span class="quote__checkbox-text">I accept the privacy and terms.</span>
                            </label>
                            @error('terms')
                                <span class="quote__field-error d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="quote__submit-btn">
                            <span>Submit Quote</span>
                            <svg class="quote__submit-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>

                {{-- Right Side: Download Product Brochure Card --}}
                <div class="quote__solutions-side">
                    <div class="quote__solutions-bg">
                        <img src="{{ asset('images/backgrounds/bg-download-brochure.png') }}"
                             alt=""
                             class="quote__solutions-img">
                    </div>

                    <div class="quote__solutions-content">
                        <h3 class="quote__solutions-title">Download Product Brochure</h3>
                        <p class="quote__solutions-desc">
                            Get detailed technical specifications, dimensions, engine performance, and capacity data for all SINOTRUK models.
                        </p>

                        <div class="quote__categories">
                            <span>• DUMP TRUCK</span>
                            <span>• PRIME MOVER</span>
                            <span>• CARGO TRUCK</span>
                            <span>• TRACTOR HEAD</span>
                        </div>

                        <a href="{{ route('brochure.download') }}" class="quote__brochure-btn" aria-label="Download PDF Product Brochure">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span>Download PDF Brochure</span>
                        </a>
                    </div>
                </div>

            </div>{{-- /.quote__grid --}}
        </div>{{-- /.quote__card --}}
    </div>{{-- /.quote__container --}}
</section>
