<?php
include("conexiondb.php");
$insert_cliente="INSERT into usuarios(nombre_usua,apellidos_usua,fechaNacimiento_usua,sexo_usua,telefono_usua,nick_usua,password_usua,fechaRegistro_usua,perfil_usua,estado_usua) values('".$_POST['nombre_usua']."','".$_POST['apellidos_usua']."','".$_POST['fechaNacimiento_usua']."','".$_POST['sexo_usua']."',".$_POST['telefono_usua'].",'".$_POST['nick_usua']."','".$_POST['password_usua']."',now(),5,1)";
$valores_cliente=mysqli_query($db,$insert_cliente);
?>

<?php
include("index.php");
?>