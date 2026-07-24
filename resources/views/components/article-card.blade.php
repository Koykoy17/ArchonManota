{{--
    components/article-card.blade.php
    ─────────────────────────────────────────────────────────
    Reusable article / blog preview card. Used in sections/articles.blade.php.

    Props (via @include(['components.article-card', $article])):
      $article['title']    - Article headline
      $article['excerpt']  - Short excerpt / teaser (1–2 sentences)
      $article['image']    - Path to article thumbnail (resources/images/articles/)
      $article['date']     - Publication date (formatted string)
      $article['slug']     - URL slug for the article detail page (future route)
      $article['category'] - Optional category label

    CSS: resources/css/components/cards.css

    TODO:
      - Build card wrapper <article class="card card--article">
      - Add thumbnail image with lazy loading
      - Add category badge, date, title, excerpt, and "Read More" link
      - Date should be wrapped in <time datetime=""> for semantic HTML
      - Implement skeleton loading state placeholder (future)
--}}
