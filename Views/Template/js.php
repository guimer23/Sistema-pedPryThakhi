<!-- jQuery  -->
<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/bootstrap.bundle.min.js"></script>
<script src="Assets/js/metisMenu.min.js"></script>
<script src="Assets/js/waves.min.js"></script>
<script src="Assets/js/jquery.slimscroll.min.js"></script>

<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
<!-- Gmaps file -->
<script src="Assets/plugins/gmaps/gmaps.min.js"></script>
<!-- demo codes -->
<script src="Assets/pages/jquery.gmaps.init.js"></script>

<!-- App js -->
<script src="Assets/js/app.js"></script>

<script src="Assets/plugins/moment/moment.js"></script>
<script src="Assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="Assets/pages/jquery.crm_leads.init.js"></script>



<script>
    $(function (e) {
        $('#example').DataTable({
            "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todos"]],
            "bDestroy": true,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningun dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "?ltimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });</script>
