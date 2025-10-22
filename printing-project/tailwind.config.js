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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: 'oklch(47.76% 0.125 143.54)',
                secondary: 'oklch(84.98% 0.165 101.25)',
                accent: 'oklch(48.85% 0.135 149.68)',
                borderline: 'oklch(70% 0 0)',
                background: 'oklch(99.20% 0.003 145.55)',
                text: 'oklch(35% 0.023 147.17)',
                card: "oklch(95% 0.0001 271.152)",
                borderline2: 'oklch(90% 0 0)',
            },
        },
    },

    plugins: [forms],
};
