/**
 * Legal Modal Component (Terms & Conditions & Privacy Policy)
 */
export function initLegalModal() {
    const modal = document.getElementById('legal-modal');
    if (!modal) return;

    const backdrop = document.getElementById('legal-modal-backdrop');
    const closeBtn = document.getElementById('legal-modal-close');
    const declineBtn = document.getElementById('legal-modal-decline');
    const agreeBtn = document.getElementById('legal-modal-agree');
    const termsCheckbox = document.querySelector('input[name="terms"]');

    function openModal() {
        modal.removeAttribute('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.setAttribute('hidden', '');
        document.body.style.overflow = '';
    }

    // Attach click triggers for any terms / privacy policy links across the page
    document.querySelectorAll('.open-legal-modal, a[href*="terms"], a[href*="privacy"], .footer__legal-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (declineBtn) declineBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);

    // Agree button checks the terms checkbox in the form and closes modal
    if (agreeBtn) {
        agreeBtn.addEventListener('click', () => {
            if (termsCheckbox) {
                termsCheckbox.checked = true;
            }
            closeModal();
        });
    }

    // Escape key closes modal
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !modal.hasAttribute('hidden')) {
            closeModal();
        }
    });
}
