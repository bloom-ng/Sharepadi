/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': '640px', // Small screens, mobile phones
      'md': '768px', // Medium screens, tablets
      'lg': '1024px', // Large screens, laptops
      'xl': '1280px', // Extra large screens, desktops
      '2xl': '1536px', // Extra extra large screens, wide desktops
      // Add custom screen sizes as needed
      'ph1': '320px', // Example of a custom screen size
      'ph2': '375px', // Example of a custom screen size
      'ph3': '425px', // Example of a custom screen size
    },
    extend: {
      boxShadow: {
        'custom': '0px 15px 25px 0px rgba(0, 0, 0, 0.25)',
        'custom2': '10px 10px 15px 0px rgba(0, 0, 0, 0.25)',
        'custom3': '5px 0px 10px rgba(0, 0, 0, 0.35), 0px -5px 0px -5px rgba(0, 0, 0, 0.35)',
        'custom4': '0px 5px 10px rgba(0, 0, 0, 0.35)',
      }
    }
  },
  plugins: [],
}

