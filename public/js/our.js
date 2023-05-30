// const menu = document.querySelector("");
// const menuBtn = document.querySelector("#menu");
// const closeBtn = document.querySelector("#close");

// const { document } = require("postcss");
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

// change navbar style on scroll'
const fDiv = document.querySelector("#hide");
const navShadow = document.querySelector(".nav-a");

let animationFrameId = null;

window.addEventListener("scroll", function () {
  cancelAnimationFrame(animationFrameId);
  animationFrameId = requestAnimationFrame(function () {
    if (window.scrollY > fDiv.offsetHeight) {
      fDiv.classList.add("hidden-a");
    } else {
      fDiv.classList.remove("hidden-a");
    }
  });
});
window.addEventListener("scroll", function () {
  if (window.scrollY > navShadow.offsetHeight) {
    navShadow.classList.add("window-scroll");
  } else {
    navShadow.classList.remove("window-scroll");
  }
});
window.addEventListener("scroll", function () {
  if (window.scrollY > navShadow.offsetHeight) {
    navShadow.classList.add("top0-a");
  } else {
    navShadow.classList.remove("top0-a");
  }
});
window.addEventListener("scroll", function () {
  if (window.scrollY > navShadow.offsetHeight) {
    navShadow.classList.add("nav-fixed-a");
  } else {
    navShadow.classList.remove("nav-fixed-a");
  }
});
// window.addEventListener("scroll", () => {
//   document
//     .querySelector(".nav-a")
//     .classList.toggle("window-scroll", window.scrollY > 220);
//   document
//     .querySelector(".nav-a")
//     .classList.toggle("top0-a", window.scrollY > 220);
// });
const list = document.querySelector("nav");
function Menu(e) {
  e.name === "menu"
    ? ((e.name = "close"), list.classList.add("opacity-100"))
    : ((e.name = "menu"), list.classList.remove("opacity-100"));
}
// slider

// currentSlide = 1;
// sliderElement = document.getElementById("slide");
// totalSlider = sliderElement.childElementCount;

// function prev() {
//   if (currentSlide > 1) {
//     currentSlide--;
//     showSlide();
//   }
// }
// function next() {
//   if (currentSlide < totalSlider) {
//     currentSlide++;
//     showSlide();
//   }
// }
// function showSlide() {
//   slides = document.getElementById("slide").getElementsByTagName("li");

//   for (let index = 0; index < totalSlider; index++) {
//     element = slides[index];

//     if (currentSlide === index + 1) {
//       element.classList.remove("hidden");
//     } else {
//       element.classList.add("hidden");
//     }
//   }
// }

// fvndbdjfvkjv

let slideIndex = 1;
showSlide(slideIndex);

// change slide with the prev/next button
function moveSlide(moveStep) {
  showSlide((slideIndex += moveStep));
}

// change slide with the dots

function showSlide(n) {
  let i;
  const slides = document.getElementsByClassName("slide");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.add("translate-x-full");
    slides[i].classList.add("opacity-0");
    slides[i].classList.add("hidden");
  }

  // show the active slide
  slides[slideIndex - 1].classList.remove("translate-x-full");
  slides[slideIndex - 1].classList.remove("opacity-0");
  slides[slideIndex - 1].classList.remove("hidden");
}
// timer
let timer = setInterval(function () {
  moveSlide(1);
}, 4000);
// nfdj
// counter code
  const scroll_a=document.querySelector(".counter")
  if(window.scrollY>scroll_a.offsetHeight){
  let valueDisplays = document.querySelectorAll(".num");
  valueDisplays.forEach((valueDisplay)=>{
    let startvalue=0;
    let endvalue=parseInt(valueDisplay.getAttribute("data-val"));
    let counter=setInterval(function(){
      startvalue+=1;
      valueDisplay.textContent=startvalue;
      if(startvalue==endvalue){
        clearInterval(counter);
      }
    },30)
  });
  }
