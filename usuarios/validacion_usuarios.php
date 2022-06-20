<?php
$usuario=$_POST['nick_usua'];
$contraseña=$_POST['password_usua'];
/*if($_POST['perfil_usua']==0)
{
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
    <strong>Datos incorrectos!</strong> Ingrese correctamente su correo o contraseña.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    include("login_usuarios.php");
    mysqli_free_result($validacion);
    mysqli_close($db);
}
$perfil=$_POST['perfil_usua'];*/
session_start();
$_SESSION['nick_usua']=$usuario;

include("../conexiondb.php");
$select_consulta="SELECT * from usuarios where nick_usua='$usuario' and password_usua='$contraseña'";//and perfil_usua=$perfil";
$validacion=mysqli_query($db,$select_consulta);

/*$select_perfil="SELECT * from perfil";
$datos_perfil=mysqli_query($db,$select_perfil);*/


$filas=mysqli_num_rows($validacion);
if($filas)
{
    foreach($validacion as $usuarios)
    {
        if($_SESSION['nick_usua']==$usuarios['nick_usua']){
            switch($usuarios['perfil_usua'])
            {
                case 1: header("location: admin/index.php");break;
                case 2: header("location: gerente/index_gerente.php");break;
                case 3: header("location: administrador/index_administrador.php");break;
                case 4: header("location: motorizado/index_motorizado.php");break;
            }
        }
    }
}else
{
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <strong>Datos incorrectos!</strong> Ingrese correctamente su correo o contraseña.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    include("index_extra.php");
}
mysqli_free_result($validacion);
mysqli_close($db);