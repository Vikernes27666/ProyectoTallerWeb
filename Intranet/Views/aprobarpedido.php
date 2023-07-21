<?php
require '../Model/_db.php';

// Verificar si se ha proporcionado un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta a la base de datos para obtener los datos del pedido según el ID
    $sql = "SELECT * FROM pago WHERE id = '$id'";
    $result = mysqli_query($conexion, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        // Si no se encuentra el pedido con el ID proporcionado, redirigimos al usuario o mostramos un mensaje
        echo "<script>alert('El pedido con ID $id no fue encontrado.'); window.location.href='ruta_a_otra_pagina.php';</script>";
        exit;
    }

    mysqli_close($conexion);
} else {
    // Si no hay ID de pedido válido, redirigimos al usuario o mostramos un mensaje
    echo "<script>alert('ID de pedido no válido.'); window.location.href='ruta_a_otra_pagina.php';</script>";
    exit;
}
?>

<!-- HTML Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <!-- Mostrar los campos correspondientes aquí -->
    <h3>Información del pedido:</h3>
    <p>Delivery Option: <?php echo $row['delivery_option']; ?></p>
    <p>Address: <?php echo $row['address']; ?></p>
    <p>First Name: <?php echo $row['first_name']; ?></p>
    <p>Last Name: <?php echo $row['last_name']; ?></p>
    <p>Email: <?php echo $row['email']; ?></p>
    <p>Phone Number: <?php echo $row['phone_number']; ?></p>
    <p>Amount: <?php echo $row['amount']; ?></p>

    <h3>Seleccione el estado del pedido:</h3>
    <form id="emailForm">
      <select name="orderStatus">
        <option value="preparado">Su pedido está siendo preparado.</option>
        <option value="en_camino">Su pedido está en camino.</option>
        <option value="entregado">Su pedido ha sido entregado con éxito.</option>
      </select>
      <input type="hidden" name="pedidoId" value="<?php echo $_GET['id']; ?>">
      <button type="submit">Enviar correo</button>
    </form>
  </div>
</div>

<!-- JavaScript for the Modal -->
<script src="https://ruta_del_cdn.com/mailto-ui.min.js"></script>
<script>
  // Resto del código JavaScript como antes...
  const modal = document.getElementById("myModal");
  const span = document.getElementsByClassName("close")[0];
  const emailForm = document.getElementById("emailForm");

  span.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });

  emailForm.addEventListener("submit", (event) => {
    event.preventDefault();
    const selectedStatus = emailForm.orderStatus.value;
    const pedidoId = emailForm.pedidoId.value;
    if (pedidoId && selectedStatus) {
      // Utiliza la librería MailtoUI para enviar el correo electrónico con el estado seleccionado y el contenido del pedido.
      // Aquí deberás ajustar el código para enviar el correo con la información necesaria.
      window.location.href = `mailto:mario@teclaworks.com?subject=Actualización de Pedido ID ${pedidoId}&body=El estado del pedido con ID ${pedidoId} ha sido actualizado a: ${selectedStatus}`;
      modal.style.display = "none";
      alert("Correo electrónico enviado correctamente.");
    } else {
      alert("Por favor, seleccione un estado del pedido antes de enviar el correo.");
    }
  });
</script>