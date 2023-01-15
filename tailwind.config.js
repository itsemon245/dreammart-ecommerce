const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.{jsx, js, tsx,ts}',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],
    daisyui: {
        themes: [
            {
                light: {

                    "primary": "#009393",

                    "secondary": "#91bde6",

                    "accent": "#1FB2A6",

                    "neutral": "#191D24",

                    "base-100": "#2A303C",

                    "info": "#3ABFF8",

                    "success": "#36D399",

                    "warning": "#FBBD23",

                    "error": "#F87272",
                },
            },
        ],
        prefix: "ds-"
    },

};
