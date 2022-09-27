/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'pattern': "url('/Mask Group 20.png')",
      }
    },
  },
  plugins: [require("daisyui")],
}
