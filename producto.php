<?php $active_navbar=3;include "header.php" ?>
    <main style="padding:30px 0;">
        <div class="container">
            <div class="text-center pb-2">
                    <h6 class="text-dark text-uppercase font-weight-bold fs-1"><i class="fa-solid fa-bag-shopping"></i> Nuestros productos</h6>
                    <h1 class="mb-4 fs-2">No lo encontrarás a mejor precio en otro lugar</h1>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-3 row-cols-sm-4 g-5">
                <?php 
                include "conexiondb.php";
                include "config.php";
                $producto = "SELECT * FROM productos";
                $datos = mysqli_query($db, $producto);
                foreach($datos as $base){
                    ?>
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
                        </form>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </main>
<?php include "footer.php" ?>
