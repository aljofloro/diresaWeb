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
        <div class="site-section-seccion ">
            <div class="container">
                <div class="row">
                    <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                        <h2 class="mb-md-4">Planeamiento Estratégico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center col-md-8 mx-auto mb-5">
                        <p> Dirección : Calle Coronel Vidal N° 101</br>
                            Director: : Ing. Eco. Gerardo Mamani Quispe</br>
                            Correo Electronico : generacionmq_77@hotmail.com</br></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once("secciones/documentos.php");
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