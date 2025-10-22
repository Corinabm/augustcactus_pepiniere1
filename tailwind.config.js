/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'olive': '#1A4B2E',      // Vert Olive - CTA, éléments importants
        'white': '#FFFFFF',       // Blanc - Fond principal
        'black': '#1A1A1A',       // Noir - Titres, Texte principal
        'gray': '#2C2C2C',        // Gris - Texte secondaire
      },
      fontFamily: {
        'sans': ['Source Sans Pro', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        'serif': ['Playfair Display', 'serif'],
      },
    },
  },
  plugins: [],
}
