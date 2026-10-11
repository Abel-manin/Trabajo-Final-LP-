const formulario = document.querySelector('form');

formulario.addEventListener('submit', function(e) {
    // 1. Detenemos el envío normal para que se luzca la alerta
    e.preventDefault();

    // 2. Disparamos el SweetAlert2 que elegiste
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "Something went wrong!",
  footer: "<a href=\"#\">Why do I have this issue?</a>"
}).then((result) => {
    // 3. Cuando el usuario hace clic en OK, permitimos que el formulario viaje a PHP
    if (result.isConfirmed) {
        formulario.submit();
    }
});
});