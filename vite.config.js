import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const refreshPaths = [
    'resources/views/**',
    'routes/**',

];

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
