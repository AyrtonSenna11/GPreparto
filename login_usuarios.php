<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Empleados</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" method="POST" action="validacion_usuarios.php">
                <h2>Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo Electronico: </label>
                    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="nick_usua" required>
                    
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña: </label>
                    <input type="password" class="form-control" id="contraseña" name="password_usua" required>
                </div>
                <a href="cambiar_contraseña.php">Olvidé mi contraseña</a> <br>
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a class="btn btn-primary" href="registro_usuarios.php" role="button">Registrarce</a>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>