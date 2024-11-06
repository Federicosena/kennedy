document.addEventListener('DOMContentLoaded', function () {
    // Formulario fuera del dialog
    const titulo = document.getElementById('titulo');
    const descripcion = document.getElementById('descripcion');
    const submitBtn = document.getElementById('submitBtn');
    const form = document.getElementById('noticiaForm');

    // Formulario dentro del dialog
    const tituloDialog = document.getElementById('tituloDialog');
    const descripcionDialog = document.getElementById('descripcionDialog');
    const submitBtnDialog = document.getElementById('submitBtnDialog');
    const formDialog = document.getElementById('noticiaFormDialog');

    function validateInput(input) {
        const value = input.value;
        const specialChars = /[^a-zA-Z0-9\sñÑáéíóúÁÉÍÓÚ:;,.()\[\]]/;
        if (value.trim() === '' || specialChars.test(value)) {
            input.classList.add('invalid');
            input.classList.remove('valid');
            return false;
        } else {
            input.classList.add('valid');
            input.classList.remove('invalid');
            return true;
        }
    }

    // Validación para el formulario fuera del dialog
    function validateForm() {
        const isTituloValid = validateInput(titulo);
        const isDescripcionValid = validateInput(descripcion);
        if (isTituloValid && isDescripcionValid) {
            submitBtn.disabled = false;
            submitBtn.classList.add('enabled');
        } else {
            submitBtn.disabled = true;
            submitBtn.classList.remove('enabled');
        }
    }

    // Validación para el formulario dentro del dialog
    function validateFormDialog() {
        const isTituloValid = validateInput(tituloDialog);
        const isDescripcionValid = validateInput(descripcionDialog);
        if (isTituloValid && isDescripcionValid) {
            submitBtnDialog.disabled = false;
            submitBtnDialog.classList.add('enabled');
        } else {
            submitBtnDialog.disabled = true;
            submitBtnDialog.classList.remove('enabled');
        }
    }

    // Eventos para el formulario fuera del dialog
    titulo.addEventListener('input', validateForm);
    descripcion.addEventListener('input', validateForm);

    // Eventos para el formulario dentro del dialog
    tituloDialog.addEventListener('input', validateFormDialog);
    descripcionDialog.addEventListener('input', validateFormDialog);

    // Previene envío si los botones están deshabilitados
    form.addEventListener('submit', function (event) {
        if (submitBtn.disabled) {
            event.preventDefault();
        }
    });

    formDialog.addEventListener('submit', function (event) {
        if (submitBtnDialog.disabled) {
            event.preventDefault();
        }
    });

    // Validar ambos formularios al cargar la página
    validateForm();
    validateFormDialog();
});
