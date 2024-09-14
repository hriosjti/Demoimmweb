/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        Circular: ['Circular STD'],
      },
      colors:{
        "merah" : '#B00000',
        "oren" : '#FF5722',
        "kuning" : '#FFFF00'
      },
      // dropShadow:{
      //   "sm" : [
      //     '0px 548px 219px rgba(0, 0, 0, 0.01)',
      //     '0px 308px 185px rgba(0, 0, 0, 0.04)',
      //     '0px 137 137px rgba(0, 0, 0, 0.06)',
      //     '0px 34px 75px rgba(0, 0, 0, 0.07)',
      //     '0px 0px 0px rgba(0, 0, 0, 0.07)'
      //   ]
      // }
    },
  },
  plugins: [
    // require('@tailwindcss/forms'),
  ],
}