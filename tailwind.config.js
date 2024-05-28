/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        fredericka: "Fredericka the Great"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

