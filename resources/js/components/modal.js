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

    let savedScrollY = 0;

    function openModal() {
        if (!document.body.classList.contains('modal-open')) {
            savedScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${savedScrollY}px`;
            document.body.style.left = '0';
            document.body.style.right = '0';
            document.body.style.width = '100%';
            document.body.style.overflow = 'hidden';
            document.documentElement.classList.add('modal-open');
            document.body.classList.add('modal-open');
        }

        modal.removeAttribute('hidden');
    }

    function closeModal() {
        modal.setAttribute('hidden', '');
        const anyModalOpen = document.querySelector('.product-modal:not([hidden]), .legal-modal:not([hidden])');
        if (!anyModalOpen) {
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            document.body.style.width = '';
            document.body.style.overflow = '';
            document.documentElement.classList.remove('modal-open');
            document.body.classList.remove('modal-open');
            window.scrollTo(0, savedScrollY);
        }
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
    if (backdrop) {
        backdrop.addEventListener('click', closeModal);
        backdrop.addEventListener('wheel', (e) => e.preventDefault(), { passive: false });
        backdrop.addEventListener('touchmove', (e) => e.preventDefault(), { passive: false });
    }

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
