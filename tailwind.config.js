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
            fontFamily: {
                sans: ['Roboto', 'Noto Sans', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                redder: '#CC3333',
                limegreen: '#4BFF3C',
                lighter: '#FFF8EE',
                darkblue: '#2A435D',
            },
        },
    },

    plugins: [forms],
};
