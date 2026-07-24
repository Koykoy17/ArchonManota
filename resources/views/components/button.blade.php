{{--
    components/button.blade.php
    ─────────────────────────────────────────────────────────
    Reusable button component.

    Props (via @include or Blade component attributes):
      $label    - Button text
      $url      - Optional href; if set renders as <a>, else <button>
      $type     - HTML button type: 'button' | 'submit' | 'reset' (default: 'button')
      $variant  - Style variant: 'primary' | 'secondary' | 'outline' | 'ghost'
      $size     - Size modifier: 'sm' | 'md' | 'lg' (default: 'md')
      $icon     - Optional icon path or icon class name (prepended to label)
      $disabled - Boolean; disables interaction if true

    CSS: resources/css/components/buttons.css

    TODO:
      - Implement conditional <a> vs <button> rendering
      - Apply BEM-style classes: .btn, .btn--primary, .btn--lg, etc.
      - Add loading/spinner state class support
      - Ensure aria-disabled when $disabled is true
--}}
