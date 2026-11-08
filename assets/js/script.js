const dropdowns = document.querySelectorAll('.dropdown-wrapper');

function closeAllDropdowns() {
    dropdowns.forEach(dropdown => dropdown.classList.remove('active'));
}

dropdowns.forEach(dropdown => {
    const button = dropdown.querySelector('.dropdown-toggle');

    button.addEventListener('click', event => {
        event.stopPropagation();
        const isOpen = dropdown.classList.contains('active');
        
        closeAllDropdowns();

        if (!isOpen) {
            dropdown.classList.add('active');
        }
    });
});

document.addEventListener('click', closeAllDropdowns);

document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeAllDropdowns();
});