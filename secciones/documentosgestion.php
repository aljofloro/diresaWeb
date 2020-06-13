<?php
$Configuracion = Configuracion::getConfiguracion();
?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
        <h2 class="mb-md-4">Documentos de Gestión</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <!-- Accordion -->
        <div id="accordionDocumentos" class="accordion">
          <!-- Accordion item 1 -->
          <div class="card">
              <div id="headingOne" class="card-header ">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">CAP</a></h6>
              </div>
              <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionDocumentos" class="collapse show">
                <div class="card-body p-5">
                  <p class="pb-3"> Cuadro de Asignación de Personal</p>
                  <table class="tabla_documentos table table-striped display " style="width:100%">
                    <tbody class="">
                    <?php
                    $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("CAP"),true));
                    $error = $jsonq->error;
                    if($error){
                      print_r($jsonq->mensaje);
                    }else{
                      $documentos = $jsonq->data;
                      $numero = 1;
                      foreach ($documentos as $documento) {
                      ?>
                      <tr>
                        <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                        <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                        <td class="download">
                          <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                        </td>
                      </tr>
                      <?php
                      $numero ++;
                      }
                    }
                    ?>                      
                    </tbody>
                  </table>
                </div>
              </div>
          </div>

          <!-- Accordion item 2 -->
          <div class="card">
            <div id="headingTwo" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">MAPRO</a></h6>
            </div>
            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <p class="pb-3"> Manual de Procedimientos</p>
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php
                  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("MAPRO"),true));
                  $error = $jsonq->error;
                  if($error){
                    print_r($jsonq->mensaje);
                  }else{
                    $documentos = $jsonq->data;
                    $numero = 1;
                    foreach ($documentos as $documento) {
                    ?>
                    <tr>
                      <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                      <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                      <td class="download">
                        <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                      </td>
                    </tr>
                    <?php
                    $numero ++;
                    }
                  }
                  ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Accordion item 3 -->
          <div class="card">
            <div id="headingThree" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
              TUPA</a></h6>
            </div>
            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <p class="pb-3"> Texto Único de Procedimientos Administrativos</p>
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php
                  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("TUPA"),true));
                  $error = $jsonq->error;
                  if($error){
                    print_r($jsonq->mensaje);
                  }else{
                    $documentos = $jsonq->data;
                    $numero = 1;
                    foreach ($documentos as $documento) {
                  ?>
                    <tr>
                      <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                      <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                      <td class="download">
                        <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                      </td>
                    </tr>
                    <?php
                    $numero ++;
                    }
                  }
                  ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Accordion item 4 -->
          <div class="card">
            <div id="headingFour" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
              PLANES</a></h6>
            </div>
            <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <p class="pb-3"> Plan Estratégico Institucional (PEI) y Plan Operativo Institucional (POI)</p>
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php
                  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("PLANES"),true));
                  $error = $jsonq->error;
                  if($error){
                    print_r($jsonq->mensaje);
                  }else{
                    $documentos = $jsonq->data;
                    $numero = 1;
                    foreach ($documentos as $documento) {
                  ?>
                    <tr>
                      <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                      <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                      <td class="download">
                        <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                      </td>
                    </tr>
                    <?php
                    $numero ++;
                    }
                  }
                  ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          <!-- Accordion item 5 -->
          <div class="card">
            <div id="headingFive" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
                      MOF ROF</a></h6>
            </div>
            <div id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <p class="pb-3"> Manual de Organización y Funciones y Reglamento de Organización y Funciones</p>
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php
                  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("MOF"),true));
                  $error = $jsonq->error;
                  if($error){
                    print_r($jsonq->mensaje);
                  }else{
                    $documentos = $jsonq->data;
                    $numero = 1;
                    foreach ($documentos as $documento) {
                  ?>
                    <tr>
                      <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                      <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                      <td class="download">
                        <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                      </td>
                    </tr>
                    <?php
                    $numero ++;
                    }
                  }
                  ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Accordion item 6 -->
          <div class="card">
            <div id="headingSix" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
              ORGANIGRAMA</a></h6>
            </div>
            <div id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php
                  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("ORGANIGRAMA"),true));
                  $error = $jsonq->error;
                  if($error){
                    print_r($jsonq->mensaje);
                  }else{
                    $documentos = $jsonq->data;
                    $numero = 1;
                    foreach ($documentos as $documento) {
                  ?>
                    <tr>
                      <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                      <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                      <td class="download">
                        <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                      </td>
                    </tr>
                    <?php
                    $numero ++;
                    }
                  }
                  ?>                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Accordion item 7 -->
          <div class="card">
            <div id="headingSeven" class="card-header">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">
              OTROS DOCUMENTOS</a></h6>
            </div>
            <div id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionDocumentos" class="collapse">
            <div class="card-body p-5">
              <table class="tabla_documentos table table-striped display " style="width:100%">
                <tbody class="">
                <?php
                $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_DOCUMENTOS_GESTION").$Configuracion->get("OTROS"),true));
                $error = $jsonq->error;
                if($error){
                  print_r($jsonq->mensaje);
                }else{
                  $documentos = $jsonq->data;
                  $numero = 1;
                  foreach ($documentos as $documento) {
                ?>
                  <tr>
                    <td class="texto align-middle"><?php echo str_pad($numero,3,'0',STR_PAD_LEFT); ?></td>
                    <td class="texto align-middle"><?php echo $documento->nombre; ?></td>
                    <td class="download">
                      <a href="<?php echo $Configuracion->get("SERVER").$documento->archivo; ?>" class="btndescargar" download="<?php echo $documento->nombre; ?>" target="_blank">DESCARGAR</a>
                    </td>
                  </tr>
                  <?php
                  $numero ++;
                  }
                }
                ?>                      
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>