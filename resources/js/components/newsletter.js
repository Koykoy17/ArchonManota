/**
 * Footer Newsletter AJAX Form Component
 */
export function initNewsletter() {
    const form = document.querySelector('.footer__newsletter-form');
    if (!form) return;

    const emailInput = document.getElementById('footer-email');
    const container = document.querySelector('.footer__newsletter-container');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = form.querySelector('.footer__newsletter-btn');
        if (!emailInput || !emailInput.value.trim()) return;

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        const originalBtnText = submitBtn ? submitBtn.textContent : 'Subscribe';

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Subscribing...';
        }

        // Remove existing alert messages
        if (container) {
            const existingAlerts = container.querySelectorAll('.footer__newsletter-alert');
            existingAlerts.forEach(el => el.remove());
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken || ''
                },
                body: JSON.stringify({
                    email: emailInput.value.trim()
                })
            });

            const data = await response.json();

            const alertDiv = document.createElement('div');
            alertDiv.className = 'footer__newsletter-alert';
            alertDiv.setAttribute('role', 'alert');

            if (response.ok && data.success) {
                alertDiv.classList.add('footer__newsletter-alert--success');
                alertDiv.textContent = data.message || 'Thank you! You have successfully subscribed to our newsletter.';
                emailInput.value = '';
            } else {
                alertDiv.classList.add('footer__newsletter-alert--error');
                if (data.errors && data.errors.email) {
                    alertDiv.textContent = data.errors.email[0];
                } else {
                    alertDiv.textContent = data.message || 'Subscription failed. Please try again.';
                }
            }

            if (container) {
                container.insertBefore(alertDiv, container.firstChild);
            }
        } catch (error) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'footer__newsletter-alert footer__newsletter-alert--error';
            alertDiv.setAttribute('role', 'alert');
            alertDiv.textContent = 'An unexpected error occurred. Please try again.';
            if (container) {
                container.insertBefore(alertDiv, container.firstChild);
            }
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalBtnText;
            }
        }
    });
}
