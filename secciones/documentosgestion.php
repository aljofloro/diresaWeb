<?php
$error = $jsonq->error;
if($error){
  print_r($jsonq->mensaje);
}else{
  $tipoSecciones = $jsonq->data;  
?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
        <h2 class="mb-md-4"><?php echo $tipoSecciones->nombre; ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <!-- Accordion -->
        <div id="accordionDocumentos" class="accordion">
        <?php
          $secciones = $tipoSecciones->secciones; 
          foreach ($secciones as $seccion) {
            ?>
          <div class="card">
            <div id="headingOne" class="card-header ">
              <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#<?php echo str_replace(' ', '', $seccion->abreviatura) ; ?>" aria-expanded="true" aria-controls="<?php echo str_replace(' ', '', $seccion->abreviatura) ; ?>" class="d-block position-relative text-dark text-uppercase collapsible-link py-2"><?php echo $seccion->abreviatura; ?></a></h6>
            </div>
            <div id="<?php echo str_replace(' ', '', $seccion->abreviatura) ; ?>" aria-labelledby="headingOne" data-parent="#accordionDocumentos" class="collapse">
              <div class="card-body p-5">
                <p class="pb-3"><?php echo $seccion->nombre; ?></p>
                <table class="tabla_documentos table table-striped display " style="width:100%">
                  <tbody class="">
                  <?php                    
                    $documentos = $seccion->documentos;
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
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>
</div>