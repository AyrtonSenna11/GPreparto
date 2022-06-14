<?php

$dbrepart=new mysqli("localhost","root","","dbreparto");
if($dbrepart->connect_errno)
{
    echo "Fallo al conectar a MySQL".$dbrepart->connect_errno.". ".$dbrepart->connect_error;
}

?>