module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', './source/extra-classes.txt'],
  darkMode: false, // or 'media' or 'class'
  theme: {
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
