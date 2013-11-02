<!-- BEGIN PAGE CONTENT-->
<div class="row" style="padding: 20px;">
   <div class="col-md-12">
      <!-- BEGIN EXAMPLE TABLE PORTLET-->
      <div class="portlet box green">
         <div class="portlet-title">
            <div class="caption">
                <i class="icon-signin"></i>
                Remitir Tramite
            </div>
         </div>
          <div class="portlet-body">
              <form action="<?php echo url_for('/entrada/enviar/') ?>" class="horizontal-form" method="get">
                  <input type="hidden" name="proceso" value="<?php echo $proceso ?>"/>
                  <input type="hidden" name="seguimiento" value="<?php echo $seguimiento ?>"/>
                  <div class="control-group">
                      <label class="control-label">enviar a:</label>
                      <div class="controls">
                          <select class="large m-wrap" tabindex="1" name="send_usuario">
                              <option value="-999">Seleccionar</option>
                              <?php if($institucion->getId()==1):?>
                                <?php foreach($usuarios as $usuario): ?>
                                <option value="<?php echo $usuario->getId()?>"><?php echo ucwords(strtolower($usuario->Administra->getNombreCompleto())); ?></option>    
                                <?php endforeach; ?>
                              <?php elseif($institucion->getId()==2):?>
                                <?php foreach($usuarios as $usuario): ?>
                                <option value="<?php echo $usuario->getId()?>"><?php echo ucwords(strtolower($usuario->Administra->getNombreCompleto()." - ".$usuario->AdmUsuarioAdministra[0]->ClaCargo->getDescripcion()."")); ?></option>    
                                <?php endforeach; ?>
                              <?php endif;?>
                          </select>
                      </div>
                  </div>
                  <div class="form-actions">
                      <button type="submit" class="btn blue"><i class="icon-ok"></i> Enviar</button>
                  </div>
              </form>
          </div>
      </div>
      <!-- END EXAMPLE TABLE PORTLET-->
   </div>
</div>
<!-- END PAGE CONTENT-->