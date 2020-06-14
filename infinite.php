<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>

  <style>.hide {display:none!important }
  </style>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="datatable/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      
    $('#example').DataTable( {
      "ordering": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        initComplete: function () {
            this.api().columns([0, 1]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
  </script>
  
</head>
<body>
<div class="row">
            <div class="documentositems col-lg-12 mt-5">
            <table id="example" class="display" style="width:100%">
                    <thead class="thead-blue">
                        <tr>
                            <th class="numero text-center">N°</th>
                            <th>AUTORIZACIONES SANITARIAS PARA LA IMPORTACIÓN DE JUGUETES</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tabla">
                        <tr>
                            <td class="text-center">001</td>
                            <td class="texto">Autorizaciones sanitarias para la importación de juguetes 2019 EEPASO</td>
                            <td class="download">
                            doe
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">002</td>
                            <td class="texto">Autorizaciones sanitarias para la importación de juguetes 2017 - 2018 EEPASO</td>
                            <td class="download">
                            doe
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="numero text-center">N°</th>
                            <th>AUTORIZACIONES SANITARIAS PARA LA IMPORTACIÓN DE JUGUETES</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
</body>
</html>