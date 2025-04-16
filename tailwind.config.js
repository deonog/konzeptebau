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
          'primary': '#E75E2A',
          'secondary': '#E75E2A',
          'tertiary': '#E75E2A',
          'quaternary': '#E75E2A',
          'quinary': '#E75E2A',
          'custom-orange': '#E75E2A',
        },
        fontFamily: {
          'sans': ['Inter', 'sans-serif'],
          'serif': ['Merriweather', 'serif'],
          'display': ['Montserrat', 'sans-serif'],
          'body': ['Open Sans', 'sans-serif'],
        },
        backgroundColor: {
          'primary': '#E75E2A',
          'secondary': '#E75E2A',
          'tertiary': '#E75E2A',
          'quaternary': '#E75E2A',
          'quinary': '#E75E2A',
          'custom-orange': '#E75E2A',
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