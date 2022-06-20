<?php 
session_start();
include "conexiondb.php";
if(isset($_SESSION['carrito'])){
} else {
  if(isset($_GET['id_prod'])){
    $imagen = "";
    $nombre = "";
    $precio = "";
    $id_prod = mysqli_real_escape_string($db, $_REQUEST['id_prod']??'');
$queryProd = "SELECT * FROM productos WHERE id_prod='$id_prod'";
$resultado = mysqli_query($db, $queryProd);
$rowProd=mysqli_fetch_assoc($resultado);
    $imagen = $uso['4'];
    $nombre = $uso['1'];
    $precio = $uso['2'];
    $datos[] = array(
      'id_prod' => $_GET['id_prod'],
      'imagen' => $imagen,
      'nombre' => $nombre,
      'precio' => $precio,
      'cantidad' => 1
    );
    $_SESSION['carrito']=$datos;
  }
}
$active_navbar=5;
include("header.php");
?>
    <div class="bg-light py-3">
                <div class="container">
                        <div class="row">
                        <div  class="col-md-12 mb-0 fs-5"><a href="producto.php" class="text-danger" style="text-decoration: none;">Inicio</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Productos</strong></div>
                        </div>
                </div>
        </div>


      <div class="container pt-5">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th >Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if(isset($_SESSION['carrito'])){
                    $datos = $_SESSION['carrito']; 
                    for($i=0; $i<count($datos);$i++){
                  ?>
                  <tr>
                    <td>
                      <img src="img/<?php echo $base['id_prod'];?>" class="card-img-top">
                    </td>
                    <td>
                      <h2 class="h5 text-black"><?php echo $datos[$i]['nombre'];?></h2>
                    </td>
                    <td>$<?php echo $datos[$i]['precio'];?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" 
                        placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$<</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<?php include("footer.php") ?>