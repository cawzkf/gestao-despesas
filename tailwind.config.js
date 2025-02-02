import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Adiciona suporte para alternar entre temas
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                dark: {
                    background: '#D1D5DB', // Fundo preto puro
                    text: '#FFFFFF', // Texto branco puro
                    card: '#1A1A1A', // Fundo dos cartões (cinza escuro)
                    accent: '#4F46E5', // Cor de destaque (azul para contraste)
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
