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
  