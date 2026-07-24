{{--
    components/service-card.blade.php
    ─────────────────────────────────────────────────────────
    Reusable service card component. Used in sections/services.blade.php.

    Props (via @include(['components.service-card', $service])):
      $service['title']       - Service name / title
      $service['description'] - Short service description
      $service['icon']        - Path to SVG/PNG icon (resources/images/icons/)
      $service['link']        - URL to service detail page (future)

    CSS: resources/css/components/cards.css

    TODO:
      - Build card wrapper <article class="card card--service">
      - Add icon, title, description, and "Learn More" link
      - Implement icon colour tint on hover via CSS custom property
      - Cards should be equal height within their grid row
--}}
