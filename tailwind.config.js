/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './*.php',
      './template-parts/**/*.php',
      './inc/**/*.php',
      './archive-*.php',
      './single-*.php',
      './**/*.php',
      './src/**/*.js',
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
          'sans': ['Poppins', 'sans-serif'],
          'serif': ['Poppins', 'sans-serif'],
          'display': ['Poppins', 'sans-serif'],
          'body': ['Poppins', 'sans-serif'],
          'poppins': ['Poppins', 'sans-serif'],
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
         },
        fontWeight: {
          thin: '100',
          extralight: '200',
          light: '300',
          normal: '400',
          medium: '500',
          semibold: '600',
          bold: '700',
          extrabold: '800',
          black: '900',
        },
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