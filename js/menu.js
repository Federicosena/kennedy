document.addEventListener("DOMContentLoaded", function () {
    const burger = document.getElementById('burger');
    const overlay = document.getElementById('overlay');
    const navLinks = document.querySelector('.nav-2'); // Selecciona los enlaces de navegación

    function openOverlay() {
        overlay.style.display = 'block'; // Mostrar overlay
        setTimeout(() => {
            overlay.classList.add('active'); // Activar animación de entrada
            setTimeout(() => {
                navLinks.classList.add('active'); // Mostrar los enlaces
            }, 500);
        }, 10); // Pequeño delay para permitir la animación
    }

    function closeOverlay() {
        overlay.classList.remove('active'); // Remover clase active
        navLinks.classList.remove('active'); // Ocultar los enlaces
        overlay.classList.add('closing'); // Activar animación de salida

        setTimeout(() => {
            overlay.style.display = 'none'; // Ocultar después de la animación
            overlay.classList.remove('closing'); // Remover clase closing
        }, 500);
    }

    burger.addEventListener('change', function () {
        if (burger.checked) {
            openOverlay(); // Mostrar el overlay
        } else {
            closeOverlay(); // Ocultar el overlay
        }
    });

    overlay.addEventListener('click', function () {
        burger.checked = false; // Desmarcar el botón de hamburguesa
        closeOverlay(); // Ocultar el overlay
    });

    window.addEventListener('resize', function () {
        const screenWidth = window.innerWidth; // Obtener el ancho de la pantalla

        if (screenWidth > 768 && overlay.style.display === 'block') {
            burger.checked = false; // Desmarcar el botón de hamburguesa si está marcado
            closeOverlay(); // Cerrar el overlay si está abierto
        }
    });
});
