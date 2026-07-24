/**
 * resources/js/components/smooth-scroll.js
 * ─────────────────────────────────────────────────────────────────
 * Smooth Scroll — Vanilla JS
 *
 * Why JS instead of CSS `scroll-behavior: smooth`?
 *   1. CSS smooth scroll does NOT account for a fixed navbar offset.
 *      Without JS, the target section slides under the navbar.
 *   2. JS respects prefers-reduced-motion (skips animation if needed).
 *   3. JS provides a callback hook for post-scroll actions.
 *
 * Behaviour:
 *   - Intercepts all <a href="#..."> anchor clicks
 *   - Calculates target position minus the navbar height
 *   - Scrolls smoothly (or instantly if reduced motion is preferred)
 *   - Updates location.hash after scroll completes
 * ─────────────────────────────────────────────────────────────────
 */

/**
 * Check if the user prefers reduced motion.
 * @returns {boolean}
 */
function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

/**
 * Get the current navbar height in pixels.
 * Reads the --navbar-height CSS custom property from :root.
 * Falls back to 70px if the property is not defined.
 * @returns {number}
 */
function getNavbarHeight() {
    const raw = getComputedStyle(document.documentElement)
        .getPropertyValue('--navbar-height')
        .trim();

    // CSS value is like "70px" — strip "px" and parse
    if (raw && raw.endsWith('px')) {
        return parseInt(raw, 10) || 70;
    }

    // Fallback: measure the navbar element directly
    const navbar = document.getElementById('navbar');
    return navbar ? navbar.getBoundingClientRect().height : 70;
}

/**
 * Scroll to a target element, offsetting for the fixed navbar.
 * @param {HTMLElement} target - The element to scroll to
 * @param {Function}    [onComplete] - Optional callback after scroll
 */
function scrollToTarget(target, onComplete) {
    const navbarHeight = getNavbarHeight();
    const targetRect   = target.getBoundingClientRect();

    /* Current scroll position + element's distance from viewport top */
    const absoluteTop = window.scrollY + targetRect.top - navbarHeight - 8;
    /* 8px extra breathing room above the section */

    if (prefersReducedMotion()) {
        /* Skip animation — jump instantly */
        window.scrollTo(0, absoluteTop);
        if (onComplete) onComplete();
        return;
    }

    window.scrollTo({
        top:      absoluteTop,
        behavior: 'smooth',
    });

    /* Estimate scroll duration to fire callback after animation ends */
    if (onComplete) {
        const distance = Math.abs(absoluteTop - window.scrollY);
        const duration = Math.min(800, Math.max(300, distance * 0.3));
        setTimeout(onComplete, duration);
    }
}

/**
 * Initialize smooth scroll for all in-page anchor links.
 * Called once on DOMContentLoaded from app.js.
 */
export function initSmoothScroll() {

    document.addEventListener('click', (event) => {

        /* Walk up the DOM tree to find the nearest <a> ancestor */
        const anchor = event.target.closest('a[href^="#"]');
        if (!anchor) return;

        const href = anchor.getAttribute('href');
        if (!href || href === '#') return; // Skip bare # links

        const targetId = href.slice(1);
        const target   = document.getElementById(targetId);
        if (!target) return;

        /* Prevent the browser's default jump behaviour */
        event.preventDefault();

        scrollToTarget(target, () => {
            /* Update the URL hash without triggering a page jump */
            if (history.pushState) {
                history.pushState(null, '', href);
            } else {
                /* Fallback for old browsers */
                location.hash = href;
            }
        });

        /* Move focus to the target section for screen readers */
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
        target.addEventListener('blur', () => {
            target.removeAttribute('tabindex');
        }, { once: true });
    });
}
