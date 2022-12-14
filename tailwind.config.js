/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#22d3ee',
        secondary: '#64748b',
        dark: '#0f172a',
      },      
      screens:{
        'xl': '1200px',
      }
    },
  },
  plugins: [],
}