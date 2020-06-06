<?php
$nivelProfundidad = "../";
include_once($nivelProfundidad."config/config.php");
$tipoConvocatoria = $_GET["tipoConvocatoria"];
$vigencia = $_GET["vigencia"] ;
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_CONVOCATORIA").$tipoConvocatoria, true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $convocatorias = $jsonq->data;
  if($convocatorias == null){
    $vacio = array('data' => '');
    echo json_encode($vacio);
  } else {
    $numero = 1;
    foreach ($convocatorias as $convocatoria) {
      if($vigencia == '' || ($vigencia == $Configuracion->get("VIGENTE") && $convocatoria->resultado_final == '') || ($vigencia == $Configuracion->get("NO_VIGENTE") && $convocatoria->resultado_final != '')){
        $descripcion = '<p>'.$convocatoria->titular.'</p>';
        $descripcion .= '<p class="textoinfo">'.$convocatoria->contenido.'</p>';
        $puestos = $convocatoria->puestos;
        foreach ($puestos as $puesto) {
          $descripcion .= '<p class="detalleInfo"> Puesto: '.$puesto->nombre.'</p>';
          $descripcion .= '<p class="detalleInfo"> Remuneración: '.$puesto->remuneracion.'</p>';
          $descripcion .= '<p class="detalleInfo"> Vacantes: '.$puesto->vacantes.'</p>';
        }
        $urlBases = $convocatoria->bases;
        $basesTabla = '';
        if($urlBases != null){
          $basesTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBases.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlBasesComunicado = $convocatoria->bases_comunicado;
        if($urlBasesComunicado != null){
          $basesTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }

        $aptosTabla = '';
        $urlAptos = $convocatoria->aptos;
        if($urlAptos != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlAptosComunicado = $convocatoria->aptos_comunicado;
        if($urlAptosComunicado != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }
        $urlAptosReclamo = $convocatoria->aptos_reclamo;
        if($urlAptosReclamo != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_RECLAMO").'</a>';
        }

        $pruebaTabla = '';
        $urlPruebaConocimientos = $convocatoria->prueba_conocimientos;
        if($urlPruebaConocimientos != null){
          $pruebaTabla .= '<a href="'.$Configuracion->get("SERVER").$urlPruebaConocimientos.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlPruebaConocimientosComunicado = $convocatoria->prueba_conocimientos_comunicado;
        if($urlPruebaConocimientosComunicado != null){
          $pruebaTabla .= '<a href="'.$Configuracion->get("SERVER").$urlPruebaConocimientosComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }

        $calificacionCurricularTabla = '';
        $urlCalificacionCurricular = $convocatoria->calificacion_curricular;
        if($urlCalificacionCurricular != null){
          $calificacionCurricularTabla .= '<a href="'.$Configuracion->get("SERVER").$urlCalificacionCurricular.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlCalificacionCurricularComunicado = $convocatoria->calificacion_curricular_comunicado;
        if($urlCalificacionCurricularComunicado != null){
          $calificacionCurricularTabla .= '<a href="'.$Configuracion->get("SERVER").$urlCalificacionCurricularComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }

        $entrevistaPersonalTabla = '';
        $urlEntrevistaPersonal = $convocatoria->entrevista_personal;
        if($urlEntrevistaPersonal != null){
          $entrevistaPersonalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlEntrevistaPersonal.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlEntrevistaPersonalComunicado = $convocatoria->entrevista_personal_comunicado;
        if($urlEntrevistaPersonalComunicado != null){
          $entrevistaPersonalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlEntrevistaPersonalComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }

        $resultadoFinalTabla = '';
        $urlResultadoFinal = $convocatoria->resultado_final;
        if($urlResultadoFinal != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinal.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a>';
        }
        $urlResultadoFinalComunicado = $convocatoria->resultado_final_comunicado;
        if($urlResultadoFinalComunicado != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinalComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a>';
        }
        $urlResultadoFinalReclamo = $convocatoria->resultado_final_reclamo;
        if($urlResultadoFinalReclamo != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinalReclamo.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_RECLAMO").'</a>';
        }

        $tablaConvocatoria[] = array(str_pad($numero,3,'0',STR_PAD_LEFT),$descripcion,$basesTabla,$aptosTabla,$pruebaTabla,$calificacionCurricularTabla,$entrevistaPersonalTabla,$resultadoFinalTabla);
        $numero ++;
      }
      
    }
    $data = array('data' => $tablaConvocatoria);
    echo json_encode($data);
  }
  
}
?>