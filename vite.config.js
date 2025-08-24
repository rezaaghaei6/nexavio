import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // برای صفحات عمومی
                'resources/css/admin.css', // برای پنل ادمین
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});