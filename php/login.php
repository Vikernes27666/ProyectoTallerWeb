<?php
//Comprobar si se ha enviado algo por POST
if(isset($_POST["login"])) {
  unset($_POST["login"]);
  //Recuperar valores ingresados por usuario
  $username = $_POST["username"];
  $password = $_POST["password"];

  //Autenticación (Ejemplo)
  if ($username === "Admin" && $password === "12345") {
    //Iniciar nueva sesión e ir a la página principal después del inicio de sesión exitoso.

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    // session_start();
    // $_SESSION["loggedin"] = true;
    // header("location: index.php");
    // exit;
  } else {
     echo "Usuario o contraseña incorrectos.";
  }
}
?>