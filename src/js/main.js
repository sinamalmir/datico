jQuery(document).ready(function($) {
    var toc = $('#toc ul');
    toc.hide(); // Hide the TOC by default

    $('<button id="toc-toggle" style="margin-bottom:10px;">' +
        '<svg xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: #999;color:#999" xmlns="http://www.w3.org/2000/svg" class="list-377408" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z" fill="#999999"></path></svg>' +
        '</button>').insertBefore(toc);

    $('#toc-toggle').click(function() {
        toc.toggle();
        $(this).text($(this).text() == '▽' ? '▽' : '▽');
    });
});
    // $('img').removeClass();
  const swiper1 = new Swiper(".mySwiper", {
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
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
    },
    // Additional options can go here
});


// search icon
$(document).ready(function (){
    $('.search-svg').click(function (){
        $('.search-icon').slideToggle();
    })
})

document.addEventListener('DOMContentLoaded', function() {
  // open
  const burger = document.querySelectorAll('.navbar-burger');
  const menu = document.querySelectorAll('.navbar-menu');

  if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
          burger[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }

  // close
  const close = document.querySelectorAll('.navbar-close');
  const backdrop = document.querySelectorAll('.navbar-backdrop');

  if (close.length) {
      for (var i = 0; i < close.length; i++) {
          close[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }

  if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
          backdrop[i].addEventListener('click', function() {
              for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
              }
          });
      }
  }
});