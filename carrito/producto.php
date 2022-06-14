<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>

    <link rel="shortcut icon" href="img/deli.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="#" class="navbar-brand">
                <h1 class="m-0   text-light"><img src="img/fast.png" width="75px">DELIVERY FASTER</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarHeader">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> 
                        <a href="#" class="nav-link activo">Productos</a>
                    </li>
                </ul>
                <a href="carrito.php" class="btn btn-primary"><i class="bi bi-cart-check-fill"></i> Carrito</a>
            </div>
            </div>
        </div>
    </header>

        <div class="bg-light py-3">
                <div class="container">
                        <div class="row">
                        <div  class="col-md-12 mb-0 fs-5"><a href="pay.php" class="text-danger" style="text-decoration: none;">Inicio</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Productos</strong></div>
                        </div>
                </div>
        </div>

        <main style="padding:30px 0;">
            <div class="container">
                <div class="text-center pb-2">
                        <h6 class="text-dark text-uppercase font-weight-bold fs-1"><i class="bi bi-bag-fill" style="padding: 10px;"></i>Nuestros productos</h6>
                        <h1 class="mb-4 fs-2">No lo encontrarás a mejor precio en otro lugar</h1>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-3 row-cols-sm-4 g-5">
                <?php 
                    include "conexion.php";
                    include "config.php";
                    $producto = "SELECT * FROM productos";
                    $datos = mysqli_query($dbrepart, $producto);
                ?>
                <?php foreach($datos as $base){?>
                <div class="col">
                    <form action="" method="POST">
                    <div class="card shadow-sm">
                            <figure class="block-4 image">
                                <img class="card-img-top" src="img/<?php echo $base['foto_prod'];?>"></a>
                            </figure>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title text-uppercase"> <?php echo $base['nombre_prod']; ?></h5><hr>
                            </div>
                            <p class="card-text "><?php echo $base['descripcion_prod']; ?></p><hr>
                            <p class="card-text"> <?php  echo MONEDA . number_format($base['precioUnidad_prod'], 2, '.', ',');?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="detalle_prod.php?id_prod=<?php echo $base['id_prod'];?> &token=<?php echo hash_hmac('sha1', $base['id_prod'], KEY_TOKEN); ?>" class="btn btn-primary"><i class="bi bi-ticket-detailed-fill"></i> Detalles</a>
                                </div> 
                                    <a href="" class="btn btn-success"><i class="bi bi-bag-fill"></i> Agregar</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
               <?php  } ?>
            </div>
        </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>