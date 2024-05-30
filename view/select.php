<?php
// Conexion a la base de datos
//$servername = "localhost";
// Comentario que indica el nombre del servidor donde se encuentra la base de datos

$dbusername = "root";

$dbpassword = "";


$dbname = "PHP_Web";
// Nombre de la base de datos a la que se quiere conectar

// Crea la conexión
$conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);


// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM usuario";


$resul = $conn->query($sql);


if ($resul->num_rows > 0) {
    echo '<table>';

    echo "<tr><th>Usuario</th><th>Password</th><th>ID</th><th>Correo</th><th>Edad</th><th>hobbie</th><th>Contacto</th></tr>";


    while ($row = $resul->fetch_assoc()) {
        echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["password"]. "</td><td>" . $row["id"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["edad"] . "</td><td>" . $row["hobbie"]. "</td><td>" . $row["contacto"]. "</td></tr>";

    }

    echo '</table>';

} else {
    echo "no se encontraron registros";

}

$conn->close();
// Cierra la conexión a la base de datos
?>
