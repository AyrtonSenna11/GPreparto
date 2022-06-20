<?php include("header_gerente.php")?>
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
                        <h1 class="mt-4">Nuevo Administrador/a</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-solid fa-user-plus"></i>
                                Agregando un nuevo Administrador/a
                            </div>
                            <div class="card-body">
                                <form action="registrar_nuevo_administrador.php" method="post" class="mw-100 my-3 mx-4">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3 position-relative">
                                            <label for="Nombre" class="form-label">*Nombre: </label>
                                            <input type="text" name="nombre_usua" class="form-control" id="Nombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="Apellidos" class="form-label">*Apellidos: </label>
                                            <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" placeholder="Apellidos" required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="dni" class="form-label">*DNI: </label>
                                            <input type="text" maxlength="8" name="dni_usua" id="dni" placeholder="DNI" class="form-control" required>
                                        </div>
                                        <div class="col-md-3 position relative">
                                            <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                                            <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " required>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-1 position-relaive">
                                            <label for="Sexo" class="form-label">*Sexo: </label>
                                            <select name="sexo_usua" id="Sexo" class="form-select" required>
                                                <option value="" selected disabled>Selecione su sexo</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 position-relative">
                                            <label for="telefono" class="form-label">*Telefono: </label>
                                            <input type="text" maxlength="9" name="telefono_usua" id="telefono" placeholder="Telefono" class="form-control " required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="email" class="form-label">*Correo Electronico: </label>
                                            <input type="email" name="nick_usua" id="email" placeholder="correo@ejemplo.com" class="form-control " required>
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <label for="contraseña" class="form-label">*Contraseña: </label>
                                            <input type="password" name="password_usua" class="form-control " id="contraseña" placeholder="Contraseña" requeried>
                                        </div>
                                        <input type="hidden" name="perfil_usua" value="3">
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
<?php include("footer_gerente.php"); ?>
