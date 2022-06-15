<?php include("header.php");?>
<main class="container mw-100">
    <div class="row position-relative">
        <div class="col-12 col-md-6 ">
            <div id="carouselExampleFade" class="carousel slide carousel-fade mw-100 my-3 mx-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/delivery5.jpg" class="d-block w-100" alt="delivery5.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="img/delivery4.jpeg" class="d-block w-100" alt="delivery4.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img src="img/delivery2.jpeg" class="d-block w-100" alt="delivery2.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img src="img/delivery3.jpg" alt="delivery3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/delivery1.jpg" alt="delivery1.jpg" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <form action="grabar_cliente.php" method="post" class="mw-100 my-5 mx-4">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4 position-relative">
                        <label for="Nombre" class="form-label">*Nombre: </label>
                        <input type="text" name="nombre_usua" class="form-control" id="Nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="Apellidos" class="form-label">*Apellidos: </label>
                        <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" placeholder="Apellidos" required>
                    </div>
                    <div class="col-md-4 position relative">
                        <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                        <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " required>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-3 position-relaive">
                        <label for="Sexo" class="form-label">Sexo: </label>
                        <select name="sexo_usua" id="Sexo" class="form-select">
                            <option value="" selected disabled>Eliga su sexo</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="col-md-3 position-relative">
                        <label for="telefono" class="form-label">*Telefono: </label>
                        <input type="text" maxlength="9" name="telefono_usua" id="telefono" placeholder="Telefono" class="form-control " required>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="email" class="form-label">*Correo Electronico: </label>
                        <input type="email" name="nick_usua" id="email" placeholder="correo@ejemplo.com" class="form-control " required>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-4 position-relative">
                        <label for="contraseña" class="form-label">*Contraseña: </label>
                        <input type="password" name="password_usua" class="form-control " id="contraseña" requeried>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="confirmarcontra" class="form-label">*Confirmar Contraseña: </label>
                        <input type="password" name="confirmar_password" id="confirmarcontra" class="form-control" requeried>
                    </div>
                </div>
                <div class="mb-3 form-check position-relative">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Acepta los <a href="ter_con.php"> Terminos y Condiciones</a></label>
                </div>
                <input type="submit" class="btn btn-success" value="Registrarce">
            </form>
        </div>
    </div>
</main>
<?php include("footer.php");?>