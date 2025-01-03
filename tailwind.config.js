import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'pastel-blue-light': '#F0F7FF', // Background utama
                'pastel-blue': '#A4B1BA',      // Warna logo dan elemen interaktif
                'pastel-white': '#FFFFFF',
            },
        },
    },

    plugins: [forms],
};
