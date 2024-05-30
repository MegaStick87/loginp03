<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Cuerpo del documento -->
    <div class="container">
        <h1>Registrar a un nuevo Usuario!</h1>
        <form method="post" action="register.php">

            <label for="usuario">Usuario</label><br />
            <input type="text" id="usuario" name="usuario" required /><br />

            <label for="password">Contraseña</label><br />
            <input type="password" id="password" name="password" required /><br />

            <label for="correo">Correo</label><br />
            <input type="email" id="CORREO" name="CORREO" required /><br />

            <label for="edad">Edad del Usuario</label><br />
            <input type="text" id="EDAD" name="EDAD" required /><br />

            <label for="ocupacion">Hobbie del usuario</label><br />
            <input type="text" id="OCUPACION" name="OCUPACION" required /><br />


            <label for="contacto">Contacto (Redes sociales, celular, etc)</label><br />
            <input type="text" id="CONTACTO" name="CONTACTO" required /><br />

            <input type="submit" value="Registrar"/>
        </form>
    </div>

</body>
</html>
