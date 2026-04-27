import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import inertia from '@inertiajs/vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    cacheDir: '/tmp/hilful-fuzul-vite',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            hotFile: 'vite.hot',
            refresh: true,
        }),
        tailwindcss(),
        inertia(),
        vue(),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    server: {
        host: '127.0.0.1',
        port: 5173,
        strictPort: true,
        hmr: {
            host: '127.0.0.1',
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
