<?php
  $idNoticia = $_GET["idNoticia"];
  $Configuracion = Configuracion::getConfiguracion();
  $jsonq = json_decode(file_get_contents($Configuracion->get("SERVER_API_PORTAL").$Configuracion->get("GET_NOTICIAS_POR_ID").$idNoticia,true));
  if($jsonq->error){
    echo $jsonq->mensaje;
  }else{
    $noticia = $jsonq->data;
    $idNoticia = $noticia->id_noticia;
    $tipoNoticia = $noticia->tipo_noticia;
    $nombreTipoNoticia = $tipoNoticia->nombre;
    $fecha = $noticia->fecha;
    $titulo = $noticia->titular;
    $introduccion = $noticia->entradilla;
    $contenido = $noticia->contenido;
    $urlImagen = $Configuracion->get("SERVER").$noticia->imagen;
    $date = date_create($fecha);
?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <div class="row">
          <div class="noticias_interior mx-auto">
            <div class="noticias_descr text-center">
              <div class="noticias_descr_title">
                <p class="nombre"><?php echo $titulo; ?></p>
              </div>
              <div class="noticias_descr_fecha mb-5">
              <?php echo $nombreTipoNoticia." // ".date_format($date,"D. d / M / Y");  ?>
              </div>
              <div class="noticias_descr_image d-flex justify-content-center">
                <img src="<?php echo $urlImagen; ?>" class="img-fluid" />
              </div>
              <div class="noticias_descr_text mt-5 text-center">
                <p><?php echo $introduccion; ?></p>
                <p><?php echo $contenido; ?></p>
              </div>
              <div class="mt-5 justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="201px" height="35px">
                    <image x="0px" y="0px" width="201px" height="35px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMkAAAAjCAQAAACUEOZqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBRkVLhs/f8UKAAAEuUlEQVRo3u2bXVCUVRzGf4sIyhAoYkIoRmQSKQ0QMJoMGlojH3+dxjSTMTWsyRxvumi866Kami6aZuxjrExLNEnFzmTpqEVKKSNfDoozJBgIBIF8ppUg28Uy27u7CAssng32d7Xvc95532fO8+579pzzX5MZVyN++BCIySp00qvaXX6bMYtpZJFIGJFEEE4YYUwnmCAC8er31Jt00E4rzTTRSAO11PGb+lN3B7gfw4hEJhNDPLHMI5qAEd6/mSoqqaSCy1xRPbq7wx0YQiQSQDKLSSaOiYOc2oPx6ffG36kb/M1lSimjmDJ1U3fH6MOpSCQKIZ2FeDs03aKaK9RwjQaauE4rbXSp2w5X8MOfKUwhiHsJIZRQZhNOqGHEMdLDRQo5yy/qV90ddPcZJBKZy3OsJspO/p3zFHOBCqodu995ZBKRRPIg0UQxj8B+TmmkgHzyqVCu/x3iptwxEglgLZtItBGr+YF8ClTNaFiR2cwnllgSCXNobOIUJzmh6nR32OjTbyTyMNvIMowAPfyE4qiqujumJJREFrCARCbZNV3kGEf5WXVr67FRxyESSeY10qzv+F5Os49DqlWHOfEhgUUsIRk/m4YOjqP4Xo+r0cYmEknhdRZbD+v4jM9H5yU1NMSHJJbyJAlMMMjdnCaPPNWg259rsUYi83mbNKtewHsod5snyDRSSWc50w1iL4Uc5KCq1e3OVZjMgATzBtl9T6CZb3lLndNt7M6IF0lksoJog2imgFy+Vk263Y0ckxnZxLsE9R0fY7sq023KOWQOT7OSJMPc5jan2Eee6tTtbSSYMtezp+9zCa+qfN2GhoqEs4pnbIL5iyN8yQl3e+06iylzG+8DLWxnl+rVbWe4SDjPsoY4g9RIDntUuW5nQ8eU6cc79PCmatFtZeTIXLJYR4RBKmIX+/9fWwMjXJx3P8TEQtazxrA8c5Ncdqqzup05y5iLxIJMYgUbWWbYuynnI/aqLt3OBmeMRmJBZvE8G3nAKnTxBR+qCt2+BmZMRwIgXqTyEmLY4/mRHe43Df6PMR+JBQnhBV4k3Cpc42M+VX/o9tUf4yQSAJlAOq+wzDqD+YdcPlCFun3ZM44isSAPsYWNhpqBEnZwwJ02lsddJADiTxZbecQqtLObneqybl8WxmUkAGIiha2sMNQTnOETDun/vozbSCzITDazmVCr0MF+dusdX8Z5JAAyEeFlnjAsXFaylxxVfVddBLGStcSQ7YmkD4kkmw2EGKQiviJv9IORGWSwitS+mdNhTyQGxJvlbCADH4N4gW84SpHrV8llAo/xFGkk2JTsbvFE4oBMYzXrWGhT9tfCSU5y2hWlfuJLLItIIdmucq2KA+SoCk8kd6BvayzRrui8ibOcp5RLQ93rlyCiiOFR4onB167xEkc4rEosB55IBkTuI4MMUu2KlgC6qKSaGupppIU2OummAzPgRQC++DOVYGYQymwiiCS4n8t3kc9xvlNXjaInEicQXx5nKUuIsxllhs91znGGfIr7W/z0RDIEZDJxJBJPDFGD/nvAHjO1XKKcUkoGHpE8kQwL8SaCOdzPLGYynWlM5R588Mcb6OYGt+iijVaaqaeeGq5SpW44d+1/ATquYF0tFv1TAAAAAElFTkSuQmCC" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>