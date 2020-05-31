<?php
require_once("clases/Configuracion.php");
$Configuracion = Configuracion::getConfiguracion();
$Configuracion->set('SERVER_API_PORTAL','http://api.proydir.nom.pe/src/Portal/');
$Configuracion->set('SERVER_IMG','http://api.proydir.nom.pe/');
$Configuracion->set('GET_BANNER','BannerListar.php');
?>
?>