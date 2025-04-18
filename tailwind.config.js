import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require('daisyui')],
    daisyui: {
    themes: [
              {
                mytheme: {
                  primary: '#1E3A8A', // biru tua
                  secondary: '#64748B',
                  accent: '#22D3EE',
                  neutral: '#1F2937',
                  'base-100': '#FFFFFF',
                },
              },
            ],        
    },
};
