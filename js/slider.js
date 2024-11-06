let slideIndex = 0;
let slides = document.getElementsByClassName("slide");
let timer;

function showSlide(n) {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex = (n + slides.length) % slides.length; 
    slides[slideIndex].style.display = "block";
}

function nextSlide() {
    clearInterval(timer);
    showSlide(slideIndex += 1);
    timer = setInterval(nextSlide, 5000);
}

function prevSlide() {
    clearInterval(timer);
    showSlide(slideIndex -= 1);
    timer = setInterval(nextSlide, 5000);
}

timer = setInterval(nextSlide, 5000); 

showSlide(slideIndex);
