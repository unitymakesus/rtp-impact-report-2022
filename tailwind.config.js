module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      colors: {
        // 'slate': '#202A3A',
        // 'mint': '#73BDA5',
        // 'light-blue': '#4BA2D3',
        'dark-blue': '#012169',
        'purple': '#654EA3',
        // 'red': '#FF002F',
      },
      fontFamily: {
        'sans': 'Poppins, Helvetica, Arial, sans-serif'
      },
    },
  },
  plugins: [],
};
