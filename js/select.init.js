$(document).ready(function() {

  llenarSelectConsulta();

  function llenarSelectConsulta(){
    if($('#idArea').length > 0){
      $.ajax({
        url: 'async/selectArea.php',
        dataType: 'json',
        beforeSend: function(){
          $('#idArea').prop('disabled',true);
        },
        success: function(data){
          if (data == null) {//Validación de datos nulos
            alert('Disculpe, No hay departamentos que mostrar.');
            return
          } else {
              for (var i = 0; i < data.length; i++){//Recorremos y almacenamos la data en el select (SltDepartamento)
                  $("#idArea").append("<option value=" + data[i].id_area + ">" + data[i].nombre + "</option>");
              }
          }          
          $('#idArea').prop('disabled',false);
        }
      });
    }
  }

});