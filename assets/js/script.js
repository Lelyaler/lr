const defaultSelect = () => {
  const element = document.querySelector(".default");

  const choices = new Choices(element, {
    searchEnabled: false,
    placeholderValue: "Choose language",
    itemSelectText: "",
  });
};

defaultSelect();

document.querySelectorAll(".faq__question").forEach((item) => {
  item.addEventListener("click", () => {
    document.querySelectorAll(".faq__item").forEach((faq) => {
      if (faq !== item.parentElement) {
        faq.classList.remove("open");
      }
    });

    item.parentElement.classList.toggle("open");
  });
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      // Высота экрана и блока
      const viewportHeight = window.innerHeight;
      const targetHeight = targetElement.offsetHeight;

      // Позиция верхней границы блока
      const targetPosition =
        targetElement.getBoundingClientRect().top + window.scrollY;

      // Рассчитываем позицию так, чтобы блок оказался посередине экрана
      const offsetPosition =
        targetPosition - (viewportHeight - targetHeight) / 2;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  });
});

let currentSlide = 0;
const cards = document.querySelectorAll(".card");
const totalSlides = cards.length;
const currentSlideElement = document.querySelector(".current-slide");

function updateSlider(index) {
  cards.forEach((card) => card.classList.remove("active"));
  cards[index].classList.add("active");
  currentSlideElement.textContent = String(index + 1).padStart(2, "0");
}

document.querySelector(".next-slide").addEventListener("click", function () {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlider(currentSlide);
});

document.querySelector(".prev-slide").addEventListener("click", function () {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlider(currentSlide);
});

updateSlider(currentSlide);
