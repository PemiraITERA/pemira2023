/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./public/client/html/*.html",
    ],
    theme: {
      extend: {
        colors: {
          main: {
            50: "#FFF9F5",
            100: "#FBB03B",
            200: "#FF7A17",
            300: "#F88312",
            400: "#0B1742",
          },
          pink: "#FB43FF",
          purple: "#8512F8",
          white: "#FFFDF6",
          'white-2': "rgba(193, 113, 39, 0.1)",
        },
        fontFamily: {
          montserrat: ["Montserrat", 'sans-serif'],
          poppins: ["Poppins", 'sans-serif'],
        },
      },
    },
    plugins: [],
  }
