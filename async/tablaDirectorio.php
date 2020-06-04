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
    $detalle = '<p>'.$oficina->nombre.'</p><div class="row textoinfo">';
    $personas = $oficina->encargados;
    foreach ($personas as $persona) {
      $detalle .= '<div class="col-md-4">';
      $detalle .= '<p>'.$persona->titulo.' '.$persona->nombre_completo.'</br>';
      $detalle .= $persona->cargo.'</br>';
      $detalle .= 'Dirección: '.$persona->direccion.'</br>';
      $detalle .= 'Correo electrónico: '.$persona->correo_electronico.'</br>';
      $detalle .= 'Teléfono:'.$persona->numero_telefono.'</p>';
      $detalle .= '</div>';
    }
    $detalle .='</div>';
    $directorio[] = array(str_pad($numero,3,'0',STR_PAD_LEFT),$detalle);
    $numero ++;
  }
}
$data = array('data' => $directorio);
echo json_encode($data);
?>