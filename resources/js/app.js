import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import focus from '@alpinejs/focus';

// Declare assets to be bundled
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Declare components to be bundled
Alpine.plugin(collapse);
Alpine.plugin(focus);

document.addEventListener('DOMContentLoaded', () => {
  Alpine.start();
});
