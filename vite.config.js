import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/style.css",
                "resources/css/adduser.css",
                "resources/js/app.js",
                "resources/css/dash.css",
            ],

            refresh: true,
        }),
    ],
});
