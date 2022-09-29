const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

hamburger.addEventListener('click', () => {
    navLink.classList.toggle('hide');
});

// login form
let container = document.getElementById('container')

toggle = () => {
    container.classList.toggle('sign-in')
    container.classList.toggle('sign-up')
}

setTimeout(() => {
    container.classList.add('sign-in')
}, 200)