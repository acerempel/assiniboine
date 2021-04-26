const colours = require('tailwindcss/colors');

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
        grey: colours.trueGray,
        ice: colours.blueGray,
        emerald: colours.indigo,
        'primary': 'var(--colour-primary)',
        'secondary': 'var(--colour-secondary)',
        'tertiary': 'var(--colour-tertiary)',
        'accent-1': 'var(--colour-accent-1)',
        'accent-2': 'var(--colour-accent-2)',
        'accent-3': 'var(--colour-accent-3)',
        'interactive-1': 'var(--colour-interactive-1)',
        'interactive-2': 'var(--colour-interactive-2)',
        'interactive-3': 'var(--colour-interactive-3)',
      },
      lineHeight: {
        '27/16': '1.6875rem'
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
        '224': '56rem',
        'prose': 'var(--width-prose)',
      },
      maxWidth: {
        '128': '32rem',
        '144': '36rem',
        '224': '56rem',
        'prose': 'var(--width-prose)',
      },
      gridTemplateColumns: {
        'auto-2': 'auto auto',
        'w40': gridColsRepeat(10),
        'w72': gridColsRepeat(18),
        'w96': gridColsRepeat(24),
        'w144': gridColsRepeat(36),
        'prose': gridColsRepeat('var(--width-prose)'),
      },
      outline: {
        'interactive-1': [
          `2px dotted var(--colour-interactive-1)`,
          '2px'
        ],
        'interactive-2': [
          `2px dotted var(--colour-interactive-2)`,
          '2px'
        ],
      }
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
