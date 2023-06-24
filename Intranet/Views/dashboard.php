<!DOCTYPE html>
<html lang="en">
<?php require '../Model/_db.php'; ?>
<?php require '../Model/_header.php'; ?>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .dashboard {
            display: flex;
            flex-wrap: wrap; /* Permite que los elementos se envuelvan en pantallas pequeñas */
            justify-content: center; /* Centra los elementos horizontalmente */
        }

        .chart-box {
            width: 400px;
            max-width: 100%; /* Ajusta el ancho máximo a la pantalla */
            height: 400px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: #028e4f; /* Color de fondo #028e4f */
            margin: 10px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .chart-title {
            font-size: 18px;
            font-weight: bold;
            color: #000000; /* Color de letra negro */
            margin-bottom: 10px;
        }

        .chart-legend {
            color: #000000; /* Color de letra negro */
        }

        @media (max-width: 768px) {
            .chart-box {
                width: 100%; /* Ajusta el ancho al 100% en pantallas pequeñas */
            }

            .dashboard {
                justify-content: flex-start; /* Vuelve a justificar los elementos a la izquierda */
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
        var chartData1 = {
            labels: ['Label 1', 'Label 2', 'Label 3'],
            datasets: [{
                label: 'Dataset 1',
                data: [10, 20, 30],
                backgroundColor: 'rgba(75, 192, 192, 0.8)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        };

        var chartData2 = {
            labels: ['Label A', 'Label B', 'Label C'],
            datasets: [{
                label: 'Dataset 2',
                data: [40, 50, 60],
                backgroundColor: 'rgba(255, 99, 132, 0.8)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2
            }]
        };

        var chartData3 = {
            labels: ['Label X', 'Label Y', 'Label Z'],
            datasets: [{
                label: 'Dataset 3',
                data: [15, 25, 35],
                backgroundColor: 'rgba(54, 162, 235, 0.8)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2
            }]
        };

        var chartData4 = {
            labels: ['Label M', 'Label N', 'Label O'],
            datasets: [{
                label: 'Dataset 4',
                data: [45, 55, 65],
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
                            color: '#000000' /* Color de letra negro */
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000', /* Color de letra negro */
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
                        position: 'bottom',
                        labels: {
                            color: '#000000' /* Color de letra negro */
                        }
                    }
                }
            }
        });

        var ctx3 = document.getElementById('chart3').getContext('2d');
        new Chart(ctx3, {
            type: 'line',
            data: chartData3,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000' /* Color de letra negro */
                        }
                    },
                    y: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#000000', /* Color de letra negro */
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
                            color: '#000000' /* Color de letra negro */
                        }
                    },
                    y: {
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#000000', /* Color de letra negro */
                            beginAtZero: true
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#000000' /* Color de letra negro */
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>