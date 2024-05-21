/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        playfair: ['PT Sans Narrow'],
      },
      colors: {
        palegray: ['#e3e3e3'],
        darkgray: ['#432b36f2'],
        pink: ['#ff00bf'],
        lightblue: ['#008cff']
      }
    },
    
  },
  plugins: [],
}