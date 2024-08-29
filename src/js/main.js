

// var owl = $('.owl-carousel');
// owl.owlCarousel({
//     items:1,
//     loop:true,
//     margin:10,
//     autoplay:true,
//     autoplayTimeout:3000,
//     autoplayHoverPause:true
// });
// $('.play').on('click',function(){
//     owl.trigger('play.owl.autoplay',[3000])
// })
// $('.stop').on('click',function(){
//     owl.trigger('stop.owl.autoplay')
// })

// $('.owl-carousel2').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:5
//         }
//     }
// })




const sunIcon = document.querySelector(".sun")
const moonIcon = document.querySelector(".moon") 

const userTheme = localStorage.getItem("theme")
console.log(userTheme);
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches; 
console.log(systemTheme)


if(userTheme === "dark" || (!userTheme && systemTheme ) ){
    document.documentElement.classList.add("dark");
    sunIcon.classList.add("hidden");
    moonIcon.classList.remove("hidden");
}else{
    document.documentElement.classList.remove("dark");
    moonIcon.classList.add("hidden");
    sunIcon.classList.remove("hidden");
}


const themeswitcher = document.querySelectorAll(".theme-switcher");

themeswitcher.forEach(item => {
    item.addEventListener('click' ,(e)=>{
        e.preventDefault();
        const theme = e.target.dataset.theme;
        switch (theme) {
            case "dark":
                document.documentElement.classList.add("dark");
                localStorage.setItem("theme", "dark");
                sunIcon.classList.add("hidden")
                moonIcon.classList.remove("hidden")
                break;
            case "light": 
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
                sunIcon.classList.remove("hidden")
                moonIcon.classList.add("hidden")
                break;
    
            default:
                break;
        }
    } )
})


// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,

//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     breakpoints: {
//       760: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       980: {
//         slidesPerView: 3,
//         spaceBetween: 40,
//       },
//       1024: {
//         slidesPerView: 4,
//         spaceBetween: 50,
//       },
//     },
//   });

  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  const swiper2 = new Swiper('.mySwiper2', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.mySwiper2 .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-btn-test .swiper-button-next-2',
        prevEl: '.swiper-btn-test .swiper-button-prev-2',
    },
    // Additional options can go here
});


// search icon
$(document).ready(function (){
    $('.search-svg').click(function (){
        $('.search-icon').slideToggle();
    })
})
