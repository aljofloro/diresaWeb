<?php
require_once($nivelProfundidad."clases/Configuracion.php");
$Configuracion = Configuracion::getConfiguracion();
$Configuracion->set('SERVER_API_PORTAL','http://api.proydir.nom.pe/src/Portal/');
$Configuracion->set('SERVER_IMG','http://api.proydir.nom.pe/');
$Configuracion->set('GET_BANNER','BannerListar.php');
$Configuracion->set('GET_NOTICIAS_MAIN','NoticiaListarAprobados.php');
$Configuracion->set('GET_NOTICIAS_POR_ID','NoticiaObtenerAprobado.php?id=');
$Configuracion->set('GET_ENLACES_1','EnlaceInteresListar.php?grupo=1');
$Configuracion->set('GET_ENLACES_2','EnlaceInteresListar.php?grupo=2');
$Configuracion->set('GET_INSTITUCION','InstitucionObtener.php');
$Configuracion->set('GET_AUTORIDADES','AutoridadListar.php');
$Configuracion->set('GET_CONSEJO','ConsejoRegionalObtener.php');
$Configuracion->set('GET_DIRECTORIO','OficinaListar.php');
?>