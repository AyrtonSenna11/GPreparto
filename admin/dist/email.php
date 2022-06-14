<?php
// Varios destinatarios
$para  = '2018110403@udh.edu.pe' . ', ';
//$para.= "$nick";

// título
$titulo = 'Tu cuenta a sido registrado correctamente';
$codigo=rand(100000,99999);

// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF8"/>
    <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
    <p>Tu codigo de verificacion es: </p>
    <h2>'.$codigo.'</h2>
    <p><a href="http://localhost/GestiondeProyectos/Reparto/confirmarEmail_usuarios.php?email='.$nick.'">Verificar Cuenta</a></p>
    <table>
        <tr>
            <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
        </tr>
        <tr>
            <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
        </tr>
        <tr>
            <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
        </tr>
    </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

/* Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$confirmacion_enviado=false;
if(mail($para, $titulo, $mensaje, $cabeceras))
{
    $confirmacion_enviado=true;
}
?>