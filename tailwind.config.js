/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./public/**/*.{html,js}","./src/js/main.js"],
    darkMode: "class",
    theme: {
      container: {
        center:true,
        padding:"1rem" ,
        screens: {
          sm: '100%',  // 100% width on small screens
          md: '720px', // Max width of 720px on medium screens
          lg: '960px', // Max width of 960px on large screens
          xl: '1140px', // Max width of 1140px on extra large screens
          '2xl': '1200px', // Custom breakpoint for larger screens
        },
      },
      fontFamily:{
        sans : ["iranyekan"]
      },
      colors:{
        title:'#16205A',
        tag:'#0175E6',
        black:'#000000',
        white:'#ffffff',
        c1:'#A0A4BC',
        darkMain :'#161718',
        darkTextHover : '#5BA7F0',
        darkTextMain : '#B3BBC7',
        orange: '#F37A53',
        darkTitle:'#888DAB',
        darkBorder:'#43464A',
        lightBorder: '#e1eaf9',
        darkTag:'#878C95',
        transparent: 'transparent',
        yellow:'#FACC17',
        lightMain:'#6A7196',
        hoverBreadCrumb: '#1B75E7',
        lightTitle:'#135EB9',
      }
    },
    plugins: [],
  }