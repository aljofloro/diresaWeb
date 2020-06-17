<!DOCTYPE html>
<html lang="en">
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
        $tipoSeccion = $_GET["tipoSeccion"];
        switch ($tipoSeccion) {
          case 2:
            $encargoOficina = $Configuracion->get("ENCARGO_ADMINISTRACION");
            break;
          case 3:
            $encargoOficina = $Configuracion->get("ENCARGO_RRHH");
            break;
          case 4:
            $encargoOficina = $Configuracion->get("ENCARGO_PLANES");
            break;
          case 5:
            $encargoOficina = $Configuracion->get("ENCARGO_PROMSALUD");
            break;
          case 6:
            $encargoOficina = $Configuracion->get("ENCARGO_SALUD_PERSONAS");
            break;
          case 7:
            $encargoOficina = $Configuracion->get("ENCARGO_AMBIENTAL");
            break;
          case 8:
            $encargoOficina = $Configuracion->get("ENCARGO_DEMID");
            break;
          default:
            break;
        }
        include_once("secciones/oficinaDocumentos.php");
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
            <script>
                $(document).ready(function() {
                    $('.menudocumentos').addClass('active');
                });
            </script>
        </footer>
    </main>
</body>

</html>