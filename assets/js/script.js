// resaltar el enlace correspondiente
const currentUrl = window.location.pathname;

// todos los elementos 'a' en la lista
const links = document.querySelectorAll('ul li a');

// Itera a través de los enlaces y verifica si la URL coincide
links.forEach(link => {
    if (link.getAttribute('href') === currentUrl) {
        link.classList.add('active'); // Agregar una clase 'active' al enlace actual
    }
});
