$(document).ready(function() {

  llenarSelectConsulta();

  function llenarSelectConsulta(){
    if($('#idArea').length > 0){
      $.ajax{
        url: "async/selectArea.php"
      }
    }
  }

});