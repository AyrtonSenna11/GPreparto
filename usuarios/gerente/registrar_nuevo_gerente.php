<?php
include("../../conexiondb.php");
if($_POST['password_usua']==$_POST['confirmar_password'])
{
    $nombre=$_POST['nombre_usua'];
    $apellidos=$_POST['apellidos_usua'];
    $dni=$_POST['dni_usua'];
    $fechaNacimiento=$_POST['fechaNacimiento_usua'];
    $sexo=$_POST['sexo_usua'];
    $telefono=$_POST['telefono_usua'];
    $nick=$_POST['nick_usua'];
    $password=$_POST['password_usua'];
    $perfil=$_POST['perfil_usua'];
    /*include("email.php");
    if($confirmacion_enviado)
    {*/
        $insert_usuarios="INSERT into usuarios(nombre_usua,apellidos_usua,dni_usua,fechaNacimiento_usua,sexo_usua,telefono_usua,nick_usua,password_usua,fechaRegistro_usua,perfil_usua,estado_usua) values('$nombre','$apellidos',$dni,'$fechaNacimiento','$sexo',$telefono,'$nick','$password',now(),$perfil,0)";
        $valores_usuarios=mysqli_query($db,$insert_usuarios); //or die();
        header("Location: index_gerente.php");
    /*}else{
        echo "No se envio el codigo de confirmacion.";//agregar un php de error
    }*/
}
else{
    include("header_gerente.php")?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Las contraseñas no coiciden.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="modal fade" id="cerrarsesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Estas seguro que quiere Cerrar Sesion?
                                </div>
                                <div class="modal-footer">
                                    <div class="d-grid gap-2 d-md-block ">
                                        <a class="btn btn-danger" href="../cerrar_sesion.php" role="button">Cerrar Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Nuevo Administrador/a</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-solid fa-user-plus"></i>
                                Agregando un nuevo Administrador/a
                            </div>
                            <div class="card-body">
                                <form action="registrar_nuevo_gerente.php" method="post" class="mw-100 my-3 mx-4">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3 position-relative">
                                            <label for="Nombre" class="form-label">*Nombre: </label>
                                            <input type="text" name="nombre_usua" class="form-control" id="Nombre" value="<?php echo $_POST['nombre_usua']?>" required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="Apellidos" class="form-label">*Apellidos: </label>
                                            <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" value="<?php echo $_POST['apellidos_usua']?>" required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="dni" class="form-label">*DNI: </label>
                                            <input type="text" maxlength="8" name="dni_usua" id="dni" value="<?php echo $_POST['dni_usua']?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 position relative">
                                            <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                                            <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " value="<?php echo $_POST['fechaNacimiento_usua']?>" required>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-1 position-relaive">
                                            <label for="Sexo" class="form-label">*Sexo: </label>
                                            <select name="sexo_usua" id="Sexo" class="form-select" required>
                                                <?php
                                                    if($_POST['sexo_usua']=='M'){
                                                        echo "<option value='".$_POST['sexo_usua']."'  selected>Masculino</option>
                                                        <option value='F'>Femenino</option>";
                                                    }else{
                                                        echo "<option value='".$_POST['sexo_usua']."'  selected>Femenino</option>
                                                        <option value='M'>Masculino</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <label for="telefono" class="form-label">*Telefono: </label>
                                            <input type="text" maxlength="9" name="telefono_usua" id="telefono" value="<?php echo $_POST['telefono_usua']?>" class="form-control " required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="email" class="form-label">*Correo Electronico: </label>
                                            <input type="email" name="nick_usua" id="email" value="<?php echo $_POST['nick_usua']?>" class="form-control " required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="contraseña" class="form-label">*Contraseña: </label>
                                            <input type="password" name="password_usua" class="form-control " id="contraseña" placeholder="Contraseña" requeried>
                                        </div>
                                        <input type="hidden" name="perfil_usua" value="2">
                                        <div class="col-md-3 position-relative">
                                            <label for="confirmarcontra" class="form-label">*Confirmar Contraseña: </label>
                                            <input type="password" name="confirmar_password" id="confirmarcontra" class='form-control' placeholder="Confirmar Contraseña" requeried>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success mt-3" value="Agregar Administrador">
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
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
<?php include("footer_gerente.php");
}
?>

