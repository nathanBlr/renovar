/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/tw-elements/js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        fredericka: "Fredericka the Great"
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("tw-elements/plugin.cjs")
  ],
}

