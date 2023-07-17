<!DOCTYPE html>
<html lang="en">
<?php require '../Model/_db.php' ?>
<?php require '../Model/_header.php' ?>
<?php
    // if ($_GET['actualizar'] == "true") {
    //     $sql = "SELECT id, card_number, card_name,
    //             expiry_date, cvv, delivery_option,
    //             address, first_name, last_name, amount
    //             FROM pago WHERE 1";
    //     $pedidos = mysqli_query($conexion, $sql);
    // }
?>
<body>
    <div id="content">
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <center>
                            <h1>PEDIDOS
                                <a href="pedidos.php?actualizar=true" class="btn btn-sm btn-info ml-3">Actualizar</a>
                            </h1>
                        </center>
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Card Number</th>
                                        <th>Card Name</th>
                                        <th>Expiry Date</th>
                                        <th>CVV</th>
                                        <th>Delivery Option</th>
                                        <th>Address</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($_GET['actualizar'] == "true") {
                                        $sql = "SELECT * FROM pago";
                                        $result = mysqli_query($conexion, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $statusClass = ($row['status'] == 'Aprobado') ? 'text-success' : '';
                                        ?>
                                                <tr class="<?php echo $statusClass; ?>">
                                                    <td><?php echo $row['card_number']; ?></td>
                                                    <td><?php echo $row['card_name']; ?></td>
                                                    <td><?php echo $row['expiry_date']; ?></td>
                                                    <td><?php echo $row['cvv']; ?></td>
                                                    <td><?php echo $row['delivery_option']; ?></td>
                                                    <td><?php echo $row['address']; ?></td>
                                                    <td><?php echo $row['first_name']; ?></td>
                                                    <td><?php echo $row['last_name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['phone_number']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td>
                                                        <?php if ($row['status'] != 'Aprobado') { ?>
                                                            <a href="aprobarpedido.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Aprobar</a>
                                                        <?php } ?>
                                                        <a href="eliminarpedido.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                        ?>
                                            <tr class="text-center">
                                                <td colspan="13">No existen pedidos</td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>