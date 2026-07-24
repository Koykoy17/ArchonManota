/**
 * resources/js/components/accordion.js
 * ─────────────────────────────────────────────────────────────────
 * Interactive Accordion Module for Our Services section.
 * Allows expanding/collapsing service items and dynamically updates
 * the vertical red/white scroll-indicator bar on the far right.
 * ─────────────────────────────────────────────────────────────────
 */

export function initAccordion() {
    const accordion = document.getElementById('services-accordion');
    if (!accordion) return;

    const items = accordion.querySelectorAll('[data-accordion-item]');
    const redBar = document.getElementById('services-bar-red');
    const thumb = document.getElementById('services-bar-thumb');

    function updateProgressBar(activeItem) {
        if (!redBar || !activeItem) return;

        const accordionWrapper = activeItem.closest('.services__accordion-wrapper');
        const accordionHeight = accordion.offsetHeight;
        const itemOffsetTop = activeItem.offsetTop;
        const itemHeight = activeItem.offsetHeight;

        // Position red indicator to middle of active item
        const progress = Math.min(Math.max((itemOffsetTop + itemHeight / 2) / accordionHeight, 0.15), 1);
        const percent = (progress * 100) + '%';

        redBar.style.height = percent;
        if (thumb) thumb.style.top = percent;
    }

    items.forEach(item => {
        const header = item.querySelector('.services__accordion-header');
        const body = item.querySelector('.services__accordion-body');
        const icon = item.querySelector('.services__arrow-icon');

        if (!header || !body) return;

        header.addEventListener('click', () => {
            const isActive = item.classList.contains('is-active');

            // Close all items
            items.forEach(otherItem => {
                otherItem.classList.remove('is-active');
                const otherHeader = otherItem.querySelector('.services__accordion-header');
                const otherBody = otherItem.querySelector('.services__accordion-body');
                const otherIcon = otherItem.querySelector('.services__arrow-icon');

                if (otherHeader) otherHeader.setAttribute('aria-expanded', 'false');
                if (otherBody) otherBody.hidden = true;
                if (otherIcon) {
                    // Down-right arrow icon for collapsed state: ↘
                    otherIcon.innerHTML = `
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                        <polyline points="9 18 18 18 18 9"></polyline>
                    `;
                }
            });

            // Toggle clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('is-active');
                header.setAttribute('aria-expanded', 'true');
                body.hidden = false;

                if (icon) {
                    // Up-right diagonal arrow icon for expanded state: ↗
                    icon.innerHTML = `
                        <line x1="6" y1="18" x2="18" y2="6"></line>
                        <polyline points="9 6 18 6 18 15"></polyline>
                    `;
                }

                updateProgressBar(item);
            }
        });
    });

    // Initial progress bar position for default active item
    const defaultActiveItem = accordion.querySelector('.services__accordion-item.is-active');
    if (defaultActiveItem) {
        updateProgressBar(defaultActiveItem);
    }
}
