<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col-sm-12 col-md-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
        Log in
        </button>
        </div>
        <div class="modal fade" id="login" tabindex="-1">
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
                                                <input class='form-check-input' type='radio' name='perfil_usua' id='perfil_usua' value='".$perfil['id_perf']."'>
                                                <label class='form-check-label' for='gridRadios1'>".$perfil['nombre_perf']."</label>
                                            </div>";
                                        }
                                    }
                                    ?>
                                </div>
                            </fieldset>
                            <input type="submit" value="Iniciar Sesion" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>