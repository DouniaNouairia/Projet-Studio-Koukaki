// ********* EFFETS D'ANIMATION SUR LES SECTIONS *********
const section = document.querySelectorAll(".entrance");

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
      return;
    }
  });
});
section.forEach((element) => observer.observe(element));

// *******ANIMATION TITRE DES SECTIONS******
const titreAnimation = document.querySelectorAll(".titreAnimation");

const observerTitle = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("titreAnimation--scroll");
      return;
    }
  });
});

titreAnimation.forEach((element) => observerTitle.observe(element));

// ********MENU BURGER********

const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");
const menuLinks = document.querySelectorAll(".menu_link");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  menu.classList.toggle("active");
  menuLinks.forEach((link, index) => {
    link.classList.toggle("titreAnimation");
    link.classList.toggle("titreAnimation--scroll");
  });
});

menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("active");
    menu.classList.remove("active");
  });
});

// *******SWIPER PERSONNAGES*******

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
  },
});

// ******** PARALLAXE NUAGE*******

window.addEventListener("scroll", function () {
  const bigCloud = document.querySelector(".bigCloud");
  const littleCloud = document.querySelector(".littleCloud");
  const placeSection = document.querySelector("#place");

  const sectionOffsetTop = placeSection.offsetTop;
  const scrollPosition = window.scrollY || document.documentElement.scrollTop;

  if (scrollPosition >= sectionOffsetTop) {
    const parallaxValue = (scrollPosition - sectionOffsetTop) / 5;

    const translationX = Math.min(parallaxValue, 300);
    bigCloud.style.transform =
      "translateX(" +
      -translationX +
      "px) translateY(" +
      parallaxValue / 8 +
      "px) ";
    littleCloud.style.transform = "translateX(" + -translationX + "px)";
  }
});
