<div class="owl-carousel owl-theme" id="main-slider">
<?php
	$Configuracion = Configuracion::getConfiguracion();
	$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_BANNER"),true));
	$error = $jsonq->error;
	print_r($error);
	$datos = $jsonq->data;
	
	foreach ($datos as $banner) {
		$idBanner = $banner->id_banner;
		$urlImagen = $banner->imagen;
		$ref = $banner->url;
		?>
	<div>
		<img class="bd-placeholder-img" width="100%" height="100%" src="<?php echo $Configuracion->get("SERVER_IMG").$urlImagen; ?>"
			alt="First slide">
	</div>
		<?php
	}
?>
</div>