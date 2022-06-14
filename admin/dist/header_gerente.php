<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gerente</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
            <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/51e0a40de0.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index_gerente.php">Gerente</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                    <?php
                        session_start();
                        include("../../conexiondb.php");
                        $select_nombre="SELECT * from usuarios";
                        $datos_nombre=mysqli_query($db,$select_nombre);
                        foreach($datos_nombre as $nombre_usuario)
                        {
                            if($nombre_usuario['nick_usua']==$_SESSION['nick_usua'])
                            {
                                echo $nombre_usuario['nombre_usua']." ".$nombre_usuario['apellidos_usua'] ;
                            }
                        }
                    ?>
                </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="perfil_gerente.php">Perfil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#cerrarsesion" role="button">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Resumen</div>
                            <a class="nav-link" href="index_gerente.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel Principal
                            </a>
                            <a class="nav-link" href="variaciondeventas_gerente.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Variacion de Ventas
                            </a>
                            <a class="nav-link" href="reportedeventas_gerente.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reporte de Ventas
                            </a>
                            <div class="sb-sidenav-menu-heading">Acciones</div>
                            <a class="nav-link" href="nuevo_gerente.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-gear"></i></div>
                                Agregar un Nuevo Gerente/a
                            </a>
                            <a class="nav-link" href="nuevo_administrador.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                                Agregar un Nuevo Adminitrador/a
                            </a>
                            <a class="nav-link" href="nuevo_motorizado.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-motorcycle"></i></div>
                                Agregar un Nuevo Motorizado/a
                            </a>
                        </div>
                    </div>
                </nav>
            </div>