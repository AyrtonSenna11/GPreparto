<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparto de Delivery</title>

    <link rel="shortcut icon" href="img/fast.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript Libraries >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script -->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/51e0a40de0.js" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" >

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
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                            <div class="navbar-nav m-auto py-0">
                                <a href="iniciadoSesion/index_iniciado.php" class="nav-item nav-link"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
                                <a href="iniciadoSesion/nosotros_iniciado.php" class="nav-item nav-link"><i class="fa-solid fa-users"></i> Nosotros</a>
                                <a href="iniciadoSesion/producto_iniciado.php" class="nav-item nav-link"><i class="fa-solid fa-list"></i> Producto</a>
                                <a href="iniciadoSesion/contacto_iniciado.php" class="nav-item nav-link"><i class="fa-solid fa-headset"></i> Contacto</a>
                                <div class="dropdown">
                                    <a class="nav-item nav-link dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="fa-solid fa-user"></i> 
                                    <?php
                                        include("conexiondb.php");
                                        $select_nombre="SELECT * from usuarios";
                                        $datos_nombre=mysqli_query($db,$select_nombre);
                                        foreach($datos_nombre as $nombre_usuario)
                                        {
                                            if($_POST['id_usua']==$nombre_usuario['id_usua'])
                                            {
                                                echo $nombre_usuario['nombre_usua']." ".$nombre_usuario['apellidos_usua'] ;
                                            }
                                        }
                                    ?>
                                </div>  
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>