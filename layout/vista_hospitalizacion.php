<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitalaización</title>
    <!-- estilos -->
    <link rel="stylesheet" href="../asset/css/vista_hospitalizacion.css">
    <link rel="stylesheet" href="../asset/fonts/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../asset/libs/bootstrap5/css/bootstrap.min.css">
    <!-- datatable -->
    <link rel="stylesheet" href="../asset/libs/dataTables/datatables.min.css">
</head>

<body>
    <!-- php nav -->
    <?php require 'nav_superior.php' ?>
    <div class="cont_hospitalizacion">
        <div class="mini_encabezado">
            <div class="nombre_hosp">
                <span>HOSPITAL DOMINGO LUCIANI </span>
            </div>
            <div class="piso_hosp">
                <span>PISO 1</span>
            </div>
            <div class="area_trabajo">
                <span>GINECO-OBSTRETICIA</span>
            </div>
            <div class="date_time">
                <span>26/09/2022</span>
                <span>12:13 PM</span>
            </div>
        </div>
        <section class="modulo_hospitalizacion">

            <div class="tit">
                <h2>HOSPITALIZACIÓN - GINECO - OBSTRETICIA(MODULO A)</h2>
            </div>

            <div class="cont_general">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    NUEVO
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                FORMULARIO DE PASOS 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="camas">
                    <div class="disp cdo">
                        <h6>Camas Disponibles</h6>
                        <strong><span class="num_disp" style="color:#5bdeff">400</span></strong>
                    </div>
                    <div class="ocup cdo">
                        <h6>Camas Ocupadas</h6>
                        <strong><span class="num_ocu" style="color:#eeff00">100</span></strong>
                    </div>
                </div>
            </div>

            <table id="list_hospitalizados" width="100%" height="100vh">
                <thead>
                    <tr>
                        <th>Nombre del Paciente</th>
                        <th>Habitación</th>
                        <th>Cama</th>
                        <th>Fecha Ingreso</th>
                        <th>Estatus</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jaun Castillo</td>
                        <td>HAB123</td>
                        <td>0CAM</td>
                        <td>23/09/2001</td>
                        <td>vivo</td>
                        <td>modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td>jesus Colina</td>
                        <td>HAB456</td>
                        <td>1CAM</td>
                        <td>13/12/2023</td>
                        <td>vivo</td>
                        <td>modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td>Rosa Guadalupe</td>
                        <td>HAB789</td>
                        <td>2CAM</td>
                        <td>13/02/2013</td>
                        <td>vivo</td>
                        <td>modificar</td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td>yulimar Cedeño/td>
                        <td>HAB101</td>
                        <td>3CAM</td>
                        <td>31/07/199</td>
                        <td>vivo</td>
                        <td>modificar</td>
                        <td>Eliminar</td>
                    </tr>

                </tbody>
            </table>
        </section>
    </div>

    <!-- jquery -->
    <script src="..//asset/libs/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap -->
    <script src="..//asset/libs/bootstrap5/js/bootstrap.min.js"></script>
    <!-- datatable -->
    <script src="..//asset/libs/dataTables/datatables.min.js"></script>
    <!-- llamando tabla con datatable  -->
    <script>
        $(document).ready(function() {
            $('#list_hospitalizados').DataTable();
        });
        // datatable en español
        var table = $('#list_hospitalizados').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },

        });
    </script>
</body>

</html>