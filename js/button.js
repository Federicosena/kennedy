function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}


window.onscroll = function() {
    const toTopBtn = document.getElementById("toTopBtn");
    const perfilProfesional = document.getElementById("perfil-profesional");
    const rect = perfilProfesional.getBoundingClientRect();

    if (rect.top <= window.innerHeight) {
        toTopBtn.style.display = "block";
    } else {
        toTopBtn.style.display = "none";
    }
};