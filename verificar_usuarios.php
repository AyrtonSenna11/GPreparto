<?php
    include "conexiondb.php";
    $email =$_POST['nick'];
    $codigo =$_POST['codigo'];
    $select_usua = $db->query("select * from usuarios 
        where nick_usua='$email' 
        and codigo='$codigo' 
        ");//or die($conexion->error);
    if( mysqli_num_rows($select_usua) > 0 ){
        echo "TODO CORRECTO";
        $conexion->query("UPDATE usuarios set estado_usua =1 where nick_usua = '$email' ");
        echo 'TODO CORRECTO  ya puedes <a href="../login.php">Iniciar sesion </a>';
    }else{
        ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            El codigo de verificaion es incorrecto. Revise la bandeja de su correo y vueleve a ingresar el codigo.
        </div>
        </div>
        <?php
    }
?>