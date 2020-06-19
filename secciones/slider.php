<div id="left">
	<a class="handle "><i class="fa fa-wheelchair fa-3x" aria-hidden="true"></i></a>
	<div class="detallediscap">
		<div class="col-12 m-auto">
			<p class="tituloopcion">TAMAÑO DE TEXTO</p>
		</div>
		<div class="row m-auto">
			<div class="col-6 mb-2">
				<button id="font-down" class="botondetallediscap">
					A-
				</button>
			</div>
			<div class="col-6 mb-2">
				<button id="font-up" class="botondetallediscap">
					A+
				</button>
			</div>
		</div>
		<div class="col-12 m-auto">
			<p class="tituloopcion">CONTRASTE</p>
		</div>
		<div class="col-12 mb-2">
			<button id="subrayarLinks" class="botondetallediscap">
				SUBRAYAR LINKS
			</button>
		</div>
		<div class="col-12 mb-2">
			<button id="resaltarLinks" class="botondetallediscap">
				RESALTAR LINKS
			</button>
		</div>
		<div class="col-12 mb-2">
			<button id="eliminarCookies" class="botondetallediscap">
				ELIMINAR COOKIES
			</button>
		</div>
		<div class="col-12 mb-2">
			<button id="imagenesGris" class="botondetallediscap">
				IMAGENES EN GRISES
			</button>
		</div>
	</div>
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