/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
            rubiks: ["Rubiks", "sans-serif"],
            oswald: ["Oswald", "sans-serif"]
        }
      },
    },
    plugins: [require("tw-elements/plugin.cjs")],
    darkMode: "class"
}
