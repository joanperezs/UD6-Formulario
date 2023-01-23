/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    customForms: theme => ({
      default: {
        input: {
          borderRadius: theme('borderRadius.lg'),
          backgroundColor: theme('colors.gray.200'),
          '&:focus': {
            backgroundColor: theme('colors.white'),
          }
        },
        textarea: {
          borderRadius: theme('borderRadius.lg'),
          backgroundColor: theme('colors.gray.200'),
          '&:focus': {
            backgroundColor: theme('colors.white'),
          }
        },
        select: {
          borderRadius: theme('borderRadius.lg'),
          boxShadow: theme('boxShadow.default'),
        },
        checkbox: {
          borderRadius: theme('borderRadius.lg'),
          width: theme('spacing.6'),
          height: theme('spacing.6'),
        },
      },
    }),

  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
