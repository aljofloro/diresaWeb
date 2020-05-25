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
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                    <h2 class="mb-md-4">DIRECTORIO</h2>
                </div>
            </div>
            <table id="example" class=" table table-striped display " style="width:100%">
                <thead class="thead-blue">
                    <tr>
                        <th class="numero">N°</th>
                        <th>DATOS</th>
                    </tr>
                </thead>
                <tbody class="directorio">
                    <tr>
                        <td>001</td>
                        <td class="textodirectorio">
                            <p>DIRECCIÓN GENERAL</p>
                            <div class="row textoinfo">
                                <div class="col-md-4">
                                    <p>Méd. Juan Manuel Cánepa Yzaga</br>

                                    Director Regional de Salud Tacna</br>

                                    Dirección: Calle Los Nardos N° 33, Urb. Pescaserolli</br>

                                    Correo electrónico: dg@diresatacna.gob.pe</br>

                                    Teléfono: 052-423872</p>
                                </div>
                                <div class="col-md-4">
                                   <p> Méd. Maruja Garcia Mamani</br>

                                    Subdirectora Regional de Salud Tacna</br>

                                    Dirección: Calle Los Nardos N° 33, Urb. Pescaserolli</br>

                                    Correo electrónico: sdg@diresatacna.gob.pe</br>

                                    Teléfono: 052-423872</p>
                                </div>
                                <div class="col-md-4">
                                   <p> Sra. Lorena Eyzaguirre Zapata</br>

                                    Secretaría de Dirección General</br>

                                    Dirección: Calle Los Nardos N° 33, Urb. Pescaserolli</br>

                                    Correo electrónico: secredg@diresatacna.gob .pe</br>

                                    Teléfono: 052-423872</p>
                                </div>
                            </div>
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