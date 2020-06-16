<div class="botonajustes align-items-center">
	<button>
		<span class="sthGroup">
			<span class="sth"><i class="fa fa-wheelchair fa-3x" aria-hidden="true"></i></span>

			<span class="sath">
				<div class="botonajustesdetalle">

				</div>
			</span>

		</span>
	</button>
</div>

<div class="sticky-container">
	<ul class="sticky">
		<li>
			<i class="fa fa-wheelchair fa-3x" aria-hidden="true"></i>
			<p><a href="https://www.facebook.com/programacionnet" target="_blank">Like Us on<br>Facebook</a></p>
		</li>
	</ul>
</div>
<div class="owl-carousel owl-theme" id="main-slider">
	<?php
	$Configuracion = Configuracion::getConfiguracion();
	$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL") . $Configuracion->get("GET_BANNER"), true));
	$error = $jsonq->error;
	if ($error) {
		print_r($jsonq->mensaje);
	} else {
		$datos = $jsonq->data;

		foreach ($datos as $banner) {
			$idBanner = $banner->id_banner;
			$urlImagen = $banner->imagen;
			$ref = $banner->url;
	?>
			<div>
				<img class="bd-placeholder-img" width="100%" height="550em" src="<?php echo $Configuracion->get("SERVER") . $urlImagen; ?>" alt="First slide">
			</div>
	<?php
		}
	}
	?>
</div>