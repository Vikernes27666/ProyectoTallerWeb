<?php
require_once '../libreria/dompdf/autoload.inc.php'; // Asegúrate de poner la ruta correcta hacia autoload.inc.php

use Dompdf\Dompdf;

// Obtener los datos del formulario
$cardNumber = $_POST['cardNumber'];
$cardName = $_POST['cardName'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];
$deliveryOption = $_POST['deliveryOption'];
$address = $_POST['address'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$amount = $_POST['amount'];

// Realizar la conexión a la base de datos (si es necesario)
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "norkysbd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión (si es necesario)
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Insertar los datos en la base de datos (si es necesario)
$sql = "INSERT INTO pago (card_number, card_name, expiry_date, cvv, delivery_option, address, email, phone_number, first_name, last_name, amount)
        VALUES ('$cardNumber', '$cardName', '$expiryDate', '$cvv', '$deliveryOption', '$address', '$email', '$phoneNumber', '$firstName', '$lastName', '$amount')";

if ($conn->query($sql) !== TRUE) {
    echo "Su compra no se ha realizado con éxito." . $conn->error;
    $conn->close();
    exit();
}

// La compra se ha realizado con éxito, procedemos a generar el contenido del PDF
// Crear una instancia de Dompdf
$dompdf = new Dompdf();

// Crear el contenido del PDF con diseño
$content = "<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  .details {
    margin-bottom: 10px;
    border: 1px solid #ccc;
    padding: 10px;
  }
  .thanks {
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    margin-top: 30px;
  }
  .signature {
    text-align: center;
    font-size: 14px;
    margin-top: 50px;
  }
</style>
</head>
<body>
<div class='header'>
  <h1 style='font-size: 24px; font-weight: bold;'>Norkys</h1>
</div>
<div class='details'>
  <div style='font-size: 18px; font-weight: bold; margin-bottom: 10px;'>Boleta de Compra</div>
  <b>Nombre:</b> $firstName $lastName<br>
  <b>Correo electrónico:</b> $email<br>
  <b>Número de teléfono:</b> $phoneNumber<br>
  <b>Opción de entrega:</b> $deliveryOption<br>";

if ($deliveryOption === 'delivery') {
    // Agregar dirección de entrega si aplica
    $content .= "<b>Dirección de entrega:</b> $address<br>";
} else {
    // Agregar información sobre el restaurante de recojo si aplica
    $content .= "<b>Restaurante de recojo:</b> (Aquí podrías obtener el restaurante más cercano)<br>";
}

$content .= "<b>Monto a pagar:</b> $amount soles</div>
<div class='thanks'>Gracias por su compra!</div>
<div class='signature'>
  ____________________________________<br>
  Firma: " . generateRandomSignature() . "
</div>
</body>
</html>";

// Cargar el contenido HTML en Dompdf
$dompdf->loadHtml($content);

// Configurar las opciones del PDF (opcional)
$dompdf->setPaper('A4', 'portrait');

// Renderizar el contenido HTML en PDF
$dompdf->render();

// Generar un identificador único para el nombre del archivo PDF
$unique_id = uniqid();
$file = "Boleta_de_Compra_" . $unique_id . ".pdf";

// Guardar el PDF en la ubicación deseada
file_put_contents($file, $dompdf->output());

// Descargar el archivo PDF
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=" . $file);
readfile($file);

// Terminar la ejecución del script después de la descarga
exit();

// Función para generar una firma aleatoria
function generateRandomSignature() {
    $signatures = array(
        "John Doe",
        "Jane Smith",
        "Robert Johnson",
        "Mary Williams",
        "Michael Brown"
    );
    $randomIndex = array_rand($signatures);
    return $signatures[$randomIndex];
}
?>