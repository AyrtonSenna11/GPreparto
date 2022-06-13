<?php
include("conexiondb.php");
$usuario=$_POST['nick_usua'];
$contraseña=$_POST['password_usua'];
session_start();
$_SESSION['nick_usua']=$usuario;

$select_consulta="SELECT * from usuarios where nick_usua='$usuario' and password_usua='$contraseña'";
$validacion=mysqli_query($db,$select_consulta);
$filas=mysqli_num_rows($validacion);
if($filas)
{
    header("Location: iniciadoSesion/producto_iniciado.php");
}else
{
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <strong>Datos incorrectos!</strong> Ingrese correctamente su correo, contraseña o perfil.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php include("index.php");
}
mysqli_free_result($validacion);
mysqli_close($db);
?>
