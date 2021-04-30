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
    fontSize: {
      sm: ['0.9375rem', '1.733333333'],
      base: ['1rem', '1.625'],
      lg: ['1.125rem', '1.44444444'],
      xl: ['1.25rem', '1.3'],
      '2xl': ['1.5rem', '1.08333333'],
      '3xl': ['1.875rem', '1.3'],
      '4xl': ['2.25rem', '1.08333333'],
      '5xl': ['3rem', '1.08333333'],
    },
    extend: {
      colors: {
        grey: colours.warmGray,
        ice: colours.blueGray,
        emerald: colours.emerald,
        teal: colours.teal,
        indigo: colours.indigo,
        cyan: colours.cyan,
        blue: colours.blue,
        'primary': 'var(--primary-colour)',
        'secondary': 'var(--secondary-colour)',
        'tertiary': 'var(--tertiary-colour)',
        'link': 'var(--link-colour)',
        'dark': 'var(--bg-colour-dark)',
        'accent-1': 'var(--colour-accent-1)',
        'accent-2': 'var(--colour-accent-2)',
        'accent-3': 'var(--colour-accent-3)',
        'interactive-1': 'var(--colour-interactive-1)',
        'interactive-2': 'var(--colour-interactive-2)',
        'interactive-3': 'var(--colour-interactive-3)',
      },
      lineHeight: {
        '13/9': '1.44444444',
        '4/3': '1.33333333',
      },
      letterSpacing: {
        wideish: '0.0375em',
      },
      spacing: {
        '0.5lh': '0.8125rem',
        '0.75lh': '1.21875rem',
        '1lh': '1.625rem',
        '1.5lh': '2.4375rem',
        '2lh': '3.25rem',
        '128': '32rem',
        '144': '36rem',
        '224': '56rem',
        '288': '72rem',
        'prose': 'var(--width-prose)',
      },
      maxWidth: {
        '128': '32rem',
        '144': '36rem',
        '224': '56rem',
        '288': '72rem',
        'prose': 'var(--width-prose)',
      },
      gridTemplateColumns: {
        'auto-2': 'auto auto',
        'w40': gridColsRepeat(10),
        'w48': gridColsRepeat(12),
        'w72': gridColsRepeat(18),
        'w96': gridColsRepeat(24),
        'w144': gridColsRepeat(36),
        'prose': gridColsRepeat('var(--width-prose)'),
      },
      outline: {
        'button': [
          `2px dotted var(--button-colour-light)`,
          '2px'
        ],
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('./source/colour-zones'),
  ],
}

function gridColsRepeat(width) {
  return `repeat(auto-fit, minmax(${width}rem, 1fr))`;
}
