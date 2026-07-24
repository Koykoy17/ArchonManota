/**
 * resources/js/components/navbar.js
 * ─────────────────────────────────────────────────────────────────
 * Navbar Interactivity — Vanilla JS
 *
 * Responsibilities:
 *   1. Sticky scroll state  — adds .navbar--scrolled on scroll
 *   2. Mobile menu toggle   — hamburger open/close
 *   3. Escape / outside click to close mobile menu
 *   4. Active link highlighting via IntersectionObserver
 *   5. Body scroll lock when mobile menu is open
 * ─────────────────────────────────────────────────────────────────
 */

/**
 * Initialize all navbar behaviour.
 * Called once on DOMContentLoaded from app.js.
 */
export function initNavbar() {

    /* ── Element references ──────────────────────────────────── */
    const navbar       = document.getElementById('navbar');
    const hamburger    = document.getElementById('navbar-hamburger');
    const mobileMenu   = document.getElementById('navbar-mobile-menu');

    if (!navbar || !hamburger || !mobileMenu) return;

    /* All nav links (desktop + mobile combined for active tracking) */
    const desktopLinks = navbar.querySelectorAll('.navbar__nav-link');
    const mobileLinks  = mobileMenu.querySelectorAll('.navbar__mobile-nav-link');
    const allLinks     = [...desktopLinks, ...mobileLinks];

    /* All section IDs referenced by nav links */
    const sectionIds = [...desktopLinks]
        .map(link => link.getAttribute('href'))
        .filter(href => href && href.startsWith('#'))
        .map(href => href.slice(1));

    /* ── 1. Sticky scroll state ──────────────────────────────── */

    const SCROLL_THRESHOLD = 10; // px from top before "scrolled" kicks in

    function onScroll() {
        if (window.scrollY > SCROLL_THRESHOLD) {
            navbar.classList.add('navbar--scrolled');
        } else {
            navbar.classList.remove('navbar--scrolled');
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // Run once on init to set correct initial state

    /* ── 2. Mobile menu toggle ───────────────────────────────── */

    let menuOpen = false;

    function openMenu() {
        menuOpen = true;
        hamburger.setAttribute('aria-expanded', 'true');
        hamburger.setAttribute('aria-label', 'Close navigation menu');
        mobileMenu.classList.add('navbar__mobile-menu--open');
        mobileMenu.setAttribute('aria-hidden', 'false');
        document.body.classList.add('mobile-menu-open');
    }

    function closeMenu() {
        menuOpen = false;
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'Open navigation menu');
        mobileMenu.classList.remove('navbar__mobile-menu--open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('mobile-menu-open');
    }

    hamburger.addEventListener('click', () => {
        menuOpen ? closeMenu() : openMenu();
    });

    /* ── 3a. Escape key closes mobile menu ───────────────────── */

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menuOpen) {
            closeMenu();
            hamburger.focus(); // Return focus to hamburger
        }
    });

    /* ── 3b. Click outside mobile menu closes it ─────────────── */

    document.addEventListener('click', (event) => {
        if (!menuOpen) return;
        const clickedInsideMenu    = mobileMenu.contains(event.target);
        const clickedOnHamburger   = hamburger.contains(event.target);
        if (!clickedInsideMenu && !clickedOnHamburger) {
            closeMenu();
        }
    });

    /* ── 3c. Close mobile menu when a link is clicked ────────── */

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });

    /* ── 4. Active link highlighting via IntersectionObserver ── */

    /**
     * Sets the 'is-active' class on all nav links matching a section ID.
     * @param {string} activeId - The section ID currently in viewport
     */
    function setActiveLink(activeId) {
        allLinks.forEach(link => {
            const href = link.getAttribute('href');
            const isActive = href === `#${activeId}`;
            link.classList.toggle('is-active', isActive);
            // aria-current for screen readers
            if (isActive) {
                link.setAttribute('aria-current', 'true');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    /* Build a map of sections to observe */
    const sectionElements = sectionIds
        .map(id => document.getElementById(id))
        .filter(Boolean); // Remove nulls (sections not yet in DOM)

    if (sectionElements.length > 0) {
        const observerOptions = {
            root: null,                          // Viewport as root
            rootMargin: '-20% 0px -60% 0px',    // Trigger when section is in the middle-ish
            threshold: 0,
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setActiveLink(entry.target.id);
                }
            });
        }, observerOptions);

        sectionElements.forEach(section => observer.observe(section));
    }
}
