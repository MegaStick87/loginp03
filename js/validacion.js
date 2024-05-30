document.getElementById('loginForm').addEventListener('submit', function(event) {

    var usuario = document.getElementById('usuario').value;

    var password = document.getElementById('password').value;

    if (usuario === "" || password === "") {

        alert("Es obligatorio completar todos los campos!");


        event.preventDefault();
    }
});
