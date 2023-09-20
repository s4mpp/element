/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./views/**/*.blade.php"],
	theme: {
	  extend: {},
	},
	plugins: [
    require('@tailwindcss/forms')
  ],
}