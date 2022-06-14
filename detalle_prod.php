<?php 
include "config.php";
$id = isset($_GET['id_prod']) ? $_GET['id_prod']: '';
$token = isset($_GET['token']) ? $_GET['token']: '';

include "conexiondb.php";
$id_prod = mysqli_real_escape_string($db, $_REQUEST['id_prod']??'');
$queryProd = "SELECT nombre_prod, precioUnidad_prod, foto_prod, descripcion_prod FROM productos WHERE id_prod='$id_prod' ";
$resultado = mysqli_query($db, $queryProd);
$rowProd=mysqli_fetch_assoc($resultado);
$active_navbar=3;
include("header.php");
?>

        <div class="bg-light py-3">
                <div class="container">
                        <div class="row">
                        <div  class="col-md-12 mb-0 fs-5"><a href="producto.php" class="text-danger" style="text-decoration: none;">Productos</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Detalles de Productos</strong></div>
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
                                        <p><a href="carrito.php" class="buy-now btn btn-lg btn-danger"><i class="bi bi-cart-check-fill"></i>Añadir al carrito</a></p>
                                        </div> 
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

        </main>
<?php include("footer.php") ?>