document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".animated-element");

  const checkVisibility = () => {
    elements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        element.classList.add("visible");
      }
    });
  };

  window.addEventListener("scroll", checkVisibility);
  window.addEventListener("resize", checkVisibility);

  // Initial check in case elements are already in view on load
  checkVisibility();
});
