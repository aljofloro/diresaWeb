<div class="site-section accesos">
	<div class="container">
		<div class="row">
			<div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
				<h2 class="mb-md-4">ACCESOS</h2>
			</div>
		</div>
		<div class="row">
		<?php
			$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_ACCESOS"),true));
			$error = $jsonq->error;
			if($error){
				print_r($jsonq->mensaje);
			}else{
				$tipoSecciones = $jsonq->data;
				$muestra = 1;
				foreach ($tipoSecciones as $tipoSeccion) {
					if($muestra <= 4){
					?>
			<div class="col-md-3 col-lg-3 col-6">
				<div class="acceso"  onclick="location.href='accesos-documentos.php?tipoSeccion=<?php echo $tipoSeccion->id_tipo_seccion; ?>';">
					<div class="accesos_image">
						<?php echo $tipoSeccion->imagen; ?>
					</div>
					<div class="accesos_body">
						<p><?php echo $tipoSeccion->nombre; ?></p>
					</div>
				</div>
			</div>
					<?php
					}
					if($muestra > 4){
						$tag = 'collapse'.$muestra;
						?>
			<div class="collapse dont-collapse-sm multi-collapse col-md-3 col-lg-3 col-6 col-sm-none" id="<?php echo $tag; ?>">
				<div class="acceso" onclick="location.href='accesos-documentos.php?tipoSeccion=<?php echo $tipoSeccion->id_tipo_seccion; ?>';">
					<div class="accesos_image">
						<?php echo $tipoSeccion->imagen; ?>
					</div>
					<div class="accesos_body">
						<p><?php echo $tipoSeccion->nombre; ?></p>
					</div>
				</div>
			</div>
						<?php
						$target .= $tag.' ';
					}
					$muestra++;
				}
			}
		?>
		</div>
		<div class="row mt-5 d-lg-none d-md-none" id="btn_context">
			<div class="mx-auto">
				<button id="botonclases" class="btn btn-success d-block " type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="<?php echo $target; ?>">
					<i class="fa fa-plus fa-2x " aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</div>
</div>