function toggleMenu() {
    const itemmenu = document.getElementById('itemmenu');
    
    if (itemmenu.classList.contains('active')) {
        closeMenu(itemmenu);
    } else {
        openMenu(itemmenu);
    }
}

function openMenu(itemmenu) {
    itemmenu.style.display = 'block';
    itemmenu.classList.add('active');
    itemmenu.classList.remove('closing');
}

function closeMenu(itemmenu) {
    itemmenu.classList.add('closing');
    itemmenu.classList.remove('active');
    setTimeout(() => {
        itemmenu.style.display = 'none'; 
    }, 500);
}
