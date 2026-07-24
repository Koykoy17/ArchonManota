<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- ── Character encoding ──────────────────────────────────── --}}
    <meta charset="UTF-8">

    {{-- ── Viewport (responsive) ──────────────────────────────── --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ── CSRF Token (for JavaScript AJAX requests) ───────────── --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- ── Dynamic page title ─────────────────────────────────── --}}
    <title>@yield('title', config('app.name', 'Archon'))</title>

    {{-- ── SEO Meta Tags ───────────────────────────────────────── --}}
    <meta name="description"
          content="@yield('meta_description', 'Archon — placeholder description.')">

    <meta name="robots"
          content="@yield('meta_robots', 'index, follow')">

    {{-- ── Open Graph (social sharing) ───────────────────────── --}}
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:title"
          content="@yield('og_title', config('app.name', 'Archon'))">
    <meta property="og:description"
          content="@yield('og_description', 'Archon — placeholder description.')">
    <meta property="og:image"
          content="@yield('og_image', asset('favicon.ico'))">

    {{-- ── Twitter Card ────────────────────────────────────────── --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"
          content="@yield('twitter_title', config('app.name', 'Archon'))">
    <meta name="twitter:description"
          content="@yield('twitter_description', 'Archon — placeholder description.')">

    {{-- ── Canonical URL ────────────────────────────────────────── --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ── Favicon ─────────────────────────────────────────────── --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- ── Vite: CSS + JS assets ──────────────────────────────── --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- ── Page-level style overrides (optional) ─────────────── --}}
    @stack('styles')

</head>

<body>

    {{-- ── Skip to main content (keyboard / screen reader) ────── --}}
    <a href="#main-content" class="sr-only sr-only--focusable">
        Skip to main content
    </a>

    {{-- ── Navbar ───────────────────────────────────────────────── --}}
    @include('components.navbar')

    {{-- ── Main content ────────────────────────────────────────── --}}
    <main id="main-content"
          role="main"
          aria-label="Main content"
          style="padding-top: var(--navbar-height)">

        @yield('content')

    </main>

    {{-- ── Footer ──────────────────────────────────────────────── --}}
    @include('components.footer')

    {{-- ── Page-level scripts (optional) ─────────────────────── --}}
    @stack('scripts')

</body>

</html>
