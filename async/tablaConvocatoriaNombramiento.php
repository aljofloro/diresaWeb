<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_DIRECTORIO"), true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $convocatorias = $jsonq->data;
  $numero = 1;
  foreach ($convocatorias as $convocatoria) {
    $descripcion = '<p>'.$convocatoria->titular.'</p>';
    $descripcion .= '<p class="textoinfo">'.$convocatoria->contenido.'</p>';
    $puestos = $convocatoria->puestos;
    foreach ($puestos as $puesto) {
      $descripcion .= '<p class="puesto_nombre>'.$puesto->nombre.'</p>';
      $descripcion .= '<p class="puesto_remuneracion>'.$puesto->remuneracion.'</p>';
      $descripcion .= '<p class="puesto_vacantes>'.$puesto->vacantes.'</p>';
    }
    

  }
}
?>