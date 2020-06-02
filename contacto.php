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
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                        <h2 class="mb-md-4">CONTACTO</h2>
                    </div>
                </div>
                <!-- Contact Form -->

                <div class="row">
                    <div class="mx-auto">
                        <div class="contact_form">
                            <form action="#" class="comment_form">
                                <div class="form-group">
                                    <select id="inputState" class="form-control">
                                        <option selected>Para Dirección General</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="comment_input" required="required" placeholder="Nombres y Apellidos:">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email:">
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="celular" class="form-control" id="inputCelular" placeholder="Celular:">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="comment_input comment_textarea" required="required" placeholder="Consulta:"></textarea>
                                </div>
                        </div>
                        <div class="row flex-row-reverse">
                            <button type="submit" class="comment_button ">CANCELAR</button>
                            <button type="submit" class="comment_button">ENVIAR</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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