<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$Configuracion = Configuracion::getConfiguracion();
$tipoResolucion = $_GET["tipoResolucion"];
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_RESOLUCIONES_POR_TIPO").$tipoResolucion, true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $resoluciones = $jsonq->data;
  $numero = 1;
  foreach ($resoluciones as $resolucion) {
    $detalle = '<p><a href="'.$resolucion->documento.'" target="_blank">Resolución Directoral N° '.$resolucion->codigo.'</a></p>
    <div class="row textoinfo">
        <div class="col-md-4">
            <p>'.$resolucion->descripcion.'</p>
        </div>
    </div>';
    $fechaResolucion = '<p>'.strftime("%A %d de %B de %G",strtotime($resolucion->fecha))/*date_format($fecha,"l d F Y")*/.'</p>';//Miércoles 02 de Enero de 2019

    $listaResolucion[] = array(str_pad($numero,3,'0',STR_PAD_LEFT),$detalle,$fechaResolucion);
    $numero ++;
  }
}
$data = array('data' => $listaResolucion);
echo json_encode($data);
?>