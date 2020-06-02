<div class="site-section-noticias noticias">
	<div class="container">
		<div class="row">
			<div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
				<h2 class="mb-md-4">NOTICIAS</h2>
			</div>
		</div>
		<div class="row">
			<div id="noticialCarousel" class="owl-carousel">
			<?php
			$Configuracion = Configuracion::getConfiguracion();
			$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_NOTICIAS_MAIN"),true));
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
					$urlImagen = $noticia->imagen;
					$tipoNoticia = $noticia->tipo_noticia;
					$nombreTipoNoticia = $tipoNoticia->nombre;
					$date = date_create($fecha);
					?>
				<div class="item">
					<div class="noticias_descr">
						<div class="noticias_descr_image">
							<img src="<?php echo $Configuracion->get("SERVER_IMG").$urlImagen; ?>" />
						</div>
						<div class="noticias_descr_body">
							<h4 class="noticias_descr_title"><?php echo $titulo; ?></h4>
							<div class="noticias_descr_fecha"><?php echo $nombreTipoNoticia." // ".date_format($date,"l, d/m/Y");  ?></div>
							<div class="noticias_descr_text">
								<p><?php echo $entrada; ?></p>
							</div>
							<div class="noticias_descr_footer">
								<p><a class="btn" href="noticias-interior.php" role="button">LEER MAS</a></p>
							</div>
						</div>
					</div>
				</div>	
					<?php
				}
			}
			?>
			</div>
		</div>
	</div>
</div>