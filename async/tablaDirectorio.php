<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_DIRECTORIO"), true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $oficinas = $jsonq->data;
  $numero = 1;
  foreach ($oficinas as $oficina) {
    $nombre = $oficina->nombre;
    $directorio[] = array($numero,$nombre);
    $numero ++;
  }
}
$data = array('data' => $directorio);
echo json_encode($data);
?>