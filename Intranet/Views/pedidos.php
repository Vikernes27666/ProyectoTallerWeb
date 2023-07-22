<?php
require_once '../../libreria/dompdf/autoload.inc.php';

// Aquí se realiza la conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "norkysbd";

$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
    echo "No se realizó la conexión a la base de datos, el error fue: " . mysqli_connect_error();
    exit();
}

use Dompdf\Dompdf;
function generarReportePDF($conexion) {
    // Consulta para obtener los datos necesarios para el reporte
    $sql = "SELECT delivery_option, address, first_name, last_name, email, phone_number, amount FROM pago";
    $result = mysqli_query($conexion, $sql);

    if (!$result) {
        echo "Error al obtener los datos para el reporte: " . mysqli_error($conexion);
        exit();
    }

    // Crear una instancia de Dompdf
    $dompdf = new Dompdf();

    // Crear el contenido del PDF
    $content = "<h1>Reporte de Ventas Norkys</h1>";
    $content .= "<p>Fecha: " . date("Y-m-d") . "</p>";
    $content .= "<p>Hora: " . date("H:i:s") . "</p>";
    $content .= "<table border='1' cellpadding='5' cellspacing='0'>";
    $content .= "<tr><th>Delivery Option</th><th>Address</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Amount</th></tr>";

    $totalVentas = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $content .= "<tr>";
        $content .= "<td>" . $row['delivery_option'] . "</td>";
        $content .= "<td>" . $row['address'] . "</td>";
        $content .= "<td>" . $row['first_name'] . "</td>";
        $content .= "<td>" . $row['last_name'] . "</td>";
        $content .= "<td>" . $row['email'] . "</td>";
        $content .= "<td>" . $row['phone_number'] . "</td>";
        $content .= "<td>" . $row['amount'] . "</td>";
        $content .= "</tr>";

        // Sumar el monto al total de ventas
        $totalVentas += $row['amount'];
    }

    $content .= "</table>";
    $content .= "<p>Total de Ventas: " . $totalVentas . " soles</p>";

    // Cargar el contenido HTML en Dompdf
    $dompdf->loadHtml($content);

    // Renderizar el contenido HTML en PDF
    $dompdf->render();

    // Generar un identificador único para el nombre del archivo PDF
    $unique_id = uniqid();
    $file = "Reporte_de_Ventas_" . $unique_id . ".pdf";

    // Guardar el PDF en la ubicación deseada
    file_put_contents($file, $dompdf->output());

    // Descargar el archivo PDF
    header("Content-type: application/pdf");
    header("Content-Disposition: attachment; filename=" . $file);
    readfile($file);

    // Terminar la ejecución del script después de la descarga
    exit();
}

// Verificar si se ha hecho clic en el botón "Generar Reporte en PDF"
if (isset($_GET['generar_reporte']) && $_GET['generar_reporte'] === "true") {
    // Generar el reporte en PDF
    generarReportePDF($conexion);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require '../Model/_db.php' ?>
<?php require '../Model/_header.php' ?>

<body>
    <div id="content">
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <center>
                            <h1>PEDIDOS
                                <a href="pedidos.php?actualizar=true" class="btn btn-sm btn-info ml-3">Actualizar</a>
                                <a href="pedidos.php?generar_reporte=true" class="btn btn-sm btn-primary ml-3">Generar Reporte en PDF</a>
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