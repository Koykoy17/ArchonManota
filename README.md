# Archon Special Machineries Inc. — Web Application

Official web application and interactive product showcase for **Archon Special Machineries Inc.**, the leading distributor of SINOTRUK heavy-duty trucks and equipment in the Philippines.

---

## 🛠️ Technology Stack

- **Framework**: Laravel 10+ (Blade Templating Engine)
- **Asset Bundler**: Vite v7
- **Styling**: Vanilla CSS (BEM Architecture & CSS Variables)
- **Scripting**: ES6+ Vanilla JavaScript Modules
- **Performance**: Native Image Lazy Loading & Async Decoding

---

## 📁 Key Project Structure

```
resources/
├── views/
│   ├── components/      # Reusable UI (navbar, footer, modals)
│   ├── layouts/         # App master layout (app.blade.php)
│   └── sections/        # Page sections (hero, about, products, services, quote, articles)
├── css/
│   ├── components/      # Component styles (modal.css)
│   ├── layout/          # Global & header/footer styles (navbar.css, footer.css)
│   ├── responsive/      # Mobile & tablet responsive queries
│   └── sections/        # Section-specific styles
└── js/
    ├── app.js           # Main JavaScript entry
    └── components/      # Feature modules (products-modal.js, navbar.js, accordion.js)
```

---

## 🚀 Development Setup

```bash
# 1. Install Node dependencies
npm install

# 2. Start Vite development server (Hot Module Replacement)
npm run dev

# 3. Start local Laravel server
php artisan serve
```

### Production Build
```bash
npm run build
```

---

## ✨ Features Built

1. **Compact Glassmorphic Navbar**: Morphing hamburger-to-X animation with floating card dropdown menu.
2. **Interactive Product Showcase & Quick View**: 6 HOWO flagship models with detailed spec dialogs.
3. **Truck Specification Comparison Engine**: Side-by-side comparison with green check (`✓`) and red (`✗`) indicators, dual dropdown selectors, and `★ HIGHER SPECIFICATION` winner badge.
4. **Mobile Scroll Lock Guard**: Fixed-position viewport locking preventing background document scroll leakage on iOS and mobile browsers.
5. **Asset Performance Optimization**: Eager loading for Hero assets + native `loading="lazy"` and `decoding="async"` for all off-screen images.
