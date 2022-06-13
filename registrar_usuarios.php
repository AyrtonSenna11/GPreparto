<?php
include("conexiondb.php");
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
    $perfil=$perfil_usua;
    include("email.php");
    if($confirmacion_enviado)
    {
        $insert_usuarios="INSERT into usuarios(nombre_usua,apellidos_usua,dni_usua,fechaNacimiento_usua,sexo_usua,telefono_usua,nick_usua,password_usua,fechaRegistro_usua,perfil_usua,codigo_usua,estado_usua) values($nombre,$apellidos,$dni,$fechaNacimiento,$sexo,$telefono,$nick,$password,now(),$perfil,$codigo,0)";
        $valores_usuarios=mysqli_query($db,$insert_usuarios); //or die();
        header("Location: login_usuarios.php");
    }else{
        echo "No se envio el codigo de confirmacion.";//agregar un php de error
    }
}
else{
    include("registro_usuarios.php");
    ?>
    <div id="validacionpassword" class="invalid-feedback">
    Las contraseñas no coiciden.
    </div>
    <?php
    include("registro_usuarios1.php");
}
?>