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
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
                '300': '36rem',
                '432': '27rem',
                '758': '38rem',
                '1000': '50rem',
            },
            backgroundImage: theme => ({
                'testProfile': "url('https://www.publicdomainpictures.net/pictures/160000/velka/ordinateur-livres-poste-de-travai.jpg')",
                'bg1': "url('https://images.unsplash.com/photo-1534120247760-c44c3e4a62f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80')",
                'bg2': "url('https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80')",
                'bg3': "url('https://images.unsplash.com/photo-1600783486034-4faaa227e01a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')",
                'bg3': "url('https://images.unsplash.com/photo-1573496546735-c274b1fd186b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')",
            })
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
