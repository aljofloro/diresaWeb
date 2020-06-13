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
            # code...
        }
    }
}
?>
<div class="comunicado modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
         <!--   <H2>A partir del 17 de junio, entrará en funcionamiento el Centro de Atención Jurisdiccional al Usuario, te informamos sobre su objetivo.</H2>-->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <img src="img/comunicado/comunicado1.jpg" alt="comunicado" >
        </div>
    </div>
</div>
<div class="comunicado modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
         <!--   <H2>A partir del 17 de junio, entrará en funcionamiento el Centro de Atención Jurisdiccional al Usuario, te informamos sobre su objetivo.</H2>-->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <img src="img/comunicado/comunicado1.jpg" alt="comunicado" >
        </div>
    </div>
</div>
<div class="comunicado modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content ">
         <!--   <H2>A partir del 17 de junio, entrará en funcionamiento el Centro de Atención Jurisdiccional al Usuario, te informamos sobre su objetivo.</H2>-->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <img src="img/comunicado/comunicado1.jpg" alt="comunicado" >
        </div>
    </div>
</div>