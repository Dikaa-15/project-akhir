const menuToggle = document.querySelector('.menu-toogle input');
const nav = document.querySelector('nav ul, button');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
})