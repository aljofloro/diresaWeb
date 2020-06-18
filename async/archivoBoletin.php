<?php
$idSeccion = $_GET["idSeccion"];
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_SECCION").$idSeccion, true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $seccion = $jsonq->data;
  $documentos = $seccion->documentos;
  foreach ($documentos as $documento) { 
    $listaDocumentos[] = array('fecha'=>date("Y/m/d",strtotime($documento->fecha)),'nombre'=>$documento->nombre,'url'=>$Configuracion->get("SERVER").$documento->archivo);    
  }
}
$data = array('data' => $listaDocumentos);
echo json_encode($data);
?>