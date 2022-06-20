<?php
    include "conexiondb.php";
?>
<html lang="en">
    <body>
        <?php
            include "header.php";
        ?>
        <br>
        <div class="col-md-9">
            <br>
            <input type="submit" class="btn btn-primary" value="Nuevo" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <input type="button">Nuevo</input>
            <div class="card"></div>
        </div>
        <table id="tabusu" class="table">
            <thead>
                <tr>
                    <th>Id Pedido</th>
                    <th>Destinatario</th>
                    <th>Dirección</th>
                    <th>Fecha del Pedido</th>
                    <th>Fecha de Envio</th>
                    <th>Fecha de Entrega</th>
                    <th>Motorizado</th>
                    <th>Modo de Pago</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM pedidos";
                    $datos = $db->query($sql);
                    foreach($datos as $pedidos)
                    {
                        echo "<tr>";
                            echo "<td>".$pedidos['id_pedi']."</td>";
                            echo "<td>".$pedidos['destinatario_pedi']."</td>";
                            echo "<td>".$pedidos['direccionDestinatario_pedi']."</td>";
                            echo "<td>".$pedidos['fecha_pedi']."</td>";
                            echo "<td>".$pedidos['fechaEnvio_pedi']."</td>";
                            echo "<td>".$pedidos['fechaEntrega_pedi']."</td>";
                            echo "<td>".$pedidos['motorizado']."</td>";
                            echo "<td>".$pedidos['modo_pago_pedi']."</td>";
                            echo "<td>".$pedidos['accion_pedi']."</td>";
                            echo "<td width=10%>";
                            echo "<a class='btn btn-secondary' title='Actualizar' href='actualizar.php'>"."<img src='img/update.png' width='26' height='20' class='dimage'></a>";
                            echo "<a class='btn btn-danger' title='Eliminar' href='eliminarUsu.php?id_usuario=" .$pedidos['id_pedi']."'>"."<img src='img/trash.png' width='26' height='20' class='dimage'></a>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Pedido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="grabarusu.php" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Destinatario</label>
                                <input type="text" class="form-control" name="nombre_usuario" placeholder="Ingrese nombres" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="apellidos_usuario" placeholder="Ingrese apellidos" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha del Pedido</label>
                                <input type="text" class="form-control" name="dni_usuario" placeholder="Ingrese DNI" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha de Envio</label>
                                <input type="text" class="form-control" name="sexo_usuario" placeholder="Ingrese género" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha de Entrega</label>
                                <input type="text" class="form-control" name="sexo_usuario" placeholder="Ingrese género" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Modo de Pago</label>
                                <input type="text" class="form-control" name="sexo_usuario" placeholder="Ingrese género" requiered>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Acción</label>
                                <select class="form-control" name="estado_usuario">
                                    <option value=0>Inactivo</option>
                                    <option value=1>Activo</option>
                                </select>
                            </div>
                            <!--<div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Motorizado</label>
                                <select class="form-control" name= "moto_id_moto">
                                    <?php
                                        $sql = "SELECT * FROM  motorizado";
                                        $datos  = $conn->query($sql);
                                        //var_dump($datos); exit ;
                                        foreach($datos as $moto)
                                        {
                                            echo "<option value=" . $moto['id_moto'] . ">".
                                            $moto['nombre_moto']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary"value= "Guardar">           
                            </div>    
                        </form>
                    </div>
                                    
                </div>
            </div>
        </div>     
    </body>
</html>
<script>
    $(document).ready ( function ( )
    {
        $('#tabusu').DataTable(
            {
                dom: 'Bfrtip',
                buttons: 
                [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
    } ) ;
</script>