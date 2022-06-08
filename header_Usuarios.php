<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Gerente</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- DataTbale Css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    
    <!-- DataTable Java -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</head>
<body  class="w-auto">
    <header>
        <div class="row">
            <div class="col-12 col-md-12">
                <nav class="navbar fixed bg-dark">
                    <div class="container-fluid">
                        <h1 class="m-0 display-5 text-uppercase text-primary"><img src="img/fast.png" width="75px">Rapidito</h1>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <a>
                                <?php
                                include("conexiondb.php");
                                $select_nombre="SELECT * from usuarios";
                                $datos_nombre=mysqli_query($db,$select_nombre);
                                foreach($datos_nombre as $nombre_usuario)
                                {
                                    if($_POST['nick_usua']=$nombre_usuario['nick_usua'])
                                    {
                                        echo $nombre_usuario['nombre_usua']." ".$nombre_usuario['apellidos_usua'] ;
                                    }
                                        
                                }
                                ?>
                            </a>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <?php
                                    foreach($datos_nombre as $nombre_usuario)
                                    {
                                        if($_POST['nick_usua']=$nombre_usuario['nick_usua'])
                                        {
                                            echo $nombre_usuario['nombre_usua']." ".$nombre_usuario['apellidos_usua'] ;
                                        }
                                            
                                    }
                                    ?>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
