module.exports = {
  theme: {
    screens: {
      sm: '400px',
      md: '525px',
      lg: '675px',
      xl: '800px'
    },
    colors: {
      white: '#fff',
      green: '#2abd2a',
      red: '#bd422a',
      blue: {
        100: '#fafcff',
        200: '#f5f9ff',
        300: '#e6f0ff',
        400: '#95bff0',
        500: '#2a6ebd',
        600: '#1f5a99'
      },
      brown: {
        100: '#faf4ed',
        200: '#ccc2b8',
        300: '#473c2f'
      },
      gray: {
        100: '#7a8999',
        200: '#3d444d',
        300: '#1f2327'
      }
    },
    fontFamily: {
      body: [
        'Open Sans',
        '-apple-system',
        'BlinkMacSystemFont',
        '"Segoe UI"',
        'Roboto',
        '"Helvetica Neue"',
        'Arial',
        '"Noto Sans"',
        'sans-serif',
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"'
      ],
      display: ['Oswald', 'sans-serif']
    },
    fontSize: {
      body: '18px',
      tiny: '0.555rem',
      xs: '0.702rem',
      sm: '0.889rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.266rem',
      '2xl': '1.424rem',
      '3xl': '1.602rem',
      '4xl': '1.802rem',
      '5xl': '2.027rem',
      '6xl': '2.281rem'
    },
    extend: {
      maxWidth: {
        xxl: '1366px',
        '1/3': '33%',
        '1/2': '50%'
      },
      margin: {
        neg: '-2rem'
      }
    }
  },
  variants: {},
  plugins: []
};
