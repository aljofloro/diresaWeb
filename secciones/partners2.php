<?php
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_ENLACES_2"),true));
$error = $jsonq->error;
?>
<div class="container enlaces">
	<div class="owl-carousel owl-centered" id="enlacesDiresa">
	<?php
	if($error){
		print_r($jsonq->mensaje);
	}else{
		$enlaces = $jsonq->data;
		foreach ($enlaces as $enlace) {
			$idEnlaceInteres = $enlace->id_enlace_interes;
			$nombre = $enlace->nombre;
			$urlImagen = $Configuracion->get("SERVER_IMG").$enlace->imagen;
			$urlDestino = $enlace->url;
		?>
		<div>
			<a href="<?php echo $urlDestino; ?>">
				<img src="<?php echo $urlImagen; ?>" alt="<?php echo $nombre; ?>" />
			</a>			
		</div>
	<?php
		}	
	}
	?>
	</div>
</div>