<?php
switch ($tipoConvocatoria) {
  case '1':
    $titulo = 'Nombramiento y otro Procesos';
    break;
  case '2':
    $titulo = 'CAS (D. LEG. N.1057)';
    break;
  case '3':
    $titulo = 'Provisión Externa (D. LEG. N. 276)';
    break;
  default:
    $titulo = 'Prácticas';
    break;
}

?>
<div class="site-section-seccion">
  <div class="container">
    <div class="row">
      <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
        <h2 class="mb-md-4">CONVOCATORIAS - <?php echo $titulo;?></h2>
      </div>
    </div>
    <table id="tablaConvocatoria" class="table table-striped" style="width: 100%;" data-params="tipoConvocatoria=<?php echo $tipoConvocatoria; ?>">
      <thead class="thead-blue">
        <tr>
          <th class="linea text-center">N°</th>
          <th class="linea">DESCRIPCIÓN</th>
          <th class="linea">BASES</th>
          <th class="linea">APTOS</th>
          <th class="linea">PRUEBAS CONOCIMIENTO</th>
          <th class="linea">CALIFICACIÓN CURRICULAR</th>
          <th class="linea">ENTREVISTA PERSONAL</th>
          <th class="linea">RESULTADO FINAL</th>
        </tr>
      </thead>
    </table>    
  </div>
</div>