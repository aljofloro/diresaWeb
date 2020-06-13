<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$fechaInicio = $_GET["fecha_inicio"];
$fechaFinal = $_GET["fecha_fin"];
$Configuracion = Configuracion::getConfiguracion();
if($fechaInicio !='' && $fechaFinal != ''){
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_ACTIVIDADES")."?fecha_inicio=".$fechaInicio."&fecha_fin=".$fechaFinal, true));
}else{
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_ACTIVIDADES"), true));
}
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $actividades = $jsonq->data;
  $numero = 1;
  foreach ($actividades as $actividad) {//Miércoles 05 de febrero de 2020 - 15:00 pm 
    $detalle = '<p class="tablaagendatitulo"> '.$actividad->titulo.'</p>
    <p class="textoinfo"><i class="fas fa-calendar-alt fa-sm"></i> '.strftime("%A %d de %B de %G - %H:%M %p",strtotime($actividad->fecha_hora)).'</p>
    <p class="textoinfo"><i class="fas fa-map-marker-alt fa-sm"></i> '.$actividad->ubicacion.'</p>
    <p class="textoinfo"><i class="fas fa-pencil-alt fa-sm"></i> '.$actividad->organizador.'</p>';
   
    $agenda[] = array(str_pad($numero,3,'0',STR_PAD_LEFT),$detalle);
    $numero ++;
  }
}
$data = array('data' => $agenda);
echo json_encode($data);
?>