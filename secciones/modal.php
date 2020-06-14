<?php
$Configuracion = Configuracion::getConfiguracion();
$jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_COMUNICADOS"),true));
$error = $jsonq->error;
if($error){
  print_r($jsonq->mensaje);
}else{
  $comunicados = $jsonq->data;
  if($comunicados != ''){
    foreach ($comunicados as $comunicado) {
      if($comunicado){
      ?>
      <div class="comunicado modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content ">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <a href="<?php echo $comunicado->url; ?>">
              <img src="<?php echo $Configuracion->get("SERVER").$noticia->imagen; ?>" alt="comunicado" >
            </a>            
          </div>
        </div>
      </div>
      <?php 
      }           
    }
  }
}
?>