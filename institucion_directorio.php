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
                    <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                        <h2 class="mb-md-4">DIRECTORIO</h2>
                    </div>
                </div>
                <table id="example" class=" table table-striped display " style="width:100%">
                    <thead class="thead-blue">
                        <tr>
                            <th class="linea">N°</th>
                            <th>DATOS</th>
                        </tr>
                    </thead>
                    <tbody class="tabla">
                        <tr>
                            <td>001</td>
                            <td class="textotabla">
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
        <footer class="footer">
            <?php
            include_once("secciones/footer.php");
            include_once("secciones/loader.php");
            ?>

        </footer>
    </main>
</body>

</html>