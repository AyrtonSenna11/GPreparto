<?php

$db=new mysqli("localhost","root","","dbreparto");
if($db->connect_errno)
{
    echo "No se puedo conectar al Mysql ".$db->connect_errno.". ".$db->connect_error;
}

?>