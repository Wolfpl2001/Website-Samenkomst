import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< Updated upstream
            input: ['resources/css/app.css','resources/css/style.css', 'resources/js/app.js'],
=======
            input: [
                "resources/css/app.css",
                "resources/css/style.css",
                "resources/js/app.js",
            ],
>>>>>>> Stashed changes
            refresh: true,
        }),
    ],
});
