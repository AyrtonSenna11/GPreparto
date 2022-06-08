<?php
include("index.php");
?>
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
                                                <input class='form-check-input' type='radio' name='perfil_usua' id='perfil".$perfil['id_perf']."' value='".$perfil['id_perf']."'>
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
</body>
</html>