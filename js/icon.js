function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password');

    if (passwordInput.type === 'text') {
        passwordInput.type = 'password';
        toggleIcon.src = '../img/icon/invisible.png'; 
    } else {
        passwordInput.type = 'text';
        toggleIcon.src = '../img/icon/vista.png'; 
    }
}

function checkPassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password');

    if (passwordInput.value.length > 0) {
        toggleIcon.style.display = 'block'; 
    } else {
        toggleIcon.style.display = 'none';
    }
}