let lastScrollTop = 0;
const header = document.querySelector('header');
const menuIcon = document.querySelector('.menu-icon');
const nav = document.querySelector('nav');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        header.style.top = '-150px'; // Oculta el encabezado al desplazarse hacia abajo
    } else {
        header.style.top = '0'; // Muestra el encabezado al desplazarse hacia arriba
    }

    lastScrollTop = scrollTop;
});

// Añadir funcionalidad para mostrar/ocultar el menú al hacer clic en el ícono
menuIcon.addEventListener('click', () => {
    nav.classList.toggle('nav-visible');
});
