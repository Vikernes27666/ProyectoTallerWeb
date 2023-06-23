<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="login" >
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="validar.php" method="post">
                        <h3 class="text-center">Registro</h3>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Correo:</label><br>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-label">Telefono *</label>
                            <input type="tel"  id="telefono" name="telefono" class="form-control" required>
                            <input type="hidden" name="accion" value="insertar_usuarios">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>