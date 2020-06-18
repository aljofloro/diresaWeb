<?php
$Configuracion = Configuracion::getConfiguracion();
if($encargoOficina!=''){
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_ENCARGADOS").$encargoOficina,true));
}
$error = $jsonq->error;
?>
<div class="site-section-seccion ">
  <div class="container">
  <?php
  if($error){
    print_r($jsonq->mensaje);
  }else{
    $encargado = $jsonq->data;
    $oficina = $encargado->oficina;
    if($oficina !=''){
    ?>
    <div class="row">
      <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
        <h2 class="mb-md-4"><?php echo $oficina->nombre; ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="text-center col-md-8 mx-auto mb-5">
        <p> Dirección: <?php echo $encargado->direccion; ?></br>
            Responsable: <?php echo $encargado->titulo." ".$encargado->nombre_completo; ?></br>
            Correo Electrónico: <?php echo $encargado->correo_electronico; ?></br></p>
      </div>
    </div>
    <?php
    }
  }
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS").$tipoSeccion,true));
  $error = $jsonq->error;
  if($error){
    print_r($jsonq->mensaje);
  }else{
    $tipoSecciones = $jsonq->data;
  ?>   
    <div class="row">
      <div class="text-center col-md-8 mx-auto mb-5">
        <?php echo $tipoSecciones->descripcion; ?>
      </div>
    </div>
  <?php
  if($tipoSeccion != $Configuracion->GET('EPIDEMIOLOGIA')){
  ?>
    <div class="row">
      <div class="col-lg-12 mt-5">
        <table id="tablaOficinaDocumentos" class="table table-striped display" style="width:100%">
          <thead class="thead-blue">
            <tr>
              <th class="numero text-center">N°</th>
              <th>DOCUMENTO</th>
              <th>SECCION</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="tabla">
            <?php
            $secciones = $tipoSecciones->secciones;
            $numero = 1;
            foreach ($secciones as $seccion) {
              $nombreSeccion = $seccion->nombre;
              $documentos = $seccion->documentos;
              foreach ($documentos as $documento) {
              ?>
                <tr>
                  <td class="text-center"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                  <td class="texto"><?php echo $documento->nombre; ?></td>
                  <td class="texto"><?php echo $nombreSeccion; ?></td>
                  <td class="download">
                    <a href="<?php echo $documento->archivo; ?>" target="_blank">
                      <?php echo $Configuracion->get("ICONO_DESCARGA"); ?>
                    </a>
                  </td>
                </tr>
              <?php
                $numero++;
                }
              }
                ?>        
            <tfoot>
              <tr>
                <th class="numero text-center">N°</th>
                <th>DOCUMENTO</th>
                <th>SECCION</th>
                <th></th>
              </tr>
            </tfoot>

          </tbody>
        </table>        
      </div>
    </div>
  <?php
  }else{
    $secciones = $tipoSecciones->secciones;
    $show = 1;
    foreach ($secciones as $seccion) {
      $cabecera .= '<a class="btn-institucion btn" data-toggle="collapse" href="#'.str_replace(' ', '', $seccion->abreviatura).$seccion->id_seccion.'" role="button" aria-expanded="false" aria-controls="collapseExample">'.$seccion->nombre.'</a>';
      $detalle .= '
      <div class="collapse " id="'.str_replace(' ', '', $seccion->abreviatura).$seccion->id_seccion.'" data-parent="#accordion">
        <div class="calendarboletin" data-params="'.$seccion->id_seccion.'" id="calendar'.$seccion->id_seccion.'">
      </div>
      </div>
      ';
      $show++;
    }
  }
  ?>
  <div class="container" id="accordion">
    <div class="row" >
      <div class="col-12">
        <p>
        <?php echo $cabecera; ?>
        </p>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-12 ">
        <?php echo $detalle; ?>
      </div>
    </div>
  </div>
</div>
  <?php
  
}
  ?>
  </div>
</div>
</div>
