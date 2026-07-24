/**
 * resources/js/app.js
 * ─────────────────────────────────────────────────────────────────
 * Main JavaScript Entry Point — bundled by Vite.
 *
 * Import order:
 *   1. bootstrap.js      — Axios + CSRF header setup (Laravel default)
 *   2. navbar.js         — Sticky scroll, mobile menu, active links
 *   3. smooth-scroll.js  — Offset-aware smooth anchor scrolling
 *
 * All modules are initialized after DOMContentLoaded to guarantee
 * the full DOM is available before querying elements.
 * ─────────────────────────────────────────────────────────────────
 */

import './bootstrap';

import { initNavbar }       from './components/navbar';
import { initSmoothScroll } from './components/smooth-scroll';
import { initAccordion }    from './components/accordion';

document.addEventListener('DOMContentLoaded', () => {

    /* Initialize navbar (sticky, mobile toggle, active link tracking) */
    initNavbar();

    /* Initialize smooth scroll for all in-page anchor links */
    initSmoothScroll();

    /* Initialize services accordion */
    initAccordion();

});
