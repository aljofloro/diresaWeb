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
    <iframe style="width: 100%; height:40em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.4203568809867!2d-70.23527822598716!3d-18.00568518223872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ac585b8d51771%3A0x7b30ef85fe9a1bb9!2sRestaurant%20Muelle%20Sur!5e0!3m2!1ses-419!2spe!4v1590627371280!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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