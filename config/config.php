<?php
require_once($nivelProfundidad."clases/Configuracion.php");
$Configuracion = Configuracion::getConfiguracion();
$Configuracion->set('SERVER_API_PORTAL','http://api.proydir.nom.pe/src/Portal/');
$Configuracion->set('SERVER','http://api.proydir.nom.pe/');
$Configuracion->set('GET_BANNER','BannerListar.php');
$Configuracion->set('GET_NOTICIAS_MAIN','NoticiaListarAprobados.php');
$Configuracion->set('GET_NOTICIAS_POR_ID','NoticiaObtenerAprobado.php?id=');
$Configuracion->set('GET_ENLACES_1','EnlaceInteresListar.php?grupo=1');
$Configuracion->set('GET_ENLACES_2','EnlaceInteresListar.php?grupo=2');
$Configuracion->set('GET_INSTITUCION','InstitucionObtener.php');
$Configuracion->set('GET_AUTORIDADES','AutoridadListar.php');
$Configuracion->set('GET_CONSEJO','ConsejoRegionalObtener.php');
$Configuracion->set('GET_DIRECTORIO','OficinaListar.php');
$Configuracion->set('GET_CONVOCATORIA','ConvocatoriaListar.php?id_tipo_convocatoria=');
$Configuracion->set('ICONO_DESCARGA','<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="33px"><image x="0px" y="0px" width="34px" height="33px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAhCAMAAACLDYleAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABR1BMVEX////l5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufrvrPl5ufl5ufsuq3l5ufl5ufvqZjl5ufl5ufvqJfl5ufl5ufl5ufvp5Xl5ufl5ufvppTl5ufl5ufl5ufvpZLl5ufwoY3l5ufl5ufl5ufl5ufwoIzl5ufl5ufl5ufl5uf7YTryln/l5ufl5uf7Xjb0h2v+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP0hmn+UCP8Vyz8WS/+UCP+UCP+UCP+UCPl5ufn1ND5a0b+UCP7Yjv///8Qs7gnAAAAZ3RSTlMAFU1sb18xAkS8/eV+Dgqi5D/I+QGx9i5ezNxOPKt87Bx0qea9kEf4xiCSUcXR/kAe9ow+7584650Q/Od5uOImMvrfYtLHC0Pbzwlyf4X9tHdZ95cZhSgDclKH6iyk+pqP/PKWAR9Nq3wBTAAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBRQXETutIcNNAAABIUlEQVQ4y4XS11bCQBCA4QELCmLFrtjFXsCKBXuvqKACdh0d3//eJAbNzCbLf5WdfOfsJmcBWD5/WXlFZQA8q6oOolmoJuwOauvwr/oGNxFuREdNflVEmpHV0qqQNhS1y0MHOiTBTkG6FIHdgkRV0uN839vXP6ASHBwajtjfEo2hVyOjFhlDTSHTjKO2CWOvST76nBJmGmbE5Itm+SAOCUG+aY4P5mFBIYt8sATLSUlW+GAVYE2SdbYOpgA2NgXZEvsYbSc52XEud/es37t/wMjh/yIWPypelsTxid3pGZ0Xny8ufa6XPE1XUCI9ub7J/JLs7Z0Huadc3iTZAj14kEzOMGl6LBA9ee2UN8wzvRC9voHGmGmEbbTCMiUEwPuHFD/W0eyq/ehZbQAAAABJRU5ErkJggg==" /></svg>');
$Configuracion->set('ICONO_COMUNICADO','<svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
.st0{fill:#B4E6DD;}
.st1{fill:#80D4C4;}
.st2{fill:#D2F0EA;}
.st3{fill:#FFFFFF;}
.st4{fill:#FBD872;}
.st5{fill:#DB7767;}
.st6{fill:#F38E7A;}
.st7{fill:#F6AF62;}
.st8{fill:#32A48E;}
.st9{fill:#A38FD8;}
.st10{fill:#7C64BD;}
.st11{fill:#EAA157;}
.st12{fill:#9681CF;}
.st13{fill:#F9C46A;}
.st14{fill:#CE6B61;}
</style><g><path class="st0" d="M43.02,20.15v19.77c4.09-1.43,7.03-5.31,7.03-9.89S47.11,21.58,43.02,20.15z"/><path class="st5" d="M16.33,36.99l2.45,14.33c0.18,0.94,1.01,1.63,1.97,1.63c0.96,0,1.79-0.68,1.97-1.63l2.45-14.33H16.33z"/><path class="st2" d="M14.95,23.09C11.11,23.09,8,26.2,8,30.04s3.11,6.95,6.95,6.95h1.38v-13.9H14.95z"/><polygon class="st2" points="25.18,36.99 43.89,47.65 43.89,12.44 25.18,23.09  "/><path class="st6" d="M43.89,11.05c-0.84,0-1.52,0.68-1.52,1.52v34.95c0,0.84,0.68,1.52,1.52,1.52c0.84,0,1.52-0.68,1.52-1.52V12.57   C45.41,11.73,44.73,11.05,43.89,11.05z"/><g><path class="st2" d="M55.48,29.52h-3.54c-0.29,0-0.52,0.23-0.52,0.52s0.23,0.52,0.52,0.52h3.54c0.29,0,0.52-0.23,0.52-0.52    S55.77,29.52,55.48,29.52z"/><path class="st2" d="M51.27,34.71c-0.2-0.2-0.53-0.2-0.74,0s-0.2,0.53,0,0.74l2.5,2.5c0.2,0.2,0.53,0.2,0.74,0    c0.2-0.2,0.2-0.53,0-0.74L51.27,34.71z"/><path class="st2" d="M51.27,25.37l2.5-2.5c0.2-0.2,0.2-0.53,0-0.74c-0.2-0.2-0.53-0.2-0.74,0l-2.5,2.5c-0.2,0.2-0.2,0.53,0,0.74    C50.73,25.58,51.06,25.58,51.27,25.37z"/></g><g><path class="st0" d="M13.02,25.93c-0.29,0-0.52,0.23-0.52,0.52s0.23,0.52,0.52,0.52h3.54v-1.04H13.02z"/><path class="st0" d="M13.02,28.32c-0.29,0-0.52,0.23-0.52,0.52s0.23,0.52,0.52,0.52h3.54v-1.04H13.02z"/><path class="st0" d="M13.02,30.72c-0.29,0-0.52,0.23-0.52,0.52s0.23,0.52,0.52,0.52h3.54v-1.04H13.02z"/><path class="st0" d="M13.02,33.11c-0.29,0-0.52,0.23-0.52,0.52s0.23,0.52,0.52,0.52h3.54v-1.04H13.02z"/></g><rect class="st6" height="13.9" width="8.85" x="16.33" y="23.09"/></g></svg>');
$Configuracion->set('ICONO_RECLAMO','<svg height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#929292" id="icon-44-note-text"><path d="M5,11 L5,25.9991358 C5,27.0983727 5.8927712,28 6.99406028,28 L21,28 L21,21.9981014 C21,20.8867064 21.8980806,20 23.0059191,20 L28,20 L28,11 L5,11 L5,11 Z M5,10 L5,7.00086422 C5,5.89581743 5.90162726,5 7.00086422,5 L25.9991358,5 C27.1041826,5 28,5.89339733 28,6.99188419 L28,10 L5,10 L5,10 Z M22,28 L22,22.0029293 C22,21.4490268 22.4509752,21 22.990778,21 L28,21 L22,28 L22,28 Z M8,14 L8,15 L25,15 L25,14 L8,14 L8,14 Z M8,17 L8,18 L25,18 L25,17 L8,17 L8,17 Z M8,20 L8,21 L19,21 L19,20 L8,20 L8,20 Z M8,23 L8,24 L19,24 L19,23 L8,23 L8,23 Z" id="note-text"/></g></g></svg>');


?>