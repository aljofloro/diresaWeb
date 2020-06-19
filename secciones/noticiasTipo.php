<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
        <h2 class="mb-md-4">NOTICIAS</h2>
      </div>
    </div>
    <div class="row">
    <?php
			$Configuracion = Configuracion::getConfiguracion();
			$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_NOTICIAS_POR_TIPO").$tipoNoticias,true));
			$error = $jsonq->error;
			if($error){
				print_r($jsonq->mensaje);
			}else{
				$noticias = $jsonq->data;
				foreach ($noticias as $noticia) {
					$idNoticia = $noticia->id_noticia;
					$idTipoNoticia = $noticia->id_tipo_noticia;
					$fecha = $noticia->fecha;
					$titulo = $noticia->titular;
					$entrada = $noticia->entradilla;
					$urlImagen = $Configuracion->get("SERVER").$noticia->imagen;
					$tipoNoticia = $noticia->tipo_noticia;
					$nombreTipoNoticia = $tipoNoticia->nombre;
					$date = date_create($fecha);
					?>
				<div class="noticia col-md-4 col-sm-6 col-lg-4">
					<div class="noticias_descr">
						<div class="noticias_descr_image">
							<img src="<?php echo $urlImagen; ?>" />
						</div>
						<div class="noticias_descr_body">
							<h4 class="noticias_descr_title"><?php echo $titulo; ?></h4>
							<div class="noticias_descr_fecha"><?php echo $nombreTipoNoticia." // ".date_format($date,"D. d / M / Y");  ?></div>
							<div class="noticias_descr_text">
								<p><?php echo $entrada; ?></p>
							</div>
							<div class="noticias_descr_footer">
								<p><a class="btn" href="noticias-interior.php?idNoticia=<?php echo $idNoticia;	?>" role="button">LEER MAS</a></p>
							</div>
						</div>
					</div>
				</div>	
					<?php
				}
			}
			?>
<!--
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HOSPITAL HIPÓLITO UNANUE Y ESTABLECIMIENTOS EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HOSPITAL HIPÓLITO UNANUE Y ESTABLECIMIENTOS EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HOSPITAL HIPÓLITO UNANUE Y ESTABLECIMIENTOS EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HOSPITAL HIIENTOS EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HOSPITAL HIPÓLITO  EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="noticia col-md-4 col-6 col-lg-4">
        <div class="noticias_descr">
          <div class="noticias_descr_image">
            <img src="img/noticias/hostpitalUnanue.png" />
          </div>
          <div class="noticias_descr_body">
            <h4 class="noticias_descr_title">HLECIMIENTOS EN ALERTA ANTE CORONAVIRUS</h4>
            <div class="noticias_descr_fecha">Regional // Lun. 10 / Feb / 2020</div>
            <div class="noticias_descr_text">
              <p>El Director Ejecutivo de Epidemiología de la Diresa Tacna Dr.
                  Edgar Tejada Vásquez manifestó que el hospital Hipólit.</p>
            </div>
            <div class="noticias_descr_footer">
              <p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
            </div>
          </div>
        </div>
      </div>-->
    </div>
    
    <div class="text-center">
      <ul class="pagination noticiasPaginacion"></ul>
    </div>
  </div>
</div>