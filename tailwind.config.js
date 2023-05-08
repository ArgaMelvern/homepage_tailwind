module.exports = {
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/assets/images/Image.png')",
      }
    }
  },
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: false,
    theme: {
      extend: {},
    },
    variants: {},
    plugins: [],
  }