import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            // input: ['resources/css/app.css',
            //         'resources/scss/app.scss',
            //         'resources/js/app.js'],
            refresh: true,
        }),
    ],

    // server: { 
    //     hmr: {
    //         host: 'http://laravel-manhtran:8086',
    //     },
    // }, 
});
