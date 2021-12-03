let wave1 = document.getElementById('wave1');
let wave2 = document.getElementById('wave2');
let wave3 = document.getElementById('wave3');
let wave4 = document.getElementById('wave4');
const inputs = document.querySelectorAll(".input");

// Navbar
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

// Vagues
window.addEventListener('scroll', function(){
    let value = window.scrollY;

    wave1.style.backgroundPositionX = 40 + value * 0.3 + 'vw';
    wave2.style.backgroundPositionX = 30 + value * -0.3 + 'vw';
    wave3.style.backgroundPositionX = 20 + value * 0.1 + 'vw';
    wave4.style.backgroundPositionX = 10 + value * -0.1 + 'vw';

})

