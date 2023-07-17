<?php
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

// Realizar la conexión a la base de datos
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "norkysbd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO pago (card_number, card_name, expiry_date, cvv, delivery_option, address, email, phone_number, first_name, last_name, amount)
        VALUES ('$cardNumber', '$cardName', '$expiryDate', '$cvv', '$deliveryOption', '$address', '$email', '$phoneNumber', '$firstName', '$lastName', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>