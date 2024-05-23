/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 43,
  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
    700:{
      slidesPerView: 1,
    },
    900: {
      slidesPerView: 2,
    },
    1199: {
      slidesPerView: 3,
    },
  },
});