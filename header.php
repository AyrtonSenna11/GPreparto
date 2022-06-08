<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparto de Delivery</title>

    <link rel="shortcut icon" href="img/fast.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" >

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+51 987 654 321</small>
                    <small class="px-3">|</small>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
                <h1 class="m-0 display-5 text-uppercase text-primary"><img src="img/fast.png" width="75px">DELIVERY FASTER</h1>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="nosotros.php" class="nav-item nav-link">Nosotros</a>
                    <a href="producto.php" class="nav-item nav-link">Producto</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                </div>
                <button href="login.php" type="button" class="btn btn-primary py-2 px-4 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#login">Iniciar Sesión</button>
                <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Iniciar Sesion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="validacion_login.php" method="post">
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email: </label>
                                        <div class="col-sm-10">
                                        <input type="text" name="nick_usua" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password_usua" class="col-sm-2 col-form-label">Contraseña: </label>
                                        <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password_usua" id="password_usua" required>
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Perfil: </legend>
                                        <div class="col-sm-10">
                                            <?php
                                            include "conexiondb.php";
                                            $select_perfil="SELECT * from perfil";
                                            $datos_perfil=$db->query($select_perfil);
                                            foreach($datos_perfil as $perfil)
                                            {
                                                if($perfil['estado_perf']==1)
                                                {
                                                    echo "
                                                    <div class='form-check'>
                                                        <input class='form-check-input' type='radio' name='perfil_usua' id='perfil".$perfil['id_perf']."' value='".$perfil['id_perf']."' requeried>
                                                        <label class='form-check-label' for='perfil".$perfil['id_perf']."'>".$perfil['nombre_perf']."</label>
                                                    </div>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </fieldset>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="mantenersesion">
                                        <label class="form-check-label" for="mantenersesion">
                                        Recordarme
                                        </label>
                                    </div>
                                    <input type="submit" value="Iniciar Sesion" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>