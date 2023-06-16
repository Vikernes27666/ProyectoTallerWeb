<?php
// Conexión a la Base De Datos
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     ="norkysbd";

$conn=mysqli_connect($servername, $username,  $password ,  $dbname);

if(!$conn){
    die("Conexión fallida: ".mysqli_connect_error());
}

// Variables enviadas por POST desde el formulario HTML
$nombre_usuario=$_POST['nombre'];
$apellido_usuario=$_POST['apellido'];
$email_usuario= $_POST['email'];
$password_plain= $_POST['pass'];

// Generar hash SHA-256 a partir de la contraseña ingresada por el usuario.
$password_hashed = hash('sha256', $password_plain);

// Query SQL INSERT INTO con consulta preparada y parámetros vinculados
$sql_query="INSERT INTO usuarios(nombre, apellido,email,password)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn,$sql_query);
mysqli_stmt_bind_param($stmt,'ssss',$nombre_usuario,$apellido_usuario,$email_usuario,$password_hashed);

if(mysqli_stmt_execute($stmt)){
    
    echo "<p>Usuario registrado exitosamente!</p>";
    
} else{
    echo "<p>Error al registrar usuario:</p>" . mysqli_error($conn);
}

mysqli_close($conn);
?>