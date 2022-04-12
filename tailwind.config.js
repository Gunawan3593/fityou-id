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
        'fade-in-down': {
            '0%': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
            '100%': {
                opacity: '1',
                transform: 'translateY(0)'
            },
        },
        'fade-out-down': {
            'from': {
                opacity: '1',
                transform: 'translateY(0px)'
            },
            'to': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
        },
        'fade-in-up': {
            '0%': {
                opacity: '0',
                transform: 'translateY(50px)'
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
                transform: 'translateY(50px)'
            },
        },
        'fade-in-down': {
            '0%': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
            '100%': {
                opacity: '1',
                transform: 'translateY(0)'
            },
        },
        'fade-out-down': {
            'from': {
                opacity: '1',
                transform: 'translateY(0px)'
            },
            'to': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
        },
        'fade-in-down': {
            '0%': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
            '100%': {
                opacity: '1',
                transform: 'translateY(0)'
            },
        },
        'fade-out-down': {
            'from': {
                opacity: '1',
                transform: 'translateY(0px)'
            },
            'to': {
                opacity: '0',
                transform: 'translateY(-50px)'
            },
        },
        'zoom-in': {
          "0%": { opacity: '1', transform: 'scale(0)' },
          "100%": { opacity: '1', transform: 'scale(1)' }
        },
        'zoom-out': {
          "from": { opacity: '1', transform: 'scale(1)' },
          "to": { opacity: '0', transform: 'scale(0)' }
        },
        'fade-in-right': {
          '0%': {
              opacity: '0',
              transform: 'translateX(100%)'
          },
          '100%': {
              opacity: '1',
              transform: 'translateX(0)'
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
          'fade-in-down': 'fade-in-down 1s ease-in forwards',
          'fade-out-down': 'fade-out-down 1s ease-out',
          'fade-in-up': 'fade-in-up 1s ease-in forwards',
          'fade-out-up': 'fade-out-up 1s ease-out',
          'zoom-in': 'zoom-in 1s ease-in forwards',
          'zoom-out': 'zoom-out 1s ease-out',
          'fade-in-right': 'fade-in-right 1s ease-in',
          'fade-out-right': 'fade-out-right 1s ease-out'
      }
    },
  },
  plugins: [],
}
