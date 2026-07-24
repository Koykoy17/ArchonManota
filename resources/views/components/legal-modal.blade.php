{{--
    components/legal-modal.blade.php
    ─────────────────────────────────────────────────────────────────
    Terms & Conditions & Privacy Policy Scrollable Modal
    ─────────────────────────────────────────────────────────────────
--}}

<div id="legal-modal" class="legal-modal" role="dialog" aria-modal="true" aria-labelledby="legal-modal-title" hidden>
    <div class="legal-modal__backdrop" id="legal-modal-backdrop"></div>

    <div class="legal-modal__container">
        <div class="legal-modal__header">
            <h3 id="legal-modal-title" class="legal-modal__title">Terms &amp; Conditions and Privacy Policy</h3>
            <button type="button" class="legal-modal__close-btn" id="legal-modal-close" aria-label="Close modal">&times;</button>
        </div>

        <div class="legal-modal__body">
            <h4 class="legal-modal__section-title">1. Terms &amp; Conditions</h4>
            <p>Welcome to Archon Special Machineries Inc. By accessing our website, requesting quotations, or utilizing our services, you agree to comply with and be bound by the following terms of use.</p>
            <p>All quotes, specifications, dimensions, and heavy equipment details provided on this website are subject to verification by our official sales representatives. Equipment availability and pricing may vary based on market conditions.</p>

            <h4 class="legal-modal__section-title">2. Privacy Policy &amp; Data Protection</h4>
            <p>We respect your privacy. Any personal information you provide through our contact forms (including your full name, email address, phone number, and fleet requirements) is collected strictly for processing your service inquiry.</p>
            <p>Your information will never be sold, rented, or shared with unauthorized third parties. Data is handled securely in accordance with applicable data privacy laws in the Philippines.</p>

            <h4 class="legal-modal__section-title">3. Service &amp; After-Sales Support</h4>
            <p>Archon provides genuine SINOTRUK units, 24/7 technical support, on-site rescue, and preventive maintenance. Warranty terms apply as specified in official purchase agreements.</p>
        </div>

        <div class="legal-modal__footer">
            <button type="button" class="legal-modal__btn legal-modal__btn--secondary" id="legal-modal-decline">Close</button>
            <button type="button" class="legal-modal__btn legal-modal__btn--primary" id="legal-modal-agree">I Agree &amp; Accept</button>
        </div>
    </div>
</div>
