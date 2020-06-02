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
                        <a class="btn-institucion btn active" data-toggle="collapse" href="#reseña" role="button" aria-expanded="false" aria-controls="collapseExample">
                            RESEÑA
                        </a>
                        <a class="btn-institucion btn" data-toggle="collapse" href="#funciones" role="button" aria-expanded="false" aria-controls="collapseExample">
                            FUNCIONES
                        </a>
                    </p>
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
                                        <p>Director Regional de Salud Tacna</BR>
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
                        <div class="collapse" id="funciones">
                            <div class="col-md-10 mx-auto">
                                <div class="site-section-heading text-center mb-4 col-md-6 mx-auto">
                                    <h2 class="mb-md-4">FUNCIONES</h2>
                                </div>
                                <div class="consejo card-body">
                                    <div class="section_subtitle mb-3 mr-5 ml-5">
                                        <p>Director Regional de Salud Tacna</BR>
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