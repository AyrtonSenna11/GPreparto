<?php 
include "config.php";
$id = isset($_GET['id_prod']) ? $_GET['id_prod']: '';
$token = isset($_GET['token']) ? $_GET['token']: '';

include "conexion.php";
$id_prod = mysqli_real_escape_string($dbrepart, $_REQUEST['id_prod']??'');
$queryProd = "SELECT nombre_prod, precioUnidad_prod, foto_prod, descripcion_prod FROM productos WHERE id_prod='$id_prod' ";
$resultado = mysqli_query($dbrepart, $queryProd);
$rowProd=mysqli_fetch_assoc($resultado);

?>
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
                        <h6 class="text-dark text-uppercase font-weight-bold fs-1"><i class="bi bi-bag-fill" style="padding: 10px;"></i>Nuestros productos al mejor precio</h6>
                </div>

                <div class="site-section">
                    <div class="container pt-5">
                        <div class="row justify-content-md-center">
                            <div class="col-md-5" >
                                    <figure class="block-4 image">
                                        <img class="card-img-top" src="img/<?php echo $rowProd['foto_prod'] ?>" alt="Image" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center pt-5">
                                        <h2 class="card-title text-uppercase"><?php echo $rowProd['nombre_prod'] ?></h2><hr>
                                    </div>
                                    <p  class="card-text"><?php echo $rowProd['descripcion_prod'] ?></p><hr>
                                    <p class="card-text"><?php  echo MONEDA . number_format($rowProd['precioUnidad_prod'], 2, '.', ',');?></p>
                                    
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="btn-group">
                                        <p><a href="cart.php" class="buy-now btn btn-lg btn-danger"><i class="bi bi-cart-check-fill"></i>Añadir al carrito</a></p>
                                        </div> 
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

        </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>