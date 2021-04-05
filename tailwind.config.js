const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            opacity: ["disabled"],
            screens: {
                sm: "640px",
                // => @media (min-width: 640px) { ... }

                md: "768px",

                lg: "1024px",
                // => @media (min-width: 1024px) { ... }

                xl: "1280px",
                // => @media (min-width: 1280px) { ... }

                "2xl": "1600px",
                // => @media (min-width: 1600px) { ... }
            },
            borderRadius: {
                'medium': '100px',
                '2medium': '200px',
                '3medium': '300px',
                'large': '400px',
                '2large': '500px',
            }
            ,
            
            colors: {
                "light-back": "#fafafa",
                "light-gray": "#f1f1f1",
                "main-yellow": "#fdcb46",
                "red-step": "#faf8f0",
            },
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                '2xs': '.6rem',
            },
            rotate: {
                '-30': '-30deg',
               },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
            outline: ['hover', 'active'],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
