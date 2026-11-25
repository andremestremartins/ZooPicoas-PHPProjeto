
const header = document.getElementById('header');
const logo = document.querySelector('.logo-container img');
const PesquiseHeader = document.querySelector('.pesquiseMode');

window.addEventListener('scroll', () => {
    const isScrolled = window.scrollY > 50;

    header.classList.toggle('scrolled', isScrolled);

    logo.src = isScrolled
        ? './assets/images/logos/logoLaranja.png'
        : './assets/images/logos/logoBranco.png';
});

function PesquiseMode(bool) {
    header.classList.toggle('none', bool);
    PesquiseHeader.classList.toggle('none', !bool);
    
}