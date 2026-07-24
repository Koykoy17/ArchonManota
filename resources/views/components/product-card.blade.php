{{--
    components/product-card.blade.php
    ─────────────────────────────────────────────────────────
    Reusable product card component. Used in sections/products.blade.php.

    Props (via @include(['components.product-card', $product])):
      $product['name']        - Product name / title
      $product['description'] - Short product description (1–2 sentences)
      $product['image']       - Path to product image (resources/images/products/)
      $product['link']        - URL to product detail page (future)
      $product['badge']       - Optional badge text (e.g. "New", "Featured")

    CSS: resources/css/components/cards.css

    TODO:
      - Build card wrapper <article class="card card--product">
      - Add product image with lazy loading (loading="lazy")
      - Add product name, truncated description, and "Learn More" link
      - Implement hover lift / shadow effect via CSS
      - Badge overlay on top-right of image if $badge is set
--}}
