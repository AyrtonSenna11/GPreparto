<?php

$db=new mysqli("127.0.0.1","gruporeparto","rVeS244!9Va7","dbreparto");
if($db->connect_errno)
{
    echo "No se puedo conectar al Mysql ".$db->connect_errno.". ".$db->connect_error;
}

?>