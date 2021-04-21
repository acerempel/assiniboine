module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', './source/extra-classes.txt'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '640px',
      'lg': '980px',
      'xl': '1280px',
    },
    extend: {
      lineHeight: {
        '27/16': '1.6875rem'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
