const slideLeft = document.getElementById("left-arrow");
const slideRight = document.getElementById("right-arrow");
const imgSlide = document.querySelectorAll(".imgSlide");

/* arrow variables */
let arrow = 0;
console.log("ingen klick");
/* right arrow for img carousel  */
slideRight.addEventListener("click", () => {
    imgSlide.forEach((imgSlide) => {
        imgSlide.classList.remove("left-80");
    });
    arrow += 1;
    if (arrow == 1) {
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-0");
            imgSlide.classList.remove("left-0");
            imgSlide.classList.toggle("right-80");
        });
    } else if (arrow == 2) {
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-80");
            imgSlide.classList.toggle("right-100");
        });
    } else if (arrow == 3) {
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-100");
            imgSlide.classList.toggle("right-110");
        });
    } else {
        arrow = 0;

        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-110");
            imgSlide.classList.toggle("right-0");
        });
    }
});
/* left arrow for img carousel  */
slideLeft.addEventListener("click", () => {
    if (arrow == 0) {
    } else if (arrow == 1) {
        arrow -= 1;
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.toggle("right-80");
        });
    } else if (arrow == 2) {
        arrow -= 1;
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-100");
            imgSlide.classList.toggle("right-80");
        });
        console.log("left-2");
    } else if (arrow == 3) {
        arrow -= 1;
        imgSlide.forEach((imgSlide) => {
            imgSlide.classList.remove("right-110");
            imgSlide.classList.toggle("right-100");
        });
    } else {
        return;
    }
});
