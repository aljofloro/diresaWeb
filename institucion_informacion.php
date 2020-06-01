<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once("config/config.php");
    include_once("secciones/head.php");
    include_once("secciones/estilos.php");
    ?>
</head>

<body id="top">
    <header>
        <?php
        include_once("secciones/horario.php");
        include_once("secciones/presentacion.php");
        include_once("secciones/menu.php");
        ?>
    </header>
    <main role="main">
        <?php
        include_once("secciones/slider.php");
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
                        <div class="collapse" id="reseña">
                            <div class="col-md-10 mx-auto">
                                <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
                                    <h2 class="mb-md-4">RESEÑA HISTÓRICA</h2>
                                </div>
                                <div class="text-center card-body">
                                    <div class="section_subtitle mb-3 mr-5 ml-5">
                                        Médico con 20 años de experiencia profesional, y más de 13 años de experiencia en la gerencia de establecimientos de salud. En el 2014, fue incorporado al Cuerpo de Gerentes Públicos de la Autoridad Nacional del Servicio Civil (SERVIR).</br>
                                        Titulado por la Universidad Nacional Federico Villareal, cuenta con estudios de maestría en Salud Pública en la Universidad Nacional Jorge Basadre Grohmann y cursos en Gerencia de Clínicas y Hospitales y Alta Dirección en Salud Pública y Hospitales por la Universidad Nacional Santiago Antúnez de Mayolo.</br>
                                        El Méd. Cánepa Yzaga inició su trayectoria profesional en 1999 en el centro de salud Yauli, en Huancavelica, año en el que también se desempeñó como integrante del Comité de Referencia y Contrareferencia de la DISA Tacna.</br>
                                        Es médico asistencial en el Centro de Salud Ciudad Nueva de Tacna desde el año 2000 a la fecha, encontrándose en condición de personal nombrado. Hasta enero de 2019 ejerció la gerencia de dicho establecimiento de salud.</br>
                                        Cabe mencionar, que desde el 2015 se encuentra inscrito como auditor médico en el Registro Nacional de Auditoría Médica del Colegio Médico del Perú con número de registro A01413.</br>
                                        Además de su función asistencial, ha desempeñado cargos directivos de importancia en el ámbito regional, como director de la Oficina de Desarrollo Institucional de la Dirección de la Red de Salud Tacna (2006), director de la Dirección Ejecutiva de Salud de las Personas, director de la Red de Salud Tacna, y como subdirector y director regional de Salud de Tacna (2012-2014).
                                        En el ámbito nacional, se desempeñó como Coordinador Macrorregional de la Oficina de Descentralización del Ministerio de Salud en la ciudad de Lima (2015-2016)</br>
                                        Actualmente, ejerce la docencia en la Escuela Profesional de Medicina de la Facultad de Ciencias de la Salud de la Universidad Privada de Tacna.</p>
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
        <footer class="footer">
            <?php
            include_once("secciones/footer.php");
            include_once("secciones/loader.php");
            ?>
        </footer>
    </main>
</body>

</html>