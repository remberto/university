<div class="row-fluid">
    <div class="span12">
        <div class="portlet box blue" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Registro de Tramite - <span class="step-title">Paso 1 de 4</span></div>
<!--                <div class="tools hidden-phone">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>-->
            </div>
            <div class="portlet-body form">
                <!-- Formulario Wizard -->
                <form action="<?php echo url_for('main/registro'); ?>" class="form-horizontal" id="submit_form" method="POST" >
                <div class="form-wizard">
                    <div class="navbar steps">
                        <div class="navbar-inner">
                            <ul class="row-fluid nav nav-pills">
                                <?php foreach($formularios as $key=>$formulario): ?>
                                    <?php if($key == 0): ?>
                                        <li class="span1 active">
                                            <a href="#tab<?php echo $key + 1 ; ?>" data-toggle="tab" class="step active">
                                                <span class="number"><?php echo $key + 1; ?></span>
                                                <span class="desc"><i class="icon-ok"></i> <?php echo $formulario->getDescripcion(); ?></span>   
                                            </a>
                                        </li>
                                    <?php else:?>
                                        <li class="span1">
                                            <a href="#tab<?php echo $key + 1; ?>" data-toggle="tab" class="step">
                                                <span class="number"><?php echo $key + 1; ?></span>
                                                <span class="desc"><i class="icon-ok"></i> <?php echo $formulario->getDescripcion(); ?></span>   
                                            </a>
                                        </li>
                                    <?php endif; ?>                                        
                                <?php endforeach; ?>                                
                            </ul>
                        </div>                        
                    </div>
                    <div id="bar" class="progress progress-success progress-striped">
                        <div class="bar" style="width: 25%;"></div>
                    </div>
                    <div class="tab-content">
                        <div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				Usted tiene algunos errores de forma. Por favor, consulte más abajo.
			</div>
			<div class="alert alert-success hide">
				<button class="close" data-dismiss="alert"></button>
				Su validación es correcta!
			</div>
                        <?php foreach($formularios as $key=>$formulario): ?>
                            <?php if($key == 0): ?>
                                <div class="tab-pane active" id="tab<?php echo $key + 1; ?>">
                                    <h3 class="block"><?php echo $formulario->getDescripcion(); ?></h3>
				    <?php include_component($formulario->getModulo(), $formulario->getComponente()); ?>
                                </div>
                            <?php else: ?>
                                <div class="tab-pane" id="tab<?php echo $key + 1; ?>">
                                    <h3 class="block"><?php echo $formulario->getDescripcion(); ?></h3>
				    <?php include_component($formulario->getModulo(), $formulario->getComponente()); ?>
                                </div>
                            <?php endif; ?>                            
                        <?php endforeach; ?>                        
                    </div> 
                    <div class="form-actions clearfix">
			<a href="javascript:;" class="btn button-previous" style="display: none;">
			<i class="m-icon-swapleft"></i> Anterior 
			</a>
			<a href="javascript:;" class="btn blue button-next">
			Siguiente <i class="m-icon-swapright m-icon-white"></i>
			</a>
			<a href="javascript:;" class="btn green button-submit" style="display: none;">
			Guardar <i class="m-icon-swapright m-icon-white"></i>
			</a>
                    </div>
                </div>
                </form>    
            </div>
        </div>
    </div>
</div>

