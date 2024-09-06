const menuToggle = document.getElementById('menu-toggle');
const nav = document.getElementById('nav');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
    menuToggle.classList.toggle('active');
});


let index = 0;

function showSlide(n) {
    const slides = document.querySelectorAll('.slider img');
    if (n >= slides.length) index = 0; // Wrap around to the first image
    if (n < 0) index = slides.length - 1; // Wrap around to the last image
    const offset = -index * 100; // Calculate offset based on current index
    document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    index = (index + 1) % document.querySelectorAll('.slider img').length; // Move to the next image
    showSlide(index);
}

function prevSlide() {
    index = (index - 1 + document.querySelectorAll('.slider img').length) % document.querySelectorAll('.slider img').length; // Move to the previous image
    showSlide(index);
}

