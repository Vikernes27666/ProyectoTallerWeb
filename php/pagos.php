<?php
// Obtener los datos del formulario
$cardNumber = $_POST['cardNumber'];
$cardName = $_POST['cardName'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];
$deliveryOption = $_POST['deliveryOption'];
$address = $_POST['address'];
$homeAddress = $_POST['homeAddress'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$amount = $_POST['amount'];
$deliveryInstructions = $_POST['deliveryInstructions'];

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
$sql = "INSERT INTO pago (card_number, card_name, expiry_date, cvv, delivery_option, address, home_address, first_name, last_name, amount, delivery_instructions)
        VALUES ('$cardNumber', '$cardName', '$expiryDate', '$cvv', '$deliveryOption', '$address', '$homeAddress', '$firstName', '$lastName', '$amount', '$deliveryInstructions')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos en la base de datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>