<div class="row-fluid">
    <div class="span12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Registro</div>
            </div>
            <div class="portlet-body form">
                <div class="tabbable portlet-tabs">
                    <ul class="nav nav-tabs">
                        <?php foreach($formularios as $key=>$formulario): ?>
                            <?php if($formulario->getId() == 1):?>
                                <li class="active"><a href="#portlet_tab<?php echo $key; ?>" data-toggle="tab" ><?php echo $formulario->getDescripcion(); ?></a></li>  
                            <?php else: ?>
                                <li><a href="#portlet_tab<?php echo $key; ?>" data-toggle="tab" ><?php echo $formulario->getDescripcion(); ?></a></li>  
                            <?php endif;?>
                        <?php endforeach; ?> 
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($formularios as $key => $formulario): ?>
                            <?php if ($formulario->getId() == 1): ?>
                                <div class="tab-pane active" id="portlet_tab<?php echo $key; ?>">
                                    <form action="<?php echo url_for('registro/index'); ?>" class="form-horizontal" method="post">
                                        <h3 class="form-section"><?php echo $formulario->getDescripcion(); ?></h3>
                                        <?php include_component($formulario->getModulo(), $formulario->getComponente()); ?>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue"><i class="icon-ok"></i> Guardar</button>
                                            <button type="button" class="btn">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            <?php else: ?>
                                <div class="tab-pane" id="portlet_tab<?php echo $key; ?>">
                                    <form action="<?php echo url_for('registro/index'); ?>" class="form-horizontal" method="post">
                                        <h3 class="form-section"><?php echo $formulario->getDescripcion(); ?></h3>
                                        <?php include_component($formulario->getModulo(), $formulario->getComponente()); ?>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue"><i class="icon-ok"></i> Guardar</button>
                                            <button type="button" class="btn">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>