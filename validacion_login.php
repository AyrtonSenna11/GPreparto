<?php
$usuario=$_POST['nick_usua'];
$contraseña=$_POST['password_usua'];
$perfil=$_POST['perfil_usua'];
session_start();
$_SESSION['nick_usua']=$usuario;

include("conexiondb.php");
$select_consulta="SELECT * from usuarios where nick_usua='$usuario' and password_usua='$contraseña' and perfil_usua=$perfil";
$validacion=mysqli_query($db,$select_consulta);

$select_perfil="SELECT * from perfil";
$datos_perfil=mysqli_query($db,$select_perfil);


$filas=mysqli_num_rows($validacion);
if($filas)
{
    switch($perfil)
    {
        case 1: header("admin.php");break;
        case 2: header("index_gerente.php");break;
        case 3: header("index_administrador.php");break;
        case 4: header("index_repartidor.php");break;
    }
}else
{
    ?>
    <?php
    include("login.php");
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <strong>Datos incorrectos!</strong> Ingrese correctamente su correo, contraseña o perfil.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
mysqli_free_result($validacion);
mysqli_close($db);