import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/thank.css','resources/css/bootstrap53.min.css','resources/js/jquery37.min.js', 'resources/js/app.js','resources/js/frontend.js','resources/js/bootstrap53.min.js'],
            refresh: true,
        }),
    ],
});
