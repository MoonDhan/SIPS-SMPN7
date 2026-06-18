import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/welcome.css',
                'resources/css/login.css',
                'resources/css/register.css',
                'resources/css/dashboard.css',
                'resources/css/data-siswa.css',
                'resources/js/app.js',
                'resources/js/welcome.js',
                'resources/js/login.js',
                'resources/js/register.js',
                'resources/js/dashboard.js',
                'resources/js/data-siswa.js',
            ],
            refresh: true,
        }),
    ],
});