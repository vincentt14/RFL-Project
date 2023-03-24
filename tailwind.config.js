/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#fff",
        secondary: "#3b9e51",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
}