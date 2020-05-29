<!DOCTYPE html>
<html lang="en">
<?php
include_once("secciones/head.php");
?>

<body id="top">
    <?php
    include_once("secciones/header.php");
    ?>
    <?php
    include_once("secciones/home.php");
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
                    <div class="collapse" id="misionvision">
                        <!-- Accordion -->
                        <div class="institucion card-body d-flex m-5 ">
                            <div class="col-md-10 mx-auto">
                                <div id="visionmision" class="accordion">
                                    <!-- Accordion item 1 -->
                                    <div class="card">
                                        <div id="headingOne" class="card-header bg-lead shadow-sm border-0 ">
                                            <h6 class="mb-0 text-capitalize"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">Misión</a></h6>
                                        </div>
                                        <div id="collapseOne" aria-labelledby="headingOne" data-parent="#visionmision" class="collapse show">
                                            <div class="card-body p-5">
                                                <p class="font-weight-light m-0">Ser la primera región saludable del país con servicios integrales de calidad y participación activa de la población en el cuidado de la salud.</p>
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
                                                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim
                                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid single-origin coffee nulla assumenda shoreditch et.</p>
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
                                                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim
                                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid single-origin coffee nulla assumenda shoreditch et.</p>
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
                                                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim
                                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid single-origin coffee nulla assumenda shoreditch et.</p>
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
                                                <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim
                                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                    squid single-origin coffee nulla assumenda shoreditch et.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once("secciones/noticias.php");
    ?>
    <?php
    include_once("secciones/partners2.php");
    ?>
    <?php
    include_once("secciones/footer.php");
    ?>
</body>

</html>