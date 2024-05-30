document.getElementById('togglePassword').addEventListener('click', function() {
    var password = document.getElementById('password');
    if (password.type === 'password') {
        password.type = 'text';
        this.textContent = 'Ocultar Contraseña';
    } else {
        password.type = 'password';
        this.textContent = 'Mostrar Contraseña';
    }
});
