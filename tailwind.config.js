const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      opacity: ['disabled'],
      screens: {
        sm: '640px',
        // => @media (min-width: 640px) { ... }

        md: '768px',

        lg: '1024px',
        // => @media (min-width: 1024px) { ... }

        xl: '1280px',
        // => @media (min-width: 1280px) { ... }

        '2xl': '1600px',
        // => @media (min-width: 1600px) { ... }
      },
      borderRadius: {
        medium: '100px',
        '2medium': '200px',
        '3medium': '300px',
        large: '400px',
        '2large': '500px',
      },
      colors: {
        'light-back': '#fafafa',
        'light-gray': '#f1f1f1',
        'main-yellow': '#fdcb46',
        'red-step': '#faf8f0',
      },
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        '2xs': '.6rem',
      },
      rotate: {
        '-30': '-30deg',
      },
      spacing: {
        72: '18rem',
        84: '21rem',
        96: '24rem',
        300: '36rem',
        432: '27rem',
        460: '28.7rem',
        758: '38rem',
        900: '42rem',
        1000: '50rem',
      },
      width: {
        '1/333': '30%',
      },
      backgroundImage: (theme) => ({
        testProfile:
          "url('https://www.publicdomainpictures.net/pictures/160000/velka/ordinateur-livres-poste-de-travai.jpg')",
        bg1:
          "url('https://images.unsplash.com/photo-1534120247760-c44c3e4a62f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80')",
        bg2:
          "url('https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80')",
        bg3:
          "url('https://images.unsplash.com/photo-1600783486034-4faaa227e01a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')",
        bg3:
          "url('https://images.unsplash.com/photo-1573496546735-c274b1fd186b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')",
        bg5:
          "url('https://images.unsplash.com/photo-1598257006756-51088d8c1126?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')",
        bg6:
          "url('https://images.unsplash.com/photo-1498677231914-50deb6ba4217?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')",
        bg7:
          "url('https://images.unsplash.com/flagged/photo-1563713076139-d9f44e576124?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80')",
        bg8:
          "url('https://images.unsplash.com/photo-1543269664-7eef42226a21?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80')",
        bg9:
          "url('https://images.unsplash.com/photo-1573166613605-3b4dfcbf1268?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1349&q=80')",
        bg10:
          "url('https://images.unsplash.com/photo-1517701221265-7da25447217b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80')",
        bg11:
          "url('https://images.unsplash.com/photo-1503945438517-f65904a52ce6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80')",
        

      }),
    },
  },

  variants: {
    extend: {
      opacity: ['disabled'],
      outline: ['hover', 'active'],
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
