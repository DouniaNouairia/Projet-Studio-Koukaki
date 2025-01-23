const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  centeredSlides: true,
  slidesPerView: "auto",
  speed: 1500,
  grabCursor: true,
  loop: true,
  loopedSlides: 5,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  coverflowEffect: {
    slideShadows: false,
    rotate: 60,
    stretch: 0,
    depth: 40,
    modifier: 1,
  }
});