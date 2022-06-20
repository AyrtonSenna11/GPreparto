<?php
include "../conexiondb.php";
if (isset($_GET['email'])  && isset($_GET['codigo'])) {
    $email = $_GET['email'];
    $codigo = $_GET['codigo'];
    /* $email=substr($_GET['email'],1,-1);
        $codigo=substr($_GET['codigo'],1,-1);*/
} else {
    header("Location: index_extra.php");
}
$validacion_password = $db->query("SELECT * from usuarios where 
        nick_usua='$email' and codigo_usua='$codigo'") or die($db->error);
$filas = mysqli_num_rows($validacion_password);
$correcto = false;
if ($filas) {
    $correcto = true;
}
/*mysqli_free_result($validacion_password);
    mysqli_close($db);*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Restablecer Contraseña</title>
    <link href="../css/styles-admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <nav class="navbar bg-light p-0">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../index.php">
                            <h1 class="m-0 text-uppercase px-4"><img src="../img/fast.png" width="75px"> delivery faster</h1>
                        </a>
                    </div>
                </nav>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <?php if ($correcto) { ?>
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Restablecer Contraseña</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="guardar_password.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="nuevopassword" name="newpassword" placeholder="Contraseña" required>
                                                <label for="nuevopassword">Nueva Contraseña</label>                                              
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="nuevopassword" name="newpassword2" placeholder="Contraseña" required/>
                                                <label for="nuevopassword">Confirmar Contraseña</label>                                              
                                            </div>
                                            <input type="hidden" class="form-control" id="nuevopassword" name="email" value="<?php echo $email ?>">
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php } else {
                                    header("Location: index_extra.php");
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Grupo 4 - 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>