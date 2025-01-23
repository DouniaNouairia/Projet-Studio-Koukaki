const section = document.querySelectorAll('.entrance');
  

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        return;
      }
    });
  });

section.forEach((element) => observer.observe(element));