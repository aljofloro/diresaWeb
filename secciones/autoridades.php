<?php
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_AUTORIDADES") . $idNoticia, true));
if ($jsonq->error) {
  echo $jsonq->mensaje;
} else {
  $autoridades = $jsonq->data;
  foreach ($autoridades as $autoridad) {

    $cabecera .= '<a class="btn-institucion btn" data-toggle="collapse" href="#' . str_replace(' ', '', $autoridad->cargo) . $autoridad->id_autoridad . '" 
    role="button" aria-expanded="false" aria-controls="collapseExample">' . $autoridad->cargo . '</a>';
    $detalle .= '
    <div class="collapse" id="' . str_replace(' ', '', $autoridad->cargo) . $autoridad->id_autoridad . '" data-parent="#accordion">
      <div class="col-md-10 mx-auto col-12">
        <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
            <h2 class="mb-md-4">' . strtoupper($autoridad->cargo) . '</h2>
        </div>
        <div class="autoridades card-body">
          <div class="d-flex justify-content-center">
              <img src="' . $Configuracion->get("SERVER") . $autoridad->foto . '" class="img-fluid" />
          </div>
          <div class="section_subtitle pb-4">
              <p class="nombre">' . $autoridad->nombre_completo . '</p>
          </div>
          <div class="section_subtitle mb-3 mr-5 ml-5">
              <p>' . $autoridad->descripcion . '</p>
          </div>
        </div>
      </div>
    </div>';
  }
}
?>
<div class="site-section-seccion">
  <div class="container" id="accordion">
    <div class="row">
      <div class="col-12">
        <p>
          <?php echo $cabecera; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="mx-auto">
        <?php echo $detalle; ?>
      </div>
    </div>
  </div>
</div>
</div>