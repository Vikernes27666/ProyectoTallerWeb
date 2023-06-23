<?php

error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if($actualsesion == null || $actualsesion == '') {
   header('location: Model/_sesion/login.php');
} else {
   header('location: Views/index.php');
}
