<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if($actualsesion == null || $actualsesion == ''){

    echo 'acceso denegado';
    die();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Base de datos</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../Styles/styles.css">
    <link href="../Styles/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">ADMINISTRADORES</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <a class="nav-link" href="">
        <i class="material-icons-outlined"></i>
        <span>Dashboard</span></a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Inventario
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
    <span class="material-icons">pattern</span>
        <span>Productos</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="categorias.php">
        <span class="material-icons">category</span>
        <span>  Categorias</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <span class="material-icons">book</span>
        <span>  Pedidos</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <span class="material-icons">book</span>
        <span>Formularios</span>
    </a>
</li>

<hr class="sidebar-divider">
<div class="sidebar-heading">
    PERFIL
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="usuariosindex.php">
        <span class="material-icons">people</span>
        <span>Información usuario</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../Model/_sesion/cerrarSesion.php">
        <span class="material-icons">logout</span>
        <span>Salir</span>
    </a>
        
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0"></button>
</div>
</ul>
<!-- EMPIEZA EL NAVBAR -->
       <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <a href="">
                        <img class="logo-img"
                            src="https://th.bing.com/th/id/R.bae24ac4c043a603ec1d8585abbe0807?rik=W7kb6zdjHxkiGw&riu=http%3a%2f%2fnorkys.pe%2fwp-content%2fuploads%2f2020%2f09%2flogo.png&ehk=CTfH7OobnSj9nVkesF76XAG%2bSA8s%2fH%2bRiXj7wXYeLVY%3d&risl=&pid=ImgRaw&r=0"
                            alt="Logo de Norky´s" />
                        </a>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $actualsesion?> </span>
                                <span class="material-icons">account_circle</span>
                            </a>
                        </li>
                    </ul>
                </nav>