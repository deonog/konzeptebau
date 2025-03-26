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