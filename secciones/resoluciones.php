<div class="site-section-seccion">
    <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-4 col-md-6 w-border mx-auto">
                <h2 class="mb-md-4">RESOLUCIONES <?php if($tipoResolucion == $Configuracion->get("ADMINISTRATIVA")){echo "ADMINISTRATIVAS";}else{echo "DIRECTORALES";} ?></h2>
            </div>
        </div>
        <table id="tablaResolucion" class=" table table-striped display " style="width:100%" data-params="tipoResolucion=<?php echo $tipoResolucion; ?>">
            <thead class="thead-blue">
                <tr>
                    <th class="linea text-center">N°</th>
                    <th>DESCRIPCIÓN</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="tabla">
            </tbody>
        </table>
    </div>
</div>