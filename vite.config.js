import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            /*
             * Vite will fingerprint and serve any file under resources/images/
             * through the manifest when referenced via Vite::asset() in Blade.
             * This enables cache-busting for all image assets.
             */
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
    /*
     * Expose resources/images/ so that Vite::asset() calls in Blade
     * resolve correctly. Any file under resources/ can be referenced
     * as Vite::asset('resources/images/...') without being in `input`.
     * Vite resolves these through the public base URL during dev and
     * hashes them into the manifest on production build.
     */
    build: {
        rollupOptions: {
            // No additional entry points needed for images:
            // Vite's asset pipeline handles them automatically when
            // imported in CSS (url()) or via Vite::asset() in Blade.
        },
    },
});
