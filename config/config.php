<?php
require_once($nivelProfundidad."clases/Configuracion.php");
$Configuracion = Configuracion::getConfiguracion();
$Configuracion->set('TODO',-1);
$Configuracion->set('NO_VIGENTE',1);
$Configuracion->set('VIGENTE',2);
$Configuracion->set('ANEXO',3);
$Configuracion->set('NOTICIA_INSTITUCIONAL',1);
$Configuracion->set('NOTICIA_REGIONAL',2);
$Configuracion->set('NOTICIA_MINSA',3);
$Configuracion->set('DIRECTORAL',1);
$Configuracion->set('ADMINISTRATIVA',2);
$Configuracion->set('EPIDEMIOLOGIA',18);


$Configuracion->set('ENCARGO_ADMINISTRACION',20);
$Configuracion->set('ENCARGO_RRHH',29);
$Configuracion->set('ENCARGO_PLANES',24);
$Configuracion->set('ENCARGO_PROMSALUD',9);
$Configuracion->set('ENCARGO_SALUD_PERSONAS',12);
$Configuracion->set('ENCARGO_AMBIENTAL',17);
$Configuracion->set('ENCARGO_DEMID',16);
$Configuracion->set('ENCARGO_EPIDEMIOLOGIA',23);



$Configuracion->set('ICONO_DESCARGA','<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="33px"><image x="0px" y="0px" width="34px" height="33px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAhCAMAAACLDYleAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABR1BMVEX////l5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufrvrPl5ufl5ufsuq3l5ufl5ufvqZjl5ufl5ufvqJfl5ufl5ufl5ufvp5Xl5ufl5ufvppTl5ufl5ufl5ufvpZLl5ufwoY3l5ufl5ufl5ufl5ufwoIzl5ufl5ufl5ufl5uf7YTryln/l5ufl5uf7Xjb0h2v+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP0hmn+UCP8Vyz8WS/+UCP+UCP+UCP+UCPl5ufn1ND5a0b+UCP7Yjv///8Qs7gnAAAAZ3RSTlMAFU1sb18xAkS8/eV+Dgqi5D/I+QGx9i5ezNxOPKt87Bx0qea9kEf4xiCSUcXR/kAe9ow+7584650Q/Od5uOImMvrfYtLHC0Pbzwlyf4X9tHdZ95cZhSgDclKH6iyk+pqP/PKWAR9Nq3wBTAAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBRQXETutIcNNAAABIUlEQVQ4y4XS11bCQBCA4QELCmLFrtjFXsCKBXuvqKACdh0d3//eJAbNzCbLf5WdfOfsJmcBWD5/WXlFZQA8q6oOolmoJuwOauvwr/oGNxFuREdNflVEmpHV0qqQNhS1y0MHOiTBTkG6FIHdgkRV0uN839vXP6ASHBwajtjfEo2hVyOjFhlDTSHTjKO2CWOvST76nBJmGmbE5Itm+SAOCUG+aY4P5mFBIYt8sATLSUlW+GAVYE2SdbYOpgA2NgXZEvsYbSc52XEud/es37t/wMjh/yIWPypelsTxid3pGZ0Xny8ufa6XPE1XUCI9ub7J/JLs7Z0Huadc3iTZAj14kEzOMGl6LBA9ee2UN8wzvRC9voHGmGmEbbTCMiUEwPuHFD/W0eyq/ehZbQAAAABJRU5ErkJggg==" /></svg>');
$Configuracion->set('ICONO_COMUNICADO','<svg id="_Grupo_" data-name="&lt;Grupo&gt;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34.003" height="44.352" viewBox="0 0 138 180"><image id="_Trazado_Trazado_Trazado_Trazado_Trazado_Trazado_compuesto_" data-name="&lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado compuesto&gt;" width="119" height="157" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAnCAYAAADzckPEAAACXUlEQVRYhe2XO2hUQRSGv90EH6D4wDUqEUSxVCRBVNJYKQjbWQiWYmtjo4WdCLbaprJQTKdW2oiFIhZGC7ERC0V8oiYYHzHJygnnwjhnznXv7txUfnDZe888/p2Zc87MNNrt9jhwHFhBPhaAR8BR4E3c6yBwQt8fAx2gEdUZSNhC5oJ2xe8IsF/73AO8jUULwVHTXe9cA44BG4GnwC7gfdFbM6NQyHqdgTtAC3gCDMWiy0yz/litfR8GLgKbdDaHQtFOZtFO0PcZ4DKwBZgEtg6a6nlYrr18BD4A8/q9GbhVl+gVYB2wHdgA/AZeADvEqepypEsq0NRHfGYnMCHfdY20IPaVLwRxGiMJ4QgwHAR/iLT7AdwG3pnWPqvKRMXlbxqr5ZR6ZqWRe6JTwEFgW+B5ITITP3WklfFE5R/d0yc7nqiwTwLZWLtDPPYzcDc1U57oWuChsVZnDHjQreg33WNlpL9MaTkN7VfC41mqpicqYXLVWDPhiaKjHO5hpGgGkgh4bkpKRNcAr4y1OgdSvuGJSrY5p/tgI5GR/oW0mQFepup5orPAeWPNhCeKZp1Wjxu8jPQ7MG1KSkRlTb8aa3VG9ZjSlah47LjugbOmtJwBPTnI7vMpVdMTlWR+0lgz4YkWrNRE0azoxU2NgCSeqOynr3Vt+2FET4B/4YnO612kpWtU1YMXdIlmIvvifckTFXc/ZKz9M1cmWhengRt1HUE95PZ2falFF/kvuiSicTzVShEye4GzGtThnVUSQzwbxd0zTBryLm3ltJ9M8iEiKlvPbuBChtHd1yu/D/AHORxtcr6O3zoAAAAASUVORK5CYII="/><image id="_Grupo_2" data-name="&lt;Grupo&gt;" x="73" y="116" width="65" height="64" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABQ0lEQVQ4jZ3TvUtcURAF8N9aCRKbgLCNRlIEYiFBbewC/gEWQYMSspoqwS6ojWArkkr7kEgsLVSChRZWARvRiGkttdHKTxCVC/Pi4+1uiJ7mMfPOnDv3npnSTf9zBbThEwbwLH5dYQ1fsZqnFwXGMZuLd3CNF3gSuQ28xXEKGnLk+Sg+xXs04RV60IwuLKMPf/A0LzCKMeyhjAWcF662jX5MoAWb2RUacYGbaLNYWAs/MIxK6uBdEKb+szjhQ3ynk8CbCL5V0eojubKL9iTwMmiHdem18UvBhUchCexHYfmBAr1ZB0uRGKmi1EdyrhMHeRtvw8azumX3WMRQZuNlnF7CVkzdvzAZxb/xPXvEZOEcOsKNSoxyHt1YwQyO8Doli8v0GV9ycTolW6ZMcD2W6aSWQEIrPmIwDUrk0htl6/zzLxN3Vf1CqXbx2W4AAAAASUVORK5CYII="/><image id="_Trazado_" data-name="&lt;Trazado&gt;" x="92" y="133" width="28" height="33" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAICAYAAAA1BOUGAAAAeklEQVQImWXOuwkCYRBF4U8REYysQQzMrELYQFgT27AIbUBQM7swsIStwNDM1NDIFwPzw4I3ucM5wZ3Opx7LzLHHDM8A3WIwwgSDAtryLyH7Sb/Z7+xhD3eccMYr5TV2Q+6wwQI3NJhiFXKLBw6t0QqX8tAR67yXIeAHJBoUaedhlWkAAAAASUVORK5CYII="/></svg>');
$Configuracion->set('ICONO_RECLAMO','<svg id="_Grupo_" data-name="&lt;Grupo&gt;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33.666" height="43.596" viewBox="0 0 139 180"><image id="_Trazado_Trazado_Trazado_Trazado_Trazado_Trazado_compuesto_" data-name="&lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado&gt; + &lt;Trazado compuesto&gt;" width="119" height="157" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAmCAYAAAA4LpBhAAACJklEQVRYhc3XS4wMURTG8d90y3hGIjbikSAeCSHGsBGRWEo0NjbWhL1gKRISJqwkLGzEVqxmbWOJxGNhIsRCwkJiEI+Z8Rq57ZJW1VU11V0945/cVPe5de/X5/Q5t071NRqNqzimep5jH0aSO8/C3vj5ESairZU6apjM+Fk/WuYm4/eNWIN7GMTTpOhyvMKW1Hadcw2HMR93sQ3P/uxWi9efFQd3QbwOYyEeYG1StJ5a1h3z4ur9OBE9/ivcK9Hv8boMF3EuCj/EumTSVMXHuM8LvMZ4/B4icLPWI9HhmEAjMV++4AbeYXOvPL0VR5IQ6uO98jSLZj3neTqE7XibmvmdeItxBrdTs9n0FYkexMqU9V8GSooqEt2EJS3pn1w3Fk+y0uSJfoqHduXkiZ7GTozmHPZZzMXXkKl42S5MWRyo4CFwKSFaLxIdSFm6p5m9012nTfI8vYIdeJOaKWZOdOhIVueQxZ4p1GkRK8qKbsCi2H6UJez7Ge/brcsTHYujcvJEz8amajQ1k0+o6f6496nW3mgqnob/dGvKWo7z7e7OEx1MWSriv6vT69gV67So4U4Szt5vOIQnZUSD4Ko4OmVpWdH1sXvrpBGvxVeU8YS98MAP4fmQsnZHeN3on+5EeoyjM5K9Mypath2pRLSTJ0nXohOpmR4SSia8Ya3Gydjjzo5yIeShrsJIhj/0Oq35EO4J3cLldt1fkiB6H7txoQLf7hSK4heAt1/rpPMRSwAAAABJRU5ErkJggg=="/><image id="_Grupo_2" data-name="&lt;Grupo&gt;" x="74" y="116" width="65" height="64" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABN0lEQVQ4jZ3TsUodYRAF4M9rIwRJJdZGRYgoGG2sxUoEwTJFTERQTJsyTxGFpDFdQLBUQbFVKzGxMCSKPoGYgGAVEwZmw7r3XuR6YNn/nz1zdmY403Y306uCMSxhGl356Rqb+IT9Mr0qsILl0v0o3yOo5fkz3hSEWom8m8mnmArxrCaedkym4GscVAVWk7CBQWxX+8Jeiq1hHF+KFvrxExeoG0gTfMMwXkQF75Kz0JjbEK8y+D4q+IXO7LMV3OJPVPAUP1pMlsN+UqsLt4gQ+I2BR+Q+x00IrKfQRB2lOcJYHdiJIfbhDJd41jTlPk4wFELx5/M0Uk8a6SGElSM5jPS1GOLbtPIsvpesXEZh5bm08ssIVpfpQ4oVOMbfcFwpFlaeLy6N1nkUi7nO3Rm7whY+4vA/E/8AF9o9ibG3ZsYAAAAASUVORK5CYII="/><g id="_Grupo_3" data-name="&lt;Grupo&gt;">  <image id="_Grupo_4" data-name="&lt;Grupo&gt;" x="102" y="131" width="8" height="28" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAAHCAYAAAAie5yXAAAALklEQVQImWP8F6A8l4GBgZmFgYEhiYGBgQHEeAWimUA8EIAzQFJiMMZsBgYGFgC+AQQsvOzWYwAAAABJRU5ErkJggg=="/>  <image id="_Grupo_5" data-name="&lt;Grupo&gt;" x="102" y="160" width="8" height="8" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAGklEQVQImWP8F6B8hYGBgY2FgYHhBQMDAysAKJQDPppE25UAAAAASUVORK5CYII="/></g></svg>');
$Configuracion->set('ICONO_ANEXO','<svg enable-background="new 0 0 91 91"  id="Layer_1" version="1.1" viewBox="0 0 91 91" width="34px" height="33px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M63.327,11.104c-1.846,0-3.341,1.496-3.341,3.34v52.971c0,8.73-6.812,15.834-15.185,15.834   c-8.375,0-15.186-7.1-15.189-15.826c0-0.002,0.001-0.004,0.001-0.006V17.092c0-5.277,4.294-9.568,9.569-9.568   c5.262,0,9.541,4.26,9.572,9.511v51.261c0,2.055-1.668,3.725-3.719,3.725c-2.055,0-3.727-1.67-3.727-3.725V22.389   c0-1.844-1.495-3.34-3.34-3.34c-1.844,0-3.34,1.496-3.34,3.34v45.908c0,0.001,0,0.001,0,0.002c0.002,5.736,4.67,10.4,10.406,10.4   c5.733,0,10.398-4.666,10.398-10.404V17.131c0-0.014,0.004-0.025,0.004-0.039c0-0.026-0.004-0.051-0.004-0.077v-0.806   c0-0.24-0.027-0.474-0.076-0.7C54.56,7.29,47.612,0.844,39.183,0.844c-8.42,0-15.362,6.438-16.168,14.65   c-0.051,0.23-0.081,0.469-0.081,0.715v51.186c0,0.007-0.002,0.013-0.002,0.02c0,12.414,9.811,22.514,21.87,22.514   c12.057,0,21.865-10.1,21.865-22.514V14.443C66.667,12.6,65.171,11.104,63.327,11.104z" fill="#647F94"/></g></svg>');

$Configuracion->set('SERVER_API_PORTAL','http://api.proydir.nom.pe/src/Portal/');
$Configuracion->set('SERVER','http://api.proydir.nom.pe/');
$Configuracion->set('GET_BANNER','BannerListar.php');
$Configuracion->set('GET_NOTICIAS_MAIN','NoticiaListarAprobados.php');
$Configuracion->set('GET_NOTICIAS_POR_ID','NoticiaObtenerAprobado.php?id=');
$Configuracion->set('GET_NOTICIAS_POR_TIPO','NoticiaListarAprobados.php?registros=-1&id_tipo_noticia=');
$Configuracion->set('GET_ENLACES_1','EnlaceInteresListar.php?grupo=1');
$Configuracion->set('GET_ENLACES_2','EnlaceInteresListar.php?grupo=2');
$Configuracion->set('GET_INSTITUCION','InstitucionObtener.php');
$Configuracion->set('GET_AUTORIDADES','AutoridadListar.php');
$Configuracion->set('GET_CONSEJO','ConsejoRegionalObtener.php');
$Configuracion->set('GET_DIRECTORIO','OficinaListar.php');
$Configuracion->set('GET_CONVOCATORIA','ConvocatoriaListar.php?id_tipo_convocatoria=');
$Configuracion->set('GET_RESOLUCIONES_POR_TIPO','ResolucionListar.php?id_tipo_resolucion=');
$Configuracion->set('GET_ACTIVIDADES','ActividadListarAprobados.php');
$Configuracion->set('GET_AREAS','TipoAreaListar.php');
$Configuracion->set('GET_COMUNICADOS','VentanaEmergenteListar.php');
$Configuracion->set('GET_ENCARGADOS','EncargadoObtener.php?id=');
//$Configuracion->set('GET_DOCUMENTOS_SECCION','DocumentoListarSegunTipoSeccion.php?id=');

$Configuracion->set('GET_DOCUMENTOS_SECCION','SeccionObtener.php?id=');
$Configuracion->set('GET_DOCUMENTOS_GESTION','TipoSeccionObtener.php?id=1');

$Configuracion->set('GET_DOCUMENTOS','TipoSeccionObtener.php?id=');
$Configuracion->set('GET_ACCESOS','TipoSeccionListar.php?grupo=2');
$Configuracion->set('GET_DOCUMENTOS_DIRECCIONES','TipoSeccionListar.php?grupo=3');

$Configuracion->set('GET_SEGUIMIENTO_TRAMITE','TramiteSeguimiento.php?id=');


$Configuracion->set('PUT_CONSULTA','ConsultaGuardar.php');




?>