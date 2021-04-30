const plugin = require('tailwindcss/plugin');

const colourZones = plugin(({ addComponents, theme }) => {
  addComponents({
    '.sapphire': {
      '--bg-colour-dark': theme('colors.sapphire.deep'),
      '--bg-colour-medium': theme('colors.sapphire.dark'),
      '--link-colour': theme('colors.sapphire.lighter'),
      '--button-colour-dark': theme('colors.sapphire.dark'),
      '--button-colour-medium': theme('colors.sapphire.medium'),
      '--button-colour-light': theme('colors.sapphire.light'),
      '--button-colour-text': 'var(--link-colour)',
      '--primary-colour': theme('colors.gray.50'),
      '--secondary-colour': theme('colors.gray.100'),
      'color': 'var(--primary-colour)',
      'background-color': 'var(--bg-colour-dark)',
    },

    '.teal': {
      '--bg-colour-dark': theme('colors.teal.900'),
      '--bg-colour-medium': theme('colors.teal.700'),
      '--link-colour': theme('colors.cyan.100'),
      '--button-colour-dark': theme('colors.teal.800'),
      '--button-colour-medium': theme('colors.teal.700'),
      '--button-colour-light': theme('colors.teal.100'),
      '--button-colour-text': 'var(--primary-colour)',
      '--primary-colour': theme('colors.grey.50'),
      '--secondary-colour': theme('colors.grey.100'),
      'color': 'var(--primary-colour)',
      'background-color': 'var(--bg-colour-dark)',
    },

    '.indigo': {
      '--bg-colour-dark': theme('colors.indigo.800'),
      '--bg-colour-medium': theme('colors.indigo.700'),
      '--link-colour': theme('colors.indigo.100'),
      '--button-colour-dark': theme('colors.indigo.800'),
      '--button-colour-medium': theme('colors.indigo.700'),
      '--button-colour-light': theme('colors.indigo.50'),
      '--button-colour-text': 'var(--primary-colour)',
      '--primary-colour': theme('colors.gray.50'),
      '--secondary-colour': theme('colors.gray.100'),
      'color': 'var(--primary-colour)',
      'background-color': 'var(--bg-colour-dark)',
    },

    '.grey': {
      '--bg-colour-dark': theme('colors.grey.50'),
      '--bg-colour-medium': theme('colors.grey.200'),
      '--link-colour': theme('colors.blue.800'),
      '--button-colour-dark': theme('colors.blue.800'),
      '--button-colour-medium': theme('colors.blue.700'),
      '--button-colour-light': theme('colors.blue.600'),
      '--button-colour-text': theme('colors.gray.50'),
      '--primary-colour': theme('colors.grey.900'),
      '--secondary-colour': theme('colors.grey.700'),
      'color': 'var(--primary-colour)',
      'background-color': 'var(--bg-colour-dark)',
    }
  })
})

module.exports = colourZones;
