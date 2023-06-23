<?php

session_start();

// Conexion a la base de datos
require_once ("../_db.php");

// Validacion de datos para realizar un registro
// Recuperamos los datos del formulario de registro

$correo = $_POST['correo'];
$password = $_POST['password'];

if ($_POST['ingresar']) {
    
    // Verificar si existe un usuario con el correo y contraseña
    // proporcionados
    $consulta = "SELECT * FROM user where correo='$correo' and password='$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        $_SESSION['correo'] = $correo;
        header('Location: ../../Views/index.php');
    } else {
        echo 'Credenciales incorrectas';
        header('Location: login.php');
    }
} else if (isset ($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1  && strlen($_POST['correo']) >= 1
             && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1) {
     
                $nombre = $_POST['nombre'];
                $telefono = $_POST['telefono'];

                 $consulta = "
                 INSERT INTO user(id, nombre, correo, password, telefono)
                 VALUES (0, '$nombre','$correo','$password','$telefono')
                 ";

                mysqli_query($conexion, $consulta);
                mysqli_close($conexion);
         
                echo 'Usuario creado exitosamente';
                header('Location: login.php');
         }
}
