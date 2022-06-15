<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparto de Delivery</title>

    <link rel="shortcut icon" href="../img/fast.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript Libraries >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script -->

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/51e0a40de0.js" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet" >

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>
    <header class="container mw-100">
        <div class="row">
            <div class="container-fluid p-0">
                <div class="col-12 col-md-12 mw-100">
                    <nav class="navbar navbar-expand-md bg-light navbar-light py-3 py-lg-0 px-lg-5">
                        <h1 class="m-0 display-5 text-uppercase text-primary"><img src="../img/fast.png" width="75px">DELIVERY FASTER</h1>                            
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarNavDropdown" >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                            <div class="navbar-nav m-auto py-0">
                                <a href="index_iniciado.php" class="nav-item nav-link <?php if($active_navbar==1){echo "active";} ?>"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
                                <a href="nosotros_iniciado.php" class="nav-item nav-link <?php if($active_navbar==2){echo "active";} ?>"><i class="fa-solid fa-users"></i> Nosotros</a>
                                <a href="producto_iniciado.php" class="nav-item nav-link <?php if($active_navbar==3){echo "active";} ?>"><i class="fa-solid fa-list"></i> Producto</a>
                                <a href="contacto_iniciado.php" class="nav-item nav-link <?php if($active_navbar==4){echo "active";} ?>"><i class="fa-solid fa-headset"></i> Contacto</a>
                                <a href="carrito_iniciado.php" class="nav-item nav-link <?php if($active_navbar==5){echo "active";} ?>"><i class="fa-solid fa-cart-shopping"></i> Carrito</a>
                                <div class="dropdown">
                                    <a class="nav-item nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                    <i class="fa-solid fa-user"></i> 
                                    <?php
                                        include("../conexiondb.php");
                                        $select_cliente="SELECT * from usuarios";
                                        $datos_cliente=mysqli_query($db,$select_cliente);
                                        foreach($datos_cliente as $cliente)
                                        {
                                            if($cliente['nick_usua']==$_SESSION['nick_usua'])
                                            {
                                                echo $cliente['nombre_usua']." ".$cliente['apellidos_usua'] ;
                                            }
                                        }
                                    ?>
                                    </a>
                                    <ul class="dropdown-menu p-2 " aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="perfil_iniciado.php">Perfil</a></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#cerrarsesion" role="button">Cerrar Sesion</a></li>
                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="modal fade" id="cerrarsesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro que quiere Cerrar Sesion?
                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-block ">
                        <a class="btn btn-danger" href="cerrar_sesion.php" role="button">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>