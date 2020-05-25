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
                    <h2 class="mb-md-4">DIRECCIÓN EJECUTIVA </h2>
                </div>
            </div>
            <!-- Contact Form -->

            <div class="col-lg-12">
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
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email:">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="celular" class="form-control" id="inputCelular" placeholder="Celular:">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="comment_input comment_textarea" required="required" placeholder="Consulta:"></textarea>
                        </div>
                </div>
                <div>
                    <button type="submit" class="comment_button trans_200">submit now</button>
                </div>
                </form>
            </div>
        </div>

    </div>
    <?php
    include_once("secciones/partners2.php");
    ?>
    <?php
    include_once("secciones/footer.php");
    ?>
</body>

</html>