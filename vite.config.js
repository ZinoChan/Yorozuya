import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: 'https://yorozuya-devs.vercel.app',
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        publicPath: '/api/dist/',
        outDir: 'api/dist'
    }
});
