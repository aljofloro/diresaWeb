$(document).ready(function() {
    const NO_VIGENTE = 1;
    const VIGENTE = 2;
    const ANEXO = 3;

    /*TABLA GENERAL*/
    $('#tablageneral').DataTable({
        "ordering": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

    /** TABLA DIRECTORIO */
    $('#tablaDirectorio').DataTable({
        "scrollX": true,
        "ordering": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "ajax": "async/tablaDirectorio.php"
    });

    /** TABLA CONVOCATORIA GENERICA */
    dataTableConvocatoriaInit();

    function dataTableConvocatoriaInit(valor) {
        var vigencia = valor || '';
        var params = $('#tablaConvocatoria').attr("data-params");
        $('#tablaConvocatoria').DataTable({
            "ordering": false,
            "destroy": true,
            "serverSide": false,
            "scrollX": true,
            "lengthMenu": [
                [5, 10, 20, -1],
                [5, 10, 20, "Todas"]
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            "ajax": "async/tablaConvocatoria.php?" + params + "&vigencia=" + vigencia,
            "dom": '<"selectConvocatoria"><"#top_convocatoria"Bl>t<"bottom"ip><"clear">',
            "buttons": [{
                    "text": '<button class="btn btn-convocatorias">Convocatorias Vigentes</button>',
                    "key": '1',
                    "action": function(e, dt, node, config) {
                        dataTableConvocatoriaInit(VIGENTE);
                    }
                },
                {
                    "text": '<button class="btn btn-convocatorias">Convocatorias Pasadas</button>',
                    "key": {
                        "shiftKey": true,
                        "key": '2'
                    },
                    action: function(e, dt, node, config) {
                        dataTableConvocatoriaInit(NO_VIGENTE);
                    }
                }
            ]
        });
    }

    /** TABLA RESOLUCIONES */
    dataTableResolucionesInit();

    function dataTableResolucionesInit(){
        var params = $('#tablaResolucion').attr("data-params");
        $('#tablaResolucion').DataTable({
            "ordering": false,
            "destroy": true,
            "serverSide": false,
            "scrollX": true,
            "lengthMenu": [
                [5, 10, 20, -1],
                [5, 10, 20, "Todas"]
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            "ajax": "async/tablaResolucion.php?" + params,
            "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                $('td:eq(0)', nRow).addClass('text-center');
                $('td:eq(1)', nRow).addClass('texto');
                $('td:eq(2)', nRow).addClass('download textoinfo align-middle text-right');
                return nRow;
                }
        });
    }



    /*TABLA AGENDA*/
    dataTableAgendaInit();
    function dataTableAgendaInit(inicio,final){
        var fechaInicio = inicio || '';
        var fechaFinal = final || '';
        var ajax = "async/tablaAgenda.php";
        if(fechaInicio != '' && fechaFinal != ''){
            ajax += "?fecha_inicio="+fechaInicio+"&fecha_fin="+fechaFinal;
        }
        $('#tablaAgenda').DataTable({
            "destroy": true,
            "ordering": false,
            "scrollX": true,
                "lengthMenu": [
                    [5, 10, 20, -1],
                    [5, 10, 20, "Todas"]
                ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            "ajax": ajax,
            "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                $('td:eq(0)', nRow).addClass('text-center');
                $('td:eq(1)', nRow).addClass('text-justify');
                return nRow;
                }
        });
    }

    $('.botonbusqueda').click(function(){
        var inicio = $('#fechainicial').val();
        var final = $('#fechafinal').val();
        if(inicio == '' || final == ''){
            alert("Para realizar la búsqueda es necesario ingresar ambas fechas");
            return false;
        }

        if(new Date(final).getTime() < new Date(inicio).getTime()){
            alert("La fecha final debe ser posterior a la inicial");
            return false;
        }

        dataTableAgendaInit(inicio,final);
        
    });
    

});