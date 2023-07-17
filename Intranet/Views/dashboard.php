<!DOCTYPE html>
<html lang="en">
<?php require '../Model/_db.php'; ?>
<?php require '../Model/_header.php'; ?>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .chart-box {
            width: 400px;
            max-width: 100%;
            height: 500px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: #028e4f;
            margin: 10px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }


        .chart-title {
            font-size: 18px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px;
        }

        .chart-legend {
            color: #000000;
        }

        @media (max-width: 768px) {
            .chart-box {
                width: 90%;
            }

            .dashboard {
                justify-content: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="chart-box">
            <div class="chart-title">Productos</div>
            <canvas id="chart1"></canvas>
        </div>
        <div class="chart-box">
            <div class="chart-title">Categorías</div>
            <canvas id="chart2"></canvas>
        </div>
        <div class="chart-box">
            <div class="chart-title">Pedidos</div>
            <canvas id="chart3"></canvas>
        </div>
        <div class="chart-box">
            <div class="chart-title">Usuarios</div>
            <canvas id="chart4"></canvas>
        </div>
    </div>
    <script>
        <?php
        // Conexión a la base de datos (asegúrate de que esto esté incluido y funcionando correctamente)

        // Consulta para obtener los datos de precios desde la tabla de productos
        $queryPrecios = "SELECT precio, categorias FROM productos";
        $resultPrecios = mysqli_query($conexion, $queryPrecios);

        // Crear un array para almacenar los precios
        $precios = array();

        // Recorrer los resultados y almacenar los precios en el array
        while ($rowPrecio = mysqli_fetch_assoc($resultPrecios)) {
            $precios[$rowPrecio['categorias']][] = $rowPrecio['precio'];
        }

        // Consulta para obtener los datos de categorías desde la tabla de productos
        $queryCategorias = "SELECT categorias FROM productos GROUP BY categorias";
        $resultCategorias = mysqli_query($conexion, $queryCategorias);

        // Crear un array para almacenar las categorías y la cantidad de productos por categoría
        $categorias = array();
        $cantidadProductosPorCategoria = array();

        // Recorrer los resultados y almacenar las categorías en el array
        while ($rowCategorias = mysqli_fetch_assoc($resultCategorias)) {
            $categorias[] = $rowCategorias['categorias'];
            $cantidadProductosPorCategoria[] = count($precios[$rowCategorias['categorias']]);
        }

        // Consulta para obtener los datos de pedidos desde la tabla de pago
        $queryPedidos = "SELECT delivery_option, COUNT(*) as cantidad FROM pago GROUP BY delivery_option";
        $resultPedidos = mysqli_query($conexion, $queryPedidos);

        // Crear arrays para almacenar los datos de los pedidos
        $opcionesEntrega = array();
        $cantidadPedidos = array();

        // Recorrer los resultados y almacenar los datos en los arrays
        while ($rowPedidos = mysqli_fetch_assoc($resultPedidos)) {
            $opcionesEntrega[] = $rowPedidos['delivery_option'];
            $cantidadPedidos[] = $rowPedidos['cantidad'];
        }

        // Consulta para obtener los datos de usuarios desde la tabla de user
        $queryUsuarios = "SELECT COUNT(*) as cantidad FROM user";
        $resultUsuarios = mysqli_query($conexion, $queryUsuarios);
        $rowUsuarios = mysqli_fetch_assoc($resultUsuarios);
        $cantidadUsuarios = $rowUsuarios['cantidad'];
        ?>

        var chartData1 = {
            labels: <?php echo json_encode($categorias); ?>,
            datasets: [{
                label: 'Cantidad de productos',
                data: <?php echo json_encode($cantidadProductosPorCategoria); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.8)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        };

        var chartData2 = {
            labels: <?php echo json_encode($categorias); ?>,
            datasets: [{
                label: 'Cantidad de productos por categoría',
                data: <?php echo json_encode($cantidadProductosPorCategoria); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(128, 0, 128, 0.8)', // Cambio de color a morado para la categoría "Cocina"
                    // Agrega más colores aquí si tienes más categorías
                ],
            }]
        };

        var chartData3 = {
            labels: <?php echo json_encode($opcionesEntrega); ?>,
            datasets: [{
                label: 'Cantidad de pedidos',
                data: <?php echo json_encode($cantidadPedidos); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.8)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        };

        var chartData4 = {
            labels: ['Usuarios'],
            datasets: [{
                label: 'Cantidad de usuarios',
                data: [<?php echo $cantidadUsuarios; ?>],
                backgroundColor: 'rgba(255, 205, 86, 0.8)',
                borderColor: 'rgba(255, 205, 86, 1)',
                borderWidth: 2
            }]
        };

        var ctx1 = document.getElementById('chart1').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: chartData1,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#000000'
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000',
                            beginAtZero: true
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var ctx2 = document.getElementById('chart2').getContext('2d');
        new Chart(ctx2, {
            type: 'pie',
            data: chartData2,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#000000'
                        }
                    }
                }
            }
        });

        var ctx3 = document.getElementById('chart3').getContext('2d');
        new Chart(ctx3, {
            type: 'doughnut',
            data: chartData3,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#000000'
                        }
                    }
                }
            }
        });

        var ctx4 = document.getElementById('chart4').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: chartData4,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000'
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000',
                            beginAtZero: true
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#000000'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>