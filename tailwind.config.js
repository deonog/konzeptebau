/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './*.php',
      './template-parts/**/*.php',
      './inc/**/*.php',
      './archive-*.php',
      './single-*.php'
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#000000',
          'secondary': '#000000',
          'tertiary': '#000000',
          'quaternary': '#000000',
          'quinary': '#000000',
        },
        fontFamily: {
          'sans': ['Inter', 'sans-serif'],
          'serif': ['Merriweather', 'serif'],
          'display': ['Montserrat', 'sans-serif'],
          'body': ['Open Sans', 'sans-serif'],
        },
        backgroundColor: {
          'primary': '#000000',
          'secondary': '#000000',
          'tertiary': '#000000',
          'quaternary': '#000000',
          'quinary': '#000000',
        },
        opacity: {
          '15': '0.15',
          '35': '0.35',
          '65': '0.65',
         }
        // Add your custom theme configurations here
      },
    },
    plugins: [],
    // This ensures Tailwind classes work with WordPress editor
    safelist: [
      'wp-block',
      'align-left',
      'align-right',
      'align-center',
    ]
  }