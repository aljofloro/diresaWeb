<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$idTramite = $_GET["idTramite"];
$Configuracion = Configuracion::getConfiguracion();
if($idTramite !=''){
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_SEGUIMIENTO_TRAMITE").$idTramite, true));
}
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $tramite = $jsonq->data;
  $numero = 1;
  $movimientos = $tramite->seguimiento;
  if($movimientos == null){
    $vacio = array('data' => '');
    echo json_encode($vacio);
  }else{
    foreach ($movimientos as $movimiento) {
      $tipoDestino = $movimiento->tipo_destino;
      if($tipoDestino == 'i'){$tipoDestino = 'Trámite Interno';}else{$tipoDestino = 'Trámite Externo';}
      $observacion = $movimiento->observacion;
      $estado = $movimiento->estado;
      switch ($estado) {
        case 'p':
          $estado = 'Por Recibir';
          break;
        case 'r':
          $estado = 'Recibido';
          break;
        case 'a':
          $estado = 'Archivado';
          break;
        case 'at':
          $estado = 'Atendido';
          break;
        case 'pv':
          $estado = 'Por Visar';
          break;
        default:
          $estado = 'Indeterminado';
          break;
      }
      $fecha = $movimiento->fecha_hora_creacion;
      $origen = $movimiento->origen;
      $destino = $movimiento->destino;
  
      $tablaTramite = '<p>'.$tipoDestino.'</p>';
      $tablaOrigen = '<p class="tablaTramiteTitulo">'.$origen->nombre_completo.'</p>
      <p class="textoinfo">'.$origen->entidad.'</p>
      <p class="textoinfo">'.$origen->area.'</p>
      ';
      $tableDestino = '<p class="tablaTramiteTitulo">'.$destino->nombre_completo.'</p>
      <p class="textoinfo">'.$destino->entidad.'</p>
      <p class="textoinfo">'.$destino->area.'</p>';
      $tablaFecha = '<p>'.$fecha.'</p>';
      $tablaEstado = '<p>'.$estado.'</p>';
      $tablaObservaciones = '<p>'.$observacion.'</p>';
     
      $listaMovimientos[] = array(str_pad($numero,3,'0',STR_PAD_LEFT),$tablaTramite,$tablaOrigen,$tableDestino,$tablaFecha,$tablaEstado,$tablaObservaciones);
      $numero ++;
    }
    $data = array('data' => $listaMovimientos);
    echo json_encode($data);
  }  
}

?>