<!-- BEGIN PAGE CONTENT-->
<div class="row" style="padding: 20px;">
   <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet box green">
         <div class="portlet-title">
            <div class="caption">
                <i class="icon-signin"></i>
                Bandeja de Entrada
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
                      <th>Remitente</th>
                      <th>Fecha</th>
                      <th>Documentos</th>
                      <th>Estado</th>
                  </tr>
               </thead>
               <tbody aria-relevant="all" aria-live="polite" role="alert">
                  <?php foreach ($seguimiento as $key => $dato): ?>
                    <tr>
                       <td><?php echo $dato->getId(); ?></td>
                       <td><?php echo $dato->ClaGestion->getGestion(); ?></td>
                       <td><?php echo $dato->ClaProceso->ClaTramite->getDescripcion()." - ".$dato->ClaProceso->getDescripcion()." <i>DE</i> : <b>".$dato->DatPersonas->getCi()."</b> - <i>".$dato->DatPersonas->getNombreCompleto()."</i>"; ?></td>
                       <td><?php echo $dato->AdmUsuarios->Administra->getNombreCompleto(); ?></td>
                       <td><?php echo $dato->getFechaIngresoId(); ?></td>
                       <?php $ruta = Doctrine::getTable("ClaRuta")->getNextRuta($dato->getClaProcesoId());?>
                       <td><a href="<?php echo url_for('/documentos/index/seguimiento/'.$dato->getId().'/tramite/'.$dato->getClaTramiteId().'/proceso/'.$dato->getClaProcesoId()); ?>">Descarga</a></td>
                       <td><?php if(count($ruta[0]->Siguiente->RelRolesProceso->RelRolesTramite->AdmRoles->AdmUsuarios) == 0):?>
                                Sin Ruta                                
                           <?php elseif(count($ruta[0]->Siguiente->RelRolesProceso->RelRolesTramite->AdmRoles->AdmUsuarios) == 1): ?>
                                <?php if($ruta[0]->Siguiente->ClaTipoProceso->getId() == 2): ?>
                                    <a class="btn yellow" href="<?php echo url_for('/entrada/terminar/seguimiento/'.$dato->getId().'/send_usuario/'.$ruta[0]->Siguiente->RelRolesProceso->RelRolesTramite->AdmRoles->AdmUsuarios[0]->getId().'/proceso/'.$ruta[0]->Siguiente->getId()); ?>">Terminar</a>
                                 <?php else: ?>
                                    <a class="btn yellow" href="<?php echo url_for('/entrada/enviar/seguimiento/'.$dato->getId().'/send_usuario/'.$ruta[0]->Siguiente->RelRolesProceso->RelRolesTramite->AdmRoles->AdmUsuarios[0]->getId().'/proceso/'.$ruta[0]->Siguiente->getId()); ?>">Enviar</a>
                                 <?php endif; ?> 
                           <?php else: ?>
                                 <a class="btn yellow" href="<?php echo url_for('/entrada/enviarform/seguimiento/'.$dato->getId().'/tramite/'.$dato->getClaTramiteId().'/proceso/'.$ruta[0]->Siguiente->getId()); ?>"  rel="modal:open">Enviar</a>
                           <?php endif;?> 
                        </td>                       
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