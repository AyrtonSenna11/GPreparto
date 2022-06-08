<?php
$usuario=$_POST['nick_usua'];
$contraseña=$_POST['password_usua'];
if($_POST['perfil_usua']==0)
{
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
    <strong>Datos incorrectos!</strong> Ingrese correctamente su correo, contraseña o perfil.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    include("index.php");
    mysqli_free_result($validacion);
    mysqli_close($db);
}
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
        case 1: header("location: perfil_Gerente.php");break;
        case 2: header("location: perfil_Gerente.php");break;
        case 3: header("location: index_administrador.php");break;
        case 4: header("location: index_repartidor.php");break;
    }
}else
{
    ?>

    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <strong>Datos incorrectos!</strong> Ingrese correctamente su correo, contraseña o perfil.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    include("index.php");
}
mysqli_free_result($validacion);
mysqli_close($db);