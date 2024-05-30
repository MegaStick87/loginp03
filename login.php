<?php
 $servername = "localhost";


 $dbusername = "root";


 $dbpassword = "";


 $dbname = "PHP_Web";
 // Nombre de la base de datos a la que se quiere conectar

 // Crear la conexión
 $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

 // Verificar la conexión
 if($conn->connect_error){
     die("Connection failed: " . $conn->connect_error);
 }

 // Recoger los datos del formulario
 $usuario = $_POST['usuario'];

 $password = $_POST['password'];


 // Crear la consulta SQL
 $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'";

 // Ejecutar consulta
 $resul = $conn->query($sql);

 // Verificar si el usuario existe
 if($resul->num_rows > 0){
     include ('view/logger.HTML');
   
 } else {
     include ('view/errorlogin.HTML');

 }

 $conn->close();

?>
