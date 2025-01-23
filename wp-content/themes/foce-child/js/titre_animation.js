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
