<?php

$db=new mysqli("localhost","root","","dbreparto");
if($db->connect_error)
{
    die(header("Location: errordatabase.php"));
}

?>