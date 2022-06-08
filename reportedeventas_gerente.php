<?php include("header_Gerente.php"); ?>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="perfil_Gerente.php">Perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="reportedeventas_gerente.php">Reporte de Ventas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Varicacion de ventas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="col-12 col-md-10 mx-5 my-5">
                <table id="t_reporte_gerente" class="table table-dark table-hover" style="padding-top: 10px; padding-bottom: 10px;">
                    <thead>
                        <tr class="table-active">
                            <th>Cantidad de Pedidos</th>
                            <th>Ingresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            /*
                            $select_reporte="SELECT * FROM pedidos";
                            $datos_reporte=Mysqli_query($db,$select_reporte);
                            foreach($datos_reporte as $datos_pedido)
                            {
                                echo "<tr>";
                                echo "<td>".$datos_pedido['id_depositos']."</td>";
                                echo "<td>".$datos_pedido['monto_deposito']." $</td>";
                                echo "<td>".$datos_pedido['fecha_deposito']."</td>";
                                echo "<td>".$datos_pedido['estado_deposito']."</td>";
                                echo "<td>".$datos_pedido['usuario_id_usuario']."</td>";
                                echo "<td>".$datos_pedido['banco_id_banco']."</td>";
                                echo "<td>
                                <div class='dropdown'>
                                    <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>Accion</button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                            <li><a class='dropdown-item' href='eliminar-depo-pio.php?id_depositos=".$depositos['id_depositos']."'>Eliminar</a></li>
                                            <li><a data-bs-toggle='modal' data-bs-target='#actualizar' class='dropdown-item' href='actualizar.php?id_depositos=".$depositos['id_depositos']."'>Actualizar</a></li>
                                        </ul>
                                </div></td>";
                            }*/
                        ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready( function (){
                    $('#t_reporte_gerente').DataTable();
                    });
                </script>
            </div>
        </div>
    </main>
</body>
</html>