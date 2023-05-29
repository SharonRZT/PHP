<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso PHP</title>
</head>
<body>
<div class="group">
<form method="post" action="formulario.php">
<h2>Formulario de registro</h2>
 <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
 <input type="text" name="nombre" class="form-input" requiredd>

 <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
 <input type="text" name="apellido" class="form-input" required>

 <label for="email">Email <span><em>(requerido)</em></span></label>
 <input type="text" name="email" class="form-input" required>

 <Input class="form-btn" name="submit" type="submit" value="Suscribirse"></Input>

</form>
</div>
<script src="script.js"></script>
</body>
</html> 

<?php

if($_POST){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

//Conexion con PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursoSQL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  
} 

$sql = "INSERT INTO usuario (nombre, apellido, email)
VALUES ('$nombre', '$apellido', '$email')";

if ($conn->query($sql) === TRUE) { 
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>