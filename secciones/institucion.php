<?php
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_INSTITUCION"),true));
$error = $jsonq->error;
if($error){
  print_r($jsonq->mensaje);
}else{
  $institucion = $jsonq->data;
}
?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <p>
        <a class="btn-institucion btn active" data-toggle="collapse" href="#misionvision" role="button" aria-expanded="false" aria-controls="collapseExample">
            MISIÓN VISIÓN
        </a>
        <a class="btn-institucion btn" data-toggle="collapse" href="#reseña" role="button" aria-expanded="false" aria-controls="collapseExample2">
            RESEÑA HISTÓRICA
        </a>
        <a class="btn-institucion btn" data-toggle="collapse" href="#marco" role="button" aria-expanded="false" aria-controls="collapseExample2">
            MARCO LEGAL
        </a>
        <a class="btn-institucion btn" data-toggle="collapse" href="#estructura" role="button" aria-expanded="false" aria-controls="collapseExample2">
            ESTRUCTURA ORGÁNICA
        </a>
        <a class="btn-institucion btn" data-toggle="collapse" href="#organigrama" role="button" aria-expanded="false" aria-controls="collapseExample2">
            ORGANIGRAMA
        </a>
      </p>
    </div>
    <div class="row">
      <div class="mx-auto">
        <div class="collapse show" id="misionvision">
          <!-- Accordion -->
          <div class="institucion card-body d-flex mr-5  ml-md-5">
            <div class="col-md-10 mx-auto col-12">
              <div id="visionmision" class="accordion">
                <!-- Accordion item 1 -->
                <div class="card">
                  <div id="headingOne" class="card-header bg-lead shadow-sm border-0 ">
                      <h6 class="mb-0 text-capitalize"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">Misión</a></h6>
                  </div>
                  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#visionmision" class="collapse show">
                    <div class="card-body p-5">
                        <p class="font-weight-light m-0"><?php echo $institucion->mision; ?></p>
                    </div>
                  </div>
                </div>

                <!-- Accordion item 2 -->
                <div class="card">
                  <div id="headingTwo" class="card-header bg-lead shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark  collapsible-link py-2">Visión</a></h6>
                  </div>
                  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#visionmision" class="collapse">
                    <div class="card-body p-5">
                      <p class="font-weight-light m-0"><?php echo $institucion->vision; ?></p>
                    </div>
                  </div>
                </div>

                <!-- Accordion item 3 -->
                <div class="card">
                  <div id="headingThree" class="card-header bg-lead shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark  collapsible-link py-2">
                              Función Básica</a></h6>
                  </div>
                  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#visionmision" class="collapse">
                    <div class="card-body p-5">
                      <p class="font-weight-light m-0"><?php echo $institucion->funcion_basica; ?></p>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 4 -->
                <div class="card">
                  <div id="headingThree" class="card-header bg-lead shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark  collapsible-link py-2">
                            Relaciones Internas</a></h6>
                  </div>
                  <div id="collapseFour" aria-labelledby="headingThree" data-parent="#visionmision" class="collapse">
                    <div class="card-body p-5">
                      <p class="font-weight-light m-0"><?php echo $institucion->relacion_interna; ?></p>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 5 -->
                <div class="card">
                  <div id="headingThree" class="card-header bg-lead shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="d-block position-relative collapsed text-dark  collapsible-link py-2">
                              Relaciones Externas</a></h6>
                  </div>
                    <div id="collapseFive" aria-labelledby="headingThree" data-parent="#visionmision" class="collapse">
                      <div class="card-body p-5">
                        <p class="font-weight-light m-0"><?php echo $institucion->relacion_externa; ?></p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse" id="reseña">
          <div class="col-md-10 mx-auto">
            <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
              <h2 class="mb-md-4">RESEÑA HISTÓRICA</h2>
            </div>
            <div class="text-center card-body">
              <div class="section_subtitle mb-3 mr-5 ml-5"><?php echo $institucion->historia; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>