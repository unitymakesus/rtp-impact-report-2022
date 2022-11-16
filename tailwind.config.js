module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    colors: {
      'black': '#000000',
      'white': '#FFFFFF',
      'slate': '#202A3A',
      'slate-alt': '#39485F',
      'gray': '#EFEFEF',
      'red': '#E12744',
      'light-blue': '#4BA2D3',
      'mint': '#73BDA5',
      'dark-blue': '#012169',
      'purple': '#654EA3',
    },
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      fontFamily: {
        'sans': 'Poppins, Helvetica, Arial, sans-serif'
      },
    },
  },
  plugins: [],
};
