<?php
include("conexiondb.php");
$usuario=$_POST['nick_usua'];
$contraseña=$_POST['password_usua'];
session_start();
$_SESSION['nick_usua']=$usuario;

$select_consulta="SELECT * from usuarios where nick_usua='$usuario' and password_usua='$contraseña'and perfil_usua=5";
$validacion=mysqli_query($db,$select_consulta);
$filas=mysqli_num_rows($validacion);
if($filas)
{
    /*foreach($validacion as $para_pefil)
    {
        if($_SESSION['nick_usua']==$para_pefil['nick_usua']){
            if($para_pefil['perfil_usua']==5){
                header("Location: iniciadoSesion/producto_iniciado.php");
            }else{
                header("Location: 401.php");
            }
        }
    }*/
    header("Location: iniciadoSesion/producto_iniciado.php");
}else
{
    ?>
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <strong>Datos incorrectos!</strong> Ingrese correctamente su correo o contraseña.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php include("index.php");
}
mysqli_free_result($validacion);
mysqli_close($db);
?>
