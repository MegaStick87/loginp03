<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];


    $password = $_POST["password"];


    $correo = $_POST["CORREO"];


    $edad = $_POST["EDAD"];

    $ocupacion = $_POST["HOBBIE"];


    $contacto = $_POST["CONTACTO"];


    $servername = "localhost";


    $dbusername = "root";


    $dbpassword = "";


    $dbname = "PHP_Web";

    // Crea la conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


    // Verificar la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO usuario (usuario, correo, edad, hobbie, contacto, password) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ssisss", $usuario, $correo, $edad, $hobbie, $contacto, $password);


    // Ejecutar la sentencia SQL
    if ($stmt->execute()) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();

    $conn->close();
    // Cierra la conexión a la base de datos
}
?>
