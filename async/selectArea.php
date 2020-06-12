<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_AREAS"), true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $tipos = $jsonq->data;
  foreach ($tipos as $tipo) {
    $areas = $tipo->areas;
    foreach ($areas as $area) {
      $listaAreas[] = array($area->id_area,$area->nombre);
    }    
  }
}
$data = array('data' => $listaAreas);
echo json_encode($data);
?>