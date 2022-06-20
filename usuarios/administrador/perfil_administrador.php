<?php include("header_administrador.php")?>
            <div id="layoutSidenav_content">
                <main>
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
                        <h1 class="mt-4">Perfil</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            <i class="fa-solid fa-user-pen"></i>
                                Mi Perfil
                            </div>
                            <div class="card-body">
                            <main>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">ADMINISTRADOR</h3></div>
                                                <div class="card-body">
                                                    <form action="actualizar_administrador.php" id="actualizarperfil" method="post" class="mw-100 my-3 mx-4">
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-md-6 position-relative">
                                                                <label for="Nombre" class="form-label">*Nombre: </label>
                                                                <input type="text" name="nombre_usua" class="form-control" id="Nombre" value="<?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        echo $nombre_usuario['nombre_usua'];
                                                                    }
                                                                }
                                                                ?>" required>
                                                            </div>
                                                            <div class="col-md-6 position-relative">
                                                                <label for="Apellidos" class="form-label">*Apellidos: </label>
                                                                <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" value="<?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        echo $nombre_usuario['apellidos_usua'];
                                                                    }
                                                                }
                                                                ?>"  required>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-md-4 position-relative">
                                                                <label for="dni" class="form-label">*DNI: </label>
                                                                <input type="text" maxlength="8" name="dni_usua" id="dni" value="<?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        echo $nombre_usuario['dni_usua'];
                                                                    }
                                                                }
                                                                ?>"  class="form-control" required>
                                                            </div>
                                                            <div class="col-md-4 position relative">
                                                                <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                                                                <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " value="<?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        echo $nombre_usuario['fechaNacimiento_usua'];
                                                                    }
                                                                }
                                                                ?>"  required>
                                                            </div>
                                                            <div class="col-md-4 position-relaive">
                                                                <label for="Sexo" class="form-label">*Sexo: </label>
                                                                <select name="sexo_usua" id="Sexo" class="form-select" required>
                                                                <?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        if($nombre_usuario['sexo_usua']=='M'){
                                                                            echo "<option value='".$nombre_usuario['sexo_usua']."'  selected>Masculino</option>
                                                                            <option value='F'>Femenino</option>";
                                                                        }else{
                                                                            echo "<option value='".$nombre_usuario['sexo_usua']."'  selected>Femenino</option>
                                                                            <option value='M'>Masculino</option>";
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-md-3 position-relative">
                                                                <label for="telefono" class="form-label">*Telefono: </label>
                                                                <input type="text" maxlength="9" name="telefono_usua" id="telefono" value="<?php
                                                                foreach($datos_nombre as $nombre_usuario)
                                                                {
                                                                    if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                                                                    {
                                                                        echo $nombre_usuario['telefono_usua'];
                                                                    }
                                                                }
                                                                ?>" class="form-control " required>
                                                            </div>
                                                            <div class="col-md-6 position-relative">
                                                                <label for="email" class="form-label">*Correo Electronico: </label>
                                                                <label><?php echo $_SESSION['nick_usua']?></label>
                                                            </div>
                                                        </div>
                                                        <a data-bs-toggle='modal' data-bs-target="#botonactualizarperfil" class='btn btn-success mt-3' role="button">Actualizar Datos</a>
                                                        <div class="modal fade" id="botonactualizarperfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ¿Estas seguro que quieres Guardar los Cambios?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="d-grid gap-2 d-md-block ">
                                                                            <input type="submit" class="btn btn-success mt-3" data-bs-toggle="card" data-bs-target="#actualizarperfil"  value="Guardar Cambios">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            </div>
                        </div>
                    </div>
                </main>
<?php include("footer_administrador.php"); ?>
