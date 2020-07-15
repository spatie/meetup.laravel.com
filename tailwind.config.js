const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
      './resources/**/*.css',
      './resources/**/*.js',
      './resources/**/*.php',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        },
    },
  },
  variants: {},
  plugins: [
      require('@tailwindcss/ui'),
  ],
}
