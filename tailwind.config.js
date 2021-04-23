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
      colors: {
        primary: 'var(--colour-primary)',
        secondary: 'var(--colour-secondary)',
        accent: 'var(--colour-accent)',
      },
      lineHeight: {
        '27/16': '1.6875rem'
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
        'prose': 'var(--width-prose)',
      },
      maxWidth: {
        '128': '32rem',
        '144': '36rem',
        'prose': 'var(--width-prose)',
      },
      gridTemplateColumns: {
        'w72': gridColsRepeat(18),
        'w96': gridColsRepeat(24),
        'w144': gridColsRepeat(36),
        'prose': gridColsRepeat('var(--width-prose)'),
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

function gridColsRepeat(width) {
  return `repeat(auto-fit, minmax(${width}rem, 1fr))`;
}
