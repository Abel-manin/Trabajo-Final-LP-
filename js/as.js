document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.querySelector("form");

    if (formulario) {
        formulario.addEventListener("submit", function (evento) {
            // Buscamos los inputs usando su atributo 'name' del HTML
            const inputNombre = document.querySelector('input[name="nombre"]');
            const inputApellido = document.querySelector('input[name="apellido"]');

            const nombre = inputNombre ? inputNombre.value.trim() : "";
            const apellido = inputApellido ? inputApellido.value.trim() : "";

            if (nombre === "" || apellido === "") {
                evento.preventDefault(); 
                Swal.fire({
                    icon: "error",
                    title: "Campos incompletos",
                    text: "Por favor, completa al menos tu Nombre y Apellido."
                });
            }
        });
    }
});