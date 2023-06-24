<?php require '../Model/_db.php' ?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $cardNumber = $_POST['card_number'];
    $cardName = $_POST['card_name'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $deliveryOption = $_POST['delivery_option'];
    $address = $_POST['address'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $amount = $_POST['amount'];

    // Actualizar los datos en la base de datos
    $sql = "UPDATE pago SET
            card_number = '$cardNumber',
            card_name = '$cardName',
            expiry_date = '$expiryDate',
            cvv = '$cvv',
            delivery_option = '$deliveryOption',
            address = '$address',
            first_name = '$firstName',
            last_name = '$lastName',
            amount = '$amount',
            WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        // Redireccionar a la página actual para actualizar los cambios
        echo '<script>window.location.href = "pedidos.php";</script>';
        exit();
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }
} else {
    // Obtener el ID del pedido a actualizar desde el parámetro en la URL
    $id = $_GET['id'];

    // Obtener los datos del pedido de la base de datos
    $sql = "SELECT * FROM pago WHERE id = '$id'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($result);

    // Verificar si se encontró el pedido
    if (!$row) {
        echo "Pedido no encontrado";
        exit();
    }
}
?>

