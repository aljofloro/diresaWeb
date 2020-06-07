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
          $descripcion .= '<b> Puesto:</b><span class="textoinfo">'.$puesto->nombre.'</span><br>';
          $descripcion .= '<b> Remuneración:</b> <span class="textoinfo">'.$puesto->remuneracion.'</span><br>';
          $descripcion .= '<b> Vacantes:</b> <span class="textoinfo">'.$puesto->vacantes.'</span><br>';
        }
        $urlAnexo = $convocatoria->anexo;
        if($urlAnexo != null){
          $descripcion .='<a href="'.$Configuracion->get("SERVER").$urlAnexo.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_ANEXO").'</a><br><br>';
        }
        $urlBases = $convocatoria->bases;
        $basesTabla = '';
        if($urlBases != null){
          $basesTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBases.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlBasesComunicado = $convocatoria->bases_comunicado;
        if($urlBasesComunicado != null){
          $basesTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }

        $aptosTabla = '';
        $urlAptos = $convocatoria->aptos;
        if($urlAptos != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlAptosComunicado = $convocatoria->aptos_comunicado;
        if($urlAptosComunicado != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }
        $urlAptosReclamo = $convocatoria->aptos_reclamo;
        if($urlAptosReclamo != null){
          $aptosTabla .= '<a href="'.$Configuracion->get("SERVER").$urlBasesComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_RECLAMO").'</a><br><br>';
        }

        $pruebaTabla = '';
        $urlPruebaConocimientos = $convocatoria->prueba_conocimientos;
        if($urlPruebaConocimientos != null){
          $pruebaTabla .= '<a href="'.$Configuracion->get("SERVER").$urlPruebaConocimientos.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlPruebaConocimientosComunicado = $convocatoria->prueba_conocimientos_comunicado;
        if($urlPruebaConocimientosComunicado != null){
          $pruebaTabla .= '<a href="'.$Configuracion->get("SERVER").$urlPruebaConocimientosComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }

        $calificacionCurricularTabla = '';
        $urlCalificacionCurricular = $convocatoria->calificacion_curricular;
        if($urlCalificacionCurricular != null){
          $calificacionCurricularTabla .= '<a href="'.$Configuracion->get("SERVER").$urlCalificacionCurricular.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlCalificacionCurricularComunicado = $convocatoria->calificacion_curricular_comunicado;
        if($urlCalificacionCurricularComunicado != null){
          $calificacionCurricularTabla .= '<a href="'.$Configuracion->get("SERVER").$urlCalificacionCurricularComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }

        $entrevistaPersonalTabla = '';
        $urlEntrevistaPersonal = $convocatoria->entrevista_personal;
        if($urlEntrevistaPersonal != null){
          $entrevistaPersonalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlEntrevistaPersonal.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlEntrevistaPersonalComunicado = $convocatoria->entrevista_personal_comunicado;
        if($urlEntrevistaPersonalComunicado != null){
          $entrevistaPersonalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlEntrevistaPersonalComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }

        $resultadoFinalTabla = '';
        $urlResultadoFinal = $convocatoria->resultado_final;
        if($urlResultadoFinal != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinal.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_DESCARGA").'</a><br><br>';
        }
        $urlResultadoFinalComunicado = $convocatoria->resultado_final_comunicado;
        if($urlResultadoFinalComunicado != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinalComunicado.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_COMUNICADO").'</a><br><br>';
        }
        $urlResultadoFinalReclamo = $convocatoria->resultado_final_reclamo;
        if($urlResultadoFinalReclamo != null){
          $resultadoFinalTabla .= '<a href="'.$Configuracion->get("SERVER").$urlResultadoFinalReclamo.'" class="icono_convocatoria" target="_blank">'.$Configuracion->get("ICONO_RECLAMO").'</a><br>';
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