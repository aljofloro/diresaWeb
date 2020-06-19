<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                <h2 class="mb-md-4">CONTACTO</h2>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto">
                <div class="contact_form">
                    <form method="POST" action="<?php echo $Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("PUT_CONSULTA"); ?>" class="comment_form">
                        <div class="form-group">
                            <select id="idArea" name="id_area" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombre_completo" class="comment_input" required="required" placeholder="Nombres y Apellidos:">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <input type="email" name="correo_electronico" class="form-control" id="inputEmail4" placeholder="Email:">
                            </div>
                            <div class="form-group col-6">
                                <input type="celular" name="numero_telefono" class="form-control" id="inputCelular" placeholder="Celular:">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="comment_input comment_textarea" name="descripcion" required="required" placeholder="Consulta:"></textarea>
                            <input type="hidden" name="mm_frm" value="form_diresa_consulta" />
                            <input type="hidden" name="mm_rtn" value="<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>"/>
                        </div>
                </div>
                <div class="row flex-row-reverse">                    
                    <button type="submit" class="comment_button">CANCELAR</button>
                    <button type="submit" class="comment_button">ENVIAR</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>