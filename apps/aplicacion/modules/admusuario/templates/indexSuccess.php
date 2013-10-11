<!-- BEGIN PAGE CONTENT-->
<div class="row" style="padding: 20px;">
   <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet box green">
         <div class="portlet-title">
            <div class="caption">
                <i class="icon-user-md"></i>
                Lista de Usuario    
            </div>
         </div>
         <div class="portlet-body">
            <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid">
               <table aria-describedby="sample_1_info" class="table table-striped table-bordered table-hover table-full-width dataTable" id="sample_1">
               <thead>
                  <tr role="row">
                      <th>Usuario</th>
                      <th>CI</th>
                      <th>Nombre Completo</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                      <th>Ver Mas</th>
                      <th>Estado</th>
                  </tr>
               </thead>
               <tbody aria-relevant="all" aria-live="polite" role="alert">
                  <?php foreach ($pager->getResults() as $i => $dato): $odd = fmod(++$i, 2) ? 'odd' : 'even'; ?>
                    <tr class="<?php echo $odd; ?>">
                       <td><?php echo $dato->getUsername(); ?></td>
                       <td><?php echo $dato->getDatPersonas()->getCi(); ?></td>
                       <td><?php echo $dato->getDatPersonas()->getNombreCompleto(); ?></td>
                       <td><?php echo $dato->getCorreoElectronico(); ?></td>
                       <td><?php echo $dato->getAdmRoles(); ?></td>
                       <td style="text-align: center;"><img src="/images/pencil.png" alt="EDITAR" title="Editar" /></td>
                       <td style="text-align: center;"><img src="/images/delete.png" alt="ELIMINAR" title="Elimimar" /></td>
                       <td style="text-align: center;"><img src="/images/user.png" alt="VER MAS DATOS" title="Ver Datos" /></td>
                       <td style="text-align: center;">
                           <?php if($dato->getHabilitado()=='1'): ?>
                                <img src="/images/habilitado.png" alt="Estado" title="Usuario Habilitado" />
                           <?php else: ?>
                                <img src="/images/bloquedo.png" alt="Estado" title="Usuario Bloqueado" />
                           <?php endif; ?>
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