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