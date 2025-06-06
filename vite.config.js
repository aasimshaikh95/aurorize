import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/bootstrap.scss',
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
    ],
});
