module.exports = {

  important: true,
  purge: [
    './modules/**/includes/frontend.php'
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          '50': '#fef4f4',
          '100': '#eec7c8',
          '200': '#dd9a9b',
          '300': '#cd6d6f',
          '400': '#bc4042',
          '500': '#ac1316',
          '600': '#8a0f1a',
          '700': '#680c1a',
          '800': '#460815',
          '900': '#24040e',
        }
      },
      inset: {
        '32': '8rem',
        '16': '4rem',
        '8': '2rem',
        '4': '1rem',
      },
      height: {
        '128': '32rem',
        '64': '16rem',
      },
      maxWidth: {
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'flexbelt': '1200px'
      }
    },


  },
  variants: {},
  plugins: [],
}
