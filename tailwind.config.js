module.exports = {
  content: ["index.html"],
  theme: {
    container: {
      center: true,
      padding: '50px'
    },
    extend: {
      colors: {
        primary: '#edebe8',
        secondary: '#f6dccc',
        tertiary: '#81d4fa',
        dark: '#494245'
      },
      keyframes: {
        'fade-in-up': {
            '0%': {
                opacity: '0',
                transform: 'translateY(500px)'
            },
            '100%': {
                opacity: '1',
                transform: 'translateY(0)'
            },
        },
        'fade-out-up': {
            'from': {
                opacity: '1',
                transform: 'translateY(0px)'
            },
            'to': {
                opacity: '0',
                transform: 'translateY(500px)'
            },
        },
        'fade-in-right': {
          '0%': {
              opacity: '0',
              transform: 'translateX(100%)'
          },
          '100%': {
              opacity: '1',
              transform: 'translateX(0)',
          },
        },
        'fade-out-right': {
            'from': {
                opacity: '1',
                transform: 'translateX(0)'
            },
            'to': {
                opacity: '0',
                transform: 'translateX(100%)'
            },
        },
      },
      animation: {
          'slide-in-up': 'fade-in-up 1.5s ease-in-out forwards',
          'slide-out-up': 'fade-out-up 1.5s ease-in-out forwards',
          'slide-in-right': 'fade-in-right 1.5s ease-in-out forwards',
          'slide-out-right': 'fade-out-right 1.5s ease-in-out forwards'
      }
    },
  },
  plugins: [],
}
