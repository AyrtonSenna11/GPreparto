<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                        <form action="registrar_usuarios.php" method="post" class="mw-100 my-3 mx-4">
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6 position-relative">
                                                    <label for="Nombre" class="form-label">*Nombre: </label>
                                                    <input type="text" name="nombre_usua" class="form-control" id="Nombre" placeholder="Nombre" required>
                                                </div>
                                                <div class="col-md-6 position-relative">
                                                    <label for="Apellidos" class="form-label">*Apellidos: </label>
                                                    <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" placeholder="Apellidos" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-4 position-relative">
                                                    <label for="dni" class="form-label">*DNI: </label>
                                                    <input type="text" maxlength="8" name="dni_usua" id="dni" placeholder="DNI" class="form-control" required>
                                                </div>
                                                <div class="col-md-4 position relative">
                                                    <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                                                    <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " required>
                                                </div>
                                                <div class="col-md-4 position-relaive">
                                                    <label for="Sexo" class="form-label">*Sexo: </label>
                                                    <select name="sexo_usua" id="Sexo" class="form-select" required>
                                                        <option value="" selected disabled>Selecione su sexo</option>
                                                        <option value="M">Masculino</option>
                                                        <option value="F">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-3 position-relative">
                                                    <label for="telefono" class="form-label">*Telefono: </label>
                                                    <input type="text" maxlength="9" name="telefono_usua" id="telefono" placeholder="Telefono" class="form-control " required>
                                                </div>
                                                <div class="col-md-3 position-relative">
                                                    <label for="perfil" class="form-label">*Perfil: </label>
                                                    <select name="perfil_usua" id="perfil" class="form-select" required>
                                                        <option value="" selected disabled>Seleccione un perfil</option>
                                                        <?php
                                                        include "../../conexiondb.php";
                                                        $select_perfil="SELECT * from perfil";
                                                        $datos_perfil=$db->query($select_perfil);
                                                        foreach($datos_perfil as $perfil)
                                                        {
                                                            if($perfil['estado_perf']==1)
                                                            {
                                                                echo "
                                                                <option value='".$perfil['id_perf']."'>".$perfil['nombre_perf']."</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 position-relative">
                                                    <label for="email" class="form-label">*Correo Electronico: </label>
                                                    <input type="email" name="nick_usua" id="email" placeholder="correo@ejemplo.com" class="form-control " required>
                                                </div>
                                                
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6 position-relative">
                                                    <label for="contraseña" class="form-label">*Contraseña: </label>
                                                    <input type="password" name="password_usua" class="form-control " id="contraseña" placeholder="Contraseña" requeried>
                                                </div>
                                                <!--input type="hidden" name="perfil_usua" value="<?php //echo $perfil_usua=3 ?>"-->
                                                <div class="col-md-6 position-relative">
                                                    <label for="confirmarcontra" class="form-label">*Confirmar Contraseña: </label>
                                                    <input type="password" name="confirmar_password" id="confirmarcontra" class='form-control' placeholder="Confirmar Contraseña" requeried>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-success mt-3" value="Crear Cuenta">
                                            <a class="btn btn-danger mt-3" href="login.php" role="button">Cancelar</a>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Tienes una cuenta? Iniciar Sesion</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!--div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
