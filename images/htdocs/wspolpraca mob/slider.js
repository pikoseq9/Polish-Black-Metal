
// const slider = document.querySelector('.slider');
// const prevBtn = document.querySelector('.prev-btn');
// const nextBtn = document.querySelector('.next-btn');

// let currentIndex = 0;

// nextBtn.addEventListener('click', () => {
//   currentIndex = (currentIndex + 1) % slider.children.length;
//   updateSlider();
// });

// prevBtn.addEventListener('click', () => {
//   currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
//   updateSlider();
// });

// function updateSlider() {
//   const translateXValue = -currentIndex * 100;
//   slider.style.transform = `translateX(${translateXValue}%)`;
// }

const buttons = document.querySelectorAll("[data-slider-btn]")

buttons.forEach(button => {
  button.addEventListener("click", () => {
    const offset = button.dataset.button === "next" ? 1 : -1
    const slides = button
      .closest("[data-slider]")
      .querySelector("[data-slides]")

    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})

