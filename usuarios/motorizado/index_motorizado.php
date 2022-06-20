<?php include("header_motorizado.php"); ?>
            <div id="layoutSidenav_content">
                <main>
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
                                        <a class="btn btn-danger" href="../cerrar_sesion.php" role="button">Cerrar Sesion</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Panel Principal</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel Principal</li>
                        </ol>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card bg-primary text-white mb-4 ">
                                    <div class="card-body">Ingresos de Hoy</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total de Pedidos del Mes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Pedidos Diarios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Clientes Registrados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include("footer_motorizado.php"); ?>
