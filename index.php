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
  <?php
    include_once("secciones/noticias.php");
    include_once("secciones/accesos.php");
    include_once("secciones/partners.php");
    include_once("secciones/documentos.php");
    include_once("secciones/partners2.php");
  ?>
    <footer class="footer">
    <?php
      include_once("secciones/footer.php");
      include_once("secciones/loader.php");
      include_once("secciones/modal.php");
    ?>
    
    </footer>
  </main>
</body>
</html>