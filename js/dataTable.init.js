$(document).ready(function() {
  const NO_VIGENTE = 10;
  const VIGENTE = 20;
  const ANEXO = 30;
  /*TABLA DE CONVOCATORIAS*/
  $('#convocatoria').DataTable({
    "destroy": true,
    "scrollX": true,
    "ordering": false,
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
    "lengthMenu": [
      [5, 10, 20, -1],
      [5, 10, 20, "Todas"]
    ],
    "dom": '<"selectConvocatoria"><"#top_convocatoria"Bl>t<"bottom"ip><"clear">',
    /* "dom": 'Bfrtip',*/
    "buttons": [{
      "text": '<button class="btn btn-convocatorias">Convocatorias Vigentes</button>',
      "key": '1',
      "action": function(e, dt, node, config) {
          alert('Button 1 activated');
      }
    },
    {
      "text": '<button class="btn btn-convocatorias">Convocatorias Pasadas</button>',
      "key": {
          "shiftKey": true,
          "key": '2'
      },
      action: function(e, dt, node, config) {
          alert('Button 2 activated');
      }
    },
    {
      "text": '<button class="btn btn-convocatorias">Anexos</button>',
      "key": {
          "shiftKey": true,
          "key": '3'
      },
      action: function(e, dt, node, config) {
          alert('Button 3 activated');
      }
    }]
  });

  /*convocatoria sin anexo*/
  $('#convocatoriasinanexo').DataTable({
      "columnDefs": [{
          "targets": [1, 2],
          "width": "10em!important"
      }, ],
      "destroy": true,
      "scrollX": true,
      "ordering": false,
      "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      "lengthMenu": [
          [5, 10, 20, -1],
          [5, 10, 20, "Todas"]
      ],
      "dom": '<"selectConvocatoria"><"#top_convocatoria"Bl>t<"bottom"ip><"clear">',

      /* "dom": 'Bfrtip',*/
      "buttons": [{
              "text": '<button class="btn btn-convocatorias">Convocatorias Vigentes</button>',
              "key": '1',
              "action": function(e, dt, node, config) {
                  alert('Button 1 activated');
              }
          },
          {
              "text": '<button class="btn btn-convocatorias">Convocatorias Pasadas</button>',
              "key": {
                  "shiftKey": true,
                  "key": '2'
              },
              action: function(e, dt, node, config) {
                  alert('Button 2 activated');
              }
          },
      ]
  });

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
  function dataTableConvocatoriaInit(valor){
    var vigencia = valor || '';
    var params = $('#tablaConvocatoria').attr("data-params");
    $('#tablaConvocatoria').DataTable({
      "destroy": true,
      "serverSide": false,
      "scrollX": true,
      "language": {
        "url" : "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      "ajax": "async/tablaConvocatoria.php?"+params+"&vigencia="+vigencia,
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
      },
      {
        "text": '<button class="btn btn-convocatorias">Anexos</button>',
        "key": {
            "shiftKey": true,
            "key": '3'
        },
        action: function(e, dt, node, config) {
            alert('Button 3 activated');
        }
      }]
    });
  }
  
});