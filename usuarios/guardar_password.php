<?php
include "../conexiondb.php";
$email = $_POST['email'];
$p1 = $_POST['newpassword'];
$p2 = $_POST['newpassword2'];
$validacion_password = $db->query("SELECT * from usuarios") or die($db->error);
foreach ($validacion_password as $password) {
    if ($email == $password['nick_usua']) {
        if ($p1 == $password['password_usua']) {
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
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                            <div class="alert alert-warning d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    La nueva contraseña no puede ser la misma que la anterior.
                                </div>
                            </div>
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
                                                            <input type="password" class="form-control" id="nuevopassword" name="newpassword2" placeholder="Contraseña" required />
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
            <?php
        } else {
            if ($p1 == $p2) {
                //$p1=sha1($p1);
                $db->query("UPDATE usuarios set password_usua='$p1' where nick_usua='$email' ") or die($db->error);
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Tu nueva contraseña a sido restablecida.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                include("index_extra.php");
            } else {
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
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>
                                <div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        Las contraseñas NO coiciden.
                                    </div>
                                </div>
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
                                                                <input type="password" class="form-control" id="nuevopassword" name="newpassword2" placeholder="Contraseña" required />
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
<?php
            }
        }
    }
}

?>