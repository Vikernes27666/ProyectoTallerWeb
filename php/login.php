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
$email_usuario= $_POST['email'];
$password_plain= $_POST['pass'];

// Generar hash SHA-256 a partir de la contraseña ingresada por el usuario.
$password_hashed = hash('sha256', $password_plain);

// Query SQL SELECT para verificar si existe un usuario con las credenciales proporcionadas
$sql_query="SELECT * FROM usuarios WHERE email=? AND password=?";
$stmt = mysqli_prepare($conn,$sql_query);
mysqli_stmt_bind_param($stmt,'ss',$email_usuario,$password_hashed);

$resultado_consulta=mysqli_stmt_execute($stmt); // Ejecutar consulta preparada

if(mysqli_num_rows(mysqli_stmt_get_result($stmt)) > 0){ // Verificar si se encontraron filas en resultado
    
    echo "<p>Bienvenido!</p>"; // Acceso concedido

    
} else{
    
    echo "<p>Credenciales incorrectas.</p>"; // Acceso denegado
    
}

mysqli_close($conn);
?>