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
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'mini-tab': "500px",
                'xs': "400px"
            }
        },
    },

    plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography"), require("daisyui")],
    daisyui: {
        themes: [
            {
                light: {

                    "primary": "#06BEE1",

                    "secondary": "#91bde6",

                    "accent": "#1FB2A6",

                    "neutral": "#191D24",

                    "base-100": "#1A2232",

                    "info": "#3ABFF8",

                    "success": "#36D399",

                    "warning": "#FBBD23",

                    "error": "#F87272",
                },
            },
        ],
        darkMode: "light"
    },

};
