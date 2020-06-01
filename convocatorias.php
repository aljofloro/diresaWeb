<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require_once("config/config.php");
    include_once("secciones/head.php");
    include_once("secciones/estilos.php");
    ?>
</head>

<body id="top">
    <header>
        <?php
        include_once("secciones/horario.php");
        include_once("secciones/presentacion.php");
        include_once("secciones/menu.php");
        ?>
    </header>
    <main role="main">
        <?php
        include_once("secciones/slider.php");
        ?>
        <div class="site-section-seccion">
            <div class="container">
                <div class="row">
                    <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                        <h2 class="mb-md-4">CONVOCATORIAS</h2>
                    </div>
                </div>
                <table id="convocatoriasinanexo" class="table table-striped display nowrap " style="width:100%">
                    <thead class="thead-blue">
                        <tr>
                            <th class="linea">N°</th>
                            <th class="linea">DESCRIPCIÓN</th>
                            <th class="linea"> BASES</th>
                            <th class="linea">APTOS</th>
                            <th class="linea">PRUEBAS CONOCIMIENTO</th>
                            <th class="linea">CALIFICACIÓN CURRICULAR</th>
                            <th class="linea">ENTREVISTA PERSONAL</th>
                            <th class="linea">RESULTADO FINAL</th>
                        </tr>
                    </thead>
                    <tbody class="tabla">
                        <tr>
                            <td>001</td>
                            <td class="textotabla">
                                <p>Cronograma Proceso Nombramiento 2019</p>
                                <p class="textoinfo">Cronograma proceso nombramiento 2019</p>

                            </td>
                            <td class="download">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="33px">
                                        <image x="0px" y="0px" width="34px" height="33px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAhCAMAAACLDYleAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABR1BMVEX////l5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufrvrPl5ufl5ufsuq3l5ufl5ufvqZjl5ufl5ufvqJfl5ufl5ufl5ufvp5Xl5ufl5ufvppTl5ufl5ufl5ufvpZLl5ufwoY3l5ufl5ufl5ufl5ufwoIzl5ufl5ufl5ufl5uf7YTryln/l5ufl5uf7Xjb0h2v+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP0hmn+UCP8Vyz8WS/+UCP+UCP+UCP+UCPl5ufn1ND5a0b+UCP7Yjv///8Qs7gnAAAAZ3RSTlMAFU1sb18xAkS8/eV+Dgqi5D/I+QGx9i5ezNxOPKt87Bx0qea9kEf4xiCSUcXR/kAe9ow+7584650Q/Od5uOImMvrfYtLHC0Pbzwlyf4X9tHdZ95cZhSgDclKH6iyk+pqP/PKWAR9Nq3wBTAAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBRQXETutIcNNAAABIUlEQVQ4y4XS11bCQBCA4QELCmLFrtjFXsCKBXuvqKACdh0d3//eJAbNzCbLf5WdfOfsJmcBWD5/WXlFZQA8q6oOolmoJuwOauvwr/oGNxFuREdNflVEmpHV0qqQNhS1y0MHOiTBTkG6FIHdgkRV0uN839vXP6ASHBwajtjfEo2hVyOjFhlDTSHTjKO2CWOvST76nBJmGmbE5Itm+SAOCUG+aY4P5mFBIYt8sATLSUlW+GAVYE2SdbYOpgA2NgXZEvsYbSc52XEud/es37t/wMjh/yIWPypelsTxid3pGZ0Xny8ufa6XPE1XUCI9ub7J/JLs7Z0Huadc3iTZAj14kEzOMGl6LBA9ee2UN8wzvRC9voHGmGmEbbTCMiUEwPuHFD/W0eyq/ehZbQAAAABJRU5ErkJggg==" />
                                    </svg>
                                </a>
                            </td>
                            <td class="download">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="33px">
                                        <image x="0px" y="0px" width="34px" height="33px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAhCAMAAACLDYleAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABR1BMVEX////l5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufl5ufrvrPl5ufl5ufsuq3l5ufl5ufvqZjl5ufl5ufvqJfl5ufl5ufl5ufvp5Xl5ufl5ufvppTl5ufl5ufl5ufvpZLl5ufwoY3l5ufl5ufl5ufl5ufwoIzl5ufl5ufl5ufl5uf7YTryln/l5ufl5uf7Xjb0h2v+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP+UCP0hmn+UCP8Vyz8WS/+UCP+UCP+UCP+UCPl5ufn1ND5a0b+UCP7Yjv///8Qs7gnAAAAZ3RSTlMAFU1sb18xAkS8/eV+Dgqi5D/I+QGx9i5ezNxOPKt87Bx0qea9kEf4xiCSUcXR/kAe9ow+7584650Q/Od5uOImMvrfYtLHC0Pbzwlyf4X9tHdZ95cZhSgDclKH6iyk+pqP/PKWAR9Nq3wBTAAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBRQXETutIcNNAAABIUlEQVQ4y4XS11bCQBCA4QELCmLFrtjFXsCKBXuvqKACdh0d3//eJAbNzCbLf5WdfOfsJmcBWD5/WXlFZQA8q6oOolmoJuwOauvwr/oGNxFuREdNflVEmpHV0qqQNhS1y0MHOiTBTkG6FIHdgkRV0uN839vXP6ASHBwajtjfEo2hVyOjFhlDTSHTjKO2CWOvST76nBJmGmbE5Itm+SAOCUG+aY4P5mFBIYt8sATLSUlW+GAVYE2SdbYOpgA2NgXZEvsYbSc52XEud/es37t/wMjh/yIWPypelsTxid3pGZ0Xny8ufa6XPE1XUCI9ub7J/JLs7Z0Huadc3iTZAj14kEzOMGl6LBA9ee2UN8wzvRC9voHGmGmEbbTCMiUEwPuHFD/W0eyq/ehZbQAAAABJRU5ErkJggg==" />
                                    </svg>
                                </a>
                            </td>
                            <td class="download">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="26px">
                                        <image x="0px" y="0px" width="26px" height="26px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA3lBMVEX///8hlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIpmPKbzfZzu/TB3/f5+fnj7vj29/hst/QilfJGpvNuuPSGw/Ws1fYjlvJqt/T4+Pl5vvSx1/bC3/dbsPNRq/P////bf63yAAAAM3RSTlMAEV+fyt/SrHIhGpf3/rY0XvH9jQYBjL8PhE0M5XXeMGqPnohcHsVXAsgo80v5i4Pkhy6lyoRpAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+QFGBcDJBILAdMAAADsSURBVCjPbdLlFoMwDAXgbIwZMGfu7pYJc5f3f6IBBVZK76+Q7xTaEgArPr8QEMVgKBwBd6KSjFaUWJyWRBKppNIZG9QsMsnlLSqgJzmyrqh4CdOGlMocwZSxlwpyE9P3UGV6q/XGPEMEaqxstZ1ZhKHukf3BrELQIK3j6WjLmXSCIJDiol1vLkERmqS4P3SjRaeWVT0f2utNCQagjX+jBQXo4N9oQT9A13n4fCmRfQA9/kVJ+h32BzxJRo2rH444lCC/cjzxyNSegDGzTpmpztgMXd+bF+mRUnvOGaqVEjOJ0GkvmkKjvnTe9QOOhWa4PLbDRQAAAABJRU5ErkJggg==" />
                                    </svg>
                                </a>
                            </td>
                            <td class="download">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="26px">
                                        <image x="0px" y="0px" width="26px" height="26px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA3lBMVEX///8hlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIhlfIpmPKbzfZzu/TB3/f5+fnj7vj29/hst/QilfJGpvNuuPSGw/Ws1fYjlvJqt/T4+Pl5vvSx1/bC3/dbsPNRq/P////bf63yAAAAM3RSTlMAEV+fyt/SrHIhGpf3/rY0XvH9jQYBjL8PhE0M5XXeMGqPnohcHsVXAsgo80v5i4Pkhy6lyoRpAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+QFGBcDJBILAdMAAADsSURBVCjPbdLlFoMwDAXgbIwZMGfu7pYJc5f3f6IBBVZK76+Q7xTaEgArPr8QEMVgKBwBd6KSjFaUWJyWRBKppNIZG9QsMsnlLSqgJzmyrqh4CdOGlMocwZSxlwpyE9P3UGV6q/XGPEMEaqxstZ1ZhKHukf3BrELQIK3j6WjLmXSCIJDiol1vLkERmqS4P3SjRaeWVT0f2utNCQagjX+jBQXo4N9oQT9A13n4fCmRfQA9/kVJ+h32BzxJRo2rH444lCC/cjzxyNSegDGzTpmpztgMXd+bF+mRUnvOGaqVEjOJ0GkvmkKjvnTe9QOOhWa4PLbDRQAAAABJRU5ErkJggg==" />
                                    </svg>
                                </a>
                            </td>
                            <td class="download">

                            </td>
                            <td class="download">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include_once("secciones/noticias.php");
        ?>
        <?php
        include_once("secciones/partners2.php");
        ?>
        <footer class="footer">
            <?php
            include_once("secciones/footer.php");
            include_once("secciones/loader.php");
            ?>
        </footer>
    </main>
</body>

</html>