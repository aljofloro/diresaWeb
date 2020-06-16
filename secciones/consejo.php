<?php
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_CONSEJO"), true));
$error = $jsonq->error;
if ($error) {
  print_r($jsonq->mensaje);
} else {
  $consejo = $jsonq->data;
}
?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
    <div class="col-12">
      <p>
        <a class="btn-institucion btn" data-toggle="collapse" href="#reseña" role="button" aria-expanded="false" aria-controls="collapseExample">
          RESEÑA
        </a>
        <a class="btn-institucion btn" data-toggle="collapse" href="#funciones" role="button" aria-expanded="false" aria-controls="collapseExample">
          FUNCIONES
        </a>
      </p>
    </div>
    </div>
    <div class="row">
      <div class="mx-auto">
        <div class="collapse show" id="reseña">
          <div class="col-md-10 mx-auto">
            <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
              <h2 class="mb-md-4">RESEÑA</h2>
            </div>
            <div class="consejo card-body">
              <div class="section_subtitle mb-3 mr-5 ml-5">
                <p><?php echo $consejo->resena; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="funciones">
          <div class="col-md-10 mx-auto">
            <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
              <h2 class="mb-md-4">FUNCIONES</h2>
            </div>
            <div class="consejo card-body">
                <div class="section_subtitle mb-3 mr-5 ml-5">
                <p><?php echo $consejo->funciones; ?></p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>