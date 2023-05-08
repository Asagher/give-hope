// const menu = document.querySelector("");
// const menuBtn = document.querySelector("#menu");
// const closeBtn = document.querySelector("#close");

// menuBtn.addEventListener("click", () => {
//   menu.style.display = "flex";
//   closeBtn.style.display = "inline-block";
//   menuBtn.style.display = "none";
// });
// closeBtn.addEventListener("click", () => {
//   menu.style.display = "none";
//   closeBtn.style.display = "none";
//   menuBtn.style.display = "inline-block";
// });

// // change navbar style on scroll
// window.addEventListener("scroll", () => {
//   document
//     .querySelector("nav")
//     .classList.toggle("window-scroll", window.scrollY > 220);
// });
const list = document.querySelector("nav");
function Menu(e) {
  e.name === "menu"
    ? ((e.name = "close"), list.classList.add("opacity-100"))
    : ((e.name = "menu"), list.classList.remove("opacity-100"));
}
// slider
currentSlide = 1;
sliderElement = document.getElementById("slide");
totalSlider = sliderElement.childElementCount;

function prev() {
  if (currentSlide > 1) {
    currentSlide--;
    showSlide();
  }
}
function next() {
  if (currentSlide < totalSlider) {
    currentSlide++;
    showSlide();
  }
}
function showSlide() {
  slides = document.getElementById("slide").getElementsByTagName("li");
  for (let index = 0; index < totalSlider; index++) {
    element = slides[index];

    if (currentSlide === index + 1) {
      element.classList.remove("hidden");
    } else {
      element.classList.add("hidden");
    }
  }
}
