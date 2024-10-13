import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import livewire from '@defstudio/vite-livewire-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),

        livewire({  // Here we add it to the plugins
            refresh: ['resources/css/app.css'],
        }),
    ],
});
