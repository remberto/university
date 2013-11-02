<!-- BEGIN PAGE CONTENT-->
<div class="row" style="padding: 20px;">
   <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet box green">
         <div class="portlet-title">
            <div class="caption">
                <i class="icon-signout"></i>
                Enviados
            </div>
         </div>
         <div class="portlet-body">
            <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
               <table aria-describedby="sample_1_info" class="table table-striped table-bordered table-hover table-full-width dataTable" id="sample_1">
               <thead>
                  <tr role="row">
                      <th>Id</th>
                      <th>Gestion</th>
                      <th>Tramite</th>
                      <th>Destinatario</th>
                      <th>Fecha</th>
                  </tr>
               </thead>
               <tbody aria-relevant="all" aria-live="polite" role="alert">
                  <?php foreach ($seguimiento as $key => $dato): ?>
                    <tr>
                       <td><?php echo $dato->getId(); ?></td>
                       <td><?php echo $dato->ClaGestion->getGestion(); ?></td>
                       <td><?php echo $dato->ClaProceso->ClaTramite->getDescripcion()." - ".$dato->ClaProceso->getDescripcion()." <i>DE</i> : <b>".$dato->DatPersonas->getCi()."</b> - <i>".$dato->DatPersonas->getNombreCompleto()."</i>"; ?></td>
                       <td><?php echo $dato->AdmUsuarios_3->Administra->getNombreCompleto(); ?></td>
                       <td><?php echo $dato->getFechaIngresoId(); ?></td>                   
                    </tr>
                  <?php endforeach; ?> 
               </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- END EXAMPLE TABLE PORTLET-->
   </div>
</div>
<!-- END PAGE CONTENT-->