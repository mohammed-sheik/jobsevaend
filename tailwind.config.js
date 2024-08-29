/** @type {import('tailwindcss').Config} */

const plugin= require('tailwindcss/plugin');

const rotateY = plugin(function({addUtilities}){
  addUtilities({
    '.rotate-y-180':{
      transform: "rotateY(180deg)"
    },
    '.-rotate-y-180':{
      transform: "rotateY(-180deg)"
    }
  })
})
const Myclass = plugin(function ({ addUtilities }) {
  addUtilities({
    ".my-rotate-y-180": {
      transform: "rotateY(180deg)",
    },
    ".preserve-3d": {
      transformStyle: "preserve-3d",
    },
    ".perspective": {
      perspective: "1000px",
    },
    ".backface-hidden": {
      backfaceVisibility: "hidden",
    },
  });
});
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
 
    extend: {
      fontfamily:{
        bebas:['bebas Neue','sans-serif'],
        sans: ['ui-sans-serif', 'system-ui'],
        serif: ['ui-serif', 'Georgia',],
        mono: ['ui-monospace', 'SFMono-Regular', ],
        roboto: ['Roboto', 'sans-serif',],

      },
      colors: {
        "color-primary": "#01051e",
        "color-primary-light": "#020726",
        "color-primary-dark": "#010417",
        "color-secondary": "#ff7d3b",
        "color-gray": "#333",
        "color-white": "#fff",
        "color-blob": "#818cf8",
        "color-blue":"#075985",
        "color-gray-light":"#cbd5e1",
        "color-blue-light":"#dbeafe",
        "color-blue-700":  "#60a5fa"
      },

     

      
      keyframes:{
        marquee: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(-200%)' },
        },
        move: {
          "50%":{transform:'translateY(-1rem)'}
        },
        fadein: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
     
      },
      animation:{
        'fadeIn': 'fadein 4s ease-out 1',
        'movingY': 'move 2s linear infinite',
        'marquee': 'marquee 30s linear infinite',
      },
     

    
    },
    container: {
      center: true,
      padding:{
        DEFAULT:'20px',
        md:'50px'
      }
    },
    screens:{
      'xs':'240px',
      //=>@media(min-width:640px ){....}
      'sm':'320px',
      //=>@media(min-width:480px ){....}
      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }
   }
  },

  plugins: [rotateY,Myclass],
 
}




  
