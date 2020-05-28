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
                <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                    <h2 class="mb-md-4">RESOLUCIONES DIRECTORIALES</h2>
                </div>
            </div>
            <table id="example" class=" table table-striped display " style="width:100%">
                <thead class="thead-blue">
                    <tr>
                        <th class="linea">N°</th>
                        <th>DESCRIPCIÓN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="tabla">
                    <tr>
                        <td>001</td>
                        <td class="texto">
                            <p>Resolución Directoral N° 001 - 2019</p>
                            <div class="row textoinfo">
                                <div class="col-md-4">
                                    <p>Resolución de SERUMS</p>
                                </div>
                            </div>
                        </td>
                        <td class="download textoinfo align-middle text-right">
                                    <p>Miércoles 02 de Enero de 2019</p>
                        </td>
                    </tr>
                </tbody>
            </table>
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