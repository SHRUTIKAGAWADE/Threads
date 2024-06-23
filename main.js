const slides = document.querySelectorAll(".slide");
var counter = 0;
var intervalId; // Variable to store the interval ID

slides.forEach(
    (slide, index) => {
        slide.style.left = `${index * 100}%`;
    }
);

const goprev = () => {
    counter--;
    if (counter < 0) {
        counter = slides.length - 1;
    }
    slideImages();
};

const gonext = () => {
    counter++;
    if (counter >= slides.length) {
        counter = 0;
    }
    slideImages();
};

const slideImages = () => {
    slides.forEach((slide) => {
        slide.style.transform = `translateX(-${counter * 100}%)`;
    });
};

// Function to start the auto-slide
const startAutoSlide = () => {
    intervalId = setInterval(gonext, 2000); // Change 3000 to the desired interval in milliseconds (e.g., 3000 for 3 seconds)
};

// Function to stop the auto-slide
const stopAutoSlide = () => {
    clearInterval(intervalId);
};

// Start auto-slide initially
startAutoSlide();

// Optionally, you can stop the auto-slide when the user interacts with the slider (e.g., hover)
slides.forEach((slide) => {
    slide.addEventListener("mouseenter", stopAutoSlide);
    slide.addEventListener("mouseleave", startAutoSlide);
});
