
const header = document.querySelector('header');
const logo = document.querySelector('.logo-container img');

window.addEventListener('scroll', () => {
    const isScrolled = window.scrollY > 50;

    header.classList.toggle('scrolled', isScrolled);

    logo.src = isScrolled
        ? './assets/images/logos/logoLaranja.png'
        : './assets/images/logos/logoBranco.png';
});
